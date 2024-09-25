
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="Liceo Impulso" />
        <title>Liceo Impulso | 2021</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="../Img/logoimpulso.png"/>
        <!-- Font Awesome icons-->
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        
        <!-- Core theme CSS -->
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link href="../css/styles.css" rel="stylesheet" />
        <script src="../js/jquery-3.3.1.min.js"></script>
        <script src="../js/popper.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/jquery.validate.min.js"></script>
        <script src="../js/main.js"></script>
</head>
<body>
 <!-- Navigation-->
 <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
          <div class="container">
              <a class="navbar-brand" href="../index.php"><img src="../Img/logo+impulso.png" alt="..." width="230" height="40" class="d-inline-block"></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                  Menu
                  <i class="fas fa-bars ms-1"></i>
              </button>
              <div class="collapse navbar-collapse" id="navbarResponsive">
                  <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                      <li class="nav-item"><a class="nav-link" href="../index.php">Inicio</a></li>
                      <li class="nav-item"><a class="nav-link" href="#">Inscripciones</a></li>
					  
                      <li class="nav-item"><a class="nav-link" href="../Vista/Colaboradores.html">Colaboradores</a></li>
                  </ul>
              </div>
          </div>
      </nav>
      <!-- Masthead-->
      <header class="masthead">
          <div class="container">
              <div class="masthead-sheading text-uppercase">4ta EDICIÓN</div>
              <div class="masthead-sheading text-uppercase">FERIA DE LOS</div>
              <div class="masthead-heading text-uppercase">PROFESIONALES</div>
             
          </div>
      </header>
        <!--Inscripciones -->

	<section id="Ins">
	<div class="space"></div>

		<div class="content">
    
			<div class="container">
	  			<div class="row justify-content-center">
					<div class="col-md-10">
		  				<div class="row justify-content-center">
							<div class="col-md-6">
			  					<h3 class="heading mb-4">Inscripciones</h3>
			  					<p>Modelo de Inscripción de Facultad.</p>
								
							</div>
						</div>
					</div>
	  			</div>
			</div>
		</div>
	</section>

		<div class="container">

			<div class="row">

				<div class="col">

				<form action="../Controlador/validar.php" id="contactForm" method="post">

			  	<div class="form-group">
			    	<label>Nombre</label>
			    	<input type="text" class="form-control"  name="nombre" placeholder="Ingresa tu nombre">
			  	</div>

			  	<div class="form-group">
			    	<label>Apellido</label>
			    	<input type="text" class="form-control"  name="apellido" placeholder="Ingresa tu apellido">
			  	</div>
				  <div class="form-group">
			    	<label>Cédula</label>
			    	<input type="number" class="form-control"    name="cedula" placeholder="Ingresa tu cédula">
			  	</div>

				<div class="form-group">
			    	<label>Orientación</label>
			    	<input type="text" class="form-control"  name="clase" placeholder="Ingresa tu Clase">
			  	</div>

			  	<div class="form-group">
			    	<label>Celular</label>
			    	<input type="number" class="form-control"  name="celular" placeholder="Ingresa tu celular">
			  	</div>

			  	<div class="form-group">
			    	<label>Email</label>
			    	<input type="text" class="form-control" name="email" placeholder="Ingresa tu email">
			  	</div>

                  <div class="form-group">
			    	<label>Institución</label>
			    	<input type="text" class="form-control" name="liceo" placeholder="Ingresa tu liceo">
			  	</div>
				  

			  	<div class="form-group">
			  		<button type="submit" name="submit" class="btn btn-success boton" style="color: #ffc800;">Guardar</button>
			  	</div>
				  

				</form>
				
			</div>
		</div>
	</div> 

<footer class="footer py-4" style="background-color: #0e1753;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4 text-lg-start">&copy; <a href="http://www.liceoimpulso.edu.uy">LiceoImpulso.edu.uy</a></div>
          <div class="col-lg-4 my-3 my-lg-0">
                 <!--  <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fas fa-envelope"></i></i></a>
                <a class="btn btn-dark btn-social mx-2" href="https://www.facebook.com/liceoimpulso"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-dark btn-social mx-2" href="https://www.youtube.com/channel/UCLEHmt1FQ3PonOd9ix09PDQ"><i class="fab fa-youtube"></i></i></a> -->
            </div>
           
        </div>
    </div>
</footer>
			



        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="../js/scripts.js"></script>
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>


</body>
</html>