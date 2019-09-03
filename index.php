<?php  


require_once 'lib/Database/Conection.php';

require_once 'App/Controller/AdminController.php';
require_once 'App/Controller/ErroController.php';
require_once 'App/Controller/HomeController.php';

require_once 'App/Model/Pecas.php';
require_once 'App/Model/EstoqueGeral.php';

require_once 'vendor/autoload.php';
require_once 'App/Core/Core.php';

$template = file_get_contents('App/Template/template.html');

ob_start();
	$core = new Core;

	$core->start($_GET);

	$saida = ob_get_contents();

ob_clean();

$tplPronto = str_replace('{{aria-dinamica}}', $saida, $template);

	echo $tplPronto;

?>