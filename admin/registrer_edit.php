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
    if(isset($_POST['edit_btn']))
{
    $id= $_POST['edit_id'];
    $query =  "SELECT * FROM usuariosadmin WHERE id_admin= '$id' ";
    $query_run = mysqli_query($mysqli,$query);
    
    foreach($query_run as $row)
    {
      ?>

      <form action="code.php" method="POST"> 


         <input type="text" value="<?php echo $row['id_admin']; ?>" name="edit_id" class="form-group">
         <div class="form-group">
         <label> Nombre de Usuario </label>
         <input type="text" name="edit_user" value="<?php echo $row['user']; ?>" class="form-control" placeholder="Enter Username">
         </div>
         <div class="form-group">
         <label>Correo</label>
         <input type="email" name="edit_correo" value="<?php echo $row['correo']; ?>" class="form-control" placeholder="Enter Email">
         </div>
         <div class="form-group">
         <label>Contrasena</label>
         <input type="password" name="edit_contrasena" value="<?php echo $row['contrasena']; ?>" class="form-control" placeholder="Enter Password">
         </div>
         <div class=row>
         <button type="submit" name="editbtn" class="btn btn-info">Actualizar</button>
         <a href="registrer.php" class="btn btn-danger">Cancelar</a>
         </div>
 
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