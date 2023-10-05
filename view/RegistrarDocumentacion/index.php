<!DOCTYPE html>
<html class="fixed">
<head>
    <title>Kondomatik - Registro Docuemntos</title>
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
                        <h2>Gestión Documentaria</h2>
                    </header>
                    <div class="row">
                        <div class="col-md-12">
                            <h3>Nuevo Documento</h3>
                            <form method="post" id="document_form" enctype="multipart/form-data">
                                <input type="hidden" name="id_doc_gestion" id="id_doc_gestion">
                                <div class="row mb-3">
                                    <div class="col-lg-2 text-end">
                                        <label class="control-label pt-1">Fecha de Registro:</label>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="input-group">
                                            <input type="date" id="Fec_Registro" name="Fec_Registro" class="form-control" readonly>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 text-end">
                                        <label class="control-label pt-1" for="IdGestionDocumento">ID del Documento:</label>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="IdGestionDocumento" name="IdGestionDocumento" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-lg-2 text-end">
                                        <label class="control-label pt-1">Tipo de Documento:</label>
                                    </div>
                                    <div class="col-lg-4">
                                        <select class="form-control" data-plugin-multiselect data-plugin-options='{ "maxHeight": 200 }' name="IdTipDocumentoGestion" id="IdTipDocumentoGestion">

                                        </select>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-lg-2 text-end">
                                        <label class="control-label pt-1" for="Des_NombreDocumento">Nombre del Documento:</label>
                                    </div>
                                    <div class="col-lg-10">
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="Des_NombreDocumento" name="Des_NombreDocumento">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-lg-2 text-end">
                                        <label class="control-label pt-1">Detalle:</label>
                                    </div>
                                    <div class="col-lg-10">
                                        <textarea class="form-control form-control-modern" id='Des_Detalle' name="Des_Detalle" rows="6"></textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-lg-2 text-end">
                                        <label class="control-label pt-1">Ruta del Documento:</label>
                                    </div>
                                    <div class="col-lg-9">
                                        <div class="fileupload fileupload-new" data-provides="fileupload">
                                            <div class="input-append">
                                                <span class="btn btn-default btn-file">
                                                    <input type="file" name="Des_RutaDocumento" id='Des_RutaDocumento' />
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3">
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
