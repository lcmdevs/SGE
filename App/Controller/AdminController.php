<?php  

	class AdminController
	{


		public function index()
		{
			

			$loader = new \Twig\Loader\FilesystemLoader('app/view');
			$twig = new \Twig\Environment($loader);
			$template = $twig->load('home.html');
		
			$parametros = array();
					
					// $parametros ['produtos'] = $estoque;

			$conteudo = $template->render($parametros);

					// var_dump($parametros);
			echo $conteudo;

		}

		public function listaestoque()
		{
			

			$loader = new \Twig\Loader\FilesystemLoader('app/view');
			$twig = new \Twig\Environment($loader);
			$template = $twig->load('listaestoque.html');
		
			$parametros = array();
					
					// $parametros ['produtos'] = $estoque;

			$conteudo = $template->render($parametros);

					// var_dump($parametros);
			echo $conteudo;

		}

		public function armario()
		{

			try {

			// $estoquedePecas = Pecas::selecPK();
			// $Pecas = Pecas::insert($dadosPecas);

			// var_dump($Pecas);

			$loader = new \Twig\Loader\FilesystemLoader('app/view');
			$twig = new \Twig\Environment($loader);
			$template = $twig->load('armario.html');
		
			$parametros = array();
					
			// $parametros ['nome'] = $Pecas;

			$conteudo = $template->render($parametros);

					// var_dump($parametros);
			echo $conteudo;
			} catch (Exception $e) {
				
				echo $e->getMessage();
			}
		}

		public function insert(){

			try {

				Pecas::insert($_POST);

				// header("Location: http://localhost/Daniel/?pagina=admin&metodo=armario");
				// echo '<script>alert("Cadastrado com sucesso!")</script>';
				// echo '<script>location.href="http://localhost/Daniel/?pagina=admin&metodo=armario"</script>';

			} catch (Exception $e) {
				
				// echo '<script>alert("'.$e->getMessage().'")</script>';
				// echo '<script>location.href="http://localhost/Daniel/?pagina=admin&metodo=armario"</script>';
				// header("Location: http://localhost/Daniel/?pagina=admin&metodo=armario");
			}
			
			
		}
		// cadastro de modelo

		public function modelo()
		{
			

			$loader = new \Twig\Loader\FilesystemLoader('app/view');
			$twig = new \Twig\Environment($loader);
			$template = $twig->load('cadastro_modelo.html');
		
			$parametros = array();
					
					// $parametros ['produtos'] = $estoque;

			$conteudo = $template->render($parametros);

					// var_dump($parametros);
			echo $conteudo;

		}
		// Cadastro de part namber.....

		public function partnamber()
		{
			

			$loader = new \Twig\Loader\FilesystemLoader('app/view');
			$twig = new \Twig\Environment($loader);
			$template = $twig->load('cadastro_partnamber.html');
		
			$parametros = array();
					
					// $parametros ['produtos'] = $estoque;

			$conteudo = $template->render($parametros);

					// var_dump($parametros);
			echo $conteudo;

		}

		// Cadastro da descrição

		public function descricao()
		{
			

			$loader = new \Twig\Loader\FilesystemLoader('app/view');
			$twig = new \Twig\Environment($loader);
			$template = $twig->load('descricao.html');
		
			$parametros = array();
					
					// $parametros ['produtos'] = $estoque;

			$conteudo = $template->render($parametros);

					// var_dump($parametros);
			echo $conteudo;

		}
		
		// cadastro da car

		public function cor()
		{
			

			$loader = new \Twig\Loader\FilesystemLoader('app/view');
			$twig = new \Twig\Environment($loader);
			$template = $twig->load('cor.html');
		
			$parametros = array();
					
					// $parametros ['produtos'] = $estoque;

			$conteudo = $template->render($parametros);

					// var_dump($parametros);
			echo $conteudo;

		}

		// Amário dois

		public function armariodois()
		{
			

			$loader = new \Twig\Loader\FilesystemLoader('app/view');
			$twig = new \Twig\Environment($loader);
			$template = $twig->load('armario_dois.html');
		
			$parametros = array();
					
					// $parametros ['produtos'] = $estoque;

			$conteudo = $template->render($parametros);

					// var_dump($parametros);
			echo $conteudo;

		}

		// Armário três

		public function armariotres()
		{
			

			$loader = new \Twig\Loader\FilesystemLoader('app/view');
			$twig = new \Twig\Environment($loader);
			$template = $twig->load('armario_tres.html');
		
			$parametros = array();
					
					// $parametros ['produtos'] = $estoque;

			$conteudo = $template->render($parametros);

					// var_dump($parametros);
			echo $conteudo;

		}
	}

?>