<main class="add_estudiantes">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<?php 
					$total_datos = mysqli_num_rows($datos);
					if ($total_datos > 0){?>
				<div class="panel panel-success">
					<div class="panel-heading">
						<h3 class="panel-title">Registro de Estudiantes</h3>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-md-12">
								<form name="registrar_estudiante" action="" method="POST" enctype="multipart/form-data" class="form-horizontal form-registro">
									<h2 class="text-center">Registro de Estudiantes</h2>
									<div class="form-group">
										<label class="col-md-4 control-label">Nombre:</label>
										<div class="col-md-4">
											<input required type="text" class="form-control" name="es_nombre" id="es_nombre" placeholder="Nombre">
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-4 control-label">Edad:</label>
										<div class="col-md-4">
											<input required type="number" class="form-control" name="es_edad" id="es_edad" placeholder="Edad">
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-4 control-label">Promedio:</label>
										<div class="col-md-4">
											<input required type="number" class="form-control" name="es_promedio" id="es_promedio" placeholder="Promedio">
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-4 control-label">Fecha de Nacimiento:</label>
										<div class="col-md-4">
											<input required type="date" class="form-control" name="es_fecha" id="es_fecha">
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-4 control-label">Foto:</label>
										<div class="col-md-4">
											<input required type="file" class="form-control" name="es_imagen" id="es_imagen">
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-4 control-label">Seccion:</label>
										<div class="col-md-4">
											<select required name="es_seccion_id" id="es_seccion_id" class="form-control">
												<option value="">Seleccione</option>
											<?php while ($row = mysqli_fetch_array($datos)) {?>
												<option value="<?php echo $row['seccion_id'] ?>"><?php echo $row['seccion_nombre'] ?></option>
											<?php } ?>
												
											</select>
										</div>
									</div>
									<input type="hidden" name="es_status" id="es_status" value="A">
									<div class="form-group">
										<div class="col-md-offset-4 col-md-6">
											<input type="submit" class="btn btn-success" value="Registrar"/>
											<input type="reset" class="btn btn-default" value="Cancelar"/>
											<a href="<?php echo URL ?>Estudiantes" class="btn btn-primary">Regresar</a>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<?php }else{ ?>
				<h1 class="text-center">No hay Secciones Registradas, Debe <a href="<?php echo URL; ?>Secciones/Agregar"><b>Registrar</b></a> primero una sección</h1>
				<?php } ?>
			</div>
		</div>
	</div>
</main>