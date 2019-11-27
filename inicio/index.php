<?php
	session_start();//Iniciando seccion
	
	//Verificando privilegios de usuario
	if($_SESSION['PUSUARIO']==1){
		//Usuario es Administrador
	
	}else if($_SESSION['PUSUARIO']==2){
		
		//Es un usuario normal
		
	}else{
		
		echo "Debe registrarse para acceder a esta pagina web.";
		exit();
	
	}
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Gomez</title>

  

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

  <!-- Esta seria mi pagina de incicio -->
  <link href="css/agency.min.css" rel="stylesheet">

  <style>

  
  </style>

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">Crear Gira</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
         
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#portfolio">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">Contactanos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#team">Acerca de Nosotros</a>
          </li>
          
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header -->
  <header class="masthead">
    <div class="container">
      <div class="intro-text">
        
        <div class="intro-heading text-uppercase">Crea tu gira</div>
        <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="../creargira2.php">Empieza ya</a>
      </div>
    </div>
  </header>


  <!-- Portfolio Grid -->
  <section class="bg-light page-section" id="portfolio">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Giras</h2>
          <h3 class="section-subheading text-muted">Viviras una experiencia inolvidable</h3>
        </div>
      </div>
	  
      <div class="row">
	  
	  <!-- Mostrando las giras creadas -->
	  
	  <!-- Abriendo php --><?php
	  
		require '../php/conexion.php';
		
		//Consulta en base de datos de giras1
		$sql=" SELECT * FROM giras1 where estado_gira!='D' ";
		
		$results = $mysqli->query($sql);
		$rcolsult_result;
		
		$i=0;//Iterador
		
		if($results){
			
			global $rcolsult_result;
			
			while($rcolsult_result=mysqli_fetch_assoc($results)){
					
					$i++;
					$imagenUrl=$rcolsult_result["imagen_gira"];
					
					//Mostrando datos de gira
					echo '
					<div class="col-md-4 col-sm-6 portfolio-item">';
					
					?><!-- Cierre php -->
					
						<a class="portfolio-link" data-toggle="modal" href=" <?php echo '#a'.$i ; ?>">
						
						<!-- Abriendo php --><?php
						
						echo '
						
						<div class="portfolio-hover">
						<div class="portfolio-hover-content">
						<i class="fas fa-plus fa-3x"></i>
						</div>
						</div>'; ?> <!-- Cierre php -->

						<img class="img-fluid" src=" <?php echo $imagenUrl; ?>" alt="">
						
						<!-- Abriendo php --><?php
						
						echo '
						</a>
						<div class="portfolio-caption">
						<h4>'.$rcolsult_result["nombre_gira"].'</h4>
						<p class="text-muted">' .$rcolsult_result["fecha_gira"].'</p>
						</div>
					</div>';
					
					echo "<br>";
			
				}
        
		}
		else{

			echo"Error al optener los datos";
			//Error
		}   
	  
	  ?> <!-- Cierre php -->
        
      </div>
	  
	  
    </div>
  </section>

 

  <!-- Clients -->
  <section class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-6">
          <a href="#">
            <img class="img-fluid d-block mx-auto" src="img/logos/envato.jpg" alt="">
          </a>
        </div>
        <div class="col-md-3 col-sm-6">
          <a href="#">
            <img class="img-fluid d-block mx-auto" src="img/logos/designmodo.jpg" alt="">
          </a>
        </div>
        <div class="col-md-3 col-sm-6">
          <a href="#">
            <img class="img-fluid d-block mx-auto" src="img/logos/themeforest.jpg" alt="">
          </a>
        </div>
        <div class="col-md-3 col-sm-6">
          <a href="#">
            <img class="img-fluid d-block mx-auto" src="img/logos/creative-market.jpg" alt="">
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact -->
  <section class="page-section" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Contact Us</h2>
          <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <form id="contactForm" name="sentMessage" novalidate="novalidate">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input class="form-control" id="name" type="text" placeholder="Your Name *" required="required" data-validation-required-message="Please enter your name.">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <input class="form-control" id="email" type="email" placeholder="Your Email *" required="required" data-validation-required-message="Please enter your email address.">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" required="required" data-validation-required-message="Please enter your phone number.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <textarea class="form-control" id="message" placeholder="Your Message *" required="required" data-validation-required-message="Please enter a message."></textarea>
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="clearfix"></div>
              <div class="col-lg-12 text-center">
                <div id="success"></div>
                <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Send Message</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="footer">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-4">
          <span class="copyright">Copyright &copy; Your Website 2019</span>
        </div>
        <div class="col-md-4">
          <ul class="list-inline social-buttons">
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </li>
          </ul>
        </div>
        <div class="col-md-4">
          <ul class="list-inline quicklinks">
            <li class="list-inline-item">
              <a href="#">Privacy Policy</a>
            </li>
            <li class="list-inline-item">
              <a href="#">Terms of Use</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <!-- Portfolio Modals -->

  <!-- Modal -->
  
  <!-- Mostrando portafolios-->
	  
	  <!-- Abriendo php --><?php
	  
		//Consulta en base de datos de giras1
		$sql=" SELECT * FROM giras1 where estado_gira!='D' ";
		
		$results = $mysqli->query($sql);
		$rcolsult_result;
		
		$i=0; //Iterador
		
		while($rcolsult_result=mysqli_fetch_assoc($results)){
			
			$i++;
			$imagenUrl=$rcolsult_result["imagen_gira"];
					
			?><!-- Cierre php -->
			
			<div class="portfolio-modal modal fade" id="<?php echo 'a'.$i; ?>" tabindex="-1" role="dialog" aria-hidden="true">
			
			<!-- Abriendo php --><?php
			
				echo '
				<div class="modal-dialog">
				<div class="modal-content">
					<div class="close-modal" data-dismiss="modal">
					<div class="lr">
						<div class="rl"></div>
					</div>
					</div>
					<div class="container">
					<div class="row">
						<div class="col-lg-8 mx-auto">
						<div class="modal-body">
							<!-- Project Details Go Here -->
							<h2 class="text-uppercase"> '. $rcolsult_result["nombre_gira"] . '</h2>
							<p class="item-intro text-muted">'. $rcolsult_result["fecha_gira"] .'</p>';
							?><!-- Cierre php -->
							
							<img class="img-fluid d-block mx-auto" src=" <?php echo $imagenUrl; ?>" alt="">
							
							<!-- Abriendo php --><?php
							echo '<p>'. $rcolsult_result["descripcion_gira"] .'</p>
							<ul class="list-inline">
							<li>Hora: '. $rcolsult_result["hora_gira"] .'</li>
							<li>Lugar: '. $rcolsult_result["lugar_gira"] .'</li>
							<li>Precio: '. $rcolsult_result["precio_gira"] .'</li>
							<li>Limite de participantes: '. $rcolsult_result["cantidad_gira"] .'</li>
							<li>Lugar de encuentro: '. $rcolsult_result["encuentro_gira"] .'</li>
							</ul>
							<button class="btn btn-primary" data-dismiss="modal" type="button">
							<i class="fas fa-times"></i>
							Close Project</button>
						</div>
						</div>
					</div>
					</div>
				</div>
				</div>
			</div> ';
			
			echo "<br>";
			
		} 
		
	  ?> <!-- Cierre php -->

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Contact form JavaScript -->
  <script src="js/jqBootstrapValidation.js"></script>
  <script src="js/contact_me.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/agency.min.js"></script>


  <style>

   .body{

    background-image: url("paper.gif");

   }


  </style>
</body>

</html>
