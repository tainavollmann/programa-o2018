<?php

require_once ('../models/CategoriaCrud.php');

if (isset($_GET['action'])){
    $action = $_GET['action'];
}else{
    $action = 'index';
}

switch($action){
    case 'index':

    $crud = new CategoriaCrud();
    $categorias = $crud->getCategorias();

    include ('../view/template/cabecalho.php');
    include ('../view/categoria/index.php');
    include ('../view/template/rodape.php');

    break;

    case 'show':
        $id = $_GET['id'];
        $crud = new CategoriaCrud();
        $categoria = $crud->getCategoria($id);

        include ('../view/template/cabecalho.php');
        include ('../view/categoria/show.php');
        include ('../view/template/rodape.php');

        break;

    case 'inserir':

        if (!isset($_POST['gravar'])) {
            include('../view/template/cabecalho.php');
            include('../view/categoria/inserir.php');
            include('../view/template/rodape.php');
        }else{
            $cat = new Categoria(null, $_POST['nome'], $_POST['descricao']);
            $crud = new CategoriaCrud();
            $crud->insertCategoria($cat);
            header('Location: categoria.php');
        }
        break;

    case 'alterar':
        if (!isset($_POST['gravar'])) {
            $id = $_GET['id'];
            $crud = new CategoriaCrud();
            $categoria = $crud->getCategoria($id);

            include('../view/template/cabecalho.php');
            include('../view/categoria/alterar.php');
            include('../view/template/rodape.php');
        }else{
            $cat = new Categoria($_POST['id'], $_POST['nome'], $_POST['descricao']);
            $crud = new CategoriaCrud();
            $res = $crud->updateCategoria($cat);

            header('Location: categoria.php');
        }
        break;

    case 'excluir':

        $crud = new CategoriaCrud();
        $crud->deleteCategoria($_GET['id']);
        header('Location: categoria.php');

        break;
}

?>
