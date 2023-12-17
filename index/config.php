<?php



class Credentials


{

    /**
     * Database host
     * @var string
     */
    const DB_HOST = '165.22.10.123';

    /**
     * Database name
     * @var string
     */
    const DB_NAME = 'puvfadgkrb';

    /**
     * Database user
     * @var string
     */
    const DB_USER = 'puvfadgkrb';

    /**
     * Database password
     * @var string
     */
    const DB_PASSWORD = 'Q5UhmzvsKz';

    /**mail layer api**/
    const Mail_Layer_API_Key = '9fc4286354d0d0fada31d7ff9d294a4d';

    /**Sendgrid api**/
    const Sendgrid_API_Key = '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';

    /**iploc api**/
    const IpLoc_API_Key = 'V7kRpeyZ0wrLjJZ';

    /**Stripe Publishable Key Api**/
    const Stripe_Publishable_Key = 'pk_test_51HI23TGbYIniLMIP7RiBG5otPgJ8jhX9UbdUnswKA4ksRYJZFO1tDjIwOiMCux6u0Cba4jffUFAQD27fnqUmt4JM00XVENmK1j';

    /**Stripe Secret Key Api**/
    const Stripe_Secret_Key = 'sk_test_51HI23TGbYIniLMIPJ8lJJxkkMAmouMg7ae0ffD7jO7cYGcUqBNALo9KfC6ZSLXtN44yiMRtKsra6TuADokufugVt00GAgB7JKi';
}

class DB {

    //instantiate connection to db

    public static function getDB()
    {
        static $db = null;

        if ($db === null) {
            $dsn = 'mysql:host=' . Credentials::DB_HOST . ';dbname=' . Credentials::DB_NAME . ';charset=utf8';
            $db = new PDO($dsn, Credentials::DB_USER, Credentials::DB_PASSWORD);

            // Throw an Exception when an error occurs
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }

        return $db;
    }


}

class Curl {

    public static function curlUrlEnc($url){

        // curl init
        $ch = curl_init();

        //curl options


        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);


        //curl headers
        $headers = array();
        $headers[] = 'Content-Type: application/x-www-form-urlencoded';


        //config header
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        // execute
        $rslt = curl_exec($ch);
//        print_r($rslt);


        //error check
        if (curl_errno($ch)) {

//            echo "Error". curl_error($ch);
            curl_close($ch);
            return  'problem';
        };

        //close curl
        curl_close($ch);

        return $rslt;


    }




}