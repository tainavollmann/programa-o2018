<div class="submenu">

    <a href="">Editar Produto</a>
    <a href="">Excuir Produto</a>

</div>

<h2>Detalhes do produto - <?= $produto->getNome()?></h2>

<p><b>Descrição:</b><?= $produto->getDescricao()?></p>
<p><?= $produto->getFoto()?></p>
<p><b>Preço:</b><?= $produto->getPreco()?></p>
