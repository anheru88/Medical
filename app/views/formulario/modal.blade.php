<div class="modal modal-flex fade" @yield('idModal') tabindex="-1" role="dialog" aria-labelledby="flexModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="flexModalLabel">@yield('tituloModal')</h4>
            </div>
            <div class="modal-body">
                @section('contenidoModal')
                @show
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