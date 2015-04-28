<?php

include("util.php");
require_once 'Services/Soundcloud.php';

if(isset($_POST['valor'])){
$idBanda = $_POST['valor'];
$mysql=iniciarSesion();
$query="SELECT * from banda where idbanda=$idBanda";                
$results = $mysql->query($query);

while ($row = mysqli_fetch_array($results, MYSQLI_BOTH)) 
{

echo '<h2>'.$row[1].'</h2>';
echo '<blockquote><p>'.$row[2].'</p></blockquote>';
echo '<dl class="dl-horizontal"><dt>Telefono </dt><dd>'.$row[6].'</dd>';
echo '<dt>Correo </dt><dd>'.$row[7].'</dd>';
echo '</dl>';

echo '<h5 style="color:#424242 !important"><strong><span class="glyphicon glyphicon-list"></span> Escucha sus canciones</strong></h5>';


$client = new Services_Soundcloud(
  '440d10269f20fc5a7efd9933704d6810', '522c2a2b9567720cc82b79ab2d97af8b');
$client->setCurlOptions(array(CURLOPT_FOLLOWLOCATION => 1));

// get a tracks oembed data
$track_url = "https://api.soundcloud.com/users/".$row[0];
$embed_info = json_decode($client->get('oembed', array('url' => $track_url)));

// render the html for the player widget
print $embed_info->html;

} 

cerrarSesion($mysql);
mysqli_free_result($results);
}
?>

