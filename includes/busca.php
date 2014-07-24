<?php
if (isset($_POST['buscar']) && ($_POST['buscar'] != "") )
	{
		$busca 		= $_POST['buscar'];
	}else {
		echo "Desculpe o campo de pesquisa não pode ficar em branco!";
	}

echo $busca.'<br />';

#$query = "Select * from paginas where titulo like '%$busca%' or conteudo like '%$busca%' order by desc;";
$query = "Select * from paginas where titulo like '%$busca%' or conteudo like '%$busca%' order by desc ;";
//$stmt = $conexao->query($query);
$stmt = $conexao -> prepare($query);
//$stmt -> bindValue("busca", $busca);
$stmt -> execute();
$resultado = $stmt -> fetchAll(PDO::FETCH_ASSOC);
print_r($resultado);

foreach ($resultado as $result) {
	echo $resultado["titulo"];
}

//'%$pesquisar%' or desc_rapida like '%$pesquisar%' or tags like '%$pesquisar%' order by plano desc; "