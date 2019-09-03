<?php 
	
	class EstoqueGeral

	{
		public static function SelecionaTodos()
		{
			$con = Connection::getConn();
			
			$sql = "SELECT * FROM equipamento ORDER BY nome_modelo DESC";
			$sql = $con->prepare($sql);
			$sql->execute();

			$resultado = array();

			while ($row = $sql->fetchObject('EstoqueGeral')) {
				$resultado[] = $row;
			}
			
			if (!$resultado) {
				throw new Exception("Não foi encotrado nenhum registro no banco");
				
			}
			return $resultado;
		}
	}



?>