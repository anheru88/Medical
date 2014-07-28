<div class="modal modal-flex fade" id="agregar_procedimiento" tabindex="-1" role="dialog" aria-labelledby="flexModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="flexModalLabel">Actualización CUPS Procedimientos</h4>
            </div>
            <div class="modal-body">
                <form action="" role="form">
                    <div class="row">
                        <div class="col-sm-12 form-group">
                            <label for="">Codigo</label>
                            <input type="text" class="form-control">
                        </div>               
                        <div class="col-sm-12 form-group">
                            <label for="">Nombre</label>
                            <input type="text" class="form-control">
                        </div>    
                        <div class="col-sm-6">
                            <div class="radio">
                                <label for="">CUPP ISS</label>
                                <input type="radio" class="form-control" name="prueba">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="radio">
                                <label for="">CUPPSOAT</label>
                                <input type="radio" class="form-control" name="prueba">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <input type="text" class="col-sm-12">
                        </div>
                        <div class="col-sm-6">
                            <div class="radio">
                                <label for="">UVR</label>
                                <input type="radio" class="form-control" name="prueba">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="radio">
                                <label for="">VALOR FIJO</label>
                                <input type="radio" class="form-control" name="prueba">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <label for="">Categoria</label>
                            <select name="" id="" class="form-control">
                                <option value="">Aseo</option>
                            </select>
                        </div>
                        <div class="col-sm-6">
                            <div class="checkbox">
                                <label for="">Control De Prescripción</label>
                                <input type="checkbox" class="form-control">
                            </div>
                            <div class="checkbox">
                                <label for="">Genera Cuota Moderada</label>
                                <input type="checkbox" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="checkbox">
                                <label for="">Genera Copago</label>
                                <input type="checkbox" class="form-control">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-green">Guardar</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>