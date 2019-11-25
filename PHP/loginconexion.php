<?php
include './conexion.php';

#Este es el archivo del Login

if(isset($_POST['correo'])){
    $correo=$_POST['correo'];
    $contrasena=$_POST['contrasena'];
    
    $sql="SELECT * FROM usuariosdb WHERE correo_user='".$correo."'AND contrasena_user='".$contrasena."' limit 1";
    
    $results = $mysqli->query($sql);

    if(mysqli_num_rows($mysqli->query($sql))==1){
        echo " Se ha logeado Exitosamente";
        
        exit();
    }
    else{
        echo " No se ha logueado";
        exit();
    }
        
}
?>

