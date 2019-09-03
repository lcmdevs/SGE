<?php  

	
	class HomeController
	{
		public function index()
		{
			// try{

				// $estoque = EstoqueGeral::SelecionaTodos();

				$loader = new \Twig\Loader\FilesystemLoader('app/view');
				$twig = new \Twig\Environment($loader);
				$template = $twig->load('home.html');
	
				$parametros = array();
				// $parametros ['produtos'] = $estoque;

				$conteudo = $template->render($parametros);

				// var_dump($conteudo);
				echo $conteudo;
				// var_dump($estoque);

			// }catch(Exception $e){

				// echo $e->getMessage();

			// }

		}
		
	}


?>