
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>CRUD - Listar</title>		
	</head>
	<body>
		<a href="cad_usuario.php">Cadastrar</a><br>
		<a href="index.php">Listar</a><br>
		<h1>Listar Usuário</h1>
		
	<?php
        include_once("conexao.php");
		$list = "SELECT * FROM usuarios LIMIT $inicio, $qnt_result_pg";
		$listar = mysqli_query($conn, $list);
		while($listar = mysqli_fetch_assoc($list)){
			echo "ID: " . $listar['id'] . "<br>";
			echo "Nome: " . $listar['nome'] . "<br>";
			echo "E-mail: " . $listar['email'] . "<br>";
			echo "Telefone-1: " . $listar['telefone_1'] . "<br>";
			$tel = FILTER_INPUT(INPUT_GET,'telefone_2',FILER_SANITIZE_NUMBER_INT);
			if(isset(tel)){
			echo "Telefone-2: " . $listar['telefone_2'] . "<br>";
			}
			unset(tel);
			echo "<a href='editar.php?id=" . $listar['id'] . "'>Editar</a><br>";
			echo "<a href='deletar.php?id=" . $listar['id'] . "'>Apagar</a><br><hr>";
		}	
		?>		
	</body>
</html>