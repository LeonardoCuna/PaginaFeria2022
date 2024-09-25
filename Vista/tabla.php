<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="Liceo Impulso" />
        <title>Liceo Impulso | 2021</title>
        <!-- Favicon-->
        <link rel="icon" type="../image/x-icon" href="Img/logoimpulso.png"/>
        <!-- Font Awesome icons-->
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        
        <!-- Core theme CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link href="../css/styles.css" rel="stylesheet" />
        <script src="../js/jquery-3.3.1.min.js"></script>
        <script src="../js/popper.min.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/jquery.validate.min.js"></script>
        <script src="../js/main.js"></script>
        
    </head>
	<body id="page-top">
        <!-- Navigation-->
      
      <!-- Masthead-->
      

        <!--Inscripciones -->
		<table class="tablaIns"  id="div1">

			
			<tr>
			<th class="thcharla">Id charla</th>
            <th class="thprof">Profesional</th>
            <th>Cedula</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Email</th>
            <th>Celular</th>
            <th>Liceo</th>
            <th>Orientacion</th>

            </tr>

				<?php 


				foreach ($datos as $dato ) {

                    

					echo"<tbody>";
                    
					echo "<tr><td>".$dato['id']."</td>";
                    echo "<td>".$dato['profesional']."</td>";
					echo "<td>".$dato['cedula']."</td>";
					echo "<td>".$dato['nombre']."</td>";
					echo "<td>".$dato['apellido']."</td>";
					echo "<td>".$dato['mail']."</td>";
					echo "<td>".$dato['celular']."</td>";
					echo "<td>".$dato['liceo']."</td>";
                    echo "<td>".$dato['orientacion']."</td><tr>";
                   
					echo"</tbody>";
                
				}

				?>
			</table>
		
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="../js/scripts.js"></script>
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>


</body>
</html> 
	
	
	
	
	
