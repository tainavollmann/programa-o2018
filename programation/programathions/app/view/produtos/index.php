<a href="produto.php?action=inserir">Incluir novo produto</a>
<br>
<br>

<table>
            <?php foreach($produtos as $produto): ?>
    <tr>
        <td><a href="?action=show&id=<?= $produto->getId();?>"><?=$produto->getNome() ?></a></td>
        <td><?=$produto->getDescricao() ?></td>
        <td><?=$produto->getPreco() ?></td>
        <td><?=$produto->getFoto() ?></td>
    </tr>
<?php endforeach; ?>
</table>