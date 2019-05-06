<?php namespace Models;

	class Conexion{

		private $datos =
		array(

			'host' => 'localhost',
			'user' => 'root',
			'pass' => '',
			'db' => 'crud_poo'
		);

		private $OConexMysql;

		public function __construct(){
			$this->OConexMysql = new \mysqli
			(
				$this->datos['host'],
				$this->datos['user'],
				$this->datos['pass'],
				$this->datos['db']
			);
		}

		public function consulta_simple($sql){
			$this->OConexMysql->query($sql);
		}

		public function consulta_retorno($sql){
			$datos = $this->OConexMysql->query($sql);
			return $datos;
		}
	}
	
?>