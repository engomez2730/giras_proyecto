<?php
  require 'conexion.php';
  $i='';
  if(isset($_GET['accion'])){
      $i=$_GET['accion'];
  }

//Guardando imagen de la gira en el servidor

	//capturando los datos del fichero subido    
	$type=$_FILES['subirImagen']['type'];
	$tmp_name = $_FILES['subirImagen']["tmp_name"];
	$name = $_FILES['subirImagen']["name"];
	//Creando una nueva ruta (nuevo path)
	$nuevo_path="../Imagenes/Gira/".$name;
	//Moviendo el archivo desde su ubicación temporal hacia la nueva ruta
	move_uploaded_file($tmp_name,$nuevo_path);

  #Este Archivo es donde registro los datos desde el formulario (Creargira2.php) a la base de datos.
  
  if($i=="INS"){
    
    $nombregira=$_POST['nombregira'];
    $lugargira=$_POST['lugargira'];
    $preciogira=$_POST['preciogira'];
    $horagira=$_POST['horagira'];
    $fechagira=$_POST['fechagira'];
    $cantidadgira=$_POST['cantidadgira'];
    $puntogira=$_POST['puntogira'];
    $descripciongira=$_POST['descripciongira'];
   
    
    
  


    $sql=" 
    INSERT INTO `giras1`
    (  `nombre_gira`,
       `lugar_gira`,
       `precio_gira`,
       `hora_gira`, 
       `fecha_gira`,
       `cantidad_gira`,
       `encuentro_gira`,
       `descripcion_gira`,
	   `imagen_gira`) VALUES
     ('$nombregira',
      '$lugargira',
      '$preciogira',
      '$horagira',
      '$fechagira',
      '$cantidadgira',
      '$puntogira',
      '$descripciongira',
	  '$nuevo_path')";

        if($mysqli->query($sql)){
            $status='success';
        }
        else{
            $status='error';
            echo "error" .mysqli_error($mysqli);
        }
        // echo("error descripcion:" .mysqli_error($mysqli));
        header("Location: ../inicio/index.php");
    }


?>