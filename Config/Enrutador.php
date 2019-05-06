<?php namespace Config;

	class Enrutador{

		public static function run(Request $request){
			//Cargar controlador
			$controlador = $request->get_controlador() . "Controllers";
			$ruta = ROOT . "Controllers" . DS . $controlador . ".php";
			$metodo = $request->get_metodo();
			if($metodo == "index.php"){
				$metodo = "index";
			}
			$argumento = $request->get_argumento();

			if (is_readable($ruta)) {
				require_once $ruta;
				$mostrar = "Controllers\\".$controlador;
				$controlador = new $mostrar;

				if (!isset($argumento)){
					$datos=call_user_func(array($controlador,$metodo));
				}else{
					$datos=call_user_func_array(array($controlador,$metodo),$argumento);
				}
			}
			//Cargar Vistas
			$ruta = ROOT . "Views" . DS . $request->get_controlador() . DS . $request->get_metodo() .".php";

			if (is_readable($ruta)){
				require_once $ruta;
			}else{
				//header("location:".URL."404");
				echo "<script>window.location.href='".URL."404';</script>";
				//Si dejo la funcion header para redireccionar, cuando vayan a eliminar un estudiante o una sección allá en esa funcion delete tambien se llamó a un header y pasa que en vez de activarse el header del delete que deberia redireccionar a la vista del estudiante se activa es este header 404 porque al parecer en el transcurso de la eliminacion la ruta queda como no existente. por eso uso location con javascript.
			}
		}
	}
	
?>