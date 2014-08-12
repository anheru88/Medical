@extends('template.layout')
@section('titulo')
Actualizar Medico
@stop
@section('contenido')
<div class="row">
	<div class="col-lg-12">
		<div class="page-title">
			<h1>Admisión de Pacientes</h1>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-sm-3">
		<form action="" role="form">
			<div class="input-group">
				<input type="text" class="form-control" placeholder="Buscar Paciente">
				<span class="input-group-btn">
					<button class="btn btn-default" type="button">
						<i class="fa fa-search"></i>
					</button>
				</span>
			</div>
		</form>
	</div>
	<div class="col-sm-4 pull-right">
		<form action="" role="form">
			<div class="col-sm-6">
				<a href="" class="btn btn-info">
					<i class="fa fa-plus-circle"></i>
					Registro Clinico
				</a>
			</div>
			<div class="col-sm-6">
				<a href="" class="btn btn-info">
					Reimprimir o Anular
				</a>
			</div>
		</form>
	</div>
</div>
<!-- Hay que ubicar la etiqueta form no la agregare por ahora -->
<div class="row">
	<form action="" role="form">
		<div class="form-group">
			<div class="col-sm-3">
				<label for="">
					Registro Clinico
				</label>
				<input type="text" class="form-control" disabled>
			</div>
			<div class="col-sm-3">
				<label for="">
					Identificación
				</label>
				<input type="text" class="form-control" disabled>
			</div>
			<div class="col-sm-6">
				<label for="">Nombre</label>
				<input type="text" class="form-control" disabled>
			</div>
		</div>
	</form>
</div>
<hr>
<div class="row text-right">
	<a href="" class="btn btn-info">
		Modificar Paciente
	</a>
	<a href="" class="btn btn-info">
		Crear Menor Sin Identificación
	</a>
</div>
<form action="" role="form">
	<div class="row">
		<div class="col-sm-3">
			<label for="">Registro Clinico</label>
			<input type="text" class="form-control" disabled>
		</div>	
		<div class="col-sm-3">
			<label for="">Identificación</label>
			<input type="text" class="form-control" disabled>
		</div>
		<div class="col-sm-6">
			<label for="">Nombre</label>
			<input type="text" class="form-control" disabled>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-6">
			<label for="">Empresa</label>
			<input type="text" class="form-control" disabled>
		</div>
		<div class="col-sm-6">
			<label for="">Programa</label>
			<input type="text" class="form-control" disabled>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-2">
			<label for="">Tarifa</label>
			<input type="text" class="form-control" disabled>
		</div>
		<div class="col-sm-3">
			<label for="">Rango</label>
			<select name="" id="" class="form-control" disabled>
				<option value="">opcion1</option>
				<option value="">opcion2</option>
			</select>
		</div>
		<div class="col-sm-3">
			<label for="">Tipo</label>
			<select name="" id="" class="form-control" disabled>
				<option value="">Tipo 1</option>
				<option value="">Tipo 2</option>
			</select>
		</div>
		<div class="col-sm-4">
			<label for="">&nbsp;</label>
			<div class="form-group">
				<label for="" class="checkbox-inline">
					<input type="checkbox">
					Aplica Copago
				</label>
				<label for="" class="checkbox-inline">
					<input type="checkbox">
					Cuota Moderadora
				</label>
			</div>
		</div>
	</div>
	<hr>
	<div class="row">
		<div class="col-sm-12">
			<div class="table-responsive">
				<table class="table table-striped table-bordered table-hover">
					<thead>
						<tr>
							<th>Hora</th>
							<th>Especialidad</th>
							<th>Especialista</th>
							<th>Consulta/Procedimiento</th>
							<th>Cita N°</th>
							<th>Estado</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
						</tr>
						<tr>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-2">
			<label for="">UFA</label>
			<input type="text" class="form-control">
		</div>
		<div class="col-sm-2">
			<label for="">Cita N°</label>
			<input type="text" class="form-control">
		</div>
		<div class="col-sm-2">
			<label for="">Fecha</label>
			<input type="text" class="form-control">
		</div>
		<div class="col-sm-3">
			<label for="">Algo</label>
			<select name="" id="" class="form-control">
				<option value="">opcion1</option>
			</select>
		</div>
		<div class="col-sm-3">
			<label for="">Autorización</label>
			<input type="text" class="form-control">
		</div>
	</div>
	<div class="row">
		<div class="col-sm-6">
			<label for="">Especialidad</label>
			<select name="" id="" class="form-control">
				<option value="">Aqui va algo</option>
			</select>
		</div>
		<div class="col-sm-6">
			<label for="">Especialidad</label>
			<select name="" id="" class="form-control">
				<option value="">Aqui va algo</option>
			</select>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<label for="">Consulta</label>
			<select name="" id="" class="form-control">
				<option value="">aqui algo</option>
			</select>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-2">
			<label for="">Valor</label>
			<input type="text" class="form-control">
		</div>
		<div class="col-sm-2">
			<label for="">aqui algo</label>
			<input type="text" class="form-control">
		</div>
		<div class="col-sm-2">
			<label for="">Descuento</label>
			<input type="text" class="form-control">
		</div>
		<div class="col-sm-2">
			<label for="">Cuota Moderadora</label>
			<input type="text" class="form-control">
		</div>
		<div class="col-sm-2">
			<label for="">Copago</label>
			<input type="text" class="form-control">
		</div>
		<div class="col-sm-2">
			<label for="">Total a Pagar</label>
			<input type="text" class="form-control" value="$0">
		</div>
	</div>
	<hr>
	<div class="row text-center">
		<a href="" class="btn btn-success">
			Admisionar
		</a>
	</div>
</form>
@stop