<!DOCTYPE html>
<html class="fixed">

<head>
    <title>Kondomatik - Registro Documentos</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <?php require_once("../Main/mainhead.php"); ?>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <!-- <script src="registrardocumento.js"></script> -->
    <style>
        h3.center {
            margin: 0 auto;
            text-align: center;
        }
    </style>
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
                        <h2>Gestión Documentaria</h2>
                    </header>
                    <div class="row">
                        <div class="col-md-12">
                            <h2 style="text-decoration: underline;">Nuevo Mantenimiento</h2>
                            <form method="post" id="document_form" enctype="multipart/form-data">
                                <input type="hidden" name="id_doc_gestion" id="id_doc_gestion">

                                <div class="row mb-3 justify-content-end">
                                    <div class="col-lg-2">
                                        <label class="control-label pt-1" for="IdGestionDocumento">ID Mantenimiento:</label>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="IdGestionDocumento" name="IdGestionDocumento" readonly>
                                        </div>
                                    </div>
                                </div>


                                <div class="row mb-3 justify-content-end">
                                    <div class="col-lg-2">
                                        <label class="control-label pt-1">Fecha de Ult. Renovación:</label>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="input-group">
                                            <input type="date" id="Fec_Registro" name="Fec_Registro" class="form-control" readonly>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-3 justify-content-end">
                                    <div class="col-lg-2">
                                        <label class="control-label pt-1">Tipo de servicio:</label>
                                    </div>
                                    <div class="col-lg-4">
                                        <select class="form-control" data-plugin-multiselect data-plugin-options='{ "maxHeight": 200 }' name="IdTipDocumentoGestion" id="IdTipDocumentoGestion">
                                        <option value="2">Mant. de Bombas</option>
                                        <option value="2">Mant. de Extintores</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-lg-2">
                                        <label class="control-label pt-1" for="Des_NombreDocumento">Descripción:</label>
                                    </div>
                                    <div class="col-lg-10">
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="Des_NombreDocumento" name="Des_NombreDocumento">
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-lg-2">
                                        <label class="control-label pt-1">Tipo de Mantenimiento:</label>
                                    </div>
                                    <div class="col-lg-4">
                                        <select class="form-control" data-plugin-multiselect data-plugin-options='{ "maxHeight": 200 }'
                                            name="IdTipMantenimiento" id="IdTipMantenimiento">
                                            <option value="2">Preventivo</option>
                                            <option value="3">Correctivo</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-2">
                                        <label class="control-label pt-1">Frecuencia:</label>
                                    </div>
                                    <div class="col-lg-4">
                                        <select class="form-control" data-plugin-multiselect data-plugin-options='{ "maxHeight": 200 }' name="IdFrecuencia" id="IdFrecuencia">
                                            <option value="2">Anual</option>
                                            <option value="3">Semestral</option> 
                                        </select>
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <h3>Programación</h3>
                                    <div class="col-lg-2">
                                        <label class="control-label pt-1">Fecha de Ult. Renovación:</label>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="input-group">
                                            <input type="date" id="Fec_Registro_Programacion" name="Fec_Registro_Programacion" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <label class="control-label pt-1">Alerta:</label>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="input-group">
                                            <input type="date" id="Fec_Alerta_Programacion" name="Fec_Alerta_Programacion" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <h3>Cotización</h3>
                                    <div class="col-lg-2">
                                        <label class="control-label pt-1" for="Costo_Referencial">Costo Referencial:</label>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="Costo_Referencial" name="Costo_Referencial">
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <label class="control-label pt-1">Proveedor Ref:</label>
                                    </div>
                                    <div class="col-lg-4">
                                        <select class="form-control" data-plugin-multiselect data-plugin-options='{ "maxHeight": 200 }' name="IdProveedorRef" id="IdProveedorRef">
                                            <option value="2">ComboBox</option>
                                        </select>
                                        <h5 style="text-decoration: underline; color: blue;">Ver datos del proveedor seleccionado</h5>
                                    </div>
                                </div>
                                <div class="mb-2">
                                    <button type="button" class="btn btn-secondary" id="btn_cancelar" onclick="Limpiar()">Cancelar</button>
                                    <button type="submit" class="btn btn-primary" id="btnGuardar">Guardar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>
    <?php require_once("../Main/mainjs.php"); ?>
</body>

</html>
