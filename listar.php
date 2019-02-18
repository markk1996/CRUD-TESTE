
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>CRUD - Listar</title>		
	</head>
	<body>
		<a href="pros_cad.php">Cadastrar</a><br>
		<h1>Listando Usuários</h1>
		
	<?php
	// neste é realizado a listagem de todos os usuarios de acordo como foi salvo no banco de dados 
        include_once("conexao.php");
		$list = "SELECT * FROM usuarios LIMIT $inicio, $qnt_result_pg";
		$listar = mysqli_query($conn, $list);
		//Criado um wille para listar todos os usuarios, com as opções de apagar ou editar
		while($listar = mysqli_fetch_assoc($list)){
			echo "ID: " . $listar['id'] . "<br>";
			echo "Nome: " . $listar['nome'] . "<br>";
			echo "E-mail: " . $listar['email'] . "<br>";
			echo "Telefone-1: " . $listar['telefone_1'] . "<br>";			
			echo "Telefone-2: " . $listar['telefone_2'] . "<br>";
			echo "<a href='editar.php?id=" . $listar['id'] . "'>Editar</a><br>";
			echo "<a href='deletar.php?id=" . $listar['id'] . "'>Apagar</a><br><hr>";
		}	
		?>		
	</body>
</html>
