<!doctype html>
<html lang="es" class="fixed">
	<head>

    <?php require_once("../Main/mainhead.php");?>


	</head>
    <body>
    <section class="body">
        <header class="header">
        </header>

        <?php 
                require_once("../Main/mainheadpanel.php"); 
        ?>

        <div class="page-container">
        <div class="inner-wrapper">
            <aside id="sidebar-left" class="sidebar-left">
                 <?php 
                    require_once("../Main/mainleftpanel.php"); 
                  ?>
            </aside>
            <section role="main" class="content-body">
                <header class="page-header">
                    <h2>Gestión Documentaria</h2>
                </header>
                <div class="row">
                    <div class="col-md-12">
                        <div class="mb-3">
                            <h4>Nuevo Documento</h4>
                        </div>                        
                        <div class="form-group row pb-3">
                            <label class="col-lg-1 control-label text-end pt-1">Fecha de Registro:</label>
                            <div class="col-lg-5">
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="fas fa-calendar-alt"></i>
                                    </span>
                                    <input type="text" data-plugin-datepicker class="form-control">
                                </div>
                            </div>
                            <label class="col-lg-1 control-label text-end pt-1" for="inputDefault">ID del Documento:</label>
                            <div class="col-lg-5">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="inputDefault">
                                </div>
                            </div>
                        </div>

                        <div class="form-group row pb-3">
                            <label class="col-lg-1 control-label text-end pt-2">Tipo de Documento: </label>
                            <div class="col-lg-5">
                                <select class="form-control" data-plugin-multiselect data-plugin-options='{ "maxHeight": 200 }' id="ms_example1">
                                    <option value="cheese" selected>Seleccione</option>
                                    <option value="tomatoes">Tipo 1</option>
                                    <option value="mozarella">Tipo 2</option>
                                    <option value="mushrooms">Tipo 3</option>
                                </select>
                            </div>
                            <label class="col-lg-1 control-label text-lg-end pt-2" for="inputDefault2">Nombre del Documento:</label>
                            <div class="col-lg-5">
                                <div class="input-group">
                                    <input type="text" class="form-control" id="inputDefault2">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row pb-4">
                            <label class="col-lg-2 col-xl-1 control-label text-lg-end pt-2 mt-1 mb-0">Detalle: </label>
                            <div class="col-lg-10 col-xl-11">
                                <textarea class="form-control form-control-modern" name="productDescription" rows="6"></textarea>
                            </div>
                        </div>
                        <div class="form-group row pb-4">
                            <label class="col-lg-1 control-label text-lg-end pt-2">Ruta del Documento: </label>
                            <div class="col-lg-9">
                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                    <div class="input-append">
                                        <span class="btn btn-default btn-file">
                                            <input type="file" />
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mb-3">
                            <button type="button" class="btn btn-secondary">Cancelar</button>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>


                    </div>
                    </div>
                </div>
            </section>
        </div>
	</section>
    <body>
		<?php require_once("../Main/mainjs.php"); ?>
        <script src="./login.js"></script>
	</body>
</html>