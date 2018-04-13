<?php session_start(); ?>

<html>
<head>

    <title>Lista de Categorias</title>
    <link rel="stylesheet" href="app/view/template/style.css">

</head>
<body>
<div class="cabecalho">

    <ul>
        <li><a href="index.php">Início</a></li>
        <li><a href="app/controller/categoria.php"> Categorias </a></li>
        <li><a href="app/controller/produto.php"> Produtos </a></li>

    </ul>
</div>


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
	require_once ('app/view/template/rodape.php');
?>
