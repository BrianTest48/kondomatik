<!doctype html>
<html lang="es" class="fixed">

<head>
	<title>Kondomatik - Lista Documentos</title>
	<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
	<?php require_once("../Main/mainhead.php"); ?>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

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
								<label class="col-lg-4 col-form-label"> &nbsp;</label>
								<div class="col-lg-3">
									&nbsp;
								</div>
								<label class="col-lg-1 col-form-label text-end pt-2">Año:</label>
								<div class="col-lg-1 text-end">
									<select class="form-select form-select-sm" data-plugin-multiselect data-plugin-options='{ "maxHeight": 10 }' id="ms_example1">
										<option value="2">2023</option>
										<option value="3">2022</option>
										<option value="4">2021</option>
										<option value="5">2020</option>
										<option value="6">2019</option>
									</select>
								</div>
								<label class="col-lg-1 col-form-label text-end pt-2">Mes:</label>
								<div class="col-lg-2 text-end">
									<select class="form-select form-select-sm" data-plugin-multiselect data-plugin-options='{ "maxHeight": 10 }' id="ms_example1">
										<option value="2">Enero</option>
										<option value="3">Febrero</option>
										<option value="4">Marzo</option>
										<option value="5">Abril</option>
										<option value="6">Mayo</option>
										<option value="7">Junio</option>
										<option value="8">Julio</option>
										<option value="9">Agosto</option>
										<option value="10">Septiembre</option>
										<option value="11">Octubre</option>
										<option value="12">Noviembre</option>
										<option value="13">Diciembre</option>
									</select>
								</div>
							</div>

							<!-- <div class="form-group row pb-3">
								<label class="col-lg-9 col-form-label text-end pt-2">Mes:</label>
								<div class="col-lg-3 text-end">
									<select class="form-select form-select-sm" data-plugin-multiselect data-plugin-options='{ "maxHeight": 10 }' id="ms_example1">
										<option value="2">Enero</option>
										<option value="3">Febrero</option>
										<option value="4">Marzo</option>
										<option value="5">Abril</option>
										<option value="6">Mayo</option>
										<option value="7">Junio</option>
										<option value="8">Julio</option>
										<option value="9">Agosto</option>
										<option value="10">Septiembre</option>
										<option value="11">Octubre</option>
										<option value="12">Noviembre</option>
										<option value="13">Diciembre</option>
									</select>
								</div>
							</div> -->
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
								<div class="col-lg-12 col-form-label ">
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
															<th class="wd-5p">Vista</th>
															<th class="wd-5p">Editar</th>
															<th class="wd-5p">Eliminar</th>
														</tr>
													</thead>
													<tbody>

													</tbody>
												</table>
											</div>
										</div>


									</section>
								</div>
								<!-- <div class="col-lg-4">
									<div id="pdfViewer" style="width: 100%; height: 500px;"></div>
								</div> -->
							</div>
							<br>

				</section>
			</div>
	</section>


	<?php 
	require_once("../Main/mainjs.php");
	require_once("modaldocumentacion.php"); 
	?>


	<script src="listardocumento.js"></script>
</body>

</html>