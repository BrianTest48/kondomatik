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
                                                <a class="nav-link active" aria-current="page" href="../Gestionarrendatario/cierre.php">Cierre</a>
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