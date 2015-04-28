<?php session_start(); 
  if(isset($_SESSION['id'])==false)
    header('Location: ./soundCloudConnect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>

<title>iBand</title>
<meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css" />         

  <!-- iBand CSS -->    
  <link rel="stylesheet" href="assets/bootstrap/css/animate.css">
  <link rel="stylesheet" href="assets/bootstrap/css/style.css">  

        <!-- jQuery and Bootstrap JS -->
  <script src="assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script> 
    <script src="assets/bootstrap/js/jquery.min.js" type="text/javascript"></script>

  <!-- BootstrapValidator -->
    <script src="assets/bootstrap/js/bootstrapValidator.min.js" type="text/javascript"></script>
</head>
<body>


<!-- Header Starts -->
<div class="navbar-wrapper ">
      <div class="container">

        <div class="navbar navbar-inverse navbar-fixed-top animated fadeInDown" role="navigation" id="top-nav">
          <div class="container">
            <div class="navbar-header">
              <!-- Logo Starts -->
              <a class="navbar-brand" href="#about">iBand</a>
              <!-- #Logo Ends -->


              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>


            <!-- Nav Starts -->
            <div class="navbar-collapse  collapse">
              <ul class="nav navbar-nav navbar-right" >
                  <li class="active"><a href="#about">Mi información</a></li>
                  <li><a href="#playlist">Mis canciones</a></li>
                 
                 <li> 
                 <form action="cerrarSesion.php">
                 <button type="submit" style="border: 0; background: transparent">
                 <img src="http://connect.soundcloud.com/2/btn-disconnect-m.png">
                 </button>
                 </form> 
                 </li>
                 
              </ul>
            </div>
            <!-- #Nav Ends -->

          </div>
        </div>

      </div>
    </div>
<!-- #Header Starts -->


<!-- overlay -->
<div class="container overlay">

<!-- blockblack -->
<div class="blockblack">




<!-- About Starts -->
<div id="about" class="spacer">
<h3><span class="glyphicon glyphicon-user"></span> Mi información</h3>
<div class="row">       


<?php
   
   require_once ('./util.php'); 
   require_once 'Services/Soundcloud.php';

session_start();




/*
if (isset($_SESSION["access_token"])==false){
	echo "entra";
	$_SESSION["access_token"]=$access_token;
	
}

 $client->setAccessToken($_SESSION["access_token"]);



 
$token = $client->accessTokenRefresh($_SESSION["access_token"]);
*/




//print $current_user->username;


//print $current_user->full_name;
//print $current_user->description;
/*
$id= $current_user->id;
//echo $id;



  */ 
  //  echo queriesID("Select * from prueba where ID=1","nombre");


?>


       <div class="col-lg-12" align="center">
          <div class="alert alert-warning alert-dismissable">
              <i class="fa fa-info-circle"></i><strong>Deben estar completos tus datos para que los usuarios puedan verte en iBand
          </div>
      </div>
    
    <br>


    <table class="table" style="width:90%; margin:0 auto; border:0px green dashed;" align="center">
      <tbody>

        <td></td>
        <td class="col-md-5 col-md-offset-2" align="center">
          </br>
         </br>
        <?php print '<img  src='.$_SESSION["url"].' class="img-responsive img-circle" alt="about"/>'; ?>
        <h4><?php echo $_SESSION["nombre"]; ?> </b></h4>
        </td>
        <td></td>
      </tbody>
   </table>



<!--Contact Starts-->
<div id="contact" class="spacer">
<div class="contactform center">
  <div class="row">     
<div class="table-responsive">
    <table class="table" style="width:90%; margin:0 auto; border:0px green dashed;" align="center">
      <tbody>

<td></td>
<td class="col-md-5 col-md-offset-2">
      <form  id="registration-form" method="post" class="form-horizontal" action="./modificarUsuario.php">
      <?php echo'

      </br></br><div class="form-group"><label class="col-md-4 control-label" for="precioxhora">Precio por hora: </label><div class="input-group"><div class="input-group-addon">$</div><input min="0" type="text" class="form-control" placeholder="Ej.154" id="precioxhora" name="precioxhora" value='.$_SESSION["precioxhora"].'></div></div>
      
      <div class="form-group"><label class="col-md-4 control-label" for="telefono">Telefono: </label><input class="form-control" type="text" placeholder="4472000726" id="telefono" name="telefono" value='.$_SESSION["telefono"].'></div>

      
      <div class="form-group"><label class="col-md-4 control-label" for="correo">Correo electronico: </label><input type="text" class="form-control" id="correo" name="correo" placeholder="correo@hotmail.com" value='.$_SESSION["correo"].'></div>
      
      '; ?>
          
           <div class="form-group">
           <label class="col-md-4 control-label" for="genero">Genero: </label>
           <select name="genero"  id="genero" class="form-control">
                <option value="0">Selecciona un genero</option>
                        <?php
                            $conn=iniciarSesion();
                            //session_start();
                        //Arreglo donde pondre los nombres que recupere de la base
                        //Codigo del profe para obtener el patron de lo que se va a buscar
                     
                        $response="";
                        $size=0;
                        //$IDInstitucion=$_SESSION["institucion"];
                        //Query para obtener los datos
                        //$sql = "SELECT ID_Ubicacion,Colonia FROM Ubicacion";
                        
                        
                        $Seleccionar=$_SESSION["idgenero"];
                        echo $Seleccionar;


                        $sql="SELECT * FROM GENERO";
                        //Resulado del query
                        $result = $conn->query($sql);
                        //Si fue mayor a 0 la busqueda entonces hay algo en la base
                        if ($result->num_rows > 0) {
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                               

                              if($Seleccionar==$row['IDGENERO']){

                                echo "<option value='".$row['IDGENERO']."' selected>".$row['NOMBRE']."</option>";
                            	}
                              else {

                                  echo "<option value='".$row['IDGENERO']."'>".$row['NOMBRE']."</option>";

                              }


                            }
                        } else {
                            echo "0 resultados";

                        }
                        //Cierra conexion
                        $conn->close();
                        ?>

                </select>    
              </div>

            </br>

