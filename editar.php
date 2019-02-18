<!DOCTYPE html>
 // parte de edição do codigo atravez de uma busca no banco do id é vinculando as suas respecitivas atribuiçoes
<?php
	includde_once(conexao.php);
	$busc= "select * from ususarios where id = '$id'";
	$buscar = mysqli_query($con,$busc);
	$edit= mysql_featch_assoc($buscar);
?>
<html>
<head>
	<meta charset="utf-8">
	<title> Editar </title>
</head>
<body>
	<h1>Editar Usuario</h1>
	<form method ='post' action ="pros_edit.php">
		<label>nome</label>
		<input type="text" value= <? php echo = $edit ['nome']; ?> ><br> 
		<label>email</label>.
		<input type="email" value= <? php echo = $edit ['email']; ?> ><br> 
		<label>telefone_1</label>
		<input type="text" value= <? php echo = $edit ['telefone-1']; ?> ><br> 
		<label>telefone_2</label>:
		<input type="text" value= <? php echo = $edit ['telefone-2']; ?> ><br> 
		<input type="submit" value="editar">
	</form>
</body>
</html>
