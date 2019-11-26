<?php

session_start();//Iniciando seccion

//Variables de seccion
$_SESSION['PUSUARIO']=0;//Privilegios de usuario

require './conexion.php';

#Este es el archivo del Login

if(isset($_POST['correo'])){
    $correo=$_POST['correo'];
    $contrasena=$_POST['contrasena'];
    
	//Consulta en base de datos de usuarios
	$sql="SELECT * FROM usuariosadmin WHERE correo='".$correo."'AND contrasena='".$contrasena."' limit 1";//Usuario Administrador
	
	$results = $mysqli->query($sql);

    if(mysqli_num_rows($mysqli->query($sql))==1){
		
		$_SESSION['PUSUARIO']=1;
		
		header('Location: ../admin/index.php');
        
    }
    else{
		
		$sql2="SELECT * FROM usuariosdb WHERE correo_user='".$correo."'AND contrasena_user='".$contrasena."' limit 1";
    
		$results = $mysqli->query($sql2);

		if(mysqli_num_rows($mysqli->query($sql2))==1){
			
			$_SESSION['PUSUARIO']=2;
			
			header('Location: ../inicio/index.php');
			//echo " Se ha logeado Exitosamente";
        
			exit();
		}
		else{
			
			$_SESSION['PUSUARIO']=0;
			
			header('Location: ../registrarse.php');
			//echo " No se ha logueado, intente de nuevo";
			exit();
		} 
    }   
}
?>

