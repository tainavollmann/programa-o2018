
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


    case 'inserir':

        if (!isset($_POST['gravar'])) {
            include('../view/template/cabecalho.php');
            include('../view/produtos/inserir.php');
            include('../view/template/rodape.php');
        }else{
            $prod = new Produto(null, $_POST['nome'], $_POST['descricao'], $_POST['foto_produto'] = null, $_POST['preco'], $_POST['categoria']);

            $crud = new ProdutoCrud();
            $res = $crud->insertProduto($prod);
            echo $res;
            header('Location: produto.php');
        }
        break;

    case 'alterar':
        if (!isset($_POST['gravar'])) {
            $id = $_GET['id'];
            $crud = new ProdutoCrud();
            $produto = $crud->getProduto($id);

            include('../view/template/cabecalho.php');
            include('../view/produtos/alterar.php');
            include('../view/template/rodape.php');
        }else{

            $prod = new Produto($_POST['id'], $_POST['nome'], $_POST['descricao'], $_POST['preco'], null, $_POST['id_categoria']);
            $crud = new ProdutoCrud();
            $res = $crud->updateProduto($prod);

            header('Location: produto.php');
        }
        break;

    case 'excluir':

        $crud = new ProdutoCrud();
        $crud->deleteProduto($_GET['id']);
        header('Location: produto.php');

        break;
}

?>