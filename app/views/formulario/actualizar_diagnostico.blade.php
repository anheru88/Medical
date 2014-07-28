@extends('template.layout')
@section('titulo')
Actualización Diagnostico
@stop
@section('contenido')
<div class="row">
	<div class="col-lg-12">
		<div class="page-title">
			<h1>Lista Diagnostico
				<small>(Actualizar)</small>
			</h1>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-xs-12 col-sm-6">
		<p>
			<button class="btn btn-info" data-toggle="modal" data-target="#agregar_diagnostico">
				<i class="fa fa-plus-circle"></i>
				Diagnostico
			</button>
			@extends('formulario.form_diagnostico')
		</p>
	</div>
	<div class="col-lg-4  pull-right">
		<div class="input-group">
			<input type="text" class="form-control">
			<span class="input-group-btn">
				<button class="btn btn-info" type="button">Buscar</button>
			</span>
		</div>
	</div>
	
</div>
<div class="row">
	<div class="table-responsive col-sm-12">
		<table class="table table-hover table-bordered table-striped">
			<thead>
				<tr>
					<th><input type="checkbox"></th>
					<th>Cups</th>
					<th>Nombre o Descripción Diagnosicos</th>
					<th>Acciones</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><input type="checkbox"></td>
					<td>29233</td>
					<td>James ROdriguez</td>
					<td>
						<i class="fa fa-eye"></i>
						<i class="fa fa-pencil"></i>
						<i class="fa fa-trash-o"></i>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>

@stop