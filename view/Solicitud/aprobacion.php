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
                        <h2>Registro</h2>
                    </header>
                    <div class="row">
                        <div class="card">
                            <div class="card-body">
                                <div class="row justify-content-between pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
                                    <div class="col-md-12">
                                        <ul class="nav justify-content-center">
                                            <li class="nav-item">
                                                <a class="nav-link active" aria-current="page" href="../Solicitud/nuevo.php">Nuevo</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link active" aria-current="page" href="../Solicitud/aprobacion.php">Aprobacion</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link active" aria-current="page" href="../Solicitud/resumen.php">Resumen</a>
                                            </li>
                                        </ul>
                                    </div>

                                    <!--Incia el card --->

                                    <div class="border border-secondary  p-2 rounded-2 col-12">
                                        <!-- ======= FORMULARIO DATOS ======= -->

                                        <div class="br-pagebody">
                                            <div class="br-section-wrapper">
                                                <div class="row">
                                                    <div class="col-xl-6">
                                                        <div class="form-group row">
                                                            <label for="" class="col-sm-12 col-form-label">Vista de Solicitud </label>
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
                                                        <h4 class="tx-gray-800 mg-b-5">Para que su solicitud sea ejecutada necesita:</h4>
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