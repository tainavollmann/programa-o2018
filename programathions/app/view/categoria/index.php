<html>

    <h1>Lista de Categorias</h1>

        <table>
            <?php foreach($categorias as $categoria): ?>
                <tr>
                    <td><?=$categoria->getNome() ?></td>
                    <td><?=$categoria->getDescricao() ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </body>
</html>