<div class="modal fade" id="modalcrearClientes" data-backdrop="static" data-keyboard="false">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 id="titulo_modal" class="modal-title"></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" id="cliente_form">
                <div class="modal-body">
                    <input type="hidden" name="cli_id" id="cli_id">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="cli_nombre">Nombre del cliente</label>
                                <input type="text" class="form-control" name="cli_nombre" id="cli_nombre" placeholder="Ingrese el Nombre del cliente" readonly>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="cli_correo">Correo Electrónico</label>
                                <input type="email" class="form-control" name="cli_correo" id="cli_correo" placeholder="Ingrese un Correo" readonly>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="cli_telef">Teléfono del cliente</label>
                                <input type="text" class="form-control" name="cli_telef" id="cli_telef" placeholder="Ingrese Teléfono del cliente" readonly>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="cli_asunto">Asunto</label>
                                <input type="text" class="form-control" name="cli_asunto" id="cli_asunto" placeholder="Ingrese un Asunto " readonly>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <fieldset class="form-group">
                            <label class="form-label semibold" for="cli_mensaje">Descripción</label>
                            <div class="summernote-theme-1">
                                <textarea id="cli_mensaje" cols="105" rows="10" name="cli_mensaje" disabled></textarea>
                            </div>
                            </fieldset>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="est">Estado</label>
                                <select class="form-control select2" name="est" id="est" data-placeholder="Seleccione">
                                    <option label="Seleccione"></option>
                                    <option value=1>Interesado</option>
                                    <option value=2>Citado</option>
                                    <option value=3>No responde</option>
                                    <option value=4>Dudando</option>
                                    <option value=0>Desinteresado</option>
                                </select>
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
