<?php

	require '../app/models/Categoria.php';
	require '../app/models/CategoriaCrud.php';

	$c1 = new Categoria();
	$c1->setId(1);
	$c1->setNome("Eletrônicos");
	$c1->setDescricao("Periféricos em geral e radicais");
	print_r($c1);

	//com construct

	$c2 = new Categoria(2,"Esportes","Equipamentos esportivos radicais");

	print_r($c2);

	//testando a CategoriaCrud
$crud = new CategoriaCrud();
$categoria = $crud->getCategoria(5);

print_r($categoria);