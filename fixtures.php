<?php

require_once ('includes/bd.php');

// Limpando a tabela
//$sql = "truncate table paginas;";
/* @var $stmt type */
//$stmt = $conexao->prepare($sql);
//$stmt->execute();
//echo 'foi';

$insert = "insert into paginas (titulo, conteudo) values
	('home', 'Conteudo da p�gina inicial'),
	('empresa','Conteudo da p�gina empresa'),
	('produtos','Conteudo da p�gina de produtos'),
	('servicos','Conteudo da p�gina de servi�os'),
	('contato','Conteudo da p�gina de contato');";
$stmt = $conexao->prepare($insert);
$stmt->execute();

/*
//Criando a P�gina Inicial
$sql1 = "insert into paginas (titulo, conteudo) values ('home', 'Conteudo da p�gina inicial')";
$stmt = $conexao->prepare($sql1);
$stmt->execute();

//Criando a P�gina Empresa
$sql2 = "insert into paginas (titulo, conteudo) values ('empresa', 'Conteudo da p�gina Empresa')";
$stmt = $conexao->prepare($sql2);
$stmt->execute();

//Criando a P�gina Produtos
$sql3 = "insert into paginas (titulo, conteudo) values ('produtos', 'Conteudo da p�gina de Produtos')";
$stmt = $conexao->prepare($sql3);
$stmt->execute();

//Criando a P�gina Servi�os
$sql4 = "insert into paginas (titulo, conteudo) values ('servicos', 'Conteudo da p�gina de Servi�os')";
$stmt = $conexao->prepare($sql4);
$stmt->execute();

//Criando a P�gina Contato
$sql5 = "insert into paginas (titulo, conteudo) values ('contato', 'Conteudo da p�gina de Contato')";
$stmt = $conexao->prepare($sql5);
$stmt->execute();
*/