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
                                                                <div class="col-sm-12">
                                                                    <select class="form-control select2" name="" id="" data-placeholder="Selecciona tipo de prop" style="width: 100%" required>
                                                                        <option label="Selecciona tipo de prop"></option>
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
                                                                                <table id="" class="table table-bordered table-striped mb-0" style="width: 100%">
                                                                                    <thead>
                                                                                        <tr>
                                                                                            <th class="wd-15p">Nro Dpto</th>
                                                                                            <th class="wd-15p">Nombre</th>
                                                                                            <th class="wd-15p">DNI</th>
                                                                                            <th class="wd-15p">Celular</th>
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
                                                                        <img src="../../assets/equis.png" class="rounded" alt="...">
                                                                    </div>
                                                                </div>
                                                                <div class="text-center">
                                                                    <p>Carlos Zapata (Prop)</p>
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
                                        <div id="arrendatario" class="tab-pane fade">
                                            <div class="border border-secondary  p-2 rounded-2 col-12">
                                                <!-- ======= FORMULARIO DATOS ======= -->
                                                <div class="br-pagebody">
                                                    <div class="br-section-wrapper">
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
                                                                        Nro Dpto
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
                                                        </div>
                                                        <br>
                                                        <div class="row">
                                                            <div class="col-xl-6">
                                                                <div class="col-lg-12 col-form-label">
                                                                    <section class="card">
                                                                        <div class="card-body">
                                                                            <div class="table-wrapper">
                                                                                <table id="" class="table table-bordered table-striped mb-0" style="width: 100%">
                                                                                    <thead>
                                                                                        <tr>
                                                                                            <th class="wd-15p">Nro de</th>
                                                                                            <th class="wd-15p">Nombre</th>
                                                                                            <th class="wd-15p">DNI</th>
                                                                                            <th class="wd-15p">Celular</th>
                                                                                            <th class="wd-15p">Ver Familia</th>
                                                                                            <th class="wd-15p">Ver visitante</th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                    </section>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-6">
                                                                <div class="form-group row">
                                                                    <div class="text-center">
                                                                        <img src="../../assets/equis.png" class="rounded" alt="...">
                                                                    </div>
                                                                </div>
                                                                <div class="text-center">
                                                                    <p>Carlos Zapata (Prop)</p>
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