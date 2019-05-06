<main class="estudiantes_ver">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<?php
				if ($datos){?>
				<h2 class="text-center">Estudiante <?php echo $datos['es_nombre']; ?></h2>
				<div class="panel panel-success">
					<div class="panel-heading">
						<h3 class="panel-title">Perfil del Estudiante <?php echo $datos['es_nombre']; ?><b></b></h3>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-md-3">
								<img class="img-responsive" src="<?php echo URL;?>Views/Template/img/<?php echo $datos['es_imagen']; ?>">
							</div>
							<div class="col-md-9">
								<ul class="list-group">
									<li class="list-group-item">
										<b>Nombre: </b><?php echo $datos['es_nombre']; ?>
									</li>
									<li class="list-group-item">
										<b>Edad: </b><?php echo $datos['es_edad']; ?>
									</li>
									<li class="list-group-item">
										<b>Promedio: </b><?php echo $datos['es_promedio']; ?>
									</li>
									<li class="list-group-item">
										<b>Fecha de Nacimiento: </b><?php echo $datos['es_fecha']; ?>
									</li>
									<li class="list-group-item">
										<b>Sección: </b><?php echo $datos['seccion_nombre']; ?>
									</li>
									<li class="list-group-item">
										<b>Estatus: </b><?php echo $datos['es_status']; ?>
									</li>
								</ul>
								<a href="<?php echo URL ?>Estudiantes" class="btn btn-primary btn-lg">Regresar</a>
							</div>
						</div>
					</div>
				</div>
				<?php }else{ ?>
				<h2 class="text-center">No hay Registros para mostrar</h2>
				<?php } ?>
			</div>
		</div>
	</div>
</main>