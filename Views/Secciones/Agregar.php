<main class="add_secciones">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-success">
					<div class="panel-heading">
						<h3 class="panel-title">Registro de Secciones</h3>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-md-12">
								<form name="registar_secciones" action="" method="POST" class="form-horizontal form-registro">
									<div class="form-group">
										<label class="col-md-4 control-label">Nombre:</label>
										<div class="col-md-4">
											<input required type="text" class="form-control" name="seccion_nombre" id="seccion_nombre" placeholder="Nombre">
										</div>
									</div>
									<input type="hidden" name="seccion_status" id="seccion_status" value="A">
									<div class="form-group">
										<div class="col-md-offset-4 col-md-6">
											<input type="submit" class="btn btn-success" value="Registrar"/>
											<input type="reset" class="btn btn-default" value="Cancelar"/>
											<a href="<?php echo URL ?>Secciones" class="btn btn-primary">Regresar</a>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>