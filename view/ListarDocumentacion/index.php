<!doctype html>
<html lang="es" class="fixed">
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
							<label class="col-lg-9 col-form-label text-end pt-2">Mes:</label>
							<div class="col-lg-3 text-end">
								<select class="form-select form-select-sm" data-plugin-multiselect data-plugin-options='{ "maxHeight": 10 }' id="ms_example1">
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
								<label for="estado1" style="margin-right: 60px;">Todos</label>
								<input type="radio" name="optionsRadios" id="estado2" value="estado2">
								<label for="estado2" style="margin-right: 60px;">Activos</label>
								<input type="radio" name="optionsRadios" id="estado3" value="estado3">
								<label for="estado3">Inactivos</label>
							</label>
						</div>

						<div class="row">
							<div class="col-lg-8 col-form-label text-end pt-2">
								<section class="card">
									<header class="card-header">
										
									</header>

									<div class="card-body">
										<div class="table-wrapper">
											<table id="listardocumento_data" class="display min-w850" style="width: 100%">
												<thead>
													<tr>
														<th class="wd-15p">Id</th>
														<th class="wd-15p">Fecha</th>
														<th class="wd-15p">Tipo</th>
														<th class="wd-15p">Nombre</th>
														<th class="wd-15p">Estado</th>
														<th class="wd-15p">Vista</th>
														<th class="wd-15p">Modificar</th>
														<th class="wd-15p">Eliminar</th>
													</tr>
												</thead>
												<tbody>

												</tbody>
											</table>
										</div>
									</div>

									<!-- <div class="card-body">
										<table class="table table-responsive-lg table-bordered table-striped table-sm mb-0" id="listardocumento_data">
											<thead>
												<tr>
													<th class="text-center">Fecha</th>
													<th class="text-center">Tipo</th>
													<th class="text-center">Nombre</th>
													<th class="text-center">Estado</th>
													<th class="text-center">Vista</th>
													<th class="text-center">Editar</th>
													<th class="text-center">Eliminar</th>
												</tr>
											</thead>
											<tbody>

											</tbody>
										</table>
									</div> -->
								</section>
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

		<script src="listardocumento.js"></script> 
	</body>
</html>