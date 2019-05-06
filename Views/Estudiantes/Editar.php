<?php $secciones = $estudiantes->listarSecciones(); ?>
<main class="edit_estudiantes">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-success">
					<div class="panel-heading">
						<h3 class="panel-title">Editar Estudiante <?php echo $datos['es_nombre']; ?></h3>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-md-3">
								<div class="panel panel-default">
									<div class="panel-body">
										<img class="img-responsive" src="<?php echo URL;?>Views/Template/img/<?php echo $datos['es_imagen']; ?>">
									</div>
								</div>
							</div>
							<div class="col-md-9">
								<form name="actualizar_estudiante" action="" method="POST" enctype="multipart/form-data" class="form-horizontal form-registro">
									<div class="form-group">
										<label class="col-md-2 control-label">Nombre:</label>
										<div class="col-md-10">
											<input type="text" class="form-control" name="es_nombre" id="es_nombre" value="<?php echo $datos['es_nombre']; ?>" placeholder="Nombre">
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-2 control-label">Edad:</label>
										<div class="col-md-10">
											<input type="number" class="form-control" name="es_edad" id="es_edad" value="<?php echo $datos['es_edad']; ?>" placeholder="Edad">
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-2 control-label">Promedio:</label>
										<div class="col-md-10">
											<input type="number" class="form-control" name="es_promedio" id="es_promedio" value="<?php echo $datos['es_promedio']; ?>" placeholder="Promedio">
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-2 control-label">Fecha de Nacimiento:</label>
										<div class="col-md-10">
											<input type="date" class="form-control" name="es_fecha" id="es_fecha" value="<?php echo $datos['es_fecha']; ?>">
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-2 control-label">Foto:</label>
										<div class="col-md-10">
											<input type="file" class="form-control" name="es_imagen" id="es_imagen">
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-2 control-label">Sección: </label>
										<div class="col-md-10">
											<select required name="es_seccion_id" id="es_seccion_id" class="form-control">
												<?php while ($row = mysqli_fetch_array($secciones)) {?>
												<option <?php if ($row['seccion_id']==$datos['es_seccion_id']) {echo "selected=\"selected\"";} ?> value="<?php echo $row['seccion_id'] ?>"><?php echo $row['seccion_nombre'] ?></option>
												<?php } ?>
											</select>
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-2 control-label">Status:</label>
										<div class="col-md-10">
											<input type="text" class="form-control" name="es_status" id="es_status" value="<?php echo $datos['es_status']; ?>" placeholder="Status">
										</div>
									</div>
									<input type="hidden" name="es_id" id="es_id" value="<?php echo $datos['es_id'] ?>">
									<div class="form-group">
										<div class="col-md-offset-4 col-md-8">
											<input type="submit" class="btn btn-success" value="Actualizar"/>
											<input type="reset" class="btn btn-default" value="Cancelar"/>
											<a href="<?php echo URL ?>Estudiantes" class="btn btn-primary">Regresar</a>
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