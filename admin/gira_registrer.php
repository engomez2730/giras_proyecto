<?php

include('includes/header.php');
include('includes/navbarq.php');
include('includes/conexion.php');



?>
<div class="modal fade" id="addadminprofile1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel1">Añadir Giras</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="./codegira.php?accion=INS2"  method="POST">

        <div class="modal-body">

            <div class="row">
            <div class="form-group">
                <label> Nombre de Gira </label>
                <input type="text" name="nombregira" class="form-control" placeholder="Enter Username">
            </div>
            <div class="form-group">
                <label>Lugar Gira</label>
                <input type="text" name="lugargira" class="form-control" placeholder="Enter Email">
            </div>
            </div>
            <div class="row">
            <div class="form-group">
                <label>Precio Gira</label>
                <input type="password" name="preciogira" class="form-control" placeholder="Enter Password">
            </div>
            <div class="form-group">
                <label>Hora Salida</label>
                <input type="password" name="horagira" class="form-control" placeholder="Confirm Password">
            </div>
            </div>


           <div class="row">

            <div class="form-group">
                <label> Fecha </label>
                <input type="text" name="fechagira" class="form-control" placeholder="Enter Username">
            </div>

            <div class="form-group">
                <label>Cantidad personas</label>
                <input type="text"  class="form-control" placeholder="Enter Email">
            </div>

           </div>

           <div class="row">

 <div class="form-group">
    <label> Punto de Encuentro  </label>
    <input type="text" name="puntogira" class="form-control" placeholder="Enter Username">
</div>

<div class="form-group">
    <label>Actividad Principal</label>
    <input type="text" name="descripciongira" class="form-control" placeholder="Enter Email">
</div>

</div>


        
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            <button type="submit" name="codegirabtn" class="btn btn-primary">Guardar</button>
        </div>
      </form>

    </div>
  </div>
</div>


<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Añadir Giras
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addadminprofile1">
              Añadir Giras
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

     $query = "SELECT * FROM giras1";
     $query_run= mysqli_query($mysqli,$query);


    ?>



  

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th> ID </th>
            <th> Nombre Gira </th>
            <th>Lugar </th>
            <th>Precio</th>
            <th>Editar</th>
            <th>Eliminar</th>
          </tr>
        </thead>
        <tbody>

        <?php
        if(mysqli_num_rows($query_run) > 0){

            while($row = mysqli_fetch_assoc($query_run))
            {
             ?>
             <tr>
               <td> <?php echo $row['id_giras'] ?></td>
               <td> <?php echo $row['nombre_gira'] ?></td>
               <td> <?php echo $row['lugar_gira'] ?></td>
               <td> <?php echo $row['precio_gira'] ?></td>
               <td>
               <form action="registrer_edit_gira.php" method="post">
                    <input type="text" name="edit_id_gira" value="<?php echo $row['id_giras']?>">
                    <button  type="submit" name="edit_btn_gira" class="btn btn-success"> EDIT</button>
                </form>
               </td>
               <td>

               <form action="codegira.php" method="post">
                  <input type="hidden " name="delete_id_giras" value="<?php echo $row['id_giras'] ?>">
                  <button type="submit" name="delete_btn_gira" class="btn btn-danger"> DELETE</button>
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