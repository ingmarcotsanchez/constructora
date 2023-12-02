<div class="modal fade" id="modalcrearProyectos" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 id="titulo_modal" class="modal-title"></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" id="proyecto_form">
                <div class="modal-body">
                    <input type="hidden" name="pro_id" id="pro_id">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="pro_logo">Logo</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="pro_logo" id="pro_logo">
                                    <label class="custom-file-label" for="customFile">Buscar una imagen</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="pro_nombre">Nombre del Proyecto</label>
                                <input type="text" class="form-control" name="pro_nombre" id="pro_nombre" placeholder="Ingrese el Nombre del cliente">
                            </div>
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
