<?php

require_once ('includes/bd.php');

// Limpando a tabela
//$sql = "truncate table paginas;";
/* @var $stmt type */
//$stmt = $conexao->prepare($sql);
//$stmt->execute();
//echo 'foi';

$insert = "insert into paginas (titulo, conteudo) values
	('home', 'Conteudo da página inicial'),
	('empresa','Conteudo da página empresa'),
	('produtos','Conteudo da página de produtos'),
	('servicos','Conteudo da página de serviços'),
	('contato','Conteudo da página de contato');";
$stmt = $conexao->prepare($insert);
$stmt->execute();

/*
//Criando a Página Inicial
$sql1 = "insert into paginas (titulo, conteudo) values ('home', 'Conteudo da página inicial')";
$stmt = $conexao->prepare($sql1);
$stmt->execute();

//Criando a Página Empresa
$sql2 = "insert into paginas (titulo, conteudo) values ('empresa', 'Conteudo da página Empresa')";
$stmt = $conexao->prepare($sql2);
$stmt->execute();

//Criando a Página Produtos
$sql3 = "insert into paginas (titulo, conteudo) values ('produtos', 'Conteudo da página de Produtos')";
$stmt = $conexao->prepare($sql3);
$stmt->execute();

//Criando a Página Serviços
$sql4 = "insert into paginas (titulo, conteudo) values ('servicos', 'Conteudo da página de Serviços')";
$stmt = $conexao->prepare($sql4);
$stmt->execute();

//Criando a Página Contato
$sql5 = "insert into paginas (titulo, conteudo) values ('contato', 'Conteudo da página de Contato')";
$stmt = $conexao->prepare($sql5);
$stmt->execute();
*/