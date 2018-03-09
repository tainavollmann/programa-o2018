<?php

require '../app/models/Produto.php';

$p1 = new Produto();
$p1->setid(1);
$p1->setNome("Camiseta");
$p1->setDescricao("Camiseta");
$p1->setPreco(24.00);
$p1->setFoto("");
$p1->setIdcategoria("XABLAU");

print_r($p1);

$p2 = new Produto(2, 'Bola de pelo', 'Bola de pelo', '000', '', 2);

//com construct

