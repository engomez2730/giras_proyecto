<?php

include('includes/header.php');
include('includes/navbarq.php');
include('includes/conexion.php');


?>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Editar Usuarios</h6>
  </div>

    <div class="card-body">
   <?php
    if(isset($_POST['edit_btn_usuarios']))
{
    $id= $_POST['edit_id_usuarios'];
    $query =  "SELECT * FROM usuariosdb WHERE id_user= '$id' ";
    $query_run = mysqli_query($mysqli,$query);
    
    foreach($query_run as $row)
    {
      ?>

      <form action="./codeusuarios.php" method="POST"> 


         <input type="hidden"  value="<?php echo $row['id_user']; ?>" name="edit_id_usuario" class="form-group" >
         <div class="form-group">
         <label> Nombre </label>
         <input type="text" name="edit_nombre_usuario" value="<?php echo $row['name_user']; ?>" class="form-control">
         </div>
         <div class="form-group">
         <label>Apellido</label>
         <input type="text" name="edit_apellido_usuario" value="<?php echo $row['lastname_user']; ?>" class="form-control" >
         </div>
         <div class="form-group">
         <label>Direccion</label>
         <input type="text" name="edit_direccion_usuario" value="<?php echo $row['direcion_user']; ?>" class="form-control" >
         </div>
         <div class="form-group">
         <label>Fecha de Nacimineto</label>
         <input type="date" name="edit_fecha_usuario" value="<?php echo $row['fecha']; ?>" class="form-control" >
         </div>
         <div class="form-group">
         <label>Telefono</label>
         <input type="tel" name="edit_telefono_usuario" value="<?php echo $row['telefono']; ?>" class="form-control" >
         </div>
         <div class="form-group">
         <label>Correo Electronico</label>
         <input type="email" name="edit_correo_usuario" value="<?php echo $row['correo_user']; ?>" class="form-control" >
         </div>
         <div class="form-group">
         <label>Contrasena</label>
         <input type="password" name="edit_contrasena_usuario" value="<?php echo $row['contrasena_user']; ?>" class="form-control" >
         </div>
         <div class="form-group">
         <label>Confirmar Contrasena</label>
         <input type="password" name="edit_apellido_usuario" value="<?php echo $row['lastname_user']; ?>" class="form-control" >
         </div>
         
         <button type="submit"  name="actualizarusuario" class="btn btn-info">Actualizar</button>
         <a href="registrer.php" class="btn btn-danger">Cancelar</a>
 
      </form>

      <?php
    }
    
}

?>



            
   </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->






<?php

include('includes/scripts.php');

?>