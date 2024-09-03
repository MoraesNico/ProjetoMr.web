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
<h1>Aula sobre Funções em PHP</h1>

<h2>1. O que são Funções?</h2>
<p>Funções são blocos de código que realizam uma tarefa específica e podem ser reutilizados em diferentes partes do código. Elas ajudam a organizar o código, evitando a repetição e facilitando a manutenção.</p>

<h2>2. Definindo uma Função</h2>
<p>Para definir uma função em PHP, você usa a palavra-chave <code>function</code>, seguida pelo nome da função, parênteses e chaves.</p>
<pre><code>&lt;?php
function saudacao() {
echo "Olá, Mundo!&lt;br&gt;";
}

// Chamando a função
saudacao(); // Output: Olá, Mundo!
?&gt;</code></pre>
<p>No exemplo acima:</p>
<ul>
    <li>A função <code>saudacao</code> imprime uma mensagem na tela.</li>
    <li>Para chamar a função, basta usar o nome da função seguido por parênteses.</li>
</ul>

<h2>3. Funções com Parâmetros</h2>
<p>Funções podem receber parâmetros, que são valores passados para a função quando ela é chamada. Esses parâmetros permitem que a função realize operações com base em diferentes entradas.</p>
<pre><code>&lt;?php
function saudacaoPersonalizada($nome) {
echo "Olá, " . $nome . "!&lt;br&gt;";
}

// Chamando a função com um parâmetro
saudacaoPersonalizada("Ana"); // Output: Olá, Ana!
saudacaoPersonalizada("Carlos"); // Output: Olá, Carlos!
?&gt;</code></pre>
<p>No exemplo acima:</p>
<ul>
    <li>A função <code>saudacaoPersonalizada</code> recebe um parâmetro chamado <code>$nome</code>.</li>
    <li>O parâmetro é utilizado dentro da função para personalizar a mensagem.</li>
</ul>

<h2>4. Funções com Valor de Retorno</h2>
<p>Funções podem retornar um valor usando a palavra-chave <code>return</code>. O valor retornado pode ser utilizado onde a função é chamada.</p>
<pre><code>&lt;?php
function soma($a, $b) {
return $a + $b;
}

// Chamando a função e armazenando o valor retornado
$resultado = soma(5, 3);
echo "A soma é: " . $resultado; // Output: A soma é: 8
?&gt;</code></pre>
<p>No exemplo acima:</p>
<ul>
    <li>A função <code>soma</code> recebe dois parâmetros e retorna a soma deles.</li>
    <li>O valor retornado pela função é armazenado na variável <code>$resultado</code> e depois é impresso.</li>
</ul>

<h2>5. Funções com Parâmetros Opcionais</h2>
<p>Funções podem ter parâmetros opcionais, que têm um valor padrão se nenhum valor for fornecido quando a função é chamada.</p>
<pre><code>&lt;?php
function saudacaoOpcional($nome = "Mundo") {
echo "Olá, " . $nome . "!&lt;br&gt;";
}

// Chamando a função sem parâmetros
saudacaoOpcional(); // Output: Olá, Mundo!

// Chamando a função com um parâmetro
saudacaoOpcional("Ana"); // Output: Olá, Ana!
?&gt;</code></pre>
<p>No exemplo acima:</p>
<ul>
    <li>A função <code>saudacaoOpcional</code> tem um parâmetro com valor padrão "Mundo".</li>
    <li>Se nenhum valor for fornecido, a função usa o valor padrão.</li>
</ul>

<h2>6. Funções Anônimas (Closures)</h2>
<p>Funções anônimas, ou closures, são funções que não têm um nome e são frequentemente usadas como argumentos para outras funções ou em operações de callback.</p>
<pre><code>&lt;?php
$saudacao = function($nome) {
return "Olá, " . $nome . "!";
};

// Chamando a função anônima
echo $saudacao("Carlos"); // Output: Olá, Carlos!
?&gt;</code></pre>
<p>No exemplo acima:</p>
<ul>
    <li>A função anônima é atribuída à variável <code>$saudacao</code>.</li>
    <li>A função pode ser chamada usando a variável que a armazena.</li>
</ul>

<h2>7. Funções Recursivas</h2>
<p>Funções recursivas são funções que chamam a si mesmas para resolver um problema. Elas são úteis para problemas que podem ser divididos em subproblemas menores.</p>
<pre><code>&lt;?php
function fatorial($n) {
if ($n <= 1) {
    return 1;
} else {
    return $n * fatorial($n - 1);
}
}

// Chamando a função recursiva
echo "Fatorial de 5 é: " . fatorial(5); // Output: Fatorial de 5 é: 120
?&gt;</code></pre>
<p>No exemplo acima:</p>
<ul>
    <li>A função <code>fatorial</code> calcula o fatorial de um número usando recursão.</li>
    <li>A função chama a si mesma com um valor reduzido até atingir o caso base.</li>
</ul>

<h2>8. Conclusão</h2>
<p>Funções são uma parte essencial da programação em PHP e ajudam a organizar e modular o código. Compreender como definir, usar e manipular funções permite criar códigos mais limpos e reutilizáveis.</p>


<?php include "rodape.php"; ?>