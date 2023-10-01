<?php

session_start();
##### DB Configuration #####
$servername = "localhost";
$username = "root";
$password = "";
$db = "db_oauth";

##### Google App Configuration #####
$googleappid = "1032905930183-hm0d4b693kkavhahqg4ma1t1mumhvtlf.apps.googleusercontent.com"; 
$googleappsecret = "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"; 
$redirectURL = "http://localhost/Google-login/authenticate.php"; 

##### Create connection #####
$conn = new mysqli($servername, $username, $password, $db);
if ($conn->connect_error) {
    die("Connection failed: " .$conn->connect_error);
}
##### Required Library #####
include_once 'src/Google/Google_Client.php';
include_once 'src/Google/contrib/Google_Oauth2Service.php';

$googleClient = new Google_Client();
$googleClient->setApplicationName('Goo travel');
$googleClient->setClientId($googleappid);
$googleClient->setClientSecret($googleappsecret);
$googleClient->setRedirectUri($redirectURL);

$google_oauthV2 = new Google_Oauth2Service($googleClient);

?>