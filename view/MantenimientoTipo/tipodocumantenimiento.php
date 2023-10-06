<div id="tipodocumantenimiento" class="modal fade bd-example-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form method="post" id="tipodocumento_form">
                <div class="modal-header">
                    <h4 class="modal-title" id="tipodocutitulo"></h4>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="IdTipDocumentoGestion" name="IdTipDocumentoGestion">

                    <div class="form-group">
                        <label class="form-label" for="Nom_TipoDocumentoGestion">Nombre</label>
                        <input type="text" class="form-control" id="Nom_TipoDocumentoGestion" name="Nom_TipoDocumentoGestion" placeholder="Ingrese Nombre del tipo" required>
                    </div>

                    <div id="cbx_estado" class="form-group">
                        <label class="form-label" for="">Estado</label>
                        <select class="form-control select2" name="tipo_doc" id="tipo_doc" data-placeholder="Seleccione" style="width: 100%" onclick="" required>
                            <option label="Seleccione"></option>
                            <option value="D.N.I">Activo</option>
                            <option value="C.E">Inactivo</option>
                        </select>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-rounded btn-default" id="btnclose" data-dismiss="modal">Cerrar</button>
                    <button type="submit" name="action" id="#" value="add" class="btn btn-rounded btn-primary">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>