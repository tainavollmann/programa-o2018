
        <table>
            <?php foreach($categorias as $categoria): ?>
                <tr>
                    <td><a href="?action=show&id=<?= $categoria->getId();?>"><?=$categoria->getNome() ?></a></td>
                    <td><?=$categoria->getDescricao() ?></td>
                    <td></td>
                </tr>
            <?php endforeach; ?>
        </table>
