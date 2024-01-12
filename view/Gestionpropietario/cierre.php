<!DOCTYPE html>
<html class="fixed">

<head>
    <title>Kondomatik - Cierre</title>
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
                                        <h4 class="tx-gray-800 mg-b-5">DOCUMENTACION DEL PROPIETARIO</h4>
                                    </div>

                                    <!--Incia el card --->

                                    <div class="border border-secondary  p-2 rounded-2 col-12">
                                        <!-- ======= FORMULARIO DATOS ======= -->

                                        <!-- <h6 class="bg-primary p-2  col-sm-12 text-white rounded"> DOCUMENTOS SUSTENTOS
                                        </h6> -->

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

                                </div><!-- br-pagebody -->
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