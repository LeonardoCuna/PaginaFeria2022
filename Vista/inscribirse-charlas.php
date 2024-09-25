
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="Liceo Impulso" />
        <title>Liceo Impulso | 2022</title>
        <!-- Favicon-->
        <link rel="icon" type="../image/x-icon" href="../Img/logoimpulso.png"/>
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
                      <li class="nav-item"><a class="nav-link" href="controladorInscribirse.php">Inscripciones</a></li>
                      <li class="nav-item"><a class="nav-link" href="../Vista/Colaboradores.html #Text1">Colaboradores</a></li>
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
			  					<h3 class="heading mb-4">Inscripciones a charlas</h3>
			  					<h4>Es obligatorio anotarse a mínimo 3 charlas.</h4>
								
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

				<form action="" id="contactForm" method="post">


				<div class="form-group">
			    	<label>Selecciona la charla ALUMNI de 16:15 a 16:45</label>
				<select name="Inscripcion1" class="form-control">
					<option selected>Seleccionar</option>

					<?php 
					foreach($datos7 as $dato){
						$cantidad = $cantidades->validar1($dato['id']);

						foreach($cantidad as $cant){ 
							foreach($cant as $cant){ 
							if($cant['cantidad']<36){ 
									echo	"<option value='".$dato['id']."'>".$dato['orientacion']." - ".$dato['profesional']." - ".$dato['profesion']." </option>";
							}
							}
						}
						
					
					}
					 ?>




				</select>
			  	</div>


				  <div class="form-group">
			    	<label>Selecciona la charla de 17:20 a 17:40</label>
				<select name="Inscripcion2" class="form-control">
					<option selected>Seleccionar</option>

					<?php 
					
					
					
					foreach($datos1 as $datos){
						$cantidadd = $cantidades1->validar1($datos['id']);
						foreach($cantidadd as $cant){ 
							
						if($cant['cantidad']<2){ 
					echo	"<option value='".$datos['id']."'>".$datos['orientacion']." - ".$datos['profesional']." - ".$datos['profesion']." </option>" ;
						}
						$cantidades1 = new Charla();
					} 
						
					} ?>
					
				</select>
			  	</div>

				  <div class="form-group">
			    	<label>Selecciona la charla de 17:45 a 18:05</label>
				<select name="Inscripcion3" class="form-control">
					<option selected>Seleccionar</option>
					<?php 
					
					
					
					foreach($datos2 as $dato){
						$cantidaddd = $cantidades1->validar1($dato['id']);

						foreach($cantidaddd as $cant){ 
						
						if($cant['cantidad']<36){ 
					echo	"<option value='".$dato['id']."'>".$dato['orientacion']." - ".$dato['profesional']." - ".$dato['profesion']." </option>";
						}
						$cantidades1 = new Charla();
					} 
					}  ?>
				</select>
			  	</div>

				  <div class="form-group">
			    	<label>Selecciona la charla de 18:10 a 18:30</label>
				<select name="Inscripcion4" class="form-control">
					<option selected>Seleccionar</option>
					<?php 
					
					
					
					foreach($datos3 as $dato){
						$cantidaD = $cantidades1->validar1($dato['id']);

						foreach($cantidaD as $cant){ 
						
						if($cant['cantidad']<36){ 
					echo	"<option value='".$dato['id']."'>".$dato['orientacion']." - ".$dato['profesional']." - ".$dato['profesion']." </option>";
						}
						$cantidades1 = new Charla();
					} 
					}  ?>
				</select>
			  	</div>

				  <div class="form-group">
			    	<label>Selecciona la charla de 19:10 a 19:30</label>
				<select name="Inscripcion5" class="form-control">
					<option selected>Seleccionar</option>
					<?php 
					
					
					
					foreach($datos4 as $dato){
						$cantidadD = $cantidades1->validar1($dato['id']);

						foreach($cantidadD as $cant){ 
						
						if($cant['cantidad']<36){ 
					echo	"<option value='".$dato['id']."'>".$dato['orientacion']." - ".$dato['profesional']." - ".$dato['profesion']." </option>";
						}
						$cantidades1 = new Charla();
					} 
					} ?>
				</select>
			  	</div>

				  <div class="form-group">
			    	<label>Selecciona la charla de 19:30 a 20:00</label>
				<select name="Inscripcion6" class="form-control">
					<option selected>Seleccionar</option>
					<?php 
					
					
					
					foreach($datos5 as $dato){
						$cantidAd = $cantidades1->validar1($dato['id']);

						foreach($cantidAd as $cant){ 
					
						if($cant['cantidad']<36){ 
					echo	"<option value='".$dato['id']."'>".$dato['orientacion']." - ".$dato['profesional']." - ".$dato['profesion']." </option>";
						}
						$cantidades1 = new Charla();
					} 
					} ?>
				</select>
			  	</div>

				  <div class="form-group">
			    	<label>Selecciona la charla de 20:00 a 20:30</label>
				<select name="Inscripcion7" class="form-control">
					<option selected>Seleccionar</option>
					<?php 
					
					
					
					foreach($datos6 as $dato){
						$cantiDad = $cantidades1->validar1($dato['id']);

						foreach($cantiDad as $cant){ 
						
						if($cant['cantidad']<36){ 
					echo	"<option value='".$dato['id']."'>".$dato['orientacion']." - ".$dato['profesional']." - ".$dato['profesion']." </option>";
						}
						$cantidades1 = new Charla();
					} 
					} ?>
				</select>
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