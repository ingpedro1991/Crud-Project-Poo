<?php namespace Controllers;
	//uso la clase estudiante de Models para hacer uso de las consultas a la BD
	use Models\Estudiantes as EstudiantesBD;
	use Models\Seccion as SeccionBD;

	class EstudiantesControllers{
		private $estudiantes;
		private $secciones;

		public function __construct(){
			$this->estudiantes = new EstudiantesBD();
			$this->secciones = new SeccionBD();
		}
		public function index(){
			$datos = $this->estudiantes->listar();
			return $datos;
		}
		public function agregar(){
			if(!$_POST){
				$datos = $this->secciones->listar();
				return $datos;
			}else{
				$permitidos = array("image/jpeg", "image/png", "image/gif", "image/jpg");
				$limite = 700;
				if(in_array($_FILES['es_imagen']['type'], $permitidos) && $_FILES['es_imagen']['size'] <= $limite * 5000){
					$nombre = date('is') ."_". $_FILES['es_imagen']['name'];
					$ruta = "Views" . DS . "Template". DS . "img" . DS . $nombre;
					move_uploaded_file($_FILES['es_imagen']['tmp_name'], $ruta);
					$this->estudiantes->set("es_nombre", $_POST['es_nombre']);
					$this->estudiantes->set("es_edad", $_POST['es_edad']);
					$this->estudiantes->set("es_promedio", $_POST['es_promedio']);
					$this->estudiantes->set("es_imagen", $nombre);
					$this->estudiantes->set("es_seccion_id", $_POST['es_seccion_id']);
					$this->estudiantes->set("es_status", $_POST['es_status']);
					$this->estudiantes->add();
					header("Location: " . URL . "Estudiantes");
				}
			}
		}
		public function editar($id){
			if(!$_POST){
				$this->estudiantes->set("es_id", $id);
				$datos = $this->estudiantes->view();
				return $datos;
			}else{
				$permitidos = array("image/jpeg", "image/png", "image/gif", "image/jpg");
				$limite = 700;
				if(in_array($_FILES['es_imagen']['type'], $permitidos) && $_FILES['es_imagen']['size'] <= $limite * 5000){
					$nombre = date('is') ."_". $_FILES['es_imagen']['name'];
					$ruta = "Views" . DS . "Template". DS . "img" . DS . $nombre;
					move_uploaded_file($_FILES['es_imagen']['tmp_name'], $ruta);
					$this->estudiantes->set("es_id", $_POST['es_id']);
					$this->estudiantes->set("es_nombre", $_POST['es_nombre']);
					$this->estudiantes->set("es_edad", $_POST['es_edad']);
					$this->estudiantes->set("es_promedio", $_POST['es_promedio']);
					$this->estudiantes->set("es_fecha", $_POST['es_fecha']);
					$this->estudiantes->set("es_imagen", $nombre);
					$this->estudiantes->set("es_seccion_id", $_POST['es_seccion_id']);
					$this->estudiantes->set("es_status", $_POST['es_status']);
					$this->estudiantes->edit();
					header("Location: " . URL . "Estudiantes/Editar/".$_POST['es_id']."");
				}
			}
		}
		public function listarSecciones(){
			$datos = $this->secciones->listar();
			return $datos;
		}
		public function ver($id){
			$this->estudiantes->set("es_id",$id);
			$datos = $this->estudiantes->view();
			return $datos;
		}

		public function eliminar($id){
			$this->estudiantes->set("es_id",$id);
			$this->estudiantes->delete();
			header("Location: " . URL . "Estudiantes");
		}
	}

	$estudiantes = new EstudiantesControllers();

?>