<script language="php">

header("Content-Type: text/html;charset=utf-8");

	function iniciarSesion(){

	$mysql = mysqli_connect("siqueiros.qro.itesm.mx","alequipo08","urunozon","alequipo08");
	return $mysql;

	}	


	function cerrarSesion($mysql){

	mysqli_close($mysql);

	}
	


	

function dml($executes){

		$mysql=iniciarSesion();


		$sql=$executes;
	
		if ($mysql->query($sql) === TRUE) {
 		  
		} else {
    		//echo 'Error updating record: ' . $mysql->error;
			}


		  cerrarSesion($mysql);
		
	}

	function queriesID($instruccion,$columna){

		$mysql=iniciarSesion();

		$sql = $instruccion;
			$result = mysqli_query($mysql, $sql);

			if (mysqli_num_rows($result) > 0) {
			    // output data of each row
			    while($row = mysqli_fetch_assoc($result)) {
			       
			        return $row["".$columna.""];
			        
			    }
			} else {
			    echo "0 results";
			}

	
		  cerrarSesion($mysql);
		return 0;
	}

	

	

</script>