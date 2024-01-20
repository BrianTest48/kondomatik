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
                        <h2>Consulta de Datos del Arrendatario</h2>
                    </header>
                    <div class="row">
                        <div class="card">
                            <div class="card-body">
                                <div class="row justify-content-between pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
                                    <div class="col-md-12">
                                        <ul class="nav nav-tabs mb-3" id="pills-tab" role="tablist" style="border-bottom : 0px">
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link active btn btn-outline-secondary btn-block mg-b-10 " id="orcinea-tab" data-bs-toggle="pill" data-bs-target="#departamento" type="button" role="tab" aria-controls="departamento" aria-selected="true">Departamento</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link btn btn-outline-secondary btn-block mg-b-10 " id="host-tab" data-bs-toggle="pill" data-bs-target="#arrendatario" type="button" role="tab" aria-controls="arrendatario" aria-selected="false">Arrendatario</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link btn btn-outline-secondary btn-block mg-b-10 " id="refelx-tab" data-bs-toggle="pill" data-bs-target="#familiares" type="button" role="tab" aria-controls="familiares" aria-selected="false">Familiares</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link btn btn-outline-secondary btn-block mg-b-10 " id="refelx-tab" data-bs-toggle="pill" data-bs-target="#cochera" type="button" role="tab" aria-controls="cochera" aria-selected="false">Cochera/Deposito</button>
                                            </li>
                                            <li class="nav-item" role="presentation">
                                                <button class="nav-link btn btn-outline-secondary btn-block mg-b-10 " id="refelx-tab" data-bs-toggle="pill" data-bs-target="#cierree" type="button" role="tab" aria-controls="cierree" aria-selected="false">Cierre</button>
                                            </li>
                                        </ul>
                                        <div class="tab-content">
                                            <!-- AQUI VA EL CONTENIDO -->
                                            <div id="departamento" class="tab-pane fadein show active">

                                                <!--Incia el card --->

                                                <div class="border border-secondary  p-2 rounded-2 col-12">
                                                    <!-- ======= FORMULARIO DATOS ======= -->

                                                    <div class="col-12 col-sm-6">
                                                        <h4 class="tx-gray-800 mg-b-5 text-primary"><u>DATOS DEL DEPARTAMENTO</u></h4>
                                                    </div>

                                                    <div class="form-group row m-t-15">
                                                        <label for="" class="col-sm-2 col-form-label">Buscar por:</label>
                                                        <div class="col-sm-3">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                                <label class="form-check-label" for="flexRadioDefault1">
                                                                    Nro de Departamento
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                                <label class="form-check-label" for="flexRadioDefault1">
                                                                    Nombre del Propietario
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                                <label class="form-check-label" for="flexRadioDefault1">
                                                                    DNI del Propietario
                                                                </label>
                                                            </div>
                                                        </div>
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

                                                    <div class="br-pagebody">
                                                        <div class="br-section-wrapper">

                                                            <div class="row">
                                                                <div class="col-xl-6">
                                                                    <div class="text-center">
                                                                        <img src="../../assets/subir.png" class="rounded" alt="...">
                                                                    </div>
                                                                </div>
                                                                <div class="col-xl-6 ">
                                                                    <div class="form-group row">
                                                                        <label for="" class="col-sm-4 col-form-label">Torre/Bloque/Sección: </label>
                                                                        <div class="col-sm-8">
                                                                            <input type="text" class="form-control" id="" placeholder="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label for="" class="col-sm-4 col-form-label">Nro de Departamento: </label>
                                                                        <div class="col-sm-8">
                                                                            <input type="number" class="form-control" id="" placeholder="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label for="" class="col-sm-4 col-form-label">Nombre de Propietario: </label>
                                                                        <div class="col-sm-8">
                                                                            <input type="text" class="form-control" id="" placeholder="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label for="" class="col-sm-4 col-form-label">Tipo de Documento</label>
                                                                        <div class="col-sm-8">
                                                                            <select class="form-control select2" name="" id="" data-placeholder="Seleccione" style="width: 100%" required>
                                                                                <option label="Seleccione"></option>
                                                                                <option value="#">DNI</option>
                                                                                <option value="#">Carnet de Extranjería</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label for="" class="col-sm-4 col-form-label">Nro Documento: </label>
                                                                        <div class="col-sm-8">
                                                                            <input type="number" class="form-control" id="" placeholder="">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- row -->
                                                    </div>

                                                    <br>
                                                    <div class=" text-center">
                                                        <button type="submit" name="submit" class="btn btn-raised btn-primary"><i class="fas fa-ban"></i>
                                                            CANCELAR
                                                        </button>
                                                        <button type="submit" name="submit" class="btn btn-raised btn-primary">
                                                            SIGUIENTE
                                                            <i class="fas fa-long-arrow-alt-right"></i></button>
                                                    </div>

                                                </div>

                                            </div>
                                            <div id="arrendatario" class="tab-pane fade">

                                                <!--Incia el card --->

                                                <div class="border border-secondary  p-2 rounded-2 col-12">
                                                    <!-- ======= FORMULARIO DATOS ======= -->

                                                    <div class="col-12 col-sm-6">
                                                        <h4 class="tx-gray-800 mg-b-5 text-primary"><u>DATOS DEL ARRENDATARIO PRINCIPAL</u></h4>
                                                    </div>

                                                    <div class="br-pagebody">
                                                        <div class="br-section-wrapper">
                                                            <div class="row">
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
                                                                        <label for="" class="col-sm-4 col-form-label">Tipo de Documento</label>
                                                                        <div class="col-sm-8">
                                                                            <select class="form-control select2" name="" id="" data-placeholder="Seleccione" style="width: 100%" required>
                                                                                <option label="Seleccione"></option>
                                                                                <option value="#">DNI</option>
                                                                                <option value="#">Carnet de Extranjería</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label for="" class="col-sm-4 col-form-label">Nro Documento: </label>
                                                                        <div class="col-sm-8">
                                                                            <input type="number" class="form-control" id="" placeholder="">
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
                                                    </div>
                                                    <br>

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

                                                    <div class="form-group row">
                                                        <label for="" class="col-sm-2 col-form-label">Nombres:</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" id="" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="" class="col-sm-2 col-form-label">Apellido Paterno:</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" id="" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="" class="col-sm-2 col-form-label">Apellido Materno:</label>
                                                        <div class="col-sm-10">
                                                            <input type="text" class="form-control" id="" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="" class="col-sm-2 col-form-label">Email:</label>
                                                        <div class="col-sm-10">
                                                            <input type="email" class="form-control" id="" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="" class="col-sm-2 col-form-label">Fecha de Naciemiento:</label>
                                                        <div class="col-sm-4">
                                                            <input type="date" class="form-control" id="" placeholder="">
                                                        </div>
                                                        <label for="" class="col-sm-2 col-form-label">Nro de Familiares:</label>
                                                        <div class="col-sm-4">
                                                            <input type="number" class="form-control" id="" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="" class="col-sm-2 col-form-label">Teléfono Fijo:</label>
                                                        <div class="col-sm-4">
                                                            <input type="number" class="form-control" id="" placeholder="">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="" class="col-sm-2 col-form-label">Celular:</label>
                                                        <div class="col-sm-4">
                                                            <input type="number" class="form-control" id="" placeholder="">
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <div class=" text-center">
                                                        <button type="submit" name="submit" class="btn btn-raised btn-primary">
                                                            SIGUIENTE
                                                            <i class="fas fa-long-arrow-alt-right"></i></button>
                                                    </div>

                                                </div>


                                            </div>
                                            <div id="familiares" class="tab-pane fade">

                                                <!--Incia el card --->

                                                <div class="border border-secondary  p-2 rounded-2 col-12">
                                                    <!-- ======= FORMULARIO DATOS ======= -->

                                                    <div class="col-12 col-sm-6">
                                                        <h4 class="tx-gray-800 mg-b-5 text-primary"><u>DATOS DEL ARRENDATARIO PRINCIPAL</u></h4>
                                                    </div>

                                                    <div class="br-pagebody">
                                                        <div class="br-section-wrapper">
                                                            <div class="row">
                                                                <div class="col-xl-6">
                                                                    <div class="form-group row">
                                                                        <label for="" class="col-sm-4 col-form-label">Fecha de Registro: </label>
                                                                        <div class="col-sm-8">
                                                                            <input type="date" class="form-control" id="" placeholder="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label for="" class="col-sm-4 col-form-label">Parentesco: </label>
                                                                        <div class="col-sm-8">
                                                                            <input type="text" class="form-control" id="" placeholder="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label for="" class="col-sm-4 col-form-label">Tipo de Documento</label>
                                                                        <div class="col-sm-8">
                                                                            <select class="form-control select2" name="" id="" data-placeholder="Seleccione" style="width: 100%" required>
                                                                                <option label="Seleccione"></option>
                                                                                <option value="#">DNI</option>
                                                                                <option value="#">Carnet de Extranjería</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label for="" class="col-sm-4 col-form-label">Nro Documento: </label>
                                                                        <div class="col-sm-8">
                                                                            <input type="number" class="form-control" id="" placeholder="">
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
                                                            <br>
                                                            <div class="row">
                                                                <div class="form-group row">
                                                                    <label for="" class="col-sm-2 col-form-label">Nombres:</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" class="form-control" id="" placeholder="">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label for="" class="col-sm-2 col-form-label">Apellido Paterno:</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" class="form-control" id="" placeholder="">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label for="" class="col-sm-2 col-form-label">Apellido Materno:</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" class="form-control" id="" placeholder="">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label for="" class="col-sm-2 col-form-label">Email:</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="email" class="form-control" id="" placeholder="">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label for="" class="col-sm-2 col-form-label">Fecha de Naciemiento:</label>
                                                                    <div class="col-sm-4">
                                                                        <input type="date" class="form-control" id="" placeholder="">
                                                                    </div>
                                                                    <label for="" class="col-sm-2 col-form-label">Nro de Familiares:</label>
                                                                    <div class="col-sm-4">
                                                                        <input type="number" class="form-control" id="" placeholder="">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label for="" class="col-sm-2 col-form-label">Teléfono Fijo:</label>
                                                                    <div class="col-sm-4">
                                                                        <input type="number" class="form-control" id="" placeholder="">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label for="" class="col-sm-2 col-form-label">Celular:</label>
                                                                    <div class="col-sm-4">
                                                                        <input type="number" class="form-control" id="" placeholder="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><!-- row -->
                                                    </div>
                                                    <br>
                                                    <div class=" text-center">
                                                        <button type="submit" name="submit" class="btn btn-raised btn-primary"><i class='bx bxs-save'></i>
                                                            Agregar Otro Familiar
                                                        </button>
                                                    </div>
                                                    <br>
                                                    <h6 class="bg-primary p-2  col-sm-12 text-white rounded"> LISTA DE FAMILIARES
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
                                                        <button type="submit" name="submit" class="btn btn-raised btn-primary">
                                                            ATRAS
                                                        </button>
                                                        <button type="submit" name="submit" class="btn btn-raised btn-primary">
                                                            SIGUIENTE
                                                        </button>
                                                    </div>

                                                </div>


                                            </div>
                                            <div id="cochera" class="tab-pane fade">

                                                <!--Incia el card --->

                                                <div class="border border-secondary  p-2 rounded-2 col-12">
                                                    <!-- ======= FORMULARIO DATOS ======= -->

                                                    <div class="col-12 col-sm-6">
                                                        <h4 class="tx-gray-800 mg-b-5 text-primary"><u>DATOS DEL ARRENDATARIO PRINCIPAL</u></h4>
                                                    </div>

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
                                                    <br>
                                                    <h6 class="bg-primary p-2  col-sm-12 text-white rounded"> LISTA DE POSESIONES
                                                    </h6>
                                                    <br>
                                                    <div class="form-group row">
                                                        <div class="col-lg-6 col-form-label ">
                                                            <h4 class="tx-gray-800 mg-b-5 text-primary text-center"><u>Lista de Cocheras</u></h4>
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
                                                            <h4 class="tx-gray-800 mg-b-5 text-primary text-center"><u>Lista de Depósito (s)</u></h4>
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
                                                        <h4 class="tx-gray-800 mg-b-5 text-primary text-center"><u>Lista de Vehículos</u></h4>
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
                                                    <br>
                                                    <div class=" text-center">
                                                        <button type="submit" name="submit" class="btn btn-raised btn-primary"></i>
                                                            ATRAS
                                                        </button>
                                                        <button type="submit" name="submit" class="btn btn-raised btn-primary">
                                                            SIGUIENTE
                                                        </button>
                                                    </div>
                                                </div>


                                            </div>
                                            <div id="cierree" class="tab-pane fade">

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
                                                                Contrato de Arriendo
                                                            </label>
                                                        </div>
                                                        <div class="col-sm-8">
                                                            <input type="file" class="">
                                                        </div>
                                                    </div>
                                                    <br>
                                                    <br>
                                                    <div class=" text-center">
                                                        <button type="submit" name="submit" class="btn btn-raised btn-primary">
                                                            FINALIZAR REGISTRO
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