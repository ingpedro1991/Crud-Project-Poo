<main class="edit_secciones">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-success">
					<div class="panel-heading">
						<h3 class="panel-title">Editar Seccion <?php echo $datos['seccion_nombre']; ?></h3>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-md-12">
								<form name="actualizar_seccion" action="" method="POST" class="form-horizontal form-registro">
									<div class="form-group">
										<label class="col-md-3 control-label">Nombre:</label>
										<div class="col-md-6">
											<input type="text" class="form-control" name="seccion_nombre" id="seccion_nombre" value="<?php echo $datos['seccion_nombre']; ?>" placeholder="Nombre">
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label">Status:</label>
										<div class="col-md-6">
											<input type="text" class="form-control" name="seccion_status" id="seccion_status" value="<?php echo $datos['seccion_status']; ?>" placeholder="Status">
										</div>
									</div>
									<input type="hidden" name="seccion_id" id="seccion_id" value="<?php echo $datos['seccion_id'] ?>">
									<div class="form-group">
										<div class="col-md-offset-4 col-md-8">
											<input type="submit" class="btn btn-success" value="Actualizar"/>
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
</div>
</main>