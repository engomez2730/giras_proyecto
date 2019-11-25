<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
      
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="creargiranuevos.css">

    <title>Actualizar Gira</title>
</head>
<body>
        <div class="container">
        <div class="d-flex justify-content-center h-100">
            
            <div class="card">

            

            <div class="card-header">
                    <h1><i class="fas fa-umbrella-beach"></i> Crear Gira</h1>

            </div>

            <div class="card-body">
                    <form action="./php/pruebagira.php?accion=INS" method="POST">
                         <div class="row"  id="espacio">
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <label for="nombregira"><h5><i class="fas fa-umbrella-beach"></i> Nombre de la Gira</h5></label>
                                <input name= "nombregira" type="text" class="form-control" placeholder="Este campo es obligatorio*">
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <label for="nombregira"><h5><i class="fas fa-place-of-worship"> </i> Lugar de la Gira</h5></label>
                                <input name= "lugargira" type="text" class="form-control" placeholder="Este campo es obligatorio*">
                            </div>
                         </div>
                         <div class="row" id="espacio">
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <label for="preciogira"><h5><i class="fas fa-dollar-sign"></i> Precio de la Gira</h5></label>
                                <input  name= "preciogira" type="text" class="form-control" placeholder="Este campo es obligatorio">
                            </div>
                            
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <label for="horagira"><h5><i class="fas fa-clock"></i> Hora de salida</h5></label>
                                <input  name= "horagira" type="datetime" class="form-control" placeholder="Este campo es obligatorio*">
                            </div>
                        </div>
                        <div class="row"  id="espacio">
                            
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <label for="fechagira"><h5><i class="fas fa-calendar-times"></i>Fecha</h5></label>
                                <input  name="fechagira" type="date" class="form-control" placeholder="Este campo es obligatorio*">
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <label for="cantidadgira"><h5><i class="fas fa-users"></i> Cantidad de personas</h5></label>
                                <input name="cantidadgira" type="text" class="form-control" placeholder="Este campo es obligatorio*">
                            </div>
                        </div>
                        <div class="row" id="espacio">
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <label for="nombregira"><h5><i class="fas fa-location-arrow"></i> Punto de Encuentro</h5></label>
                                <input name="puntogira" type="text" class="form-control" placeholder="Este campo es obligatorio*">
                            </div>
                             <div class="col-md-6 col-sm-12 col-xs-12">
                                <label for="nombregira"><h5><i class="fas fa-pencil-ruler"></i> Actividad Princpal</h5></label>
                                <input name="descripciongira" type="text" class="form-control" placeholder="Obligatorio" rows="3"></textarea>
                             </div>
                            
                         </div>
                        <div  class="row" id="botones">     
                                <button id="botones1" type="submit" class="btn btn-primary btn-lg btn btn-info">Crear Gira</button>
                                <button id="botones2" type="button" class="btn btn-primary btn-lg btn btn-danger" >Cancelar</button>
                            </div>
                        </div>
                        </div>
                        </div>
                        </form>
                

            </div>
            </div>
        </div>

        <style>
            .FORM{
    margin-left: 800px;
    margin-right: 100px;
}


html,body{
    background-image: url('https://images.pexels.com/photos/994605/pexels-photo-994605.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940');
    background-size: cover;
    background-repeat: no-repeat;
    height: 100%;
    font-family: 'Numans', sans-serif;
    }

h1{
    color: #FFC312;
    text-align: center;
}

h6{
    color: #FFC312;
}

label{
    color: #FFC312;
}
.card{
    height: 570px;
    margin-top: auto;
    margin-bottom: auto;
    width: 600px;
    background-color: rgba(0,0,0,0.5) !important;
    }

#botones{
    margin-left: 140px;
    margin-top: 25px;
    
    
}

#botones1{
    background: #FFC312;
    margin-right: 30px;
}


#espacio{
    margin-top:10px;
}
</style>

</body>
</html>
    