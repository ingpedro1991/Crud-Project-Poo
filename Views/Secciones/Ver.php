<main class="secciones_ver">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<?php
				if ($datos){?>
				<h2 class="text-center"><?php echo $datos['seccion_nombre']; ?></h2>
				<div class="panel panel-success">
					<div class="panel-heading">
						<h3 class="panel-title">Datos de la <?php echo $datos['seccion_nombre']; ?><b></b></h3>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-md-12">
								<ul class="list-group">
									<li class="list-group-item">
										<b>Nombre: </b><?php echo $datos['seccion_nombre']; ?>
									</li>
									<li class="list-group-item">
										<b>Status: </b><?php echo $datos['seccion_status']; ?>
									</li>
								</ul>
								<a href="<?php echo URL ?>Secciones" class="btn btn-primary btn-lg">Regresar</a>
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