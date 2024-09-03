<?php include "cabecalho.php";?>
<?php include "conexao.php";?> 

<?php
if( isset($_POST['valor']) && isset($_POST['Descricao']))
{
    $descricao = $_POST['Descricao'];
    $valor = str_replace(",",".",$_POST['valor']);
    $query = "Insert into produtos (Descricao, Valor)
                VALUES( '$descricao', $valor )";

    $resultado = mysqli_query($conexao, $query);

    if($resultado){
    echo "<div class='alert alert-success'>Salvo com sucesso</div>";
    }
}
?>

<form action="novo_produto.php"; method="post">
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