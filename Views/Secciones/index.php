<main class="secciones">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1 class="text-center">Lista de Secciones Disponibles</h1>          
				<div class="table-responsive">
					<table class="table table-hover">
						<thead>
							<tr>
								<th>ID</th>
								<th>Nombre</th>
								<th>Acción</th>
							</tr>
						</thead>
						<tbody>
						<?php
							$total_datos = mysqli_num_rows($datos);
							if ($total_datos > 0)
							{
								while ($row = mysqli_fetch_array($datos))
								{?>
									<tr>
										<td><a href="<?php echo URL; ?>Secciones/Ver/<?php echo $row['seccion_id']; ?>"><?php echo $row['seccion_id'];?></a></td>
										<td><?php echo $row['seccion_nombre'];?></td>
										<td><a class="btn btn-warning" href="<?php echo URL ?>Secciones/Editar/<?php echo $row['seccion_id']; ?>">Editar</a><a class="btn btn-danger" href="<?php echo URL ?>Secciones/Eliminar/<?php echo $row['seccion_id']; ?>">Eliminar</a></td>
									</tr>
								<?php } ?>
							<?php }else{ ?>
								<tr>
									<td>No hay registros para mostrar</td>
									<td>No hay registros para mostrar</td>
									<td><a class="btn btn-primary" href="<?php echo URL ?>Secciones/Agregar">Agregar</a></td>
								</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</main>