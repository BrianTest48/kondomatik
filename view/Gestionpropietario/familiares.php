<!DOCTYPE html>
<html class="fixed">

<head>
    <title>Kondomatik - Familiares</title>
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
                        <h2>Registro de Datos de Familiares</h2>
                    </header>
                    <div class="row">
                        <div class="card">
                            <div class="card-body">
                                <div class="row justify-content-between pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
                                    <div class="col-md-12">
                                        <ul class="nav justify-content-center">
                                            <li class="nav-item">
                                                <a class="nav-link active" aria-current="page" href="../Gestionpropietario/propietario.php">Propietario</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link active" aria-current="page" href="../Gestionpropietario/familiares.php">Familiares</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link active" aria-current="page" href="../Gestionpropietario/posesiones.php">Posesiones</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link active" aria-current="page" href="../Gestionpropietario/cierre.php">Cierre</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <h4 class="tx-gray-800 mg-b-5">DATOS DEL FAMILIAR</h4>
                                    </div>

                                    <!--Incia el card --->

                                    <div class="border border-secondary  p-2 rounded-2 col-12">
                                        <!-- ======= FORMULARIO DATOS DEL PACIENTE ======= -->

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