<?php

include __DIR__ . '/style.php';

echo '<h1>Exercícios Expressões Regulares - 2</h1>';

echo '<hr><h2>Exemplo 1 - Classes de caracteres</h2>';

echo '<h3>1.1 - Palavras e espaços</h3><hr>';

$padrao = '/^[a-zA-Z0-9 ]+$/'; // Conjunto de caracteres - pode ser simplificado por:
$padrao = '/^[\w\s]+$/'; // \w - Alfanuméricos + \s - underline + espaços/tab/quebras de linha
$fonte = 'teste de regex';
$resultado = preg_match($padrao, $fonte);

echo '<h2>Padrão:</h2>' . "<pre>";
print_r($padrao);
echo "</pre><hr>";

echo '<h2>Fonte:</h2>' . "<pre>";
print_r($fonte);
echo "</pre><hr>";

echo '<h2>0 = false, 1 = true</h2>';
echo '<h2>Resultado:</h2>' . "<pre>";
var_dump($resultado);
echo "</pre><hr>";

echo '<h3>1.2 - Caracteres numéricos</h3><hr>';

$padrao = '/^[0-9]+$/'; // Conjunto de caracteres - pode ser simplificado por:
$padrao = '/^\d+$/'; // \d Conjunto de caracteres numéricos entre 0 e 9

$fonte = '1234';
$resultado = preg_match($padrao, $fonte);

echo '<h2>Padrão:</h2>' . "<pre>";
print_r($padrao);
echo "</pre><hr>";

echo '<h2>Fonte:</h2>' . "<pre>";
print_r($fonte);
echo "</pre><hr>";

echo '<h2>0 = false, 1 = true</h2>';
echo '<h2>Resultado:</h2>' . "<pre>";
var_dump($resultado);
echo "</pre><hr>";

echo '<h3>1.3 - Negando classes e conjuntos</h3><hr>';

$padrao = '/^[0-9]+$/'; // Conjunto de caracteres numéricos - pode ser simplificado por:
$padrao = '/^\D+$/'; // [^0-9], [^\d], \D nega o conjunto de caracteres numéricos entre [0 e 9]
$padrao = '/^\w+$/'; // \w, valida o conjunto de caracteres [a-zA-Z0-9_]
$padrao = '/^\W+$/'; // \W, nega o conjunto de caracteres [a-zA-Z0-9_]
$padrao = '/^\s+$/'; // \s, nega os caracteres diferentes de espaço, tab, quebra de linha
$padrao = '/^\S+$/'; // \S, nega os caracteres diferentes de espaço, tab, quebra de linha
$fonte = '$$ $$';
$resultado = preg_match($padrao, $fonte);

echo '<h2>Padrão:</h2>' . "<pre>";
print_r($padrao);
echo "</pre><hr>";

echo '<h2>Fonte:</h2>' . "<pre>";
print_r($fonte);
echo "</pre><hr>";

echo '<h2>0 = false, 1 = true</h2>';
echo '<h2>Resultado:</h2>' . "<pre>";
var_dump($resultado);
echo "</pre><hr>";

echo '<h3>1.4 - Fronteiras</h3><hr>';

$padrao = '/\bpropor/'; // \b, estabelece uma fronteira de início
$fonte = 'ação de proporcionar algo';
$padrao = '/propor\b/'; // \b, estabelece uma fronteira no fim
$fonte = 'ação de proporcionar, de propor algo';
$padrao = '/\bpropor\b/'; // \b, estabelece uma fronteira de início e fim
$fonte = 'ação de proporcionar, de propor algo';
$padrao = '/lar\B/'; // \B, estabelece uma fronteira
$fonte = 'Você pode falar';
$padrao = '/lar\B/'; // \B, estabelece uma fronteira
$fonte = 'Frio combina com lareira';
$resultado = preg_match($padrao, $fonte);

echo '<h2>Padrão:</h2>' . "<pre>";
print_r($padrao);
echo "</pre><hr>";

