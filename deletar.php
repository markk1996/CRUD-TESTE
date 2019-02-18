<?php
        //Deletar qualquer usuario na seleção listar atraves do id 
	inclued_once(conexao.php);
	$id= FILTER_INPUT(INPUT_GET,'ID',FILER_SANITIZE_NUMBER_INT);
	$del= "delete  from usuarios where id= '$id'";
	$deletar=mysqli_query($con,$del);
?>

