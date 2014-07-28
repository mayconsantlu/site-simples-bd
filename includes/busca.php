<?php
if (isset($_POST['buscar']) && ($_POST['buscar'] != "") )
	{
		$busca 		= $_POST['buscar'];
		echo '<div class="alert alert-info" role="alert">Buscando por: '.$busca.'</div>';
		
		#echo $busca.'<br />';

		#$query = "Select * from paginas where titulo like '%$busca%' or conteudo like '%$busca%' order by desc;";
		$query = "Select * from paginas where titulo like '%$busca%' or conteudo like '%$busca%';";
		//$stmt = $conexao->query($query);
		$stmt = $conexao -> prepare($query);
		//$stmt -> bindValue("busca", $busca);
		$stmt -> execute();
		$resultado = $stmt -> fetchAll(PDO::FETCH_ASSOC);
		//print_r($resultado);
		
		foreach ($resultado as $result) {
			echo $resultado[0]["titulo"];
		}
		
		
	}else {
		echo '<div class="alert alert-danger" role="alert"><span class="glyphicon glyphicon-exclamation-sign"></span> Desculpe o campo de pesquisa não pode ficar em branco!</div>';
	}


