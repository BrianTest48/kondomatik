<!doctype html>
<html class="fixed">
	<head>

		<?php require_once("../Main/ListarHead.php");?>

	</head>
	<body>
		<section class="body">
			<div class="inner-wrapper">
				<!-- start: sidebar -->
				<aside id="sidebar-left" class="sidebar-left">

				    <div class="sidebar-header">
				        <div class="sidebar-title">
				            Navigation
				        </div>
				        <div class="sidebar-toggle d-none d-md-block" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
				            <i class="fas fa-bars" aria-label="Toggle sidebar"></i>
				        </div>
				    </div>
				</aside>
				<!-- end: sidebar -->
				<section role="main" class="content-body">
					<header class="page-header">
						<h2>Gestión de Documentaria</h2>
					</header>
					<div class="mb-3">
                            <h4>Gestión de Documentos</h4>
                        </div>

						<div class="mb-3">
							<label for="tipo_documento">Mes:&nbsp;</label>
							<select id="tipo_documento" name="tipo_documento">
								<option value="gestion1">Mes 1</option>
								<option value="gestion2">Mes 2</option>
								<option value="gestion3">Mes 3</option>
							</select>
						</div>
						<div>
							<label for="busqueda">Buscar:</label>
							<input type="text" id="busqueda" name="busqueda" size="50"> 
							<button>Buscar</button>
						</div>
						<br>
						<div>
							<label>Estado:</label>
							<input type="radio" id="estado1" name="estado" value="opcion1">
							<label for="estado1">Todos</label>

							<input type="radio" id="estado2" name="estado" value="opcion2">
							<label for="estado2">Activos</label>

							<input type="radio" id="estado3" name="estado" value="opcion3">
							<label for="estado3">Inactivos</label>
						</div>
						<div class="row">
							<div class="col">
								<section class="card">
									<header class="card-header">
										<div class="card-actions">
											<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
											<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
										</div>
									</header>
									<div class="card-body">
										<table class="table table-responsive-lg table-bordered table-striped table-sm mb-0">
											<thead>
												<tr>
													<th class="text-end">Fecha</th>
													<th class="text-end">Tipo</th>
													<th class="text-end">Nombre</th>
													<th class="text-end">Estado</th>
													<th class="text-end">Vista</th>
													<th class="text-end">Editar</th>
													<th class="text-end">Eliminar</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td class="text-end">$1.38</td>
													<td class="text-end">-0.01</td>
													<td class="text-end">-0.36%</td>
													<td class="text-end">$1.39</td>
													<td class="text-end">$1.39</td>
													<td class="text-end">$1.38</td>
													<td class="text-end">9,395</td>
												</tr>
												<tr>
													<td class="text-end">$1.15</td>
													<td class="text-end">  +0.02</td>
													<td class="text-end">1.32%</td>
													<td class="text-end">$1.14</td>
													<td class="text-end">$1.15</td>
													<td class="text-end">$1.13</td>
													<td class="text-end">56,431</td>
												</tr>
												<tr>
													<td class="text-end">$4.00</td>
													<td class="text-end">-0.04</td>
													<td class="text-end">-0.99%</td>
													<td class="text-end">$4.01</td>
													<td class="text-end">$4.05</td>
													<td class="text-end">$4.00</td>
													<td class="text-end">90,641</td>
												</tr>

											</tbody>
										</table>
									</div>
								</section>
							</div>
						</div>
						<br>
						<div class="mb-3">
                            <button type="button" class="btn btn-secondary">Cancelar</button>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
					<!-- end: page -->
				</section>
			</div>
		</section>

		<?php
		require_once("../Main/Listarjs.php");
		?>

	</body>
</html>