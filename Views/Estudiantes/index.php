<main class="estudiantes">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1 class="text-center">Lista de Estudiantes Activos</h1>          
				<div class="table-responsive">
					<table class="table table-hover">
						<thead>
							<tr>
								<th>Perfil</th>
								<th>Nombre</th>
								<th>Edad</th>
								<th>Sección</th>
								<th>Promedio</th>
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
										<td><img class="img_avatar" src="<?php echo URL ?>Views/Template/img/<?php echo $row['es_imagen'];?>"></td>
										<td><a href="<?php echo URL; ?>Estudiantes/Ver/<?php echo $row['es_id'] ?>"><?php echo $row['es_nombre'];?></a></td>
										<td><?php echo $row['es_edad'];?></td>
										<td><?php echo $row['seccion_nombre'];?></td>
										<td><?php echo $row['es_promedio'];?></td>
										<td><a class="btn btn-warning" href="<?php echo URL ?>Estudiantes/Editar/<?php echo $row['es_id']; ?>">Editar</a><a class="btn btn-danger" href="<?php echo URL ?>Estudiantes/Eliminar/<?php echo $row['es_id']; ?>">Eliminar</a></td>
									</tr>
								<?php } ?>
							<?php }else{ ?>
								<tr>
									<td>No hay registros para mostrar</td>
									<td>No hay registros para mostrar</td>
									<td>No hay registros para mostrar</td>
									<td>No hay registros para mostrar</td>
									<td>No hay registros para mostrar</td>
									<td><a class="btn btn-primary" href="<?php echo URL ?>Estudiantes/Agregar">Agregar</a></td>
								</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</main>