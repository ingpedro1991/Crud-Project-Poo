<?php namespace Config;

	class Request{
		private $controlador;
		private $metodo;
		private $argumento;

		public function __construct(){
			if (isset($_GET['url'])) {

				// filter_input va a filtrar la direccion url que estamos tipeando manualmente y la devuelve en un valor string
				$ruta = filter_input(INPUT_GET, 'url', FILTER_SANITIZE_URL);

				//explode va a convertir ese string en un arreglo indicandole el delimitador
				$ruta = explode('/', $ruta);
				//array_filter va a filtrar ese arreglo
				$ruta = array_filter($ruta);
				//Con array_shift estoy eliminando del arreglo el valor que este en la posicion 0 del mismo y se lo asigno al controlador, luego el arreglo original se acorta y se mueve.
				$this->controlador = strtolower(array_shift($ruta));

				//Hago lo mismo pero tomando en cuenta que el arreglo original ya se movio y le asigno el primer valor al atributo metodo
				$this->metodo = strtolower(array_shift($ruta));

				//Argumento tendra el resto del arreglo
				$this->argumento=$ruta;

				if(!$this->metodo){
					$this->metodo="index";
				};

			}else{
				$this->controlador = "home";
				$this->metodo = "index";
			}
		}


		public function get_controlador(){
			return $this->controlador;
		}
		public function get_metodo(){
			return $this->metodo;
		}
		public function get_argumento(){
			return $this->argumento;
		}
	}

?>