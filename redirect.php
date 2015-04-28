

<?php
   
   require_once ('./util.php'); 
   require_once 'Services/Soundcloud.php';

session_start();


$client = new Services_Soundcloud(
  '440d10269f20fc5a7efd9933704d6810', '522c2a2b9567720cc82b79ab2d97af8b', 'http://teameight.manmora.com/pruebaLogin/redirect.php');

// exchange authorization code for access token
$code = $_GET['code'];
$access_token = $client->accessToken($code);
$current_user = json_decode($client->get('me'));

//print $current_user->full_name;
//print $current_user->description;
//print $current_user->username;
$idBanda= $current_user->id;
$nombre=$current_user->full_name;
  $descripcion='"'.$current_user->description.'"';
  $url=$current_user->avatar_url;
if (queriesID("Select IDBANDA from Banda where IDBANDA=".$id,"IDBANDA")!=0){

//Existe el usuario
	//echo "Existe";
	
	
	//echo $nombre;
	//echo $descripcion;
	//echo "UPDATE BANDA SET NOMBRE='$nombre', DESCRIPCION=$descripcion, URLIMAGEN='$url' WHERE IDBANDA=$idBanda;";
	 dml("UPDATE BANDA SET NOMBRE='$nombre', DESCRIPCION=$descripcion, URLIMAGEN='$url' WHERE IDBANDA=$idBanda;");
	
}
else
{
  //echo 'Insert into Banda values('.$idBanda.',"'.$nombre.'",'.$descripcion.',0,"'.$current_user->avatar_url.'",0,"0","0",0);';
	dml('Insert into Banda values('.$idBanda.',"'.$nombre.'",'.$descripcion.',0,"'.$current_user->avatar_url.'",0,"0","0",0);');
	//header('Location: ./perfil.php');
}

   $_SESSION['id']=$idBanda;
  $_SESSION['nombre']=queriesID("SELECT NOMBRE FROM BANDA WHERE IDBANDA=$idBanda","NOMBRE");
  $_SESSION['descripcion']=queriesID("SELECT DESCRIPCION FROM BANDA WHERE IDBANDA=$idBanda","DESCRIPCION");
  $_SESSION['completa']=queriesID("SELECT COMPLETA FROM BANDA WHERE IDBANDA=$idBanda","COMPLETA");
  $_SESSION['url']=queriesID("SELECT URLIMAGEN FROM BANDA WHERE IDBANDA=$idBanda","URLIMAGEN");
  $_SESSION['precioxhora']=queriesID("SELECT PRECIOXHORA FROM BANDA WHERE IDBANDA=$idBanda","PRECIOXHORA");
  $_SESSION['telefono']=queriesID("SELECT TELEFONO FROM BANDA WHERE IDBANDA=$idBanda","TELEFONO");
  $_SESSION['correo']=queriesID("SELECT CORREO FROM BANDA WHERE IDBANDA=$idBanda","CORREO");
  $_SESSION['idgenero']=queriesID("SELECT IDGENERO FROM BANDA WHERE IDBANDA=$idBanda","IDGENERO");

  header('Location: ./perfil.php');

?>
