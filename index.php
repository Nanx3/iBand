<?php  $slimpath="http://teameight.manmora.com/pruebaLogin//vendor/slim/slim/index.php/"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>iBand</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />  
   	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css" />  	  		
   	<!-- boostrap -->

  	<link rel="stylesheet" href="assets/bootstrap/css/animate.css">
  	<link rel="stylesheet" href="assets/bootstrap/css/style.css">
</head>

<body>

<!-- Header Starts -->
<div class="navbar-wrapper ">
      <div class="container">

        <div class="navbar navbar-inverse navbar-fixed-top animated fadeInDown" role="navigation" id="top-nav">
          <div class="container">
            <div class="navbar-header">
              <!-- Logo Starts -->
              <a class="navbar-brand" href="#home">iBand</a>
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
                 <li class="active"><a href="#home">Home</a></li>
                 <li><a href="#album">Artistas</a></li>
                 <li><a><img src="http://connect.soundcloud.com/2/btn-connect-m.png"></a></li>
             </ul>
     </div>
          
              </ul>
            </div>
            <!-- #Nav Ends -->

          </div>
        </div>

      </div>
    </div>
<!-- #Header Starts -->



<!-- background slider -->
<div id="myCarousel" class="carousel slide hidden-xs">
<div class="carousel-inner">
    <div class="active item"><img src="assets/images/back1.jpg" alt="" /></div>
    <div class="item"><img src="assets/images/back2.jpg" alt="" /></div>
    <div class="item"><img src="assets/images/back3.jpg" alt="" /></div>
  </div>
</div>
<!-- background slider -->

<!-- overlay -->
<div class="container overlay">

<!-- home banner starts -->
<div id="home" class="homeinfo">
<div class="row">
  
  <div class="col-sm-6 col-xs-12">
  <div class="fronttext">
    <h2 style="font-size:400%" class="bgcolor  animated fadeInUpBig"><small style="color:white;"><i class="glyphicon glyphicon-info-sign"></i></small>Band</h2><br>
    <p class=" animated fadeInUp">iBand es una página dedicada a cantantes y bandas para promoverse y enunciarse para la contratación de sus servicios. Además, sirve como una herramienta para buscarlos y contactarlos de forma sencilla.</p>
  </div>
  </div>
</div>  
</div>
<!-- home banner ends -->




<style type="text/css">

table,tbody, tr, thead, th {
  border:transparent 10px solid !important;
}

table#especial,tbody#especial, tr#especial, thead#especial, th#especial {
  border:transparent 1px solid !important;
}
</style>


<!-- blockblack -->
<div class="blockblack">


<div style="width:70%; margin:0 auto; border:0px green dashed;" align="center">
    <table class="table table-hover especial" id="sample_1">
    
           <!-- latest release starts-->
          <div id="album" class="releases spacer">
              <h1><span class="glyphicon glyphicon-music"></span> Artistas</h1></br>

        <thead>
              <tr>
                  <th></th>
                  <th></th>
                  <th></th>
              </tr>
        </thead>
        
        <tbody align="center">

                                <!--Listado de bandas -->
                      <?php
                      $url = $slimpath."desplegarBandas"; //Route to the REST web service
                      $c = curl_init($url);
                      $response = curl_exec($c);
                      curl_close($c);
                        ?>
          
         </tbody>
            </div>
          <!-- latest release ends-->
          </table>

</div>

</div>
<!-- blockblack -->
</div>
<!-- overlay -->


 <!-- Footer Starts -->
<div id="footer">
<div class="container">
Copyright 2015 Nancy Espinosa, Alexis Bustamante y Saúl Juárez.
</div>
</div>
<!-- # Footer Ends -->


<!-- Modal -->
<div class="modal fade" id="albumdetail" tabindex="-1" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
        
      <div id="cuerpo">

      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


   <script src="ajax.js"></script>
  <!-- Dyanmic-data-table--> 
   <script src="js/jquery-1.8.3.min.js"></script>
   <script type="text/javascript" src="js/jquery.dataTables.js"></script>
   <script type="text/javascript" src="js/DT_bootstrap.js"></script>
   <script src="js/dynamic-table.js"></script>

  <!-- boostrap -->
  <script src="assets/bootstrap/js/bootstrap.js" type="text/javascript" ></script>
  <script src="assets/scripts/plugins.js" type="text/javascript"></script>
  <script src="assets/scripts/script.js" type="text/javascript"></script>



</body>
</html>

