<?php

include 'PHP/giracabeza.php'

?>
<title>Registrarse</title>

<!--Formulario de Registrarse-->

<div class="container">
    <div class="d-flex justify-content-center h-100" id="formulario">
        <div class="card">
        <div class="card-header">
        <h1><i class="fas fa-sign-in-alt"></i> Registrarse<h2>
        </div>
        <div class="card-body">

        <form action="./php/giraregistros.php?accion=INS" method="POST">
        
    
        <div class="row" id="espacio">
           
            <div class="col-md-6 col-sm-10 col-xs-12">
            <label for="nombre"><h5> <i class="fas fa-user"></i> Nombre</h5></label>
               <input type="text" name="nombre" class="form-control" required>
            </div>

            <div class="col-md-6 col-sm-10 col-xs-12">
            <label for="nombre"><h5> <i class="fas fa-user"></i> Apellido</h5></label>
                    <input type="text" name="apellido" class="form-control" required>
                </div>
        </div>

        <div class="row" id="espacio">

          <div class="col-md-6 col-sm-10 col-xs-12">
          <label for="nombre"><h5> <i class="fas fa-envelope-open-text"></i> Direccion</h5></label>
             <input type="text" name="direccion" class="form-control" required>
          </div>
          <div class="col-md-6 col-sm-10 col-xs-12">
          <label for="nombre"><h5> <i class="fas fa-calendar-week"></i> Fecha de Nacimiento</h5></label>
                <input type="date" name="fecha" class="form-control" required>
          </div>
        </div>

        <div class="row" id="espacio">
          <div class="col-md-6 col-sm-10 col-xs-12">
          <label for="nombre"><h5> <i class="fas fa-phone"></i> Telefono</h5></label>
                <input type="tel" name="telefono" class="form-control" required>
          </div>

          <div class="col-md-6 col-sm-10 col-xs-12">
                <label for="nombre"> <h5><i class="fas fa-envelope-open-text"></i> Correo Electronico</h5></label>
                <input type="email" name="correo" class="form-control" required>
          </div>
        </div>

        <div class="row" id="espacio">

             <div class="col-md-6 col-sm-10 col-xs-12">
                <label for="nombre"><h5> <i class="fas fa-key"></i> Contrasena</h5></label>
                <input type="password" minlength = "8" maxlength = "12"  name="contrasena" class="form-control" required>
            </div>
            

            <div class="col-md-6 col-sm-10 col-xs-12">
                    <label for="nombre"> <h5><i class="fas fa-key"></i> Confirmar Contrasena</h5></label>
                    <input type="password" name="contrasena2"   minlength = "8" maxlength = "12" class="form-control" required>
            </div>
        </div>
        

            
            <div class="row" id="espacio">
                <div class="col-md-10 col-sm-12 col-xs-12">
                        <div class="form-group">
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" id="gridCheck">
                                  <label class="form-check-label" for="gridCheck">
                                   Acepto los Terminos y condiciones.
                                  </label>
                                </div>
                         </div>
            </div>
             </div>
        </div>
        <div class="row">
        <div class="col-md-10 col-sm-12 col-xs-12">
        <button type="submit" id="boton1"; class="btn btn-info">Registrarse</button>
        <button type="button" id="boton2" class="btn btn-danger">Cancelar</button>
        </div>
        </div>
      </form>
      <h6>Ya tienes una cuenta? <a href= "./login.php"> Entra Ahora</a></h6>
        </div>
        </div>
    </div>
</div>


<style>

h6{
    margin-left: 120px;
    margin-top: 10px;
    color:#FFC312; 
    

}

}
#letras{
    color:#FFC312; 
}


#parrafo{
    color:#FFC312;  

}
.card-body label{
    color:#FFC312;
    padding-left: 10px;
}


.card-header h1{
        color:#FFC312;
        padding-left: 10px;
}

.card{
    height: 600px;
    margin-top: auto;
    margin-bottom: auto;
    width: 600px;
    background-color: rgba(0,0,0,0.5) !important;
    }
    html,body{
         background-image: url('https://images.pexels.com/photos/994605/pexels-photo-994605.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940');
         background-size: cover;
         background-repeat: no-repeat;
         height: 100%;
         font-family: 'Numans', sans-serif;
            }


.card-header{

    text-align: center;
    
}

.card-body{}

#boton1{
    background: #FFC312;
    margin-top: -60px;
    margin-left: 175px;
    padding-left: 20px;
}
#boton2{
    margin-top: -60px;
    margin-left: 20px;
    padding-left: 20px;
}

#formulario{
    padding-top: 50px;
    
}

#espacio{
    margin-top: 10px;
}

</style> 

