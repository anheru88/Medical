@extends('template.layout')
@section('titulo')
Maestro de Insumos
@stop
@section('contenido')
<div class="row">
	<div class="col-lg-12">
		<div class="page-title">
			<h1>Lista Insumos
				<small>(Actualizar)</small>
			</h1>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-xs-12 col-sm-6">
		<p>
			<button class="btn btn-info" data-toggle="modal" data-target="#agregar_insumo">
				<i class="fa fa-plus-circle"></i>
				Insumo
			</button>
			@extends('formulario.form_insumo')
			@parent
			<button class="btn btn-info">
				<i class="fa fa-plus-circle"></i>
				Categoria
			</button>
			<button class="btn btn-info">
				<i class="fa fa-plus-circle"></i>
				Subcategoria
			</button>
		</p>
	</div>
	<div class="col-sm-4 pull-right">
		<div class="input-group">
			<input type="text" class="form-control">
			<div class="input-group-btn">
				<button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">Opciones
					<span class="caret"></span>
				</button>
				<ul class="dropdown-menu pull-right">
					<li><a href="#">Todos los insumos</a>
					</li>
					<li><a href="#">Categoria</a>
					</li>
					<li><a href="#">Subcategoria</a>
					</li>
				</ul>
			</div>
			<!-- /btn-group -->
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
					<th>Descripción</th>
					<th>Acciones</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><input type="checkbox"></td>
					<td>29233</td>
					<td>Una pequeña descripción</td>
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