<?php
     
     class Conexao
     {
     	private $host = 'localhost';
          private $dbname = 'php_com_pdo';
     	private $dsn = 'php_com_pdo';
     	private $user = 'root';
     	private $pass = '';

     	public function conect()
     	{
     		try {
     			$cox = new PDO(
                    "mysql:host=$this->host;dbname=$this->dbname",
                    "$this->user",
                    "$this->pass"                 
               );
     			
     			return $cox;
     		


     		} catch (PDOException $e) {
     			echo '<p>' . $e->getMessege(). '<p>';
     		}
     	}
     }

?>