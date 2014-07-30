@extends('template.layout')
@section('titulo')
Actualización Diagnostico
@stop
@section('estilos')
	{{ HTML::style('assets/css/plugins/fullcalendar/fullcalendar.css') }}
	{{ HTML::style('assets/css/plugins.css') }}
@stop
@section('contenido')
<div class="row">
	<div class="col-lg-12">
		<div class="page-title">
			<h1>Agenda Medica</h1>
		</div>
	</div>
	<!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<!-- end PAGE TITLE ROW -->

<div class="row">

	<div class="col-lg-8">
		<div class="portlet portlet-default">
			<div class="portlet-heading">
				<div class="portlet-title">
					<h4>Calendario</h4>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="portlet-body">
				<div class="table-responsive">
					<div id="calendar"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- /.col-lg-8 -->

	<div class="col-lg-4">
		<div class="portlet portlet-default">
			<div class="portlet-heading">
				<div class="portlet-title">
					<h4>Agregar Evento</h4>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="portlet-body">
				<div id='external-events'>
					<div class='external-event'>Almuerzo</div>
					<div class='external-event'>Operar</div>
					<div class='external-event'>Consultas</div>
					<div class='external-event'>Clientes</div>
					<div class='external-event'>Doctoras</div>
					<p>
						<input type='checkbox' id='drop-remove' />
						<label for='drop-remove'>Eliminar compromiso</label>
					</p>
				</div>
			</div>
		</div>
	</div>
	<!-- /.col-lg-4 -->

</div>
<!-- /.row -->
@stop
@section('script')
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<!-- CUSTOM JQUERY UI FOR FULL CALENDAR -->
<script src="assets/js/plugins/fullcalendar/jquery-ui.custom.min.js"></script>
<script src="assets/js/plugins/bootstrap/bootstrap.min.js"></script>
<script src="assets/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
<script src="assets/js/plugins/popupoverlay/jquery.popupoverlay.js"></script>
<script src="assets/js/plugins/popupoverlay/defaults.js"></script>

<script src="assets/js/plugins/popupoverlay/logout.js"></script>
<!-- HISRC Retina Images -->
<script src="assets/js/plugins/hisrc/hisrc.js"></script>

<!-- PAGE LEVEL PLUGIN SCRIPTS -->
<script src="assets/js/plugins/fullcalendar/fullcalendar.min.js"></script>

<!-- THEME SCRIPTS -->
<script src="assets/js/flex.js"></script>
<script src="assets/js/demo/calendar-demo.js"></script>
@stop