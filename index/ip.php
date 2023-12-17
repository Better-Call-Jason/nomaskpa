<?php

require 'config.php';

/**Getting Ip Address Information and Parsing It for Post Interaction Analysis**/

function newIploc()
{



    $src    = getSrc(); // get src in the url can be blank i.e. facebook google yelp
    $ip     = getIP(); //  get actual user ip
    $rslt   = ipApi($ip); //request data about ip addr from ip-api.com

    if ($rslt ==="problem") return "problem"; //catch if an issue occurred with the curl

    $rslt = parseIpApi($rslt, $src); //parse ip-api data

    if ($rslt ==="problem") return "problem"; //catch if an issue occurred with the parsing

    $rslt = dbWrite($rslt); //write to db --returned result should be id for user

    return $rslt; //id of db user for this event should be rslt


}

/**Get Traffic Source**/

function getSrc()
{

    if (isset($_REQUEST['src'])) {

        return $src = htmlspecialchars($_REQUEST['src']);
    } else {
        return $src = "organic";
    }

}

/**Get IP ADDRESS of User**/

function getIP()
{


    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        //ip from share internet
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        //ip pass from proxy
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }


    $ip = explode(",", $ip);
    $ip = $ip[0];
//        $sch_ip = $ip = str_replace(".", "", $ip);

//     $ip ="71.224.45.225";

    return $ip;

}

/**Get Data on User from IP Address**/

function ipApi($ip)
{


    return $rslt = Curl::curlUrlEnc($url = 'https://pro.ip-api.com/json/'.$ip.'?key='.Credentials::IpLoc_API_Key);


}

/**Parse Data on User from IP API **/

function parseIpApi ($rslt, $src){

    $json = json_decode($rslt, true);
    $stat = $json['status'];

    if ($stat !== "success"){

        return "problem";
    }

    elseif ($stat == "success") {

        $query = $json['query'];
        $country = $json['country'];
        $countryCode = $json['countryCode'];
        $region = $json['region'];
        $regionName = $json['regionName'];
        $city = $json['city'];
        $zip = $json['zip'];
        $lat = $json['lat'];
        $lon = $json['lon'];
        $timezone = $json['timezone'];
        $isp = $json['isp'];
        $org = $json['org'];
        $as = $json['as'];
        if (isset ($json['mobile'])) {

            $mobile = $json['mobile'];

        } else {
            $mobile = "";
        }


        return array(

            $query,
            $stat,
            $country,
            $countryCode,
            $region,
            $regionName,
            $city,
            $zip,
            $lat,
            $lon,
            $timezone,
            $isp,
            $org,
            $as,
            $mobile,
            $src

        );

    }


}

function dbWrite($rslt)
{
    list($query,
        $stat,
        $country,
        $countryCode,
        $region,
        $regionName,
        $city,
        $zip,
        $lat,
        $lon,
        $timezone,
        $isp,
        $org,
        $as1,
        $mobile,
        $src) = $rslt;

    try {

        $con = DB::getDB();

        $stmt = $con->prepare("INSERT INTO iploc (id, created, cust_id, query, status, country, countryCode, region, regionName, city, zip, lat, lon, timezone, isp, org, asname, mobile, source) VALUES (NULL, now(), NULL, :query, :stat, :country, :countryCode, :region, :regionName, :city, :zip, :lat, :lon, :timezone, :isp, :org, :as1, :mobile, :src)");


        $stmt->bindParam(':query', $query);
        $stmt->bindParam(':stat', $stat);
        $stmt->bindParam(':country', $country);
        $stmt->bindParam(':countryCode', $countryCode);
        $stmt->bindParam(':region', $region);
        $stmt->bindParam(':regionName', $regionName);
        $stmt->bindParam(':city', $city);
        $stmt->bindParam(':zip', $zip);
        $stmt->bindParam(':lat', $lat);
        $stmt->bindParam(':lon', $lon);
        $stmt->bindParam(':timezone', $timezone);
        $stmt->bindParam(':isp', $isp);
        $stmt->bindParam(':org', $org);
        $stmt->bindParam(':as1', $as1);
        $stmt->bindParam(':mobile', $mobile);
        $stmt->bindParam(':src', $src);
        $stmt->execute();
        $id = $con->lastInsertId();

    }
    catch (PDOException $e)
    {
        echo "Error: " . $e->getMessage();
        exit();
    }
    $con = null;
    return $id;
}


//instantiate script

$rslt = newIploc();
//echo $rslt;
//return;
