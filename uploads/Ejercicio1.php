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
  <title>Ejercicio 1</title>
  <link rel="stylesheet" href="./css/style.css">
 
</head>
<body>
  <form method="post" action="./crearUsuario.php" class="login">
    <p>
      <label for="login">Correo: </label>
      <input type="text" name="login" id="login" value="Nombre">
    </p>

    <p>
      <label for="password">Password:</label>
      <input type="password" name="password" id="password" value="4815162342">
    </p>

  <input value="Crear Nuevo Usuario" type="submit" class="myButton"/>
  </form>
   <br>
   <br>
   <br>
   <label class="nop"><?php if(isset($resultado))  echo $resultado;  ?></label>
    
 
<img src="http://connect.soundcloud.com/2/btn-connect-sc-s.png">
<?php
require_once 'Services/Soundcloud.php';

// create client object with app credentials
$client = new Services_Soundcloud(
  '74b4f27e1d9b7ff7585b3688b1e2263e', '7562aec21dbcbbba23910f2a40cadb9e', 'http://teameight.manmora.com/pruebaLogin/Ejercicio1.php');

// redirect user to authorize URL
header("Location: " . $client->getAuthorizeUrl());

require_once 'Services/Soundcloud.php';

// create client object with app credentials
$client = new Services_Soundcloud('74b4f27e1d9b7ff7585b3688b1e2263e', '7562aec21dbcbbba23910f2a40cadb9e', 'http://teameight.manmora.com/pruebaLogin/Ejercicio1.php');

// exchange authorization code for access token
$code = $_GET['code'];
$access_token = $client->accessToken($code);


require_once 'Services/Soundcloud.php';

// create client object and set access token
$client = new Services_Soundcloud('74b4f27e1d9b7ff7585b3688b1e2263e', '7562aec21dbcbbba23910f2a40cadb9e');
$client->setAccessToken('YOUR_ACCESS_TOKEN');

// make an authenticated call
$current_user = json_decode($client->get('me'));
print $current_user->username;

//////////////////////////////////////



?>


</body></html>