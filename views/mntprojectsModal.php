<div class="modal fade" id="modalcrearMntProyectos" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 id="titulo_modal" class="modal-title"></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" id="mntproyecto_form">
                <div class="modal-body">
                    <input type="hidden" name="mpro_id" id="mpro_id">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <div class="custom-file">
                                    <label for="mpro_video">Video del Proyecto</label>
                                    <input type="text" class="form-control" name="mpro_video" id="mpro_video">
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="pro_id">Proyecto</label>
                                <select class="form-control select2" style="width:100%" name="pro_id" id="pro_id" data-placeholder="Seleccione">
                                    <option label="Seleccione"></option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <fieldset class="form-group">
                            <label class="form-label semibold" for="mpro_descripcion">Descripción</label>
                            <div class="summernote-theme-1">
                                <textarea id="mpro_descripcion" class="summernote" name="mpro_descripcion"></textarea>
                            </div>
                            </fieldset>
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <label for="pro_ciudad">Ciudad del proyecto</label>
                                <input type="text" class="form-control" name="pro_ciudad" id="pro_ciudad" placeholder="Ingrese un Correo">
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <label for="pro_casas">Cantidad de casas</label>
                                <input type="text" class="form-control" name="pro_casas" id="pro_casas" placeholder="Ingrese Teléfono del cliente">
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <label for="pro_piscinas">Cantidad de piscinas</label>
                                <input type="text" class="form-control" name="pro_piscinas" id="pro_piscinas" placeholder="Ingrese Teléfono del cliente">
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <label for="pro_parques">Cantidad de parques</label>
                                <input type="text" class="form-control" name="pro_parques" id="pro_parques" placeholder="Ingrese Teléfono del cliente">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="pro_tipo">Estado</label>
                                <select class="form-control select2" name="pro_tipo" id="pro_tipo" data-placeholder="Seleccione">
                                    <option label="Seleccione"></option>
                                    <option value="V">Vis</option>
                                    <option value="N">No Vis</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="pro_imagen">Imagen</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="pro_imagen" id="pro_imagen">
                                    <label class="custom-file-label" for="customFile">Buscar una imagen</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="pro_precio">Precio del Proyecto</label>
                                <input type="text" class="form-control" name="pro_precio" id="pro_precio" placeholder="Ingrese el Nombre del cliente">
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

