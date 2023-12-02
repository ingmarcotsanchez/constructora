<div class="modal fade" id="modalcrearGaleria" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 id="titulo_modal" class="modal-title"></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" id="galeria_form" enctype="multipart/form-data">
                <div class="modal-body">
                    <input type="text" name="gal_id" id="gal_id">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="cli_nombre">Imagen</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="gal_imagen" id="gal_imagen">
                                    <label class="custom-file-label" for="customFile">Buscar una imagen</label>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div> 
                <div class="modal-footer justify-content-between">
                    <button type="reset" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                    <button type="submit" name="action" value="add" class="btn btn-primary">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>    
