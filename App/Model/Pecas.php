<?php

class Pecas

{

	public static function selecPk()
	{

		$con = Connetion::getConn();

		$sql = "SELECT * FROM material";
		$sql = $con->prepare($sql);
		$sql->execute();

		$resultado = array();

		while ($row = $sql->fetchObject()) {
			$resultado[] = $row;
		}

		if (!$resultado) {
			throw new Exception("Não foi encontrado resgistro");
		}
		return $resultado;
	}


	public static function insert($dadosPecas)
	{

		if (empty($dadosPecas['NomeCor'])) {

			echo "<div class='alert alert-success'>Preencha todos os Campos
			<a href='//localhost/SGE/?pagina=admin&metodo=armario' class='nav-link'>
			Tente Novamente!
			</a>
			</div>";
			// header("Location: http://localhost//?pagina=admin&metodo=armario");

			return false;
		}

		$con = Connection::getConn();

		$sql = $con->prepare("SELECT cor FROM cor_pecas WHERE cor = :corr ");
		$sql->bindValue(":corr", $dadosPecas['NomeCor']);
		$sql->execute();

		if ($sql->rowCount($sql) > 0) {
			return false;
		} else {
			// $sql = 'INSERT INTO pecas_cor (cor) VALUES (:corr)';

			$sql = $con->prepare('INSERT INTO cor_pecas (cor) VALUES (:corr)');
			$sql->bindValue(':corr', $dadosPecas['NomeCor']);
			$result = $sql->execute();

			return true;
		}

		if ($result == 0) {
			throw new Exception("<div class='alrte alert-primary'> Não foi possivel fazer o cadastrado </div>");

			return false;
		}

		return true;

		echo "<div class='alert alert-primary'> Material cadastrado!</div>";
		header("Location: http://localhost/SGE/?pagina=admin&metodo=armario");
		// var_dump($result);
	}
}
