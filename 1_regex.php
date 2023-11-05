<?php

include __DIR__ . '/style.php';

echo '<h1>Exercícios Expressões Regulares - 1</h1>';

echo '<hr><h2>Exemplo 1 - Classes de caracteres</h2>';

echo '<h3>1.1 - Palavras e espaços</h3><hr>';

$padrao = '/^[a-zA-Z0-9 ]+/';
// Padrão que permite letras maiúsculas, letras minúsculas, números e espaços

$fonte = 'teste de regex';
// Texto de origem a ser verificado

$resultado = preg_match($padrao, $fonte);
// Verifica se o padrão ocorre no texto de origem

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

$padrao = '/^[0-9]+/';
// Padrão que permite apenas números

$fonte = '1234';
// Texto de origem contendo números

$resultado = preg_match($padrao, $fonte);
// Verifica se o padrão ocorre no texto de origem

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

$padrao = '/^[0-9]+/';
// Padrão que permite apenas números

$padrao = '/^\D+/';
// Padrão que nega caracteres numéricos

$padrao = '/^\w+/';
// Padrão que permite caracteres alfanuméricos e underline

$padrao = '/^\W+/';
// Padrão que nega caracteres alfanuméricos e underline

$padrao = '/^\s+/';
// Padrão que nega espaços, tabulações e quebras de linha

$padrao = '/^\S+/';
// Padrão que nega espaços, tabulações e quebras de linha

$fonte = '$$ $$';
// Texto de origem com caracteres diversos

$resultado = preg_match($padrao, $fonte);
// Verifica se o padrão ocorre no texto de origem

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

$padrao = '/\bpropor/';
// Padrão que verifica a palavra "propor" no início de uma palavra

$fonte = 'ação de proporcionar algo';
// Texto de origem

$padrao = '/propor\b/';
// Padrão que verifica a palavra "propor" no final de uma palavra

$fonte = 'ação de proporcionar, de propor algo';
// Texto de origem

$padrao = '/\bpropor\b/';
// Padrão que verifica a palavra "propor" como uma palavra completa

$fonte = 'ação de proporcionar, de propor algo';
// Texto de origem

$padrao = '/lar\B/';
// Padrão que verifica a palavra "lar" como parte de outra palavra

$fonte = 'Você pode falar';
// Texto de origem

$padrao = '/lar\B/';
// Padrão que verifica a palavra "lar" como parte de outra palavra

$fonte = 'Frio combina com lareira';
// Texto de origem

$resultado = preg_match($padrao, $fonte);
// Verifica se o padrão ocorre no texto de origem

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

echo '<h3>2.1 - Case Insensitive</h3><hr>';

$padrao = '/^[a-zA-Z ]+/';
// Padrão que permite letras maiúsculas, letras minúsculas e espaços

$padrao = '/^[a-z ]+/i';
// Padrão que permite letras minúsculas e espaços, ignorando a diferença entre maiúsculas e minúsculas

$padrao = '/^[\w ]+/i';
// Padrão que permite caracteres alfanuméricos e espaços, ignorando a diferença entre maiúsculas e minúsculas

$fonte = 'teste de REGEX';
// Texto de origem

$resultado = preg_match($padrao, $fonte);
// Verifica se o padrão ocorre no texto de origem, ignorando a diferença entre maiúsculas e minúsculas

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

echo '<h3>2.2 - Multi Linhas</h3><hr>';

$padrao = '/^expressao$/i';
// Padrão que verifica a palavra "expressao" no início de uma linha, ignorando a diferença entre maiúsculas e minúsculas

$fonte = 'expressao';
// Texto de origem

$padrao = '/^expressao$/i';
// Padrão que verifica a palavra "expressao" no início de uma linha, ignorando a diferença entre maiúsculas e minúsculas

$fonte = 'expressao
expressao';
// Texto de origem com quebras de linha

$padrao = '/^expressao$/im';
// Padrão que verifica a palavra "expressao" no início de uma linha, ignorando a diferença entre maiúsculas e minúsculas e permitindo múltiplas linhas

$fonte = 'expressao
expressao';
// Texto de origem com quebras de linha

$resultado = preg_match($padrao, $fonte);
// Verifica se o padrão ocorre no texto de origem, considerando múltiplas linhas

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

echo '<h3>2.3 - Busca Global</h3><hr>';

$padrao = '/expressao/im';
// Padrão que verifica a palavra "expressao" em qualquer posição do texto, ignorando a diferença entre maiúsculas e minúsculas

$fonte = 'expressao expressao';
// Texto de origem

$resultado = preg_match($padrao, $fonte, $matches);
// Verifica a primeira ocorrência do padrão no texto de origem e armazena as correspondências em $matches

$padrao = '/^([\w]+) (wdev)$/im';
// Padrão que verifica duas palavras separadas por espaço, ignorando a diferença entre maiúsculas e minúsculas, em múltiplas linhas

$fonte = 'canal wdev
youtube wdev';
// Texto de origem

$resultado = preg_match_all($padrao, $fonte, $matches);
// Verifica todas as ocorrências do padrão no texto de origem e armazena as correspondências em $matches

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

echo '<h3>3 - Remover Caracteres Indesejados</h3><hr>';

$padrao = '/\D/';
// Padrão que verifica caracteres não numéricos

$fonte = '123.456.789-10';
// Texto de origem com números e caracteres não numéricos

$fonte = '+55 (11) 98745-3214';
// Texto de origem com números e caracteres não numéricos

$resultado = preg_match($padrao, $fonte, $matches);
// Verifica a presença de caracteres não numéricos no texto de origem e armazena as correspondências em $matches

$replace = preg_replace($padrao, '', $fonte);
// Remove todos os caracteres não numéricos do texto de origem

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
