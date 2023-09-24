<!doctype html>
<html class="fixed">
	<head>

        <?php require_once("../Main/RegistrarHead.php");
        ?>

	</head>
    <body>
    <section class="body">
        <header class="header">
        </header>
        <!-- end: header -->

        <div class="inner-wrapper">
            <aside id="sidebar-left" class="sidebar-left">
            
            </aside>
            <section role="main" class="content-body">
                <header class="page-header">
                    <h2>Gestion Documentaria</h2>
                </header>
                <div class="row">
                    <div class="col-md-12">
                        <div class="mb-3">
                            <h4>Nuevo Documento</h4>
                        </div>
                        <div class="mb-3" style="display: inline-block; margin-right: 10px;">
                            <label for="fecha_registro">Fecha de Registro:</label>
                            <input type="date" id="fecha_registro" name="fecha_registro" required>
                        </div>
                        <div class="mb-3" style="display: inline-block;">
                            <label for="id_documento">ID del Documento:</label>
                            <input type="text" id="id_documento" name="id_documento" required>
                        </div>
                        <div class="mb-3">
                            <label for="tipo_documento">Tipo de Documento Gestión:</label>
                            <select id="tipo_documento" name="tipo_documento">
                                <option value="gestion1">Gestión 1</option>
                                <option value="gestion2">Gestión 2</option>
                                <option value="gestion3">Gestión 3</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="id_documento">Nombre del Documento:</label>
                            <input type="text" id="id_documento" name="id_documento" required size="50">
                        </div>

                        <div class="mb-3">
                            <label for="detalle" class="d-block">Detalle:</label>
                            <textarea id="detalle" name="detalle" required class="mx-auto col-12" rows="6"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="archivo">Ruta del documento:</label>
                            <input type="file" id="archivo" name="archivo" accept=".pdf, .doc, .docx" required>
                        </div>
                        <div class="mb-3">
                            <button type="button" class="btn btn-secondary">Cancelar</button>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>


                    </div>
                    </div>
                </div>
		</section>

        <body>

        <?php
            require_once("../Main/registarjs.php");
        ?>

	</body>
</html>