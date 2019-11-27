<?php

include 'includes/conexion.php';
$i='';
if(isset($_GET['accion'])){
    $i=$_GET['accion'];
}


if($i=="INS2"){
  
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
      header('Location: registrer.php');
  }
  if(isset($_POST['actualizargira'])){

     $id=$_POST['edit_id_gira'];
     $nombregira=$_POST['edit_nombre_gira'];
     $lugargira=$_POST['edit_lugar_gira'];
     $preciogira=$_POST['edit_precio_gira'];
     $horagira=$_POST['edit_hora_gira'];
     $fechagira=$_POST['edit_fecha_gira'];
     $cantidadgira=$_POST['edit_cantidad_gira'];
     $puntogira=$_POST['edit_punto_gira'];
     $actividadgira=$_POST['edit_actividad_gira'];

  

    $query = "UPDATE giras1 SET nombre_gira='$nombregira', lugar_gira='$lugargira', precio_gira='$preciogira', hora_gira='$horagira', fecha_gira='$fechagira', cantidad_gira='$cantidadgira', encuentro_gira='$puntogira', descripcion_gira='$actividadgira'  WHERE id_giras='$id' ";
    $query_run = mysqli_query($mysqli,$query);

  
    // echo("erro descripcion:" .mysqli_error($mysqli));
    header('Location: gira_registrer.php');


    
}

if(isset($_POST['delete_btn_gira']))

{
    $id= $_POST['delete_id_giras'];
   

    $query = "DELETE  FROM  giras1  WHERE id_giras='$id' ";
    $query_run = mysqli_query($mysqli,$query);

    if($query_run)
    {
        $_SESSION['success'] = "Your data is DELETE";
        header('Location: gira_registrer.php');
    }

    else
    {
       
        $_SESSION['status'] = "Your data is not DELETE";
        header('Location: gira_registrer.php');
    }


    
}


?>