echo '<h2>Fonte:</h2>' . "<pre>";
print_r($fonte);
echo "</pre><hr>";

echo '<h2>0 = false, 1 = true</h2>';
echo '<h2>Resultado:</h2>' . "<pre>";
var_dump($resultado);
echo "</pre><hr>";

echo '<hr><h2>Exemplo 2.1 - Flags</h2>';

echo '<h3>2.1 - Case insensitive</h3><hr>';

$padrao = '/^[a-zA-Z ]+$/'; //valida caracteres maiúsculas e minúsculas
$padrao = '/^[a-z ]+$/i'; // /i valida caracteres maiúsculas e minúsculas, pode ser simplificado por
$padrao = '/^[\w ]+$/i'; // /i valida caracteres maiúsculas e minúsculas
$fonte = 'teste de REGEX';
$resultado = preg_match($padrao, $fonte);

echo '<h2>Padrão:</h2>' . "<pre>";
print_r($padrao);
echo "</pre><hr>";

echo '<h2>Fonte:</h2>' . "<pre>";
print_r($fonte);
echo "</pre><hr>";

echo '<h2>0 = false, 1 = true</h2>';
echo '<h2>Resultado:</h2>' . "<pre>";
var_dump($resultado);
echo "</pre><hr>";

echo '<h3>2.2 - Multi linhas</h3><hr>';

$padrao = '/^expressao$/i'; // /i valida caracteres maiúsculas e minúsculas
$fonte = 'expressao';
$padrao = '/^expressao$/i'; // /i erro ao validar caracteres maiúsculas e minúsculas multilinha
$fonte = 'expressao
expressao';
$padrao = '/^expressao$/im'; // /i erro ao validar caracteres maiúsculas e minúsculas multilinha
$fonte = 'expressao
expressao';
$resultado = preg_match($padrao, $fonte);

echo '<h2>Padrão:</h2>' . "<pre>";
print_r($padrao);
echo "</pre><hr>";

echo '<h2>Fonte:</h2>' . "<pre>";
print_r($fonte);
echo "</pre><hr>";

echo '<h2>0 = false, 1 = true</h2>';
echo '<h2>Resultado:</h2>' . "<pre>";
var_dump($resultado);
echo "</pre><hr>";

echo '<h3>2.3 - Global search</h3><hr>';

$padrao = '/expressao/im'; // valida a primeira ocorrência e interrompe a busca
$fonte = 'expressao expressao';
$resultado = preg_match($padrao, $fonte, $matches);
$padrao = '/^([\w]+) (wdev)$/im'; // valida todas as ocorrências e retorna um array
$fonte = 'canal wdev
youtube wdev';
$resultado = preg_match_all($padrao, $fonte, $matches);

echo '<h2>Padrão:</h2>' . "<pre>";
print_r($padrao);
echo "</pre><hr>";

echo '<h2>Fonte:</h2>' . "<pre>";
print_r($fonte);
echo "</pre><hr>";

echo '<h2>0 = false, 1 = true</h2>';
echo '<h2>Resultado:</h2>' . "<pre>";
var_dump($resultado);
echo "</pre><hr>";

echo '<h2>Matches:</h2>' . "<pre>";
print_r($matches);
echo "</pre>";

echo '<h3>3 - Remover caracteres indesejados</h3><hr>';

$padrao = '/\D/';
$fonte = '123.456.789-10';
$fonte = '+55 (11) 98745-3214';

$resultado = preg_match($padrao, $fonte, $matches);
$replace = preg_replace($padrao, '', $fonte);

echo '<h2>Padrão:</h2>' . "<pre>";
print_r($padrao);
echo "</pre><hr>";

echo '<h2>Fonte:</h2>' . "<pre>";
print_r($fonte);
echo "</pre><hr>";

echo '<h2>0 = false, 1 = true</h2>';
echo '<h2>Resultado:</h2>' . "<pre>";
var_dump($resultado);
echo "</pre><hr>";

echo '<h2>Replace:</h2>' . "<pre>";
print_r($replace);
echo "</pre>";
