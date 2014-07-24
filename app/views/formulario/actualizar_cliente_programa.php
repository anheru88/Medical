@extends('template.layout')
@section('titulo')
Actualización Clientes y Programas
@stop
@section('contenido')
<div class="row">
	<div class="col-lg-12">
		<div class="page-title">
			<h1>Lista Clientes y Programas
				<small>(Actualizar)</small>
			</h1>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-xs-12 col-sm-6">
		<p>
			<button class="btn btn-info">
				<i class="fa fa-plus-circle"></i>
				Cliente
			</button>
			<button class="btn btn-info">
				<i class="fa fa-plus-circle"></i>
				Programa
			</button>
		</p>
	</div>
	<div class="col-lg-4  pull-right">
		<div class="form-group">
			<label class="col-sm-2 control-label">Filtrar</label>
			<div class="col-sm-10">
				<select class="form-control">
					<option>Clientes</option>
					<option>Programas</option>
				</select>
			</div>
		</div>
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