<?php 
      echo '<div class="form-group"><label class="col-md-4 control-label" for="precioxhora">Descripcion: </label><span id="helpBlock" class="help-block">Elemento editable solo en SoundCloud</span>
      <textarea class="form-control" rows="5" placeholder="Descripcion" name="descripcion" readonly >'.$_SESSION["descripcion"].' </textarea>' ?>
                <br>



                  <div class="form-group">

              <button type="submit" class="btn btn-warning">Guardar</button>

                  </div>
        </form>

       </td>
       <td></td>
      </tbody>
</table>
</div>
  </div>
</div>
<!--Contact Ends-->
</div>

</div>
</div>
<!-- About Ends -->
</div>


<!-- playlist Starts -->
<div id="playlist" class="spacer">
  <div class="row">
    <div class="col-md-12 col-xs-12">
          <h3><span class="glyphicon glyphicon-list"></span> Mis canciones</h3>

<?php 



$client = new Services_Soundcloud(
  '440d10269f20fc5a7efd9933704d6810', '522c2a2b9567720cc82b79ab2d97af8b');

$client->setCurlOptions(array(CURLOPT_FOLLOWLOCATION => 1));


// get a tracks oembed data
$track_url = "https://api.soundcloud.com/users/".$_SESSION['id'];
$embed_info = json_decode($client->get('oembed', array('url' => $track_url)));

// render the html for the player widget
print $embed_info->html;


?>
</div>
  </div>
</div>
<!-- #playlist Ends -->

</div>
<!-- overlay -->



 <!-- Footer Starts -->
<div id="footer">
<div class="container">
Copyright 2015 Nancy Espinosa, Alexis Bustamante y Saúl Juárez.
</div>
</div>
<!-- # Footer Ends -->

<!-- background slider -->
<div id="myCarousel" class="carousel slide hidden-xs">
<div class="carousel-inner">
    <div class="active item"><img src="assets/images/back1.jpg" alt="" /></div>
    <div class="item"><img src="assets/images/back2.jpg" alt="" /></div>
    <div class="item"><img src="assets/images/back3.jpg" alt="" /></div>
  </div>
</div>
<!-- background slider -->


  
<script type="text/javascript">
  $(document).ready(function () {
    var validator = $("#registration-form").bootstrapValidator({
      feedbackIcons: {
        valid: "glyphicon glyphicon-ok",
        invalid: "glyphicon glyphicon-remove", 
        validating: "glyphicon glyphicon-refresh"
      }, 
      fields : {
        correo :{
          message : "Es necesario un correo electronico",
          validators : {
            notEmpty : {
              message : "Ingresa correo electronico"
            }, 
            stringLength: {
              min : 6, 
              max: 100,
              message: "El correo electronico debe de estar entre 6 y 100 caracteres"
            },
            emailAddress: {
              message: "Correo electronico no valido"
            }
          }
        }, 
        telefono : {
          validators: {
            notEmpty : {
              message : "Es necesario un número telefonico"
            },
            integer : {
              message: "Introduzca solo numeros enteros"
            }
          }
        }, 
        precioxhora: {
          validators: {
            notEmpty : {
              message: "Es necesario un precio por hora"
            }, 
            integer : {
              message: "Introduzca solo numeros enteros"
            }
          }
        }, 
        genero : {
          validators : {
            greaterThan : {
              value: 1,
              message: "Selecciona un genero"
            }
          }
        }
      }
    });
    
  });
</script>
  <!-- boostrap -->  
  <script src="assets/scripts/plugins.js" type="text/javascript"></script>
  <script src="assets/scripts/script.js" type="text/javascript"></script>

</body>
</html>