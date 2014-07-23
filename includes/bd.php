<?php
try {
	$conexao = new \PDO("mysql:host=localhost; dbname=code", "root", "root");
	#$resultado = $conexão->exec($query); //exec rodar varios comandos de criação ou inserção
 	} 
	catch(\PDOException $e) {
            echo "Nao foi poss�vel estabelecer a conexao com o Bando de Dados<br/>" .$e->getMessage().": ".$e->getCode();
	}

