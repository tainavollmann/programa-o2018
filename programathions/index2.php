<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
	<title>léo e Gen</title>
</head>
<body>

<ul>
	<li><a href="produtos.php?categoria=1">Esportes</a></li>
	<li><a href="produtos.php?categoria=2">Eletronicos</a></li>
	<li><a href="produtos.php?categoria=3">Roupas</a></li>
	<li><a href="produtos.php?categoria=4">Outros</a></li>
</ul>
<br>
<br>
	<form method="post" action="produtos.php">
		<input type="text" name="busca">
		<input type="submit">
	</form>
<br>
<br>
<?php
	if (!isset($_SESSION['nome'])) {
?>
	

<form method="post" action="verifica.php">
	<input type="text" name="usuario" placeholder="Usuário">
	<br>
	<input type="password" name="senha" placeholder="Senha">
	<br>
	<input type="submit" name="entrar">
</form>
<?php
	}else{
?>

	<p>Olá <?= $_SESSION['nome'] ?> | <a href="logout.php">Sair</a></p>

<?php
	}
?>
</body>
</html>