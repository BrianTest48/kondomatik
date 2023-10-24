<!doctype html>
<html lang="es" class="fixed">

<head>
    <title>Kondomatik - Lista Mantenimiento</title>
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
                        <h2>Gestión de Mantenimiento</h2>
                    </header>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <h2 style="text-decoration: underline;">Seguimiento de mantenimientos</h2>
                            </div>
                            <input type="hidden" id="IdGestionDocumento" name="IdGestionDocumento">
                            <div class="form-group row pb-3">
                                <label class="col-lg-4 col-form-label"> &nbsp;</label>
                                <div class="col-lg-3">
                                    &nbsp;
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
                                    <label for="estado2" style="margin-right: 60px;">Alerta Activa</label>
                                </label>
                            </div>


                            <div class="row">
							<div class="col-lg-9 col-form-label ">
								<section class="card">
									<header class="card-header">
										<div class="card-actions">
											<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
											<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
										</div>

										<h2 class="card-title"></h2>
									</header>
									<div class="card-body">

										<table class="table table-bordered table-striped mb-0" id="datatable-default">

											<thead>
												<tr>
													<th>Descripción</th>
													<th>Frecuencia</th>
													<th>Inicio</th>
													<th>Fin</th>
													<th>Alerta</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Mant. de bombas</td>
													<td>6 meses</td>
													<td>30/10/2020</td>
													<td>30/04/2021</td>
													<td>1 Mes</td>
												</tr>
												<tr>
                                                    <td>Mant. de Extintores</td>
													<td>1 año</td>
													<td>30/05/2020</td>
													<td>30/05/2021</td>
													<td>15 Dias</td>
											</tbody>
										</table>
									</div>
								</section>   
							</div>


                            <div class="col-lg-3 col-form-label ">
								<section class="card">
									<header class="card-header">
										<div class="card-actions">
											<a href="#" class="card-action card-action-toggle" data-card-toggle></a>
											<a href="#" class="card-action card-action-dismiss" data-card-dismiss></a>
										</div>

										<h2 class="card-title"></h2>
									</header>
									<div class="card-body">

										<table class="table table-bordered table-striped mb-0" id="datatable-default">

											<thead>
												<tr>

												</tr>
											</thead>
											<tbody>
												<tr>
                                                    <h4 class="center">CONTROL</h4>
                                                    <br>
                                                    <h4>Cuenta Atras:</h4>
                                                    <input type="text" class="form-control" id="inputDefault"
                                                        style="width: 100%;">
                                                    <h4>Proveedor</h4>
                                                    <input type="text" class="form-control" id="inputDefault"
                                                        style="width: 100%;">
												</tr>
												<tr>

											</tbody>
										</table>
									</div>
								</section>   
							</div>
						</div>



                        <!-- <div class="card">
                            <div class="card-body">
                                <div class="row justify-content-between pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
                                    <div class="col-9 col-sm-6">
                                        <h4 class="tx-gray-800 mg-b-5"></h4>
                                        <p class="mg-b-0"></p>
                                    </div>
                                    <div class="col-12 col-sm-2">
                                    </div>
                                </div>
                                <div class="">
                                    
                                    <br>
                                    <div class="table">
                                        <table id="usuario_data" class="table display responsive nowrap"  style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th class="wd-15p">Descripción</th>
                                                    <th class="wd-15p">Frecuencia</th>
                                                    <th class="wd-20p">Inicio</th>
                                                    <th class="wd-20p">Fin</th>
                                                    <th class="wd-15p">Alerta</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
													<td>Mant. de bombas</td>
													<td>6 meses</td>
													<td>30/10/2020</td>
													<td>30/04/2021</td>
													<td>1 Mes</td>
												</tr>
												<tr>
                                                    <td>Mant. de Extintores</td>
													<td>1 año</td>
													<td>30/05/2020</td>
													<td>30/05/2021</td>
													<td>15 Dias</td>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div><!-- br-pagebody -->
                         <!-- </div> -->

                            <br>

                            <div class="col-lg-12 text-center">
                                <button type="button" class="btn btn-secondary btn-lg" style="width: 200px;"
                                    id="btn_cancelar" onclick="">CERRAR</button>
                            </div>
                </section>
            </div>
    </section>


    <?php
    require_once("../Main/mainjs.php");
    // require_once("modaldocumentacion.php");
    ?>


    <!-- <script src="listardocumento.js"></script> -->
</body>

</html>