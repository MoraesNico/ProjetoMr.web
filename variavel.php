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
<h1>Aula sobre Variáveis em PHP</h1>

<h2>1. O que são variáveis?</h2>
<p>Em programação, uma variável é um espaço na memória onde você pode armazenar dados que podem ser usados e manipulados pelo programa. Em PHP, as variáveis são representadas por um nome que começa com o caractere <code>$</code>.</p>

<h2>2. Declaração de Variáveis</h2>
<p>Em PHP, você pode declarar uma variável simplesmente atribuindo um valor a ela. Não é necessário declarar o tipo da variável antecipadamente; o PHP é uma linguagem de tipagem dinâmica.</p>
<pre><code>$nome = "Maria";
$idade = 30;
$altura = 1.75;
$casado = false;</code></pre>
<p>Aqui estão os tipos de dados mais comuns que você pode armazenar em variáveis:</p>
<ul>
    <li><strong>String</strong>: Sequência de caracteres, como <code>"Olá, Mundo!"</code>.</li>
    <li><strong>Integer</strong>: Números inteiros, como <code>25</code>.</li>
    <li><strong>Float</strong>: Números com ponto flutuante, como <code>3.14</code>.</li>
    <li><strong>Boolean</strong>: Valores <code>true</code> ou <code>false</code>.</li>
</ul>

<h2>3. Regras para Nomear Variáveis</h2>
<p>Algumas regras e boas práticas para nomear variáveis em PHP:</p>
<ul>
    <li>O nome da variável deve começar com o caractere <code>$</code> seguido por uma letra ou um sublinhado <code>_</code>.</li>
    <li>O restante do nome pode conter letras, números e sublinhados.</li>
    <li>Os nomes de variáveis são sensíveis a maiúsculas e minúsculas (<code>$idade</code> e <code>$Idade</code> são diferentes).</li>
</ul>
<p>Exemplos válidos:</p>
<pre><code>$nomeCompleto = "Ana Silva";
$anoNascimento = 1990;
$_email = "ana@exemplo.com";</code></pre>
<p>Exemplos inválidos:</p>
<pre><code>$1nome = "João"; // Não pode começar com um número
$nome-completo = "João"; // Hífen não é permitido</code></pre>

<h2>4. Manipulando Variáveis</h2>
<p>Você pode usar variáveis em expressões e concatená-las com strings.</p>
<p>Exemplo de concatenação:</p>
<pre><code>$primeiroNome = "Carlos";
$sobrenome = "Santos";
$nomeCompleto = $primeiroNome . " " . $sobrenome;
echo $nomeCompleto; // Output: Carlos Santos</code></pre>
<p>Exemplo de operação matemática:</p>
<pre><code>$idade = 25;
$anoAtual = 2024;
$anoNascimento = $anoAtual - $idade;
echo "Ano de nascimento: " . $anoNascimento; // Output: Ano de nascimento: 1999</code></pre>

<h2>5. Escopo das Variáveis</h2>
<p>O escopo de uma variável define onde ela pode ser acessada no seu código. Em PHP, as variáveis têm escopo global ou local:</p>
<ul>
    <li><strong>Variáveis Globais</strong>: São acessíveis em todo o script. Para acessar uma variável global dentro de uma função, você deve usar a palavra-chave <code>global</code>.</li>
</ul>
<pre><code>$nome = "João"; // Variável global

function exibirNome() {
global $nome;
echo $nome;
}

exibirNome(); // Output: João</code></pre>
<ul>
    <li><strong>Variáveis Locais</strong>: São declaradas dentro de uma função e só são acessíveis dentro dessa função.</li>
</ul>
<pre><code>function definirIdade() {
$idade = 30; // Variável local
echo $idade;
}

definirIdade(); // Output: 30</code></pre>

<h2>6. Variáveis de Superglobal</h2>
<p>PHP possui variáveis superglobais que são acessíveis de qualquer lugar no script. Algumas das mais comuns são:</p>
<ul>
    <li><code>$_GET</code> - Dados enviados via método GET</li>
    <li><code>$_POST</code> - Dados enviados via método POST</li>
    <li><code>$_SESSION</code> - Dados de sessão</li>
    <li><code>$_COOKIE</code> - Dados de cookies</li>
    <li><code>$_SERVER</code> - Informações do servidor</li>
</ul>
<p>Exemplo de uso de <code>$_GET</code>:</p>
<pre><code>// URL: http://exemplo.com/index.php?nome=Lucas
echo $_GET['nome']; // Output: Lucas</code></pre>

<h2>7. Conclusão</h2>
<p>Variáveis são fundamentais em qualquer linguagem de programação e o PHP facilita seu uso com sua abordagem de tipagem dinâmica e flexibilidade. Compreender como declarar, manipular e usar variáveis é essencial para escrever scripts PHP eficazes.</p>


<?php include "rodape.php"; ?>