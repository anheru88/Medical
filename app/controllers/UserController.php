<?php 
/**
* 
*/
class UserController extends BaseController
{
	public function index()
	{
		return View::make('template.layout');	
	}
	public function actualizarMedico()
	{
		return View::make('formulario.actualizar_medico');
	}
	public function insumos()
	{
		return View::make('formulario.maestro_insumos');
	}
	public function medicamentos()
	{
		return View::make('formulario.presentacion_medicamentos');
	}
	public function maestroMedicamentos()
	{
		return View::make('formulario.maestro_medicamentos');
	}
	public function consultas()
	{
		return View::make('formulario.actualizar_consultas_procedimientos');
	}
	public function diagnosticos()
	{
		return View::make('formulario.actualizar_diagnostico');
	}
	public function actualizarCliente()
	{
		return View::make('formulario.actualizar_cliente_programa');
	}
	public function actualizarPaciente()
	{
		return View::make('formulario.actualizar_paciente');
	}
	public function actualizarDepartamentoMunicipio()
	{
		return View::make('formulario.actualizar_departamento_municipio');
	}
	public function actualizarSalasCamas()
	{
		return View::make('formulario.actualizar_salas_camas');
	}
	public function antecedentes()
	{
		return View::make('formulario.antecedentes');
	}
	public function cirugia()
	{
		return View::make('formulario.cirugia');
	}
	public function subcirugia()
	{
		return View::make('formulario.subcirugia');
	}
	public function agenda()
	{	
		return View::make('formulario.agenda');
	}
	public function admisionPacientes()
	{
		return View::make('formulario.agenda');	
	}
	public function prefactura()
	{
		return View::make('formulario.agenda');		
	}
	public function facturaClinica()
	{
		return View::make('formulario.agenda');	
	}
	public function generacionRips()
	{
		return View::make('formulario.agenda');	
	}
}