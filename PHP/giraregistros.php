<?php
  include 'conexion.php';
  $i='';
  if(isset($_GET['accion'])){
      $i=$_GET['accion'];
  }
  
  #Este Archivo me registra los datos del Formulario (registrase.php) a la base de datos.
  if($i=="INS"){
    
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $contrasena= $_POST['contrasena'];
    $direccion= $_POST['direccion'];
    $fecha = $_POST['fecha'];

  
    $sql=" 
    INSERT INTO `usuariosdb`

    (   
        
        `name_user`,
        `lastname_user`, 
        `correo_user`, 
        `contrasena_user`, 
        `telefono`,
        `direcion_user`,
        `fecha`,
        `estado`




    ) VALUES
     ('$nombre',
    '$apellido',
     '$correo', 
     '$contrasena',
      '$telefono',
      '$direccion',
      '$fecha',
      'A'

    )";

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
    
    

 