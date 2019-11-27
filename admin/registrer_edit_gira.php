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
    if(isset($_POST['edit_btn_gira']))
{
    $id= $_POST['edit_id_gira'];
    $query =  "SELECT * FROM giras1 WHERE id_giras= '$id' ";
    $query_run = mysqli_query($mysqli,$query);
    
    foreach($query_run as $row)
    {
      ?>

      <form action="./codegira.php" method="POST"> 


         <input type="hidden"  value="<?php echo $row['id_giras']; ?>" name="edit_id_gira" class="form-group" >
         <div class="form-group">
         <label> Nombre de la Gira </label>
         <input type="text" name="edit_nombre_gira" value="<?php echo $row['nombre_gira']; ?>" class="form-control">
         </div>
         <div class="form-group">
         <label>Lugar Gira</label>
         <input type="text" name="edit_lugar_gira" value="<?php echo $row['lugar_gira']; ?>" class="form-control" placeholder="Enter Email">
         </div>
         <div class="form-group">
         <label> Precio Gira</label>
         <input type="text" name="edit_precio_gira" value="<?php echo $row['precio_gira']; ?>" class="form-control">
         </div>
         <div class="form-group">
         <label> Hora de Salida </label>
         <input type="text" name="edit_hora_gira" value="<?php echo $row['hora_gira']; ?>" class="form-control">
         </div>
         <div class="form-group">
         <label> Fecha </label>
         <input type="text" name="edit_fecha_gira" value="<?php echo $row['fecha_gira']; ?>" class="form-control">
         </div>
         <div class="form-group">
         <label> Cantidad de Personas</label>
         <input type="text" name="edit_cantidad_gira" value="<?php echo $row['cantidad_gira']; ?>" class="form-control">
         </div>
         <div class="form-group">
         <label> Punto de encuentro </label>
         <input type="text" name="edit_punto_gira" value="<?php echo $row['encuentro_gira']; ?>" class="form-control">
         </div>
         <div class="form-group">
         <label> Actividad Principal </label>
         <input type="text" name="edit_actividad_gira" value="<?php echo $row['descripcion_gira']; ?>" class="form-control">
         </div>
         
         <button type="submit"  name="actualizargira" class="btn btn-info">Actualizar</button>
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