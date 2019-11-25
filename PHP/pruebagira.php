<?php
  include 'conexion.php';
  $i='';
  if(isset($_GET['accion'])){
      $i=$_GET['accion'];
  }

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
       `descripcion_gira`) VALUES
     ('$nombregira',
      '$lugargira',
      '$preciogira',
      '$horagira',
      '$fechagira',
      '$cantidadgira',
      '$puntogira',
      '$descripciongira')";

        if($mysqli->query($sql)){
            $status='success';
        }
        else{
            $status='error';
            echo "error" .mysqli_error($mysqli);
        }
        // echo("erro descripcion:" .mysqli_error($mysqli));
        header("Location: ../index.php?s=".$status);
    }


?>