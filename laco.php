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
<h1>Aula sobre Laços de Repetição em PHP</h1>

<h2>1. O que são Laços de Repetição?</h2>
<p>Laços de repetição, ou loops, são estruturas que permitem executar um bloco de código várias vezes. Em PHP, existem três principais tipos de laços: <code>for</code>, <code>while</code> e <code>foreach</code>.</p>

<h2>2. Laço <code>for</code></h2>
<p>O laço <code>for</code> é utilizado quando você sabe o número de iterações que deseja realizar. É frequentemente usado para loops com um contador.</p>
<pre><code>&lt;?php
for ($i = 0; $i &lt; 5; $i++) {
echo "Número: " . $i . "&lt;br&gt;";
}
?&gt;</code></pre>
<p>Neste exemplo, o laço <code>for</code> imprime os números de 0 a 4. A estrutura básica do <code>for</code> é:</p>
<ul>
    <li><code>inicialização</code>: Define o ponto inicial do contador.</li>
    <li><code>condição</code>: Verifica se o loop deve continuar.</li>
    <li><code>incremento</code>: Atualiza o contador após cada iteração.</li>
</ul>

<h2>3. Laço <code>while</code></h2>
<p>O laço <code>while</code> é usado quando você deseja repetir um bloco de código enquanto uma condição é verdadeira. É útil quando o número de iterações não é conhecido antecipadamente.</p>
<pre><code>&lt;?php
$i = 0;
while ($i &lt; 5) {
echo "Número: " . $i . "&lt;br&gt;";
$i++;
}
?&gt;</code></pre>
<p>Neste exemplo, o laço <code>while</code> continua a executar enquanto <code>$i</code> for menor que 5. O contador é incrementado dentro do loop.</p>

<h2>4. Laço <code>foreach</code></h2>
<p>O laço <code>foreach</code> é específico para arrays e objetos. Ele é utilizado para percorrer todos os elementos de uma coleção.</p>
<pre><code>&lt;?php
$frutas = array("Maçã", "Banana", "Laranja");
foreach ($frutas as $fruta) {
echo "Fruta: " . $fruta . "&lt;br&gt;";
}
?&gt;</code></pre>
<p>Neste exemplo, o laço <code>foreach</code> percorre cada elemento do array <code>$frutas</code> e imprime o nome da fruta. A estrutura básica do <code>foreach</code> é:</p>
<ul>
    <li><code>$array</code>: O array que será percorrido.</li>
    <li><code>$valor</code>: A variável que recebe o valor de cada elemento do array em cada iteração.</li>
</ul>

<h2>5. Conclusão</h2>
<p>Os laços de repetição são ferramentas poderosas em PHP que ajudam a automatizar tarefas repetitivas e a manipular dados de forma eficiente. Compreender os diferentes tipos de loops e suas aplicações é essencial para escrever código PHP robusto e eficiente.</p>


<?php include "rodape.php"; ?>