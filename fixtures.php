<?php

require_once ('includes/config.php');

// Limpando a tabela;
$conexao -> query("truncate table paginas;");

// Pagina inicial
/*$conexao -> query("insert into paginas (titulo, conteudo) values ('home', 'Conteudo da página inicial');");
$conexao -> query("insert into paginas (titulo, conteudo) values ('empresa', 'Conteudo da página Empresa');");
$conexao -> query("insert into paginas (titulo, conteudo) values ('produtos', 'Conteudo da página de Produtos');");
$conexao -> query("insert into paginas (titulo, conteudo) values ('servicos', 'Conteudo da página de Serviços');");
$conexao -> query("insert into paginas (titulo, conteudo) values ('contato', 'Conteudo da página de Contato');");
*/
 
 /* OBS - Não tentendi o por que, mas ao editar o código abaixo no Netbeans 
  * ele da a mensagem de que a varial $stmt deve ser utilizada apenas uma vez
  * e ao executar ele não funciona, mudei para o Aptana e funcionou normalmente.
  */ 
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

 //Criando a Página Servi�os
 $sql4 = "insert into paginas (titulo, conteudo) values ('servicos', 'Conteudo da página de Serviços')";
 $stmt = $conexao->prepare($sql4);
 $stmt->execute();

 //Criando a Página Contato
 $sql5 = "insert into paginas (titulo, conteudo) values ('contato', 'Conteudo da página de Contato')";
 $stmt = $conexao->prepare($sql5);
 $stmt->execute();
 