<?php include "cabecalho.php";?>
<?php include "conexao.php";?> 

<?php
if( isset($_POST['valor']) && isset($_POST['Descricao']))
{
    $descricao = $_POST['Descricao'];
    $valor = str_replace(",",".",$_POST['valor']);
    $imagem = "";
    if(isset($_FILES['imagem']))
    {
        $nomearquivo = $_FILES['imagem']['name'];
        $tmpNomeArquivo = $_FILES['imagem']['tmp_name'];
        $caminhoDestino = "/img/" . basename($nomeArquivo);
        if (move_uploaded_file($tmpNomeArquivo, $caminhoDestino)){
            echo"Imagem enviada com sucesso: " . htmlspecialchars($nomeArquivo);
            $imagem = basename($nomeArquivo);
        } else{
            echo"Erro ao enviar a imagem.";
            $imagem = "semfoto.png";
        }
    }
    else
    {
        $imagem = "semfoto.png";
    }
    $query = "Insert into produtos (Descricao, Valor, Imagem)
                VALUES( '$descricao', $valor, '$imagem' )";

    $resultado = mysqli_query($conexao, $query);

    if($resultado){
    header('location: produtos.php');        
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