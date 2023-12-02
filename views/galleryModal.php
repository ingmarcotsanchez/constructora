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
                    <input type="hidden" name="gal_id" id="gal_id">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="cli_nombre">Imagen</label>
                                <input type="file" class="form-control" name="gal_imagen" id="gal_imagen">
                                <!--<input type="submit" value="registrar" name="btnRegistrar" class="form-control btn btn-orange">-->
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
