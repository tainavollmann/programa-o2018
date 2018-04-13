
<?php

require_once ('../models/ProdutoCrud.php');

if (isset($_GET['action'])){
    $action = $_GET['action'];
}else{
    $action = 'index';
}

switch($action){
    case 'index':

        $crud = new ProdutoCrud();
        $produtos = $crud->getProdutos();

        include ('../view/template/cabecalho.php');
        include ('../view/produtos/index.php');
        include ('../view/template/rodape.php');

        break;

    case 'show':
        $id = $_GET['id'];
        $crud = new ProdutoCrud();
        $produto = $crud->getProduto($id);

        include ('../view/template/cabecalho.php');
        include ('../view/produtos/show.php');
        include ('../view/template/rodape.php');

        break;
}

?>