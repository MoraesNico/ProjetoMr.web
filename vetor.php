<?php include "cabecalho.php"; ?>

<style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 20px;
            color: #333;
        }
        h1, h2 {
            color: #2c3e50;
        }
        code {
            background-color: #f4f4f4;
            padding: 2px 4px;
            border-radius: 3px;
            font-family: Consolas, Monaco, "Courier New", monospace;
        }
        pre {
            background-color: #f4f4f4;
            padding: 10px;
            border-radius: 5px;
            overflow-x: auto;
            white-space: pre-wrap;
            font-family: Consolas, Monaco, "Courier New", monospace;
        }
    </style>

<br><br>
<h1>Aula sobre Vetores e Matrizes em PHP</h1>

<h2>1. O que são Vetores?</h2>
<p>Vetores, ou arrays, são estruturas de dados que armazenam múltiplos valores em uma única variável. Cada valor no vetor é acessado por um índice, que é uma chave numérica ou associativa.</p>

<h2>2. Vetores Simples</h2>
<p>Vetores simples (ou unidimensionais) armazenam uma lista de valores.</p>
<pre><code>&lt;?php
// Criando um vetor simples
$frutas = array("Maçã", "Banana", "Laranja");

// Acessando elementos do vetor
echo $frutas[0]; // Output: Maçã
echo $frutas[1]; // Output: Banana

// Adicionando elementos ao vetor
$frutas[] = "Pêra";

// Imprimindo todos os elementos
foreach ($frutas as $fruta) {
echo $fruta . "&lt;br&gt;";
}
?&gt;</code></pre>
<p>No exemplo acima:</p>
<ul>
    <li>O vetor <code>$frutas</code> armazena três frutas.</li>
    <li>Os elementos são acessados usando índices numéricos.</li>
    <li>Adicionamos um novo elemento ao vetor e usamos um <code>foreach</code> para imprimir todos os elementos.</li>
</ul>

<h2>3. Vetores Associativos</h2>
<p>Vetores associativos utilizam chaves nomeadas em vez de índices numéricos.</p>
<pre><code>&lt;?php
// Criando um vetor associativo
$pessoa = array(
"nome" => "Ana",
"idade" => 28,
"email" => "ana@exemplo.com"
);

// Acessando elementos do vetor associativo
echo $pessoa["nome"]; // Output: Ana
echo $pessoa["idade"]; // Output: 28

// Adicionando elementos ao vetor associativo
$pessoa["telefone"] = "1234-5678";

// Imprimindo todos os elementos
foreach ($pessoa as $chave => $valor) {
echo $chave . ": " . $valor . "&lt;br&gt;";
}
?&gt;</code></pre>
<p>No exemplo acima:</p>
<ul>
    <li>O vetor <code>$pessoa</code> armazena informações sobre uma pessoa com chaves associativas.</li>
    <li>Os elementos são acessados usando chaves nomeadas.</li>
    <li>Adicionamos um novo elemento ao vetor e usamos um <code>foreach</code> para imprimir todas as chaves e valores.</li>
</ul>

<h2>4. O que são Matrizes?</h2>
<p>Matrizes, ou arrays multidimensionais, são vetores que contêm outros vetores como seus elementos. Eles são usados para armazenar dados em tabelas, matrizes ou outras estruturas bidimensionais e superiores.</p>

<h2>5. Matrizes Bidimensionais</h2>
<p>Uma matriz bidimensional pode ser vista como uma tabela com linhas e colunas.</p>
<pre><code>&lt;?php
// Criando uma matriz bidimensional
$tabela = array(
array("Nome", "Idade", "Cidade"),
array("João", 25, "São Paulo"),
array("Maria", 30, "Rio de Janeiro"),
array("Pedro", 22, "Belo Horizonte")
);

// Acessando elementos da matriz
echo $tabela[0][1]; // Output: Idade
echo $tabela[1][2]; // Output: São Paulo

// Imprimindo a matriz
foreach ($tabela as $linha) {
foreach ($linha as $coluna) {
    echo $coluna . " ";
}
echo "&lt;br&gt;";
}
?&gt;</code></pre>
<p>No exemplo acima:</p>
<ul>
    <li>A matriz <code>$tabela</code> armazena informações em uma tabela com 4 linhas e 3 colunas.</li>
    <li>Os elementos são acessados usando índices duplos, representando a linha e a coluna.</li>
    <li>Usamos dois laços <code>foreach</code> para imprimir a matriz em formato de tabela.</li>
</ul>

<h2>6. Matrizes Multidimensionais</h2>
<p>As matrizes multidimensionais têm mais de duas dimensões e podem ser usadas para representar estruturas de dados mais complexas.</p>
<pre><code>&lt;?php
// Criando uma matriz tridimensional
$dados = array(
"2024" => array(
    "Janeiro" => array("Salário", "Rendimentos"),
    "Fevereiro" => array("Salário", "Rendimentos")
),
"2025" => array(
    "Janeiro" => array("Salário", "Rendimentos"),
    "Fevereiro" => array("Salário", "Rendimentos")
)
);

// Acessando elementos da matriz tridimensional
echo $dados["2024"]["Janeiro"][0]; // Output: Salário

// Imprimindo a matriz tridimensional
foreach ($dados as $ano => $meses) {
echo "Ano: " . $ano . "&lt;br&gt;";
foreach ($meses as $mes => $itens) {
    echo "Mês: " . $mes . "&lt;br&gt;";
    foreach ($itens as $item) {
        echo $item . " ";
    }
    echo "&lt;br&gt;";
}
}
?&gt;</code></pre>
<p>No exemplo acima:</p>
<ul>
    <li>A matriz <code>$dados</code> é uma estrutura tridimensional representando dados financeiros por ano, mês e item.</li>
    <li>Os elementos são acessados usando três índices.</li>
    <li>Usamos três laços <code>foreach</code> para imprimir a matriz tridimensional.</li>
</ul>

<h2>7. Conclusão</h2>
<p>Vetores e matrizes são essenciais para armazenar e manipular conjuntos de dados em PHP. Entender como criar e usar essas estruturas de dados ajudará você a desenvolver aplicações mais complexas e eficientes.</p>


<?php include "rodape.php"; ?>