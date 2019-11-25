

<!DOCTYPE html>
<html>
<head>
	<title>Iniciar Sesión</title>
   
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
	
</head>
<body>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h2><i class="fas fa-umbrella-beach"></i> Iniciar Sesión</h2>
				
			</div>
			<div class="card-body" class="d-flex justify-content-center h-100">
		<form method="POST"  action="./PHP/loginconexion.php" >
            <div class="row">
           
                 <div class="col-md-8 col-sm-10 col-xs-12 offset-1">
                   <label for="correo"><h5> <i class="fas fa-envelope-open-text"></i> Correo Electronico</h5></label>
                   <input type="text" name="correo" class="form-control" required>
                 </div>
            </div>
            
            <div class="row">
                
            </div>
            
            

            <div class="row"  id="entrada">

                <div class="col-md-8 col-sm-10 col-xs-12 offset-1">
                    <label for="nombre"><h5> <i class="fas fa-key"></i> Contrase&ntilde;a</h5></label>
                    <input type="password" name="contrasena" class="form-control" required>
               </div>
            </div>

            <div class="row" id="contrasena">
                    <div class="col-md-8 col-sm-10 col-xs-12 offset-1">
					<div class="row align-items-center remember">
						<input type="checkbox">Recordar Contrase&ntilde;a
                    </div>
                    </div>
            </div>

            <div class="row" id="btn">
            <div class="col-md-8 col-sm-10 col-xs-12 offset-1">
              <div class="form-group">
				 <input type="submit" value="Login" class="btn float-right login_btn"/>
               </div>
            </div>
					
		</form>
			</div>
			<div class="card-footer" id="login">
				<div class="d-flex justify-content-center links">
				No tienes cuenta?<a href="./registrarse.php">Registrate</a>
				</div>
				<div class="d-flex justify-content-center" id="login">
					<a href="#">¿Olvidaste tu Contrase&ntilde;a</a>
				</div>
			</div>
		</div>
	</div>
</div>

<style>
	html,body{
    background-image: url('https://images.pexels.com/photos/994605/pexels-photo-994605.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940');
    background-size: cover;
    background-repeat: no-repeat;
    height: 100%;
    font-family: 'Numans', sans-serif;
    }
    
    .container{
    height: 100%;
    align-content: center;
    }
    
    .card{
    height: 470px;
    margin-top: auto;
    margin-bottom: auto;
    width: 500px;
    background-color: rgba(0,0,0,0.5) !important;
    }
    
    .social_icon span{
    font-size: 60px;
    margin-left: 10px;
    color: #FFC312;
    }
    
    .social_icon span:hover{
    color: white;
    cursor: pointer;
    }
    
    .card-header{
    color:#FFC312;
    padding-left: 125px;
    }


    .card-footer{
    color:#FFC312;
    padding-left: 0px;
    }
    
    .social_icon{
    position: absolute;
    right: 20px;
    top: -45px;
    }
    
    .input-group-prepend span{
    width: 50px;
    background-color: #FFC312;
    color: black;
    border:0 !important;
    }
    
    input:focus{
    outline: 0 0 0 0  !important;
    box-shadow: 0 0 0 0 !important;
    
    }
    
    .remember{
    color: white;
    }
    
    .remember input
    {
    width: 20px;
    height: 20px;
    margin-left: 15px;
    margin-right: 5px;
    }
    
    .login_btn{
    color: black;
    background-color: #FFC312;
    width: 100px;
    margin-right: 140px;
    margin-top: 20px;
    
    }
    
    .login_btn:hover{
    color: black;
    background-color: white;
 
    }
    
    .links{
    color: white;
    }
    
    .links a{
    margin-left: 4px;
    color: #FFC312;
    }

    #entrada{
        margin-top: 15px;
    }

    label{
        color: #FFC312;

    }

    #contrasena{
        margin-top: 15px;
        margin-left: 40px;
    }

    #btn{
        margin-left: 120px;
    }

#login{
    margin-right: 0px;
    }

a{
    color: #FFC312;

}
}



</style>

<script>

</script>

</body>
</html>3