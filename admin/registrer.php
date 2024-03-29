<?php

include('includes/header.php');
include('includes/navbarq.php');
include('includes/conexion.php');

?>
<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Añadir Administradores</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="code.php" method="POST">

        <div class="modal-body">

           
            <div class="form-group">
                <label> Nombre de Usuario </label>
                <input type="text" name="user" class="form-control" placeholder="Enter Username">
            </div>
            <div class="form-group">
                <label>Correo</label>
                <input type="email" name="correo" class="form-control" placeholder="Enter Email">
            </div>
            <div class="form-group">
                <label>Contrasena</label>
                <input type="password" name="contrasena" class="form-control" placeholder="Enter Password">
            </div>
            <div class="form-group">
                <label>Confrimar Contrasena</label>
                <input type="password" name="ccontrasena" class="form-control" placeholder="Confirm Password">
            </div>
        
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            <button type="submit" name="registerbtn" class="btn btn-primary">Guardar</button>
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

     $query = "SELECT * FROM usuariosadmin";
     $query_run= mysqli_query($mysqli,$query);


    ?>



  

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th> ID </th>
            <th> Username </th>
            <th>Email </th>
            <th>Password</th>
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
               <td> <?php echo $row['id_admin'] ?></td>
               <td> <?php echo $row['user'] ?></td>
               <td> <?php echo $row['correo'] ?></td>
               <td> <?php echo $row['contrasena'] ?></td>
               <td>
               <form action="registrer_edit.php" method="post">
                    <input type="hidden" name="edit_id" value="<?php echo $row['id_admin']?>">
                    <button  type="submit" name="edit_btn" class="btn btn-success"> EDIT</button>
                </form>
               </td>
               <td>

               <form action="code.php" method="post">
                  <input type="hidden" name="delete_id" value="<?php echo $row['id_admin'] ?>">
                  <button type="submit" name="delete_btn" class="btn btn-danger"> DELETE</button>
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