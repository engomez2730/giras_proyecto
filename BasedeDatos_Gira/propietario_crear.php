<?php
include 'php/pcabeza.php'
?>

<ol class="breadcrumb">
<li><a href="main.php">Inicio</a></li>
<li><a href="propietario_mant.php">Listadi de Propietarios</a><li>
<li class="active">Nuevo Propietario</li>
</ol>

<div class="panel panel-default" style="margin-top: 10px">
   <div class="panel-heading">
   <h1> Nuevo Propietario </h1>
   </div>

   <div class="panel-body">
       <form action="php/propietario_registros.php?accion=INS" method ="POST">

    <div class="row">
    </div>
    <div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 col-lg-4 col-lg-offset-2 col-xs-12 col-xs-12-offset-0">
       <div class="form-group">
            <label class="control-label">Nombre<span style="color:red"></span></label>
            <input type="text" name="nombre" required="" placeholder="Nombre y Apellido" class="form-control">
       </div>  
    </div>     

    
    <div class="col-md-4 col-md-offset-0 col-sm-4 col-sm-offset-0 col-lg-4 col-lg-offset-0 col-xs-12 col-xs-12-offset-0">
       <div class="form-group">
            <label class="control-label">Direccion<span style="color:red"></span></label>
            <input type="text" name="direccion" required="" placeholder="Nombre y Apellido" class="form-control">
       </div>  
    </div>  
    <div class="row">
    </div>
    <div class="col-md-4 col-md-offset-2 col-sm-4 col-sm-offset-2 col-lg-4 col-lg-offset-2 col-xs-12 col-xs-12-offset-0">
       <div class="form-group">
            <label class="control-label">Telefono<span style="color:red"></span></label>
            <input type="tel" name="telefono" required="" placeholder="Nombre y Apellido" class="form-control">
       </div>  
    </div>     

    
    <div class="col-md-4 col-md-offset-0 col-sm-4 col-sm-offset-0 col-lg-4 col-lg-offset-0 col-xs-12 col-xs-12-offset-0">
       <div class="form-group">
            <label class="control-label">Fecha de Nacimiento<span style="color:red"></span></label>
            <input type="date" name="fecha" required="" placeholder="Nombre y Apellido" class="form-control">
       </div>  
    </div>  
    <div class="row">
         <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-lg-8 col-lg-offset-2 col-xs-12 col-xs-offset-0">
         <div class="form-group">
         <label class="control-label"> Experiencia <span style="color:red">*</span></label>
         <textarea placeholder="Descripcion de Experiencia" class="form-control" name="exp"></textarea>
         </div>
         </div>
         </div>
    


       </form>

       <button 

</div>

<?php
?>