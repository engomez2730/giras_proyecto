<?php

include('includes/header.php');
include('includes/navbarq.php');
include('includes/conexion.php');

?>
<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Añadir Usuarios</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="./codeusuarios.php?accion=INS3"  method="POST">

        <div class="modal-body">

            <div class="row">
            <div class="form-group">
                <label> Nombre  </label>
                <input type="text" name="nombre" class="form-control" placeholder="Campo Obligatorio">
            </div>
            <div class="form-group">
                <label>Apellido</label>
                <input type="text" name="apellido" class="form-control" placeholder="Campo Obligatorio">
            </div>
            </div>
            <div class="row">
            <div class="form-group">
                <label>Direccion</label>
                <input type="text" name="direccion" class="form-control" placeholder="Campo Obligatorio">
            </div>
            <div class="form-group">
                <label>Fecha de Nacimineto</label>
                <input type="date" name="fecha" class="form-control" placeholder="Campo Obligatorio">
            </div>
            </div>


           <div class="row">

            <div class="form-group">
                <label> Telefono</label>
                <input type="tel" name="telefono" class="form-control" placeholder="Campo Obligatorio">
            </div>

            <div class="form-group">
                <label>Correo Electronico</label>
                <input type="email"  name="correo" class="form-control" placeholder="Campo Obligatorio">
            </div>

           </div>

           <div class="row">

 <div class="form-group">
    <label> Contrasena </label>
    <input type="password" name="contrasena" class="form-control" placeholder="Campo Obligatorio">
</div>

<div class="form-group">
    <label>Confirmar Contrasena</label>
    <input type="password" name="contrasena" class="form-control" placeholder="Campo Obligatorio">
</div>

</div>


        
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
            <button type="submit" name="ususariosbtn" class="btn btn-success">Guardar</button>
        </div>
      </form>

    </div>
  </div>
</div>


<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Añadir Usuarios
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile">
              Añadir Usuarios
            </button>
    </h6>
  </div>

  <div class="card-body">

  <?php

  if (isset($_SESSION['success']) && $_SESSION['success'] != '')
  {
    echo '<h2> '.$_SESSION['success'].'</h2>';
    unset($_SESSION['success']);

  }

  if(isset($_SESSION['status']) && $_SESSION['status'] !='' )
     
  {
    echo '<h2 class="bg-info"> '.$_SESSION['status'].'</h2>';
    unset($_SESSION['status']);
  }

  ?>

    <div class="table-responsive">

    <?php

     $query = "SELECT * FROM usuariosdb";
     $query_run= mysqli_query($mysqli,$query);


    ?>



  

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th> ID </th>
            <th> Nombre</th>
            <th>Email </th>
            <th>Contrasena</th>
            <th>EDIT </th>
            <th>DELETE </th>
          </tr>
        </thead>
        <tbody>

        <?php
        if(mysqli_num_rows($query_run) > 0){

            while($row = mysqli_fetch_assoc($query_run))
            {
             ?>
             <tr>
               <td> <?php echo $row['id_user'] ?></td>
               <td> <?php echo $row['name_user'] ?></td>
               <td> <?php echo $row['correo_user'] ?></td>
               <td> <?php echo $row['contrasena_user'] ?></td>
               <td>
               <form action="usuarios_registrer_edit.php" method="post">
                    <input type="hidden" name="edit_id_usuarios" value="<?php echo $row['id_user']?>">
                    <button  type="submit" name="edit_btn_usuarios" class="btn btn-success"> EDIT</button>
                </form>
               </td>
               <td>

               <form action="codeusuarios.php" method="post">
                  <input type="hidden" name="delete_id_usuarios" value="<?php echo $row['id_user'] ?>">
                  <button type="submit" name="delete_btn_usuarios" class="btn btn-danger"> DELETE</button>
               </form>
               
               </td>
            </tr>
             <?php

            }
        }
        else{
            echo "no record found" ;
        }

        ?>
        </tbody>
      </table>

    </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->












<?php

include('includes/scripts.php');

?>