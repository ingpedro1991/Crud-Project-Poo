<?php namespace Controllers;
	//uso la clase seccion de Models para hacer uso de las consultas a la BD
	use Models\Seccion as SeccionBD;

	class SeccionesControllers{
		private $secciones;

		public function __construct(){
			$this->secciones = new SeccionBD();
		}
		public function index(){
			$datos = $this->secciones->listar();
			return $datos;
		}
		public function agregar(){
			if($_POST){
				$this->secciones->set("seccion_nombre", $_POST['seccion_nombre']);
				$this->secciones->set("seccion_status", $_POST['seccion_status']);
				$this->secciones->add();
				header('Location: '. URL . "Secciones");
			}
		}
		public function editar($id){
			if($_POST){
				$this->secciones->set("seccion_id", $_POST['seccion_id']);
				$this->secciones->set("seccion_nombre", $_POST['seccion_nombre']);
				$this->secciones->set("seccion_status", $_POST['seccion_status']);
				$this->secciones->edit();
				header('Location: '. URL . "Secciones");
			}else{
				$this->secciones->set("seccion_id", $id);
				$datos = $this->secciones->view();
				return $datos;
			}
		}
		public function ver($id){
			$this->secciones->set("seccion_id", $id);
			$datos = $this->secciones->view();
			return $datos;
		}

		public function eliminar($id){
			$this->secciones->set("seccion_id", $id);
			$this->secciones->delete();
			header('Location: '. URL . "Secciones");
		}
	}
?>