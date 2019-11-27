<html>

	<head>
		<title>Reservar Cupo</title>
		<!-- Bootstrap core CSS -->
		<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<!-- Custom fonts for this template -->
		<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
		<link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

	<!-- Esta seria mi pagina de incicio -->
	<link href="css/agency.min.css" rel="stylesheet">
	</head>
	
<body>

<?php
  require 'conexion.php';
  
  //FecthWarningResolver
  error_reporting(E_ERROR | E_PARSE);
  
  #Este registra la cantidad de usuario a asistir a una gira
  
    $sql=" SELECT * FROM giras1 where estado_gira!='D' ";
	
	$results = $mysqli->query($sql);

	if($results){
			
		global $rcolsult_result;
			
		while($rcolsult_result=mysqli_fetch_assoc($results)){
					
			//IdGira
			$idGira=$rcolsult_result["id_giras"];
			$idGira=(string)$idGira;
			$idGiraE='E'.$idGira;
			
			if( isset($_POST[$idGiraE]) ){
				
				//echo "existe";
				//EstadoGira
				$estadoGira=$rcolsult_result["estado_gira"];
				$estadoGira=(int)$estadoGira;
				
				$idGira=(int)$idGira;
				
				if($estadoGira<=1){
					
					//echo "No hay espacio";
					$sql=" update giras1 set estado_gira='D' where id_giras=".$idGira;
					
				}else{
					$estadoGira=$estadoGira-1;
					$estadoGira=(string)$estadoGira;
					
					$sql=" update giras1 set estado_gira= '".$estadoGira."' where id_giras=".$idGira;
					
				}
				
				//Ejecutando consulta
				$results = $mysqli->query($sql);
				
				echo "<center><div class='alert alert-success'>Su cupo ha sido reservado, nos comunicaremos con usted lo mas pronto posible</div>
				<a class='nav-link js-scroll-trigger' href='../inicio/index.php'>Presione aqui para volver al menu principal <br><br><img class='img-fluid' src='../Imagenes/otras/reservacion.png' alt='' wight=100px height=100px> </a></center>";
			}	
        
		}
		   
	}else{

			echo"Error al optener los datos";
			//Error
		}
?>
	</body>

</html>