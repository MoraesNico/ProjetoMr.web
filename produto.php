<?php include "cabecalho.php";?>
<div class="card">
    <div class="card-header">
    Lista de Produtos
    </div>
    <div class="card-body">
    <form action="produtos.php" method="get">
        <div class="row">
            <div class="col-md-2">
                <a class="btn btn-success" href="novo_produto.php">
                    Cadastrar Produtos
                </a>
            </div>
            <div class="col-md-8">
                <input class="form-control" name="consulta" type="text" />
            </div>

            <div class="col-md-2">
                <button type="submit" class="btn btn-primary">
                    Pesquisar
                </div>
        </div>
    </form>
    </div>

<?php include "rodape.php"; ?>
<?php 
include "conexao.php";
$sql ="SELECT id, descricao, valor FROM produtos";
$resultado = mysqli_query($conexao, $sql);
?>
<center><h1>Produtos Editar e Excluir<h1></center>
<br><BR>
<center><table class="table-striped table-hover table-bordered"></center>
    <thead>
        <tr>
            <th class = "col-3">ID</th>
            <th class = "col-3">Nome</th>
            <th class = "col-3">Valor</th>
            <th class = "col-2"></th>
</tr>
</thead>
<tbody>
    <?php
    if($resultado-> num_rows > 0){
        while($row = $resultado ->fetch_assoc()){
            echo "<tr>";
            echo "<td>" . $row ["id"] . "</td>";
            echo "<td>" . $row ["descricao"] . "</td>";
            echo "<td>" . $row ["valor"] . "</td>";
            echo "<td><a class= 'btn btn-danger'>Editar</a>  ";
            echo "<a class= 'btn btn-danger'>Excluir</a></td>";
            echo "</tr>";

        }
    }else{
        echo"<tr><td colspan='3'>Nenhum registro encontrado</td></tr>";
    }
    $conexao->close();
    ?>
    </tbody>
</table>

<?php include "rodape.php"; ?>