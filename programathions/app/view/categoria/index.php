<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Descrição</th>
        <th>Ações</th>

    </tr>
    </thead>
    <tbody>
    <?php foreach ($categorias as $categoria): ?>
        <tr>
            <th scope="row"><?= $categoria->getId() ?></th>
            <td><?=$categoria->getNome() ?></td>
            <td><?=$categoria->getDescricao() ?></td>
            <td><a href="categoria.php?action=editar&id_categoria=<?=$categoria->getId();?>&nome_categoria=<?=$categoria->getNome();?>&descricao_categoria=<?=$categoria->getDescricao();?>">Editar</a> | <a href="categoria.php?action=excluir&id_categoria=<?=$categoria->getId();?>">Excluir</a></td>
        </tr>
    <?php endforeach ?>

    </tbody>
</table>