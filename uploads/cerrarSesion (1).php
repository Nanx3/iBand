<?php
// Start the session
session_start();
?>

<!DOCTYPE html>

<html lang="en"><!--<![endif]-->
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Cerrar Sesion</title>

 
</head>
<body>




<?php



require_once 'Services/Soundcloud.php';

// create client object with app credentials
$client = new Services_Soundcloud('CLIENT_ID', 'CLIENT_SECRET', 'REDIRECT_URL');

// exchange authorization code for access token
$code = $_GET['code'];
$access_token = $client->accessToken($code);


// create client object and set access token
$client = new Services_Soundcloud('CLIENT_ID', 'CLIENT_SECRET');
$client->setAccessToken('YOUR_ACCESS_TOKEN');

// make an authenticated call
$current_user = json_decode($client->get('me'));
print $current_user->username;




/*
require_once 'Services/Soundcloud.php';


$client = new Services_Soundcloud('74b4f27e1d9b7ff7585b3688b1e2263e', '7562aec21dbcbbba23910f2a40cadb9e');
$client->setCurlOptions(array(CURLOPT_FOLLOWLOCATION => 1));

// get a tracks oembed data
$track_url = 'http://soundcloud.com/forss/flickermood';
$embed_info = json_decode($client->get('oembed', array('url' => $track_url)));

// render the html for the player widget
print $embed_info->html;
*/  



 ?>


</body></html>