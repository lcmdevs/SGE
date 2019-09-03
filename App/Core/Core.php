<?php  

	class Core
	{
		public function start($urlGet)
		{

			if (isset($urlGet['metodo'])) {
				$acao = $urlGet['metodo'];
			}else{
				$acao = 'index';
			}


			if (isset($urlGet['pagina'])) {

				$Controller = ucfirst($urlGet['pagina'].'Controller');
			}else{
				
				$Controller = 'HomeController';
			}

			// Verificar se a classe acessada existe

			if (!class_exists($Controller)) {
				
				$Controller = 'ErroController';
			}

			call_user_func_array(array(new $Controller, $acao), array());
			
		}
	}


?>