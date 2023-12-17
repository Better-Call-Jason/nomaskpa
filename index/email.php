<?php

/** Needs */

require 'config.php';

function emailValidate($eml){



    $eml = filter_var($eml, FILTER_SANITIZE_EMAIL);

    if (filter_var($eml, FILTER_VALIDATE_EMAIL) === false) {

        return $rslt = "invalid";

    }
    else return $eml;


}

function emailVerify($eml)
{


    $url = 'http://apilayer.net/api/check?access_key=';
    $api = Credentials::Mail_Layer_API_Key;
    $curl = $url . $api . "&email=" . $eml . "&catch_all=1";

    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, "$curl");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    $rslt = curl_exec($ch);
//    print_r($rslt);
    if (curl_errno($ch)) {

        curl_close($ch);
        return $rslt = "problem";

    }
    curl_close($ch);
    return $rslt;

}

function processResult($rslt){

    $jsn = json_decode($rslt, true);
//    print_r($jsn);
    $valid = $jsn['format_valid'];
    $mx = $jsn['mx_found'];
    $smtp = $jsn['smtp_check'];
    $role = $jsn['role'];
    $disp = $jsn['disposable'];


//    //evaluate email
    $rslt = ""; //set arbitrary good result
    if ($valid == false)  return $rslt = "invalid";
    if ($mx == false) return  $rslt = "bad"; //domain is bad
    if ($smtp == false) return  $rslt = "bad"; // user is bad
    if ($role == true) return  $rslt = "role"; // is a role email like info, service, etc
    if ($disp == true) return  $rslt = "disposable"; // is disposable like mailinator
    if ($rslt == "") return  $rslt = "good"; //passed all the checks
    else return $rslt = "problem";//something went wrong with how the data was handled



}


/** check that email is valid */

$eml = htmlspecialchars($_REQUEST['eml']);

$rslt = emailValidate($eml);

if ($rslt == "invalid") {
    echo $rslt;
    return;
}

$rslt = emailVerify($eml); //verify email through api

$rslt = processResult($rslt); //process api result

//print_r($rslt);


if ($rslt === "role" || $rslt === "disposable" || $rslt === "problem" ) {

    echo "invalid";
    return;
}

if ($rslt === "bad"){

    echo $rslt;
    return;
}


/** see if email is in the db already */

if ($rslt === "good") {

    try {

        $sql = "SELECT * FROM email WHERE email = :email";
        $db = DB::getDB();
        $stmt = $db->prepare($sql);
        $stmt->bindValue(':email', $eml, PDO::PARAM_STR);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();
        $rslt = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if ($stmt->rowCount() !== 0) {

            $db = null;
            echo "exists";
            return;

        };


    }
    catch (PDOException $e)
    {

        echo "Error: " . $e->getMessage();
        $db = null;
        return;
    }


    /** write email to db */

    try {
        $cmd = "INSERT INTO email ( id, email ) VALUES ('', :email)";
        $con = DB::getDB();
        $stmt = $con->prepare($cmd);
        $stmt->bindParam(':email', $eml);

        $stmt->execute();

        echo "success";
        $db = null;
        return;

    } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        echo "problem";
        $db = null;
        return;

    }
}
