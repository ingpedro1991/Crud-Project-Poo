<?php namespace Views;

class Template{
	public function __construct(){?>

	<!DOCTYPE html>

	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Proyect POO</title>
		<link rel="stylesheet" href="<?php echo URL;?>Views/Template/css/bootstrap-style-12.css">
		<link rel="stylesheet" href="<?php echo URL;?>Views/Template/css/style.css">
	</head>
	<body>
		<header>
			<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="<?php echo URL;?>"></a>
						
					</div>
					<div id="navbar" class="navbar-collapse collapse">
						<ul class="nav navbar-nav navbar-right" >
							<li><a href="<?php echo URL; ?>">Inicio</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Estudiantes <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="<?php echo URL;?>Estudiantes">Listado</a></li>
									<li><a href="<?php echo URL;?>Estudiantes/Agregar">Agregar</a></li>
								</ul>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Secciones <span class="caret"></span></a>
								<ul class="dropdown-menu">
									<li><a href="<?php echo URL;?>Secciones">Listado</a></li>
									<li><a href="<?php echo URL;?>Secciones/Agregar">Agregar</a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</header>

		<?php }
		public function __destruct(){?>

		<footer>
			<div class="navbar navbar-default">
				<p class="text-center">&copy; Project POO. Todos los derechos reservados by <a href="https://www.linkedin.com/in/ing-pedro-jose-hernandez-morales-25944611a/">Pedro Hernandez</a>.</p>
			</div>
		</footer>

		<script src="<?php echo URL;?>/Views/Template/js/vendor/jquery.js"></script>
		<script src="<?php echo URL;?>/Views/Template/js/vendor/bootstrap.js"></script>
		<script src="<?php echo URL;?>/Views/Template/js/main.js"></script>
	</body>
	</html>
	<?php }
}

$OTemplate = new Template();
?>