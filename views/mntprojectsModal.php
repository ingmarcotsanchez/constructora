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
                                <label for="mpro_privada">Área Privada</label>
                                <input type="text" class="form-control" name="mpro_privada" id="mpro_privada" placeholder="Ingrese el área privada">
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <label for="mpro_const">Área Construida</label>
                                <input type="text" class="form-control" name="mpro_const" id="mpro_const" placeholder="Ingrese el área construida">
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <label for="mpro_alcobas">Cantidad de Alcobas</label>
                                <input type="text" class="form-control" name="mpro_alcobas" id="mpro_alcobas" placeholder="Ingrese cantidad de alcobas">
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <label for="mpro_bannos">Cantidad de Baños</label>
                                <input type="text" class="form-control" name="mpro_bannos" id="mpro_bannos" placeholder="Ingrese cantidad de baños">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="mpro_imagen1">Imagen</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="mpro_imagen1" id="mpro_imagen1">
                                    <label class="custom-file-label" for="customFile">Buscar una imagen</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="mpro_imagen2">Imagen</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="mpro_imagen2" id="mpro_imagen2">
                                    <label class="custom-file-label" for="customFile">Buscar una imagen</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="mpro_imagen3">Imagen</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="mpro_imagen3" id="mpro_imagen3">
                                    <label class="custom-file-label" for="customFile">Buscar una imagen</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="mpro_imagen4">Imagen</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="mpro_imagen4" id="mpro_imagen4">
                                    <label class="custom-file-label" for="customFile">Buscar una imagen</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="mpro_imagen5">Imagen</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="mpro_imagen5" id="mpro_imagen5">
                                    <label class="custom-file-label" for="customFile">Buscar una imagen</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="mpro_imagen6">Imagen</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="mpro_imagen6" id="mpro_imagen6">
                                    <label class="custom-file-label" for="customFile">Buscar una imagen</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="mpro_imagen7">Imagen</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="mpro_imagen7" id="mpro_imagen7">
                                    <label class="custom-file-label" for="customFile">Buscar una imagen</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="mpro_imagen8">Imagen</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="mpro_imagen8" id="mpro_imagen8">
                                    <label class="custom-file-label" for="customFile">Buscar una imagen</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="mpro_imagen9">Imagen</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="mpro_imagen9" id="mpro_imagen9">
                                    <label class="custom-file-label" for="customFile">Buscar una imagen</label>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="mpro_imagen10">Imagen</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="mpro_imagen10" id="mpro_imagen10">
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

