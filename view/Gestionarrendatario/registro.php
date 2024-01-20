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
                        <h2>Registro de Datos del Arrendatario</h2>
                    </header>
                    <div class="row">
                        <div class="card">
                            <div class="card-body">
                                <div class="row justify-content-between pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
                                    <!--Incia el card --->

                                    <div class="border border-secondary  p-2 rounded-2 col-12">
                                        <!-- ======= FORMULARIO DATOS ======= -->

                                        <div class="col-12 col-sm-6">
                                            <h4 class="tx-gray-800 mg-b-5 text-primary"><u>DATOS DEL DEPARTAMENTO A ARRENDAR</u></h4>
                                        </div>

                                        <div class="form-group row m-t-15">
                                            <label for="" class="col-sm-2 col-form-label">Nombre del Propietario:</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="" class="col-sm-2 col-form-label">Torre / Bloque / Sección:</label>
                                            <div class="col-sm-2">
                                                <select class="form-control select2" name="" id="" data-placeholder="Seleccione" style="width: 100%" required>
                                                    <option label="Seleccione"></option>
                                                    <option value="#">A</option>
                                                    <option value="#">B</option>
                                                    <option value="#">C</option>
                                                    <option value="#">D</option>
                                                </select>
                                            </div>

                                        </div>
                                        <div class="form-group row">
                                            <label for="" class="col-sm-2 col-form-label">Nro de Departamento:</label>
                                            <div class="col-sm-2">
                                                <select class="form-control select2" name="" id="" data-placeholder="Seleccione" style="width: 100%" required>
                                                    <option label="Seleccione"></option>
                                                    <option value="#">A204</option>
                                                    <option value="#"></option>
                                                </select>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="col-12 col-sm-6">
                                            <h4 class="tx-gray-800 mg-b-5 text-primary"><u>DATOS DEL ARRENDATARIO</u></h4>
                                        </div>

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
                                        <div class="form-group row m-t-15">
                                            <label for="" class="col-sm-2 col-form-label">Tipo Documento:</label>
                                            <div class="col-sm-4">
                                                <select class="form-control select2" name="" id="" data-placeholder="Seleccione" style="width: 100%" onclick="validarInputs()" required>
                                                    <option label="Seleccione"></option>
                                                    <option value="">DNI</option>
                                                    <option value="">Carnet de Extranjería</option>
                                                </select>
                                            </div>
                                            <label for="" class="col-sm-3 col-form-label">Nro de Documento:</label>
                                            <div class="col-sm-3">
                                                <input type="text" class="form-control" id="" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="" class="col-sm-2 col-form-label">Email: </label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="" class="col-sm-2 col-form-label">Teléfono Fijo:</label>
                                            <div class="col-sm-4">
                                                <input type="number" class="form-control" id="" placeholder="">
                                            </div>
                                            <label for="" class="col-sm-2 col-form-label">Celular:</label>
                                            <div class="col-sm-4">
                                                <input type="number" class="form-control" id="" placeholder="">
                                            </div>
                                        </div>
                                        <br>
                                        <br><br><br>
                                        <div class=" text-center">
                                            <button type="submit" name="submit" class="btn btn-raised btn-primary">
                                                CANCELAR
                                            </button>
                                            <button type="submit" name="submit" class="btn btn-raised btn-primary">
                                                GRABAR
                                            </button>
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