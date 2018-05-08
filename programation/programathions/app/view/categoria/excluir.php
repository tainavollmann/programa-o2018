<form method="get" action="categoria.php?action=excluir">
    <input type="hidden" name="id" value="<?= $categoria->getId() ?>">
    <label for="nome">Nome</label>
    <input type="text" name="nome" id="nome" value="<?= $categoria->getNome() ?>">
    <br>
    <label for="descricao">Decrição</label>
    <textarea name="descricao" id="descricao" cols="30" rows="10"></textarea>
    <br>
    <input type="submit" name="gravar" value="Gravar">

</form>