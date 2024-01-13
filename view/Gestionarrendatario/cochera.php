<!DOCTYPE html>
<html class="fixed">

<head>
    <title>Kondomatik - Arrendatario</title>
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
                        <h2>Registro de Datos del Arrendatario</h2>
                    </header>
                    <div class="row">
                        <div class="card">
                            <div class="card-body">
                                <div class="row justify-content-between pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
                                    <div class="col-md-12">
                                        <ul class="nav justify-content-center">
                                            <li class="nav-item">
                                                <a class="nav-link active" aria-current="page" href="../Gestionarrendatario/departamento.php">Departamento</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link active" aria-current="page" href="../Gestionarrendatario/arrendatario.php">Arrendatario</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link active" aria-current="page" href="../Gestionarrendatario/familiares.php">Familiares</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link active" aria-current="page" href="../Gestionarrendatario/cochera.php">Cochera/Deposito</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link active" aria-current="page" href="">Cierre</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <h4 class="tx-gray-800 mg-b-5">DATOS DEL ARRENDATARIO PRINCIPAL</h4>
                                    </div>

                                    <!--Incia el card --->

                                    <div class="border border-secondary  p-2 rounded-2 col-12">
                                        <!-- ======= FORMULARIO DATOS ======= -->

                                        <div class="br-pagebody">
                                            <form action="">
                                                <div class="accordion" id="accordionPanelsStayOpenExample">
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                                                ¿Alquilas una cochera? ¡Registralo!
                                                            </button>
                                                        </h2>
                                                        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                                                            <div class="accordion-body">
                                                                <div id="" autocomplete="off">
                                                                    <input type="hidden" id="id" name="id">
                                                                    <h6 class="bg-primary p-2  col-sm-12 text-white rounded ">DATOS DE ALQUILER DE COCHERA
                                                                    </h6>
                                                                    <div class="form-group row">
                                                                        <label for="" class="col-sm-2 col-form-label"></label>
                                                                        <div class="col-sm-4">

                                                                        </div>
                                                                        <label for="" class="col-sm-2 col-form-label">Nro de Cochera</label>
                                                                        <div class="col-sm-4">
                                                                            <input type="text" class="form-control" id="" placeholder="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label for="" class="col-sm-2 col-form-label">Torre/Bloque/Seccion</label>
                                                                        <div class="col-sm-4">
                                                                            <input type="text" class="form-control" id="" placeholder="">
                                                                        </div>
                                                                        <label for="" class="col-sm-2 col-form-label">Nro Departamento</label>
                                                                        <div class="col-sm-4">
                                                                            <input type="text" class="form-control" id="" placeholder="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label for="" class="col-sm-2 col-form-label">Propietario</label>
                                                                        <div class="col-sm-10">
                                                                            <input type="text" class="form-control" id="" placeholder="">
                                                                        </div>
                                                                    </div>
                                                                    <br>
                                                                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                                                        <button type="submit" name="submit" class="btn btn-raised btn-primary">
                                                                            Agregar Otra Cochera
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                                                        ¡No olvides registrar tu vehículo!
                                                                    </button>
                                                                </h2>
                                                                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                                                                    <div class="accordion-body">
                                                                        <div id="" autocomplete="off">
                                                                            <input type="hidden" id="id" name="id">
                                                                            <h6 class="bg-primary p-2  col-sm-12 text-white rounded ">DATOS DE ALQUILER DE DEPOSITO
                                                                            </h6>

                                                                            <div class="br-section-wrapper">
                                                                                <div class="row">
                                                                                    <div class="col-xl-6">
                                                                                        <div class="form-group row">
                                                                                            <label for="" class="col-sm-4 col-form-label">Tipo de Auto: </label>
                                                                                            <div class="col-sm-8">
                                                                                                <div class="col-sm-12">
                                                                                                    <select class="form-control select2" name="" id="" data-placeholder="Seleccione" style="width: 100%" required>
                                                                                                        <option label="Seleccione"></option>
                                                                                                        <option value="#">.</option>
                                                                                                        <option value="#">.</option>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="form-group row">
                                                                                            <label for="" class="col-sm-4 col-form-label">Marca de Vehículo: </label>
                                                                                            <div class="col-sm-8">
                                                                                                <div class="col-sm-12">
                                                                                                    <select class="form-control select2" name="" id="" data-placeholder="Seleccione" style="width: 100%" required>
                                                                                                        <option label="Seleccione"></option>
                                                                                                        <option value="#">.</option>
                                                                                                        <option value="#">.</option>
                                                                                                    </select>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="form-group row">
                                                                                            <label for="" class="col-sm-4 col-form-label">Nro de Placa: </label>
                                                                                            <div class="col-sm-8">
                                                                                                <input type="text" class="form-control" id="" placeholder="">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="form-group row">
                                                                                            <label for="" class="col-sm-4 col-form-label">Color de Vehículo: </label>
                                                                                            <div class="col-sm-8">
                                                                                                <input type="text" class="form-control" id="" placeholder="">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-xl-3">
                                                                                        <div class="text-center">
                                                                                            <img src="../../assets/subir.png" class="rounded" alt="...">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="col-xl-3">
                                                                                        <div class="form-group row">
                                                                                            <label for="" class="col-sm-12 col-form-label">Sube una foto </label>
                                                                                            <div class="col-sm-12">
                                                                                                <input type="file">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <br>
                                                                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                                                                <button type="submit" name="submit" class="btn btn-raised btn-primary">
                                                                                    Agregar otra Vehículo
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                                                ¿Alquilas un Deposito? ¡Registralo!
                                                            </button>
                                                        </h2>
                                                        <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                                                            <div class="accordion-body">
                                                                <div id="" autocomplete="off">
                                                                    <input type="hidden" id="id" name="id">
                                                                    <h6 class="bg-primary p-2  col-sm-12 text-white rounded ">DATOS DE ALQUILER DE DEPOSITO
                                                                    </h6>

                                                                    <div class="form-group row">
                                                                        <label for="" class="col-sm-2 col-form-label"></label>
                                                                        <div class="col-sm-4">

                                                                        </div>
                                                                        <label for="" class="col-sm-2 col-form-label">Nro de Depósito</label>
                                                                        <div class="col-sm-4">
                                                                            <input type="text" class="form-control" id="" placeholder="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label for="" class="col-sm-2 col-form-label">Torre/Bloque/Seccion</label>
                                                                        <div class="col-sm-4">
                                                                            <input type="text" class="form-control" id="" placeholder="">
                                                                        </div>
                                                                        <label for="" class="col-sm-2 col-form-label">Nro Departamento</label>
                                                                        <div class="col-sm-4">
                                                                            <input type="text" class="form-control" id="" placeholder="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label for="" class="col-sm-2 col-form-label">Propietario</label>
                                                                        <div class="col-sm-10">
                                                                            <input type="text" class="form-control" id="" placeholder="">
                                                                        </div>
                                                                    </div>
                                                                    <br>
                                                                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                                                        <button type="submit" name="submit" class="btn btn-raised btn-primary">
                                                                            Agregar otro Depósito
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
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