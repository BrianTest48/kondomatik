<!DOCTYPE html>
<html class="fixed">
<head>

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
                           <form method="post" id="document_form" enctype="multipart/form-data">
                           <!-- <input type="hidden" id="IdGestionDocumento" name="myIdGestionDocumento"> -->
                                <div class="form-group row pb-3">
                                    <label class="col-lg-2 control-label text-end pt-1">Fecha de Registro:</label>
                                    <div class="col-lg-4">
                                        <div class="input-group">
                                            <span class="input-group-text">
                                                <i class="fas fa-calendar-alt"></i>
                                            </span>
                                            <input type="text" id="Fec_Registro" data-plugin-datepicker class="form-control">
                                        </div>
                                    </div>
                                    <label class="col-lg-2 control-label text-end pt-1" for="IdGestionDocumento">ID del Documento:</label>
                                    <div class="col-lg-4">
                                        <div class="input-group">
                                            <input type="text" class="form-control" id="IdGestionDocumento" name="myIdGestionDocumento">
                                        </div>
                                    </div>
                                </div>
                                        <div class="form-group row pb-3">
                                            <label class="col-lg-2 control-label text-end pt-1" for="IdGestionDocumento">ID del Documento:</label>
                                            <div class="col-lg-4">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="IdGestionDocumento" name="myIdGestionDocumento">
                                                </div>
                                            </div>
                                        </div>
                    
                                        <div class="form-group row pb-3">
                                            <label class="col-lg-1 control-label text-end pt-2">Tipo de Documento: </label>
                                            <div class="col-lg-5">
                                                <select class="form-control" data-plugin-multiselect data-plugin-options='{ "maxHeight": 200 }' id="IdTipDocumentoGestion">
                                                    <option value="PDF" selected>PDF</option>
                                                    <option value="WORD">WORD</option>
                                                    <option value="EXCEL">EXCEL</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row pb-3">
                                            <label class="col-lg-1 control-label text-lg-end pt-2" for="Des_NombreDocumento">Nombre del Documento:</label>
                                            <div class="col-lg-6">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="Des_NombreDocumento" name="myDes_NombreDocumento">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row pb-4">
                                            <label class="col-lg-2 col-xl-1 control-label text-lg-end pt-2 mt-1 mb-0">Detalle: </label>
                                            <div class="col-lg-10 col-xl-11">
                                                <textarea class="form-control form-control-modern" id='Des_Detalle' name="myDes_Detalle" rows="6"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row pb-4">
                                            <label class="col-lg-1 control-label text-lg-end pt-2">Ruta del Documento: </label>
                                            <div class="col-lg-9">
                                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                                    <div class="input-append">
                                                        <span class="btn btn-default btn-file">
                                                            <input type="file" id='Des_RutaDocumento' />
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                                    <button type="button" class="btn btn-secondary">Cancelar</button>
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
    <!-- <script src="registrardocumento.js"></script> -->
</body>
</html>