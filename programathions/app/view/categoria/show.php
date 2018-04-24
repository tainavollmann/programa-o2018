<div class="submenu">

    <a href="categoria.php?action=alterar&id=<?= $categoria->getId() ?>">Editar Categoria</a>
    <a href="categoria.php?action=excluir&id=<?= $categoria->getId() ?>">Excuir Categoria</a>

</div>

<h2>Detalhes da categoria - <?= $categoria->getNome()?></h2>

<p><b>Descrição:</b><?= $categoria->getDescricao()?></p>