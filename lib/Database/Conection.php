<?php


class Conexao
{

	private $pdo;
	public $msgErro = "";

	public function conectar()
	{
		global $pdo;
		$dbname = "sge";
		$servidor = "localhost";
		$usuario = "root";
		$senha = "";
		try {
			$pdo = new PDO("mysql:dbname=" . $dbname . ";servidor=" . $servidor, $usuario, $senha);
		} catch (PDOException $e) {
			$e->getMessage();
		}
	}
}
