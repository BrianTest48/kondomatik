<!DOCTYPE html>
<html class="fixed">

<head>
    <title>Kondomatik - Propietario</title>
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
                        <h2>Registro de Datos del Propietario</h2>
                    </header>
                    <div class="row">
                        <div class="card">
                            <div class="card-body">
                                <div class="row justify-content-between pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
                                    <div class="col-md-12">
                                        <ul class="nav nav-tabs mb-3" id="pills-tab" role="tablist" style="border-bottom : 0px">
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link active btn btn-outline-secondary btn-block mg-b-10 " id="orcinea-tab" data-bs-toggle="pill" data-bs-target="#propietario" type="button" role="tab" aria-controls="propietario" aria-selected="true">Propietario</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link btn btn-outline-secondary btn-block mg-b-10 " id="host-tab" data-bs-toggle="pill" data-bs-target="#familiares" type="button" role="tab" aria-controls="familiares" aria-selected="false">Familiares</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link btn btn-outline-secondary btn-block mg-b-10 " id="refelx-tab" data-bs-toggle="pill" data-bs-target="#posesiones" type="button" role="tab" aria-controls="posesiones" aria-selected="false">Posesiones</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link btn btn-outline-secondary btn-block mg-b-10 " id="refelx-tab" data-bs-toggle="pill" data-bs-target="#cierre" type="button" role="tab" aria-controls="cierre" aria-selected="false">Cierre</button>
                                            </li>
                                        </ul>
                                        <div class="tab-content">
                                            <!-- AQUI VA EL CONTENIDO -->
                                            <div id="propietario" class="tab-pane fadein show active">

                                                <!--Incia el card --->

                                                <div class="border border-secondary  p-2 rounded-2 col-12">
                                                    <!-- ======= FORMULARIO DATOS ======= -->

                                                    <div class="col-12 col-sm-6">
                                                        <h4 class="tx-gray-800 mg-b-5 text-primary"><u>DATOS DEL PROPIETARIO</u></h4>
                                                    </div>

                                                    <div class="form-group row m-t-15">
                                                        <label for="" class="col-sm-2 col-form-label">Fecha de Registro</label>
                                                        <div class="col-sm-2">
                                                            <input type="date" class="form-control" id="" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="" class="col-sm-2 col-form-label">ID Propietario</label>
                                                        <div class="col-sm-2">
                                                            <input type="text" class="form-control" id="" placeholder="">
                                                        </div>

                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="" class="col-sm-2 col-form-label">Tipo de Documento</label>
                                                        <div class="col-sm-2">
                                                            <select class="form-control select2" name="" id="" data-placeholder="Seleccione" style="width: 100%" required>
                                                                <option label="Seleccione"></option>
                                                                <option value="#">DNI</option>
                                                                <option value="#">Carnet de Extranjería</option>
                                                            </select>
                                                        </div>

                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="" class="col-sm-2 col-form-label">N° de Documento</label>
                                                        <div class="col-sm-2">
                                                            <input type="text" class="form-control" id="" placeholder="">
                                                        </div>

                                                    </div>
                                                    <form action="">
                                                        <div class="accordion" id="accordionExample">
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header" id="headingOne">
                                                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                                        ¿Elegiste RUC? ¡Registra los datos de la empresa!
                                                                    </button>
                                                                </h2>
                                                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body">
                                                                        <div id="orcinea" class="">
                                                                            <div class="card pd-t-20">
                                                                                <!--Incia el card --->
                                                                                <div class="card-body">
                                                                                    <div class="border border-secondary  p-2 rounded-2">
                                                                                        <!-- ======= FORMULARIO DATOS DEL PACIENTE ======= -->
                                                                                        <div id="pacientes" autocomplete="off">
                                                                                            <input type="hidden" id="id" name="id">
                                                                                            <h6 class="bg-primary p-2  col-sm-12 text-white rounded ">DATOS DE LA EMPRESA
                                                                                            </h6>

                                                                                            <div class="form-group row">
                                                                                                <label for="" class="col-sm-2 col-form-label">Razón Social</label>
                                                                                                <div class="col-sm-10">
                                                                                                    <input type="text" class="form-control" id="" placeholder="">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="form-group row">
                                                                                                <label for="" class="col-sm-2 col-form-label">Cargo del Propietario</label>
                                                                                                <div class="col-sm-10">
                                                                                                    <input type="text" class="form-control" id="" placeholder="">
                                                                                                </div>
                                                                                            </div>

                                                                                        </div>
                                                                                        <br>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>

                                                    <br>
                                                    <div class="form-group row">
                                                        <label for="" class="col-sm-2 col-form-label">Nombres: </label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" id="" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="" class="col-sm-2 col-form-label">Apellido Paterno: </label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" id="" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="" class="col-sm-2 col-form-label">Apellido Materno: </label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" id="" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="" class="col-sm-2 col-form-label">Email: </label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" id="" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row m-t-15">
                                                        <label for="" class="col-sm-2 col-form-label">Tipo Propietario</label>
                                                        <div class="col-sm-4">
                                                            <select class="form-control select2" name="" id="" data-placeholder="Seleccione" style="width: 100%" onclick="validarInputs()" required>
                                                                <option label="Seleccione"></option>
                                                                <option value="">Principal</option>
                                                                <option value="">___________</option>
                                                            </select>
                                                        </div>
                                                        <label for="" class="col-sm-3 col-form-label">Nro de Familiares</label>
                                                        <div class="col-sm-3">
                                                            <input type="text" class="form-control" id="" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row m-t-15">
                                                        <label for="" class="col-sm-2 col-form-label">Fecha de Nacimiento</label>
                                                        <div class="col-sm-2">
                                                            <input type="date" class="form-control" id="" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="" class="col-sm-2 col-form-label">Teléfono Fijo:</label>
                                                        <div class="col-sm-2">
                                                            <input type="number" class="form-control" id="" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="" class="col-sm-2 col-form-label">Celualr:</label>
                                                        <div class="col-sm-2">
                                                            <input type="number" class="form-control" id="" placeholder="">
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class=" text-center">
                                                        <button type="submit" name="submit" class="btn btn-raised btn-primary"><i class='bx bxs-save'></i>
                                                            Agregar Otro Propietario
                                                        </button>
                                                    </div>
                                                    <br>
                                                    <h6 class="bg-primary p-2  col-sm-12 text-white rounded"> LISTA DE PROPIETARIOS
                                                    </h6>
                                                    <div class="col-lg-12 col-form-label">
                                                        <section class="card">
                                                            <div class="card-body">
                                                                <div class="table-wrapper">
                                                                    <table id="" class="display min-w850" style="width: 100%">
                                                                        <thead>
                                                                            <tr>
                                                                                <th class="wd-15p">N°</th>
                                                                                <th class="wd-15p">Tipo Propietario</th>
                                                                                <th class="wd-15p">DNI</th>
                                                                                <th class="wd-15p">Nombres y Apellidos</th>
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
                                                    <br><br><br>
                                                    <div class=" text-center">
                                                        <button type="submit" name="submit" class="btn btn-raised btn-primary"><i class='bx bxs-save'></i>
                                                            SIGUIENTE
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="familiares" class="tab-pane fade">

                                                <!--Incia el card --->

                                                <div class="border border-secondary  p-2 rounded-2 col-12">
                                                    <!-- ======= FORMULARIO DATOS ======= -->

                                                    <div class="col-12 col-sm-6">
                                                        <h4 class="tx-gray-800 mg-b-5 text-primary"><u>DATOS DEL FAMILIAR</u></h4>
                                                    </div>

                                                    <div class="form-group row m-t-15">
                                                        <label for="" class="col-sm-2 col-form-label">Fecha de Registro</label>
                                                        <div class="col-sm-2">
                                                            <input type="date" class="form-control" id="" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="" class="col-sm-2 col-form-label">ID Propietario</label>
                                                        <div class="col-sm-2">
                                                            <input type="text" class="form-control" id="" placeholder="">
                                                        </div>

                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="" class="col-sm-2 col-form-label">Tipo de Documento</label>
                                                        <div class="col-sm-2">
                                                            <select class="form-control select2" name="" id="" data-placeholder="Seleccione" style="width: 100%" required>
                                                                <option label="Seleccione"></option>
                                                                <option value="#">DNI</option>
                                                                <option value="#">Carnet de Extranjería</option>
                                                            </select>
                                                        </div>

                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="" class="col-sm-2 col-form-label">N° de Documento</label>
                                                        <div class="col-sm-2">
                                                            <input type="text" class="form-control" id="" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="" class="col-sm-2 col-form-label">Nombres: </label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" id="" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="" class="col-sm-2 col-form-label">Apellido Paterno: </label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" id="" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="" class="col-sm-2 col-form-label">Apellido Materno: </label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" id="" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="" class="col-sm-2 col-form-label">Email: </label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" id="" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row m-t-15">
                                                        <label for="" class="col-sm-2 col-form-label">Tipo Propietario</label>
                                                        <div class="col-sm-4">
                                                            <select class="form-control select2" name="" id="" data-placeholder="Seleccione" style="width: 100%" onclick="validarInputs()" required>
                                                                <option label="Seleccione"></option>
                                                                <option value="">Principal</option>
                                                                <option value="">___________</option>
                                                            </select>
                                                        </div>
                                                        <label for="" class="col-sm-3 col-form-label">Nro de Familiares</label>
                                                        <div class="col-sm-3">
                                                            <input type="text" class="form-control" id="" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row m-t-15">
                                                        <label for="" class="col-sm-2 col-form-label">Fecha de Nacimiento</label>
                                                        <div class="col-sm-2">
                                                            <input type="date" class="form-control" id="" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="" class="col-sm-2 col-form-label">Teléfono Fijo:</label>
                                                        <div class="col-sm-2">
                                                            <input type="number" class="form-control" id="" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="" class="col-sm-2 col-form-label">Celualr:</label>
                                                        <div class="col-sm-2">
                                                            <input type="number" class="form-control" id="" placeholder="">
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class=" text-center">
                                                        <button type="submit" name="submit" class="btn btn-raised btn-primary"><i class='bx bxs-save'></i>
                                                            Agregar Otro Familiar
                                                        </button>
                                                    </div>
                                                    <br>
                                                    <h6 class="bg-primary p-2  col-sm-12 text-white rounded"> LISTA DE FAMILIAR
                                                    </h6>
                                                    <div class="col-lg-12 col-form-label ">
                                                        <section class="card">
                                                            <div class="card-body">
                                                                <div class="table-wrapper">
                                                                    <table id="" class="display min-w850" style="width: 100%">
                                                                        <thead>
                                                                            <tr>
                                                                                <th class="wd-15p">N°</th>
                                                                                <th class="wd-15p">Parentesco</th>
                                                                                <th class="wd-15p">DNI</th>
                                                                                <th class="wd-15p">Nombres y Apellidos</th>
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
                                                    <br><br><br>
                                                    <div class=" text-center">
                                                        <button type="submit" name="submit" class="btn btn-raised btn-primary"><i class='bx bxs-save'></i>
                                                            ATRAS
                                                        </button>
                                                        <button type="submit" name="submit" class="btn btn-raised btn-primary"><i class='bx bxs-save'></i>
                                                            SIGUIENTE
                                                        </button>
                                                    </div>

                                                </div>
                                            </div>
                                            <div id="posesiones" class="tab-pane fade">

                                                <!--Incia el card --->

                                                <div class="border border-secondary  p-2 rounded-2 col-12">
                                                    <!-- ======= FORMULARIO DATOS ======= -->

                                                    <div class="col-12 col-sm-6">
                                                        <h4 class="tx-gray-800 mg-b-5 text-primary"><u>DATOS DE COCHERA Y DEPÓSITO</u></h4>
                                                    </div>

                                                    <div class="form-group row m-t-12">
                                                        <label for="" class="col-sm-2 col-form-label">N° de Cochera</label>
                                                        <div class="col-sm-4">
                                                            <input type="text" class="form-control" id="" placeholder="">
                                                        </div>
                                                        <label for="" class="col-sm-3 col-form-label">Nro de Depósito</label>
                                                        <div class="col-sm-3">
                                                            <input type="text" class="form-control" id="" placeholder="">
                                                        </div>
                                                    </div>

                                                    <br>
                                                    <div class=" text-center">
                                                        <button type="submit" name="submit" class="btn btn-raised btn-primary"><i class='bx bxs-save'></i>
                                                            Agrega otra Cochera/Depósito
                                                        </button>
                                                    </div>
                                                    <br>


                                                    <form action="">
                                                        <div class="accordion" id="accordionExample">
                                                            <div class="accordion-item">
                                                                <h2 class="accordion-header" id="headingOne">
                                                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                                        ¿Tiene algún vehículo? ¡Registralo!
                                                                    </button>
                                                                </h2>
                                                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                                    <div class="accordion-body">
                                                                        <div id="orcinea" class="">
                                                                            <div class="card pd-t-20">
                                                                                <!--Incia el card --->
                                                                                <div class="card-body">
                                                                                    <div class="col-12 col-sm-6">
                                                                                        <h4 class="tx-gray-800 mg-b-5 text-primary"><u>DATOS DEL VEHÍCULO</u></h4>
                                                                                    </div>
                                                                                    <!-- ======= FORMULARIO DATOS ======= -->

                                                                                    <div class="form-group row">
                                                                                        <label for="" class="col-sm-2 col-form-label">Tipo de Auto:</label>
                                                                                        <div class="col-sm-2">
                                                                                            <select class="form-control select2" name="" id="" data-placeholder="Seleccione" style="width: 100%" required>
                                                                                                <option label="Seleccione"></option>
                                                                                                <option value="#">Tipo 1</option>
                                                                                                <option value="#">Tipo 2</option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group row">
                                                                                        <label for="" class="col-sm-2 col-form-label">Marca de Vehículo:</label>
                                                                                        <div class="col-sm-2">
                                                                                            <select class="form-control select2" name="" id="" data-placeholder="Seleccione" style="width: 100%" required>
                                                                                                <option label="Seleccione"></option>
                                                                                                <option value="#">Marca 1</option>
                                                                                                <option value="#">Marca 2</option>
                                                                                            </select>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group row">
                                                                                        <label for="" class="col-sm-2 col-form-label">N° de Placa:</label>
                                                                                        <div class="col-sm-2">
                                                                                            <input type="text" class="form-control" id="" placeholder="">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group row m-t-15">
                                                                                        <label for="" class="col-sm-2 col-form-label">Color de Vehículo</label>
                                                                                        <div class="col-sm-2">
                                                                                            <input type="text" class="form-control" id="" placeholder="">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class=" text-center">
                                                                                    <button type="submit" name="submit" class="btn btn-raised btn-primary"><i class='bx bxs-save'></i>
                                                                                        Agregar otro vehículo
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>

                                                    <br>

                                                    <br>
                                                    <h6 class="bg-primary p-2  col-sm-12 text-white rounded"> LISTA DE POSESIONES
                                                    </h6>

                                                    <div class="form-group row">

                                                        <div class="col-lg-6 col-form-label ">
                                                            <h4>Lista de Cocheras</h4>
                                                            <section class="card">
                                                                <div class="card-body">
                                                                    <div class="table-wrapper">
                                                                        <table id="" class="display min-w850" style="width: 100%">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th class="wd-15p">N°</th>
                                                                                    <th class="wd-15p">Nro de Cochera</th>
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

                                                        <div class="col-lg-6 col-form-label ">
                                                            <h4>Lista de Depósito (s)</h4>
                                                            <section class="card">
                                                                <div class="card-body">
                                                                    <div class="table-wrapper">
                                                                        <table id="" class="display min-w850" style="width: 100%">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th class="wd-15p">N°</th>
                                                                                    <th class="wd-15p">N° de Depósito</th>
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
                                                    </div>
                                                    <br><br>
                                                    <div class="col-lg-12 col-form-label ">
                                                        <h4>Lista de Vehículos</h4>
                                                        <section class="card">
                                                            <div class="card-body">
                                                                <div class="table-wrapper">
                                                                    <table id="" class="display min-w850" style="width: 100%">
                                                                        <thead>
                                                                            <tr>
                                                                                <th class="wd-15p">N°</th>
                                                                                <th class="wd-15p">Tipo</th>
                                                                                <th class="wd-15p">Marca</th>
                                                                                <th class="wd-15p">Nro de Placa</th>
                                                                                <th class="wd-15p">Color</th>
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

                                                    <br><br><br>
                                                    <div class=" text-center">
                                                        <button type="submit" name="submit" class="btn btn-raised btn-primary"><i class='bx bxs-save'></i>
                                                            ATRAS
                                                        </button>
                                                        <button type="submit" name="submit" class="btn btn-raised btn-primary"><i class='bx bxs-save'></i>
                                                            SIGUIENTE
                                                        </button>
                                                    </div>

                                                </div>
                                            </div>
                                            <div id="cierre" class="tab-pane fade">

                                                <!--Incia el card --->

                                                <div class="border border-secondary  p-2 rounded-2 col-12">
                                                    <!-- ======= FORMULARIO DATOS ======= -->

                                                    <div class="col-12 col-sm-6">
                                                        <h4 class="tx-gray-800 mg-b-5 text-primary"><u>DOCUMENTACION DEL PROPIETARIO</u></h4>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
                                                            <label class="form-check-label" for="flexCheckIndeterminate">
                                                                Título de Propiedad
                                                            </label>
                                                        </div>
                                                        <div class="col-sm-8">
                                                            <input type="file" class="">
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <br>

                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
                                                            <label class="form-check-label" for="flexCheckIndeterminate">
                                                                Escritura Pública
                                                            </label>
                                                        </div>
                                                        <div class="col-sm-8">
                                                            <input type="file" class="">
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <br>

                                                    <div class="row">
                                                        <div class="col-sm-4">
                                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate">
                                                            <label class="form-check-label" for="flexCheckIndeterminate">
                                                                Minuta de Compra y Venta:
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <br><br><br>
                                                    <div class=" text-center">
                                                        <button type="submit" name="submit" class="btn btn-raised btn-primary">
                                                            FINALIZAR REGISTRO
                                                        </button>
                                                    </div>

                                                </div>



                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </section>
            </div>
        </div>
    </section>
    <?php require_once("../Main/mainjs.php"); ?>
</body>

</html>