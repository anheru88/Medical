@extends('template.layout')
@section('titulo')
Actualización de Consultas y Procedimientos
@stop
@section('contenido')
<div class="row">
	<div class="col-lg-12">
		<div class="page-title">
			<h1>Lista Consultas y Procedimientos
				<small>(Actualizar)</small>
			</h1>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-xs-12 col-sm-6">
		<p>
			<button class="btn btn-info" data-toggle="modal" data-target="#agregar_cups">
				<i class="fa fa-plus-circle"></i>
				Tipo de CUPS
			</button>
			@extends('formulario.form_cups')
			<button class="btn btn-info" data-toggle="modal" data-target="#agregar_categoria">
				<i class="fa fa-plus-circle"></i>
				Categoria
			</button>
			@extends('formulario.form_categoria_consulta')
			</button>
			<button class="btn btn-info" data-toggle="modal" data-target="#agregar_procedimiento">
				<i class="fa fa-plus-circle"></i>
				Procedimiento
			</button>
			@extends('formulario.form_procedimiento')
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
					<li><a href="#">Consultas y Procedimientos</a>
					</li>
					<li><a href="#">Tipo de CUPS</a>
					</li>
					<li><a href="#">Categoria</a>
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
					<th>Nombre</th>
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