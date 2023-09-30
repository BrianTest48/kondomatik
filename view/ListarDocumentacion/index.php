<!doctype html>
<html class="fixed">
<head>

<?php require_once("../Main/mainhead.php");?>

</head>
<body>
<section class="body">
	<header class="header">
	</header>

	<?php 
			require_once("../Main/mainheadpanel.php"); 
	?>

	<div class="page-container">
	<div class="inner-wrapper">
		<aside id="sidebar-left" class="sidebar-left">
			 <?php 
				require_once("../Main/mainleftpanel.php"); 
			  ?>
		</aside>
		<section role="main" class="content-body">
			<header class="page-header">
				<h2>Gestión Documentaria</h2>
			</header>
			<div class="row">
				<div class="col-md-12">
					<div class="mb-3">
						<h4>Gestión de Documentos</h4>
					</div>
						<input type="hidden" id="IdGestionDocumento" name="IdGestionDocumento">
					<div class="form-group row pb-3">
						<label class="col-lg-6 col-form-label text-start pt-2">Mes:</label>
						<div class="col-lg-3 text-end">
							<select class="form-select" data-plugin-multiselect data-plugin-options='{ "maxHeight": 20 }' id="ms_example1">
								<option value="cheese" selected>Mes 1</option>
								<option value="tomatoes">Mes 2</option>
								<option value="mozarella">Mes 3</option>
								<option value="mushrooms">Mes 4</option>
								<option value="pepperoni">Mes 5</option>
								<option value="onions">Mes 6</option>
							</select>
						</div>
					</div>
						<div class="input-group">
							<input type="text" class="form-control" id="inputDefault" style="width: 80%;">
							<button type="button" class="btn btn-default ms-2">Buscar</button>
						</div>
						<br>
				
						<div class="radio">
							<label>
								<label>Estado:</label>
								<input type="radio" name="optionsRadios" id="estado1" value="estado1">
								<label for="estado1">Todos</label>&nbsp;&nbsp;
								<input type="radio" name="optionsRadios" id="estado2" value="estado2">
								<label for="estado2">Activos</label>&nbsp;&nbsp;
								<input type="radio" name="optionsRadios" id="estado3" value="estado3">
								<label for="estado3">Inactivos</label>
							</label>
						</div>
						<div class="container">
							<div class="row">
								<div class="col-8">
									<section class="card">
										<header class="card-header">
											<div class="card-actions">
												<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
												<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
											</div>
										</header>
										<div class="card-body">
											<div class="table-wrapper">
												<table id="documento_data" class="table table-responsive-lg table-bordered table-striped table-sm mb-0">
													<thead>
														<tr>
															<th class="text-center align-middle">Fecha</th>
															<th class="text-center align-middle">Tipo</th>
															<th class="text-center align-middle">Nombre</th>
															<th class="text-center align-middle">Estado</th>
															<th class="text-center align-middle">Vista</th>
															<th class="text-center align-middle">Editar</th>
															<th class="text-center align-middle">Eliminar</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td class="text-center align-middle">test</td>
															<td class="text-center align-middle">test</td>
															<td class="text-center align-middle">test</td>
															<td class="text-center align-middle">test</td>
															<td class="text-center align-middle">test</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</section>
								</div>
							</div>
						</div>

						<br>
						<div class="mb-3">
							<button type="button" class="btn btn-secondary">Cancelar</button>
							<button type="button" class="btn btn-primary" id='btnGuardar'>Guardar</button>
                   		 </div>
                </section>
			</div>
		</section>


		<?php require_once("../Main/mainjs.php"); ?>

		
		<?php 
          //require_once("../RegistrarDocumentacion/modaldocumento.php")  
		  
   		  ?>

		<!-- <script src="registrardocumento.js"></script> -->
	</body>
</html>