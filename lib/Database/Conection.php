<?php


	abstract class connection
	{
		private static $conn;

		public static function getConn()
		{
			if (self::$conn == null) {
				self:: $conn = new PDO('mysql: host=localhost; dbname=sge;','root','');
			}

			return self::$conn;
		}

	}



?>