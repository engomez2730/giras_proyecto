<?php
  include 'conexion.php';
  $i='';
  if(isset($_GET['accion'])){
      $i=$_GET['accion'];
  }
  
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
    
    $msj='';
    if($i=="UDT"){
        
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];
    $telefono = $_POST['telefono'];
    $contrasena= $_POST['contrasena'];
    $direccion= $_POST['direccion'];
    $fecha = $_POST['fecha'];
    $estado = $_POST['estado'];


  
    $sql=" 
    UPDATE  `usuariosdb` SET

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
      ''

    )";

        if($mysqli->query($sql)){
            $status='successudt';
        }
        else{
            $status='errorudt';
            echo "error" .mysqli_error($mysqli);
        }
        // echo("erro descripcion:" .mysqli_error($mysqli));
        header("Location: ../index.php?s=".$msj);
    }

    if($i=="DLT"){
        $msj='';
        $codigo=$_GET['id'];

        $sql="
        UPDATE `propietario` SET
            `estado`='I'
        WHERE
            codpropietario='$codigo'";

        if($mysqli->query($sql)){
            $status='successdlt';
        }
        else{
            $status='errordlt';
            echo "error" .mysqli_error($mysqli);
        }
        header("Location: ../propietario_mant.php?s=".$msj);
    }

?>


 