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
		return View::make('medico.actualizar_medico');
	}
	public function insumos()
	{
		return View::make('medico.maestro_insumos');
	}
	public function medicamentos()
	{
		return View::make('medico.presentacion_medicamentos');
	}
	public function maestroMedicamentos()
	{
		return View::make('medico.maestro_medicamentos');
	}
	public function consultas()
	{
		return View::make('medico.actualizar_consultas_procedimientos');
	}
	public function diagnosticos()
	{
		return View::make('medico.actualizar_diagnostico');
	}
	public function actualizarCliente()
	{
		return View::make('cliente.actualizar_cliente_programa');
	}
	public function actualizarPaciente()
	{
		return View::make('cliente.actualizar_paciente');
	}
}