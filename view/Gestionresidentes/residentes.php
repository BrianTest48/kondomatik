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
                                        <ul class="nav nav-tabs mb-3" id="pills-tab" role="tablist" style="border-bottom : 0px">
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link active btn btn-outline-secondary btn-block mg-b-10 " id="orcinea-tab" data-bs-toggle="pill" data-bs-target="#propietario" type="button" role="tab" aria-controls="propietario" aria-selected="true">REGISTRO DE PROPIETARIOS</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link btn btn-outline-secondary btn-block mg-b-10 " id="host-tab" data-bs-toggle="pill" data-bs-target="#arrendatario" type="button" role="tab" aria-controls="arrendatario" aria-selected="false">REGISTRO DE ARRENDATARIOS</button>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tab-content">
                                        <!-- AQUI VA EL CONTENIDO -->
                                        <div id="propietario" class="tab-pane fadein show active">
                                            <div class="border border-secondary  p-2 rounded-2 col-12">
                                                <!-- ======= FORMULARIO DATOS ======= -->
                                                <div class="br-pagebody">
                                                    <div class="br-section-wrapper">
                                                        <br>
                                                        <div class=" text-end">
                                                            <button type="submit" name="submit" class="btn btn-raised btn-primary">
                                                                Agregar Propietario</button>
                                                        </div>
                                                        <br>
                                                        <div class="row">
                                                            <div class="col-md-12 mx-auto">
                                                                <div class="input-group">
                                                                    <input class="form-control border-end-0 border rounded-pill" type="search" value="search" id="example-search-input">
                                                                    <span class="input-group-append">
                                                                        <button class="btn btn-outline-secondary bg-white border-bottom-0 border rounded-pill ms-n5" type="button">
                                                                            <i class="fa fa-search"></i>
                                                                        </button>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <div class="form-group row m-t-12">
                                                            <label for="" class="col-sm-2 col-form-label">Buscar por:</label>
                                                            <div class="col-sm-2">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                                    <label class="form-check-label" for="flexRadioDefault1">
                                                                        Nro Dep.
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-2">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                                    <label class="form-check-label" for="flexRadioDefault1">
                                                                        Nombre
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-2">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                                    <label class="form-check-label" for="flexRadioDefault1">
                                                                        DNI
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                    <label for="" class="col-sm-2 col-form-label">Tipo de Prop</label>
                                                                    <div class="col-sm-2">
                                                                        <select class="form-control select2" name="" id="" data-placeholder="tipo" style="width: 100%" required>
                                                                            <option label="Seleccione"></option>
                                                                            <option value="#">_____________</option>
                                                                        </select>
                                                                    </div>
                                                                
                                                            </div>
                                                        </div>
                                                        <br>

                                                        <div class="row">
                                                            <div class="col-xl-6">
                                                                <div class="col-lg-12 col-form-label">
                                                                    <section class="card">
                                                                        <div class="card-body">
                                                                            <div class="table-wrapper">
                                                                                <table id="" class="display min-w850 text-center" style="width: 100%">
                                                                                    <thead>
                                                                                        <tr>
                                                                                            <th class="wd-15p">Nro de</th>
                                                                                            <th class="wd-15p">Programacion</th>
                                                                                            <th class="wd-15p">Tipo</th>
                                                                                            <th class="wd-15p">Solicitante</th>
                                                                                            <th class="wd-5p">Estado</th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>

                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                    </section>
                                                                </div>
                                                            </div>

                                                            <div class="col-xl-6">
                                                                <div class="form-group row">
                                                                    <div class="text-center">
                                                                        <img src="../../assets/subir.png" class="rounded" alt="...">
                                                                    </div>
                                                                </div>
                                                                <br>
                                                                <div class="form-group row">
                                                                    <label for="" class="col-sm-4 col-form-label">Observaciones: </label>
                                                                    <div class="col-sm-12">
                                                                        <textarea type="text" class="form-control" id="" placeholder=""></textarea>
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
                                        <div id="arrendatario" class="tab-pane fade">
                                            <div class="border border-secondary  p-2 rounded-2 col-12">
                                                <!-- ======= FORMULARIO DATOS ======= -->
                                                <div class="br-pagebody">
                                                    <div class="br-section-wrapper">
                                                        <br>
                                                        <div class="form-group row m-t-12">
                                                            <label for="" class="col-sm-6 col-form-label"></label>
                                                            <label for="" class="col-sm-3 col-form-label">Mes</label>
                                                            <div class="col-sm-3">
                                                                <select class="form-control select2" name="" id="" data-placeholder="Seleccione" style="width: 100%" required>
                                                                    <option label="Seleccione"></option>
                                                                    <option value="#">_____________</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <div class="form-group row">
                                                            <div class="text-center">
                                                                <img src="../../assets/cuadro.jpg" class="rounded" alt="...">
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                                            <button class="btn btn-primary me-md-2" type="button">Ver Programación de la Semana</button>
                                                            <button class="btn btn-primary" type="button">Ver Programación Mensual</button>
                                                        </div>
                                                        <br>
                                                        <div class="row">
                                                            <div class="col-md-12 mx-auto">
                                                                <div class="input-group">
                                                                    <input class="form-control border-end-0 border rounded-pill" type="search" value="search" id="example-search-input">
                                                                    <span class="input-group-append">
                                                                        <button class="btn btn-outline-secondary bg-white border-bottom-0 border rounded-pill ms-n5" type="button">
                                                                            <i class="fa fa-search"></i>
                                                                        </button>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <div class="form-group row m-t-12">
                                                            <label for="" class="col-sm-2 col-form-label">Estado:</label>
                                                            <div class="col-sm-2">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                                    <label class="form-check-label" for="flexRadioDefault1">
                                                                        Todos
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-2">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                                    <label class="form-check-label" for="flexRadioDefault1">
                                                                        En espera
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-2">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                                    <label class="form-check-label" for="flexRadioDefault1">
                                                                        Observados
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-2">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                                    <label class="form-check-label" for="flexRadioDefault1">
                                                                        Aprobados
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <br>

                                                        <div class="row">
                                                            <div class="col-xl-9">
                                                                <div class="col-lg-12 col-form-label">
                                                                    <section class="card">
                                                                        <div class="card-body">
                                                                            <div class="table-wrapper">
                                                                                <table id="" class="display min-w850 text-center" style="width: 100%">
                                                                                    <thead>
                                                                                        <tr>
                                                                                            <th class="wd-15p">Nro de</th>
                                                                                            <th class="wd-15p">Programacion</th>
                                                                                            <th class="wd-15p">Tipo</th>
                                                                                            <th class="wd-15p">Solicitante</th>
                                                                                            <th class="wd-5p">Estado</th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                    </section>
                                                                </div>
                                                            </div>

                                                            <div class="col-xl-3">
                                                                <div class="border border-secondary  p-2 rounded-2 col-12">
                                                                    <h3>Control</h3>
                                                                    <div class="form-group row">
                                                                        <label for="" class="col-sm-12 col-form-label">Inicio </label>
                                                                        <div class="col-sm-12">
                                                                            <input type="time" class="form-control" id="" placeholder="En Espera">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label for="" class="col-sm-12 col-form-label">Fin </label>
                                                                        <div class="col-sm-12">
                                                                            <input type="time" class="form-control" id="" placeholder="En Espera">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label for="" class="col-sm-12 col-form-label">Exceso </label>
                                                                        <div class="col-sm-12">
                                                                            <input type="time" class="form-control" id="" placeholder="En Espera">
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
                                                        CERRAR</button>
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