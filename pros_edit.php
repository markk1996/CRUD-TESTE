<?php
	include_once(conexao.php);
	$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);
	$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
	$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
	$telefone_1 = filter_input(INPUT_POST, 'telefone_1', FILTER_SANITIZE_STRING);
	$telefone_2 = filter_input(INPUT_POST, 'telefone_2', FILTER_SANITIZE_STRING);
	$edit = "UPDATE usuarios SET nome='$nome', email='$email',telefone_1 ='telefone_1',telefone_2='telefone_2', WHERE id='$id'";
	$edita = mysqli_query($con,$edit);
	header("Location:listar.php")
?>