<!DOCTYPE html>
<html lang="es" class="fixed">

<head>
    <title>Kondomatik - Mantenimiento Tipo Documento</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <?php require_once("../Main/mainhead.php"); ?>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>

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
                        <h2>Gestión de Mantenimientos</h2>
                    </header>

                    <div class="row">
                        <div class="col-12">
                            <div class="br-section-wrapper">
                                <div class="card-header">
                                    <div class="row justify-content-between">
                                        <div class="col-md-6">
                                            <h3 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Tipos de documentos</h3>
                                        </div>
                                        <div class="col-md-2">
                                            <button type="button" id="btnnuevotipo" class="btn btn-outline-primary" style="width: 100%">Nuevo Registro</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <div class="table-wrapper">
                                        <table id="documento_data" class="display min-w850" style="width: 100%">
                                            <thead>
                                                <tr>
                                                    <th class="wd-15p">Id</th>
                                                    <th class="wd-15p">Nombre</th>
                                                    <th class="wd-15p">Modificar</th>
                                                    <th class="wd-15p">Eliminar</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>

        <?php require_once("tipodocumantenimiento.php"); ?>
        <?php require_once("../Main/mainjs.php"); ?>
        <script src="mntipoDocumento.js"></script>

    </section>

</body>

</html>
