<?php  

	
	class ErroController
	{
		public function index()
		{
			$loader = new \Twig\Loader\FilesystemLoader('app/view');
			$twig = new \Twig\Environment($loader);
			$template = $twig->load('erro.html');
	
			$parametros = array();
				// $parametros ['produtos'] = $estoque;

			$conteudo = $template->render($parametros);

				// var_dump($conteudo);
			echo $conteudo;
				// var_dump($estoque);
			echo '<di class="bg-successo">ERRO::Pagina não encotrada</div>';
		}
	}


?>