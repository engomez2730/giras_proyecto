<?php
  include('includes/conexion.php');
  $i='';
  if(isset($_GET['accion'])){
      $i=$_GET['accion'];
  }
  
  #Este Archivo me registra los datos del Formulario (registrase.php) a la base de datos.
  if($i=="INS3"){
    
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
        header("Location: usuarios_registrer.php");
    }
    

    if(isset($_POST['actualizarusuario'])){

        $id=$_POST['edit_id_usuario'];
        $nombreusuario=$_POST['edit_nombre_usuario'];
        $apellidousuario=$_POST['edit_apellido_usuario'];
        $direccionusuario=$_POST['edit_direccion_usuario'];
        $telefonousuario=$_POST['edit_telefno_usuario'];
        $fechausuario=$_POST['edit_fecha_usuario'];
        $correousuario=$_POST['edit_correo_usuario'];
        $contrasenausuario=$_POST['edit_contrasena_usuario'];
     
   
       $query = "UPDATE usuariosdb SET name_user='$nombreusuario', lastname_user='$apellidousuario', direcion_user='$direccionusuario', telefono='$telefonousuario', fecha='$fechausuario', contrasena_user='$contrasenausuario'  WHERE id_user='$id' ";
       $query_run = mysqli_query($mysqli,$query);
   
     
       // echo("erro descripcion:" .mysqli_error($mysqli));
       header('Location: usuarios_registrer.php');
   
   
       
   }
    

   
if(isset($_POST['delete_btn_usuarios']))

{
    $id= $_POST['delete_id_usuarios'];
   

    $query = "DELETE  FROM  usuariosdb  WHERE id_user='$id' ";
    $query_run = mysqli_query($mysqli,$query);

    if($query_run)
    {
        $_SESSION['success'] = "Your data is DELETE";
        header('Location: usuarios_registrer.php');
    }

    else
    {
       
        $_SESSION['status'] = "Your data is not DELETE";
        header('Location: usuarios_registrer.php');
    }


    
}

 