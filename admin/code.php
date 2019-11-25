<?php

$mysqli = new mysqli("localhost","root","","giras_proyecto");
if($mysqli->connect_errno){
    echo"fallo al conectar a MySQL:(".$mysqli->connect_errno. ")".$mysqli->connect_error;
}

if(isset($_POST['registerbtn']))
{
    $user = $_POST['user'];
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];
    $ccontrasena = $_POST['ccontrasena'];

    if($contrasena === $ccontrasena)
    {
        $query = "INSERT INTO usuariosadmin (user,correo,contrasena) VALUES ('$user','$correo','$contrasena')";
        $query_run = mysqli_query($mysqli, $query);
    
        if($query_run)
        {
            echo "done";
            $_SESSION['success'] =  "Admin is Added Successfully";
            header('Location: registrer.php');
        }
        else 
        {
            echo "not done";
            $_SESSION['status'] =  "Admin is Not Added";
            header('Location: registrer.php');
        }
    }
    else 
    {
        echo "pass no match";
        $_SESSION['status'] =  "contrasena and Confirm contrasena Does not Match";
        header('Location: registrer.php');
    }

}

if(isset($_POST['editbtn']))
{
    $id= $_POST['edit_id'];
    $user= $_POST['edit_user'];
    $correo= $_POST['edit_correo'];
    $contrasena= $_POST['edit_contrasena'];

    $query = "UPDATE usuariosadmin SET user='$user', correo='$correo', contrasena='$contrasena' WHERE id_admin='$id' ";
    $query_run = mysqli_query($mysqli,$query);

    if($query_run)
    {
        $_SESSION['success'] = "Your data is UPDATE";
        header('Location: registrer.php');
    }

    else
    {
       
        $_SESSION['status'] = "Your data is not   UPDATE";
        header('Location: registrer.php');
    }


    
}


if(isset($_POST['delete_btn']))

{
    $id= $_POST['delete_id'];
   

    $query = "DELETE  FROM  usuariosadmin  WHERE id_admin='$id' ";
    $query_run = mysqli_query($mysqli,$query);

    if($query_run)
    {
        $_SESSION['success'] = "Your data is DELETE";
        header('Location: registrer.php');
    }

    else
    {
       
        $_SESSION['status'] = "Your data is not DELETE";
        header('Location: registrer.php');
    }


    
}

if(isset($_POST['registerbtn']))
{
    $user = $_POST['user'];
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];
    $ccontrasena = $_POST['ccontrasena'];

    if($contrasena === $ccontrasena)
    {
        $query = "INSERT INTO usuariosadmin (user,correo,contrasena) VALUES ('$user','$correo','$contrasena')";
        $query_run = mysqli_query($mysqli, $query);
    
        if($query_run)
        {
            echo "done";
            $_SESSION['success'] =  "Admin is Added Successfully";
            header('Location: registrer.php');
        }
        else 
        {
            echo "not done";
            $_SESSION['status'] =  "Admin is Not Added";
            header('Location: registrer.php');
        }
    }
    else 
    {
        echo "pass no match";
        $_SESSION['status'] =  "contrasena and Confirm contrasena Does not Match";
        header('Location: registrer.php');
    }

}




?>