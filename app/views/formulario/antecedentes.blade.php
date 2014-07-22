@extends('template.layout')
@section('titulo')
Antecedentes
@stop
@section('contenido')
<div class="row">
	<div class="col-lg-12">
		<div class="page-title">
			<h1>Lista Antecedentes
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
				Agregar
			</button>
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

</div>
<div class="row">
	<div class="table-responsive col-sm-12">
		<table class="table table-hover table-bordered table-striped">
			<thead>
				<tr>
					<th><input type="checkbox"></th>
					<th>Codigo</th>
					<th>Nombre Sala</th>
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