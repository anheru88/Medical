@extends('template.layout')
@section('titulo')
Actualización Departamento y Municipio
@stop
@section('contenido')
<div class="row">
	<div class="col-lg-12">
		<div class="page-title">
			<h1>Lista Departamentos y Municipios
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
				Depatamento
			</button>
			<button class="btn btn-info">
				<i class="fa fa-plus-circle"></i>
				Municipio
			</button>
		</p>
	</div>
	<div class="col-lg-4  pull-right">
		<div class="form-group">
			<label class="col-sm-2 control-label">Filtrar</label>
			<div class="col-sm-10">
				<select class="form-control">
					<option>Departamento</option>
					<option>Municipio</option>
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
					<th>Codigo</th>
					<th>Nombre Departamento</th>
					<th>Acciones</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><input type="checkbox"></td>
					<td>29233</td>
					<td>Aqui nombre</td>
					<td>
						<i class="fa fa-eye"></i>
						<i class="fa fa-pencil"></i>
						<i class="fa fa-trash-o"></i>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
	<div class="col-xs-12">
		<div class="dataTables_paginate paging_bootstrap">
			<ul class="pagination">
				<li class="prev disabled">
					<a href="#">← Previous</a>
				</li>
				<li class="active">
					<a href="#">1</a>
				</li>
				<li>
					<a href="#">2</a>
				</li>
				<li class="next">
					<a href="#">Next → </a>
				</li>
			</ul>
		</div>
	</div>
</div>
<div class="row">
	<div class="table-responsive col-sm-12">
		<table class="table table-hover table-bordered table-striped">
			<thead>
				<tr>
					<th><input type="checkbox"></th>
					<th>Codigo</th>
					<th>Nombre Municipio</th>
					<th>Acciones</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><input type="checkbox"></td>
					<td>29233</td>
					<td>Aqui nombre</td>
					<td>
						<i class="fa fa-eye"></i>
						<i class="fa fa-pencil"></i>
						<i class="fa fa-trash-o"></i>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
	<div class="col-xs-12">
		<div class="dataTables_paginate paging_bootstrap">
			<ul class="pagination">
				<li class="prev disabled">
					<a href="#">← Previous</a>
				</li>
				<li class="active">
					<a href="#">1</a>
				</li>
				<li>
					<a href="#">2</a>
				</li>
				<li class="next">
					<a href="#">Next → </a>
				</li>
			</ul>
		</div>
	</div>
</div>
@stop