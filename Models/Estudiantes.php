<?php namespace Models;

	class Estudiantes{
		private $es_id;
		private $es_seccion_id;
		private $es_nombre;
		private $es_edad;
		private $es_promedio;
		private $es_imagen;
		private $es_fecha;
		private $es_status;
		private $con;

		public function __construct(){
			$this->con = new Conexion();
		}

		public function set($atributo,$contenido){
			$this->$atributo = $contenido;
		}

		public function get($atributo){
			return $this->$atributo;
		}

		public function listar(){
			$sql = "SELECT estudiantes.*,secciones.seccion_nombre from estudiantes inner join secciones on es_seccion_id=seccion_id WHERE es_status = 'A' order by es_seccion_id";
			$datos = $this->con->consulta_retorno($sql);
			return $datos;
		}

		public function add(){
			$sql = "INSERT INTO estudiantes (es_id, es_seccion_id, es_nombre, es_edad, es_promedio, es_imagen, es_fecha, es_status) VALUES (NULL,'{$this->es_seccion_id}','{$this->es_nombre}','{$this->es_edad}','{$this->es_promedio}','{$this->es_imagen}',NOW(),'{$this->es_status}');";
			$this->con->consulta_simple($sql);
		}

		public function delete(){
			$sql = "DELETE FROM estudiantes where es_id = '{$this->es_id}'";
			$this->con->consulta_simple($sql);
		}

		public function edit(){
			$sql = "UPDATE estudiantes SET es_nombre = '{$this->es_nombre}',es_edad = '{$this->es_edad}',es_promedio = '{$this->es_promedio}',es_fecha = '{$this->es_fecha}',es_status = '{$this->es_status}',es_imagen = '{$this->es_imagen}',es_seccion_id = '{$this->es_seccion_id}' WHERE es_id = '{$this->es_id}'";
			$datos = $this->con->consulta_retorno($sql);
			return $datos;
		}

		public function view(){
			$sql = "SELECT estudiantes.*,secciones.seccion_nombre from estudiantes inner join secciones on es_seccion_id=seccion_id and es_id = '{$this->es_id}'";
			$datos = $this->con->consulta_retorno($sql);
			$row = mysqli_fetch_assoc($datos);
			return $row;
		}
	}
?>