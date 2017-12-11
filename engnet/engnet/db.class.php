<?php
	
	class db {

		private $host = 'localhost';

		private $usuario = 'root';

		private $senha = '';

		private $database = 'projetofinal';

		public function conecta_mysql(){
			mysqli_connect($this->host, $this->usuario, $this->senha, $this->database)
		}
}

?>