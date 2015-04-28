<?php
   require_once 'Services/Soundcloud.php';

// create client object with app credentials
$client = new Services_Soundcloud(
  '440d10269f20fc5a7efd9933704d6810', '522c2a2b9567720cc82b79ab2d97af8b', 'http://teameight.manmora.com/pruebaLogin/redirect.php');

// redirect user to authorize URL
header("Location: " . $client->getAuthorizeUrl());
?>