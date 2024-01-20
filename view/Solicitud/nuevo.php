<!DOCTYPE html>
<html class="fixed">

<head>
    <title>Kondomatik - Registro de Solicitud</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <?php require_once("../Main/mainhead.php"); ?>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="registrardocumento.js"></script>

</head>

<body>
    <section class="body">
        <header class="header">
            <?php require_once("../Main/mainheadpanel.php"); ?>
        </header>
        <div class="page-container">
            <div class="inner-wrapper">
                <aside id="sidebar-left" class="sidebar-left">
                    <?php require_once("../Main/mainleftpanel.php"); ?>
                </aside>
                <section role="main" class="content-body">
                    <header class="page-header">
                        <h2>Solicitud</h2>
                    </header>
                    <div class="row">
                        <div class="card">
                            <div class="card-body">
                                <div class="row justify-content-between pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
                                    <div class="col-md-12">
                                        <ul class="nav nav-tabs mb-3" id="pills-tab" role="tablist" style="border-bottom : 0px">
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link active btn btn-outline-secondary btn-block mg-b-10 " id="orcinea-tab" data-bs-toggle="pill" data-bs-target="#nuevo" type="button" role="tab" aria-controls="nuevo" aria-selected="true">Nuevo</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link btn btn-outline-secondary btn-block mg-b-10 " id="host-tab" data-bs-toggle="pill" data-bs-target="#aprobacion" type="button" role="tab" aria-controls="aprobacion" aria-selected="false">Aprobacion</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link btn btn-outline-secondary btn-block mg-b-10 " id="refelx-tab" data-bs-toggle="pill" data-bs-target="#resumen" type="button" role="tab" aria-controls="resumen" aria-selected="false">Resumen</button>
                                            </li>
                                        </ul>
                                        <div class="tab-content">
                                            <!-- AQUI VA EL CONTENIDO -->
                                            <div id="nuevo" class="tab-pane fadein show active">

                                                <!--Incia el card --->

                                                <div class="border border-secondary  p-2 rounded-2 col-12">
                                                    <!-- ======= FORMULARIO DATOS ======= -->

                                                    <div class="col-12 col-sm-6">
                                                        <h4 class="tx-gray-800 mg-b-5 text-primary"><u>Nueva Solicitud</u></h4>
                                                    </div>

                                                    <div class="br-pagebody">
                                                        <div class="br-section-wrapper">
                                                            <div class="row">
                                                                <h4 class="tx-gray-800 mg-b-5 text-primary"><u>Datos del Solicitante</u></h4>
                                                                <div class="col-xl-6">
                                                                    <div class="form-group row">
                                                                        <label for="" class="col-sm-4 col-form-label">Fecha de Registro: </label>
                                                                        <div class="col-sm-8">
                                                                            <input type="date" class="form-control" id="" placeholder="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label for="" class="col-sm-4 col-form-label">ID Propietario: </label>
                                                                        <div class="col-sm-8">
                                                                            <input type="text" class="form-control" id="" placeholder="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label for="" class="col-sm-4 col-form-label">Nombre del Solicitante</label>
                                                                        <div class="col-sm-8">
                                                                            <select class="form-control select2" name="" id="" data-placeholder="Seleccione" style="width: 100%" required>
                                                                                <option label="Seleccione"></option>
                                                                                <option value="#">RRRRRRR RRRRRR (HIJO)</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label for="" class="col-sm-4 col-form-label">DNI del Solicitante: </label>
                                                                        <div class="col-sm-8">
                                                                            <input type="number" class="form-control" id="" placeholder="">
                                                                        </div>
                                                                    </div>
                                                                    <br>
                                                                    <h4 class="tx-gray-800 mg-b-5 text-primary"><u>Datos de la Solicitud</u></h4>
                                                                    <br>
                                                                    <div class="form-group row">
                                                                        <label for="" class="col-sm-4 col-form-label">Tipo de Solicitud:</label>
                                                                        <div class="col-sm-8">
                                                                            <select class="form-control select2" name="" id="" data-placeholder="Seleccione" style="width: 100%" required>
                                                                                <option label="Seleccione"></option>
                                                                                <option value="#">Solicitud de Mudanza</option>
                                                                                <option value="#">Solicitud de Separacion de Club House</option>
                                                                                <option value="#">Solicitud de Separacion de piscina</option>
                                                                                <option value="#">Solicitud de Separacion de Zona de Parilla</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label for="" class="col-sm-4 col-form-label">Detalle: </label>
                                                                        <div class="col-sm-12">
                                                                            <textarea type="text" class="form-control" id="" placeholder=""></textarea>
                                                                        </div>
                                                                    </div>
                                                                    <br>
                                                                    <h4 class="tx-gray-800 mg-b-5 text-primary"><u>Datos de Ejecución</u></h4>
                                                                    <br>
                                                                    <div class="form-group row">
                                                                        <label for="" class="col-sm-4 col-form-label">Fecha de Ejecución: </label>
                                                                        <div class="col-sm-8">
                                                                            <input type="date" class="form-control" id="" placeholder="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label for="" class="col-sm-4 col-form-label">Hora Inicio: </label>
                                                                        <div class="col-sm-8">
                                                                            <input type="time" class="form-control" id="" placeholder="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label for="" class="col-sm-4 col-form-label">Hora Fin: </label>
                                                                        <div class="col-sm-8">
                                                                            <input type="time" class="form-control" id="" placeholder="">
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-xl-6">
                                                                    <div class="form-group row">
                                                                        <h4 class="tx-gray-800 mg-b-5 text-primary"><u>Vista de Solicitud</u></h4>
                                                                        <div class="prevs_certificado" id="prev1">
                                                                            <div class="container prev_certificado" style="max-width: 1020px !important;" id="prev_certificado_0">
                                                                                <div class="card" style="margin-top: 60px;">
                                                                                    <div class="card-header d-flex justify-content-between">
                                                                                        <h3>PREVISUALIZACIÓN</h3>
                                                                                        <div>

                                                                                        </div>
                                                                                    </div>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class=" text-center">
                                                        <button type="submit" name="submit" class="btn btn-raised btn-primary">
                                                            CANCELAR</button>
                                                        <button type="submit" name="submit" class="btn btn-raised btn-primary">
                                                            ENVIAR</button>
                                                    </div>

                                                </div>


                                            </div>
                                            <div id="aprobacion" class="tab-pane fade">
                                                <div class="border border-secondary  p-2 rounded-2 col-12">
                                                    <!-- ======= FORMULARIO DATOS ======= -->

                                                    <div class="br-pagebody">
                                                        <div class="br-section-wrapper">
                                                            <div class="row">
                                                                <div class="col-xl-6">
                                                                    <div class="form-group row">
                                                                        <h4 class="tx-gray-800 mg-b-5 text-primary"><u>Vista de Solicitud</u></h4>
                                                                        <div class="prevs_certificado" id="prev1">
                                                                            <div class="container prev_certificado" style="max-width: 1020px !important;" id="prev_certificado_0">
                                                                                <div class="card" style="margin-top: 60px;">
                                                                                    <div class="card-header d-flex justify-content-between">
                                                                                        <h3>VISTA DE LA SOLICITUD ENVIADA</h3>
                                                                                        <div>

                                                                                        </div>
                                                                                    </div>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-6">
                                                                    <h4 class="tx-gray-800 mg-b-5 text-primary">Para que su solicitud sea ejecutada necesita:</h4>
                                                                    <br>
                                                                    <div class="form-group row">
                                                                        <div class="col-sm-1">
                                                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
                                                                        </div>
                                                                        <label class="form-check-label col-sm-11" for="flexCheckIndeterminate">
                                                                            La aprobacion del Administrador
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label for="" class="col-sm-4 col-form-label">Estado </label>
                                                                        <div class="col-sm-8">
                                                                            <input type="text" class="form-control" id="" placeholder="En Espera">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label for="" class="col-sm-0 col-form-label">Observaciones: </label>
                                                                        <div class="col-sm-12">
                                                                            <textarea type="text" class="form-control" id="" placeholder=""></textarea>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <div class="col-sm-1">
                                                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
                                                                        </div>
                                                                        <label class="form-check-label col-sm-11" for="flexCheckIndeterminate">
                                                                            La aprobacion del Propietario
                                                                        </label>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label for="" class="col-sm-4 col-form-label">Estado </label>
                                                                        <div class="col-sm-8">
                                                                            <input type="text" class="form-control" id="" placeholder="En Espera">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class=" text-center">
                                                        <button type="submit" name="submit" class="btn btn-raised btn-primary">
                                                            ATRAS</button>
                                                        <button type="submit" name="submit" class="btn btn-raised btn-primary">
                                                            SIGUIENTE</button>
                                                    </div>

                                                </div>


                                            </div>
                                            <div id="resumen" class="tab-pane fade">

                                                <!--Incia el card --->

                                                <div class="border border-secondary  p-2 rounded-2 col-12">
                                                    <!-- ======= FORMULARIO DATOS ======= -->

                                                    <div class="row">
                                                        <h4 class="tx-gray-800 mg-b-5">Su solicituda ha sido aprobada</h4>
                                                    </div>
                                                    <br>
                                                    <p class="text-primary"><u>Si quiere cancelar su solicitud, haz clic aquí</u></p>
                                                    <br>
                                                    <div class=" text-center">
                                                        <button type="submit" name="submit" class="btn btn-raised btn-primary">
                                                            CERRAR
                                                        </button>
                                                    </div>

                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                </div><!-- br-pagebody -->
                            </div>
                        </div>
                </section>
            </div>
        </div>
    </section>
    <?php require_once("../Main/mainjs.php"); ?>
</body>

</html>