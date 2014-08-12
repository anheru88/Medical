<div class="modal modal-flex fade" id="agregar_paciente" tabindex="-1" role="dialog" aria-labelledby="flexModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="flexModalLabel">Actualización Cliente</h4>
            </div>
            <div class="modal-body">
                <form action="" role="form">
                    <div class="row">
                        <div class="col-sm-12 text-center breadcrumb">
                            <h4>Registro</h4>
                        </div>
                        <div class="col-sm-6">
                            <label for="">Registro Clinico</label>
                            <input type="text" class="form-control" disabled>
                        </div>
                        <div class="col-sm-6">
                            <label for="">&nbsp;</label>
                            <div class="input-group">
                                <span class="input-group-btn">
                                    <button class="btn btn-success" type="button">
                                        Buscar
                                    </button>
                                </span>
                                <input type="text" class="form-control" disabled>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-12 text-center breadcrumb">
                            <h4>Datos Personales</h4>
                        </div>
                        <div class="col-sm-6">
                            <label for="">Primer Apellido</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-sm-6">
                            <label for="">Segundo Apellido</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-sm-6">
                            <label for="">Primer Nombre</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-sm-6">
                            <label for="">Segundo Nombre</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-sm-6">
                            <label for="">Sexo</label>
                            <select name="" id="" class="form-control">
                                <option value="">Masculino</option>
                                <option value="">Femenino</option>
                            </select>
                        </div>
                        <div class="col-sm-6">
                            <label for="">Documento de Identidad</label>
                            <div class="row">
                                <div class="col-sm-5">
                                    <select name="" id="" class="form-control">
                                        <option value="">TI</option>
                                        <option value="">C.C</option>
                                    </select>
                                </div>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                        </div>  
                        <div class="col-sm-12">
                            <label for="">Fecha de Nacimiento</label>
                            <div class="row">
                                <div class="col-sm-6">
                                    <input type="date" class="form-control">
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" disabled placeholder="0">
                                </div>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" disabled placeholder="Años">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <label for="">Estado Civil</label>
                            <select name="" id="" class="form-control">
                                <option value="">Soltero</option>
                                <option value="">Viudo</option>
                                <option value="">Casado</option>
                                <option value="">Separado</option>
                            </select>
                        </div>
                    </div>
                    <hr>
                    <div class="row">   
                        <div class="col-sm-12 text-center breadcrumb">
                            <h4>Contacto</h4>
                        </div>
                        <div class="col-sm-6">
                            <label for="">Dirección</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-sm-6">
                            <label for="">Telefono</label>
                            <input type="tel" class="form-control">
                        </div>
                        <div class="col-sm-6">
                            <label for="">Zona</label>
                            <select name="" id="" class="form-control">
                                <option value="">Urbana</option>
                                <option value="">Rural</option>
                            </select>
                        </div>
                        <div class="col-sm-6">
                            <label for="">Departamento</label>
                            <select name="" id="" class="form-control">
                                <option value="">Antioquia</option>
                            </select>
                        </div>
                        <div class="col-sm-6">
                            <label for="">Municipio</label>
                            <select name="" id="" class="form-control">
                                <option value="">Gaira</option>
                            </select>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-12 text-center breadcrumb">
                            <h4>Titular</h4>
                        </div>
                        <div class="col-sm-6">
                            <label for="">Titulares
                                <i class="fa fa-search"></i>
                            </label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-sm-6">
                            <label for="">Parentesco</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-12 text-center breadcrumb">
                            <h4>Otros Datos</h4>
                        </div>
                        <div class="col-sm-6">
                            <label for="">Empresa
                                <i class="fa fa-search"></i>
                            </label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-sm-6">
                            <label for="">N° Carnet</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="col-sm-12">
                            <div>
                                <label for="">Tipo de Usuario</label>
                            </div>
                            <label for="" class="radio-inline">
                                <input type="radio" class="form-control">
                                Contributivo
                            </label>
                            <label for="" class="radio-inline">
                                <input type="radio" class="form-control">
                                Subsidiado
                            </label>
                            <label for="" class="radio-inline">
                                <input type="radio" class="form-control">
                                Vinculado
                            </label>
                            <label for="" class="radio-inline">
                                <input type="radio" class="form-control">
                                Particular
                            </label>
                            <label for="" class="radio-inline">
                                <input type="radio" class="form-control">
                                Otros
                            </label>
                        </div>
                        <div class="col-sm-6">
                            <label for="">Nivel socioeconomico</label>
                            <select name="" id="" class="form-control">
                                <option value="">Estato A</option>
                                <option value="">Estrato B</option>
                            </select>
                        </div>
                        <div class="col-sm-6">
                            <label for="">Tipo de Usuario</label>
                            <select name="" id="" class="form-control">
                                <option value="">Cotizante</option>
                                <option value="Beneficiario"></option>
                            </select>
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


