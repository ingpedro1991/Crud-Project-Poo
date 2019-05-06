<?php namespace Models;

	class Seccion{
		private $seccion_id;
		private $seccion_nombre;
		private $seccion_status;
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
			$sql = "SELECT * FROM secciones WHERE seccion_status = 'A' order by seccion_nombre";
			$datos = $this->con->consulta_retorno($sql);
			return $datos;
		}

		public function add(){
			$sql = "INSERT INTO secciones (seccion_id,seccion_nombre,seccion_status) VALUES (NULL,'{$this->seccion_nombre}','{$this->seccion_status}')";
			$this->con->consulta_simple($sql);
		}

		public function delete(){
			$sql = "DELETE FROM secciones where seccion_id = '{$this->seccion_id}'";
			$this->con->consulta_simple($sql);
		}

		public function edit(){
			$sql = "UPDATE secciones SET seccion_nombre = '{$this->seccion_nombre}',seccion_status = '{$this->seccion_status}' WHERE seccion_id = '{$this->seccion_id}'";
			$datos = $this->con->consulta_retorno($sql);
			return $datos;
		}

		public function view(){
			$sql = "SELECT * FROM secciones WHERE seccion_id = '{$this->seccion_id}'";
			$datos = $this->con->consulta_retorno($sql);
			$row = mysqli_fetch_assoc($datos);
			return $row;
		}
	}



?>