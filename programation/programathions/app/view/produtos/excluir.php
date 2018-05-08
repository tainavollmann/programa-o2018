<form method="get" action="produto.php?action=excluir">
    <input type="hidden" name="id" value="<?= $produto->getId() ?>">
    <label for="nome">Nome</label>
    <input type="text" name="nome" id="nome" value="<?= $produto->getNome() ?>">
    <br>
    <label for="descricao">Decrição</label>
    <textarea name="descricao" id="descricao" cols="30" rows="10"></textarea>
    <br>
    <input type="submit" name="gravar" value="Gravar">

</form>