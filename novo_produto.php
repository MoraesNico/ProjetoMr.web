<?php include "cabecalho.php" ?>

<?php
if( isset($_GET['valor']) && isset($_GET['descricao']))
{
    echo "<h1> ".$_GET['valor']." descrição: ". $_GET['descricao']. " <h1>";
}
?>

<form action="novo_produto.php"; method="get">
    <label for="">Descrição do Produto</label>
    <input class="form-control" name="Descricao" />
    <br>
    <label>Valor dos Produtos</label>
    <input class="form-control" name="valor" />
    <br>
    <button type="submit" class="btn btn-success">
        Enviar Dados
    </button>
</form>

<?php include "rodape.php" ?>