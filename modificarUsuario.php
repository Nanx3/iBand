
<?php
 session_start(); 
  if(isset($_SESSION['id'])==false)
    header('Location: ./soundCloudConnect.php');

	include ('./util.php'); 

	$_SESSION["precioxhora"]=$_POST['precioxhora'];		
	$_SESSION["telefono"]=$_POST['telefono'];
	$_SESSION["correo"]=$_POST['correo'];			 
	$_SESSION["idgenero"]= $_POST['genero'];			
				
	dml("UPDATE BANDA SET DESCRIPCION='".$_SESSION["descripcion"]."', PRECIOXHORA='".$_SESSION["precioxhora"]."', TELEFONO='".$_SESSION["telefono"]."', CORREO='".$_SESSION["correo"]."' WHERE IDBANDA=".$_SESSION["id"]);
	echo "UPDATE BANDA SET DESCRIPCION='".$_SESSION["descripcion"]."', PRECIOXHORA='".$_SESSION["precioxhora"]."', TELEFONO='".$_SESSION["telefono"]."', CORREO='".$_SESSION["correo"]."' WHERE IDBANDA=".$_SESSION["id"];
	
	          header('Location: ./perfil.php');	

			 

  		

?>