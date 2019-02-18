<?php
	include_once("conexao.php");
	$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
	$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
	$telefone_1 = filter_input(INPUT_POST, 'telefone_1', FILTER_SANITIZE_STRING);
	$telefone_2 = filter_input(INPUT_POST, 'telefone_2', FILTER_SANITIZE_STRING);
	$cad = "INSERT INTO usuarios (nome, email,telefone_1,telefone_2) VALUES ('$nome', '$email','telefone_1,'telefone_2')";
	$cadastrar = mysqli_query($conn, $cad);
?>