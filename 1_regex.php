<?php

include __DIR__ . '/style.php';

echo '<h1>Exercícios Expressões Regulares - 1</h1>';

echo '<hr><h2>Exemplo 1 - Estrutura</h2><hr>';
$padrao = '/youtube/';
$fonte = 'Videos do youtube';
$resultado = preg_match($padrao, $fonte);

echo '<h2>Padrão:</h2>'. "<pre>";
print_r($padrao);
echo "</pre><hr>";

echo '<h2>Fonte:</h2>'. "<pre>";
print_r($fonte);
echo "</pre><hr>";

echo '<h2>0 = false, 1 = true</h2>';
echo '<h2>Resultado:</h2>'. "<pre>";
var_dump($resultado);
echo "</pre><hr>";

echo '<h2>Exemplo 2 - Início e Fim</h2>';
$padrao = '/^youtube/'; // Começa com
$padrao = '/youtube$/'; // Termina com
$padrao = '/^youtube$/'; // Deve começar e terminar com
$fonte = 'Videos do youtube';
$resultado = preg_match($padrao, $fonte);

echo '<h2>Padrão:</h2>'. "<pre>";
print_r($padrao);
echo "</pre><hr>";

echo '<h2>Fonte:</h2>'. "<pre>";
print_r($fonte);
echo "</pre><hr>";

echo '<h2>0 = false, 1 = true</h2>';
echo '<h2>Resultado:</h2>'. "<pre>";
var_dump($resultado);
echo "</pre><hr>";

echo '<h2>Exemplo 3 - Conjuntos</h2>';
$padrao = '/[tube]/'; // Valida um conjunto de caracteres
$padrao = '/[a-z]/'; // Valida letras minúsculas
$padrao = '/[A-Z]/'; // Valida letras maiúsculas
$padrao = '/[a-zA-Z]/'; // Valida letras maiúsculas e minúsculas
$padrao = '/[0-9]/'; // Valida dígitos
$padrao = '/[0-9a-zA-Z]/'; // Valida números e letras
$padrao = '/[0-9a-zA-Z\-]/'; // Valida números, letras e hífen (escapando o hífen)
$fonte = 'YOUTUBE-2023';
$resultado = preg_match($padrao, $fonte);

echo '<h2>Padrão:</h2>'. "<pre>";
print_r($padrao);
echo "</pre><hr>";

echo '<h2>Fonte:</h2>'. "<pre>";
print_r($fonte);
echo "</pre><hr>";

echo '<h2>0 = false, 1 = true</h2>';
echo '<h2>Resultado:</h2>'. "<pre>";
var_dump($resultado);
echo "</pre><hr>";

echo '<h2>Exemplo 4 - Ocorrências Definidas</h2>';
$padrao = '/^[0-9]{4}[a-z]{2,4}$/'; // Valida 4 números seguidos de 2 a 4 letras
$fonte = '1211yout';
$resultado = preg_match($padrao, $fonte);

echo '<h2>Padrão:</h2>'. "<pre>";
print_r($padrao);
echo "</pre><hr>";

echo '<h2>Fonte:</h2>'. "<pre>";
print_r($fonte);
echo "</pre><hr>";

echo '<h2>0 = false, 1 = true</h2>';
echo '<h2>Resultado:</h2>'. "<pre>";
var_dump($resultado);
echo "</pre><hr>";

echo '<h2>Exemplo 5 - Ocorrências (Nenhuma ou Uma Ocorrência)</h2>';
$padrao = '/jpe?g/'; // Valida "jpg" com ou sem "e"
$fonte = 'jpg';
$resultado = preg_match($padrao, $fonte);

echo '<h2>Padrão:</h2>'. "<pre>";
print_r($padrao);
echo "</pre><hr>";

echo '<h2>Fonte:</h2>'. "<pre>";
print_r($fonte);
echo "</pre><hr>";

echo '<h2>0 = false, 1 = true</h2>';
echo '<h2>Resultado:</h2>'. "<pre>";
var_dump($resultado);
echo "</pre><hr>";

echo '<h2>Exemplo 6 - Ocorrências (Nenhuma ou N Ocorrências)</h2>';
// Exemplo 6 - Ocorrências (Nenhuma ou N Ocorrências)
$padrao = '/^teste*$/'; // Valida "teste" com zero ou mais "e"
$padrao = '/^teste.*legal$/'; // Valida "teste" seguido de qualquer coisa e "legal"
$fonte = 'teste bem legal';
$resultado = preg_match($padrao, $fonte);

echo '<h2>Padrão:</h2>'. "<pre>";
print_r($padrao);
echo "</pre><hr>";

echo '<h2>Fonte:</h2>'. "<pre>";
print_r($fonte);
echo "</pre><hr>";

echo '<h2>0 = false, 1 = true</h2>';
echo '<h2>Resultado:</h2>'. "<pre>";
var_dump($resultado);
echo "</pre><hr>";

echo '<h2>Exemplo 7 - Ocorrências (Ao Menos Uma Ocorrência)</h2>';
$padrao = '/^[0-9a-zA-Z\-]+\.txt$/'; // Valida alfanuméricos, hífen, ponto e "txt"
$fonte = 'teste-legal.txt';
$resultado = preg_match($padrao, $fonte);

echo '<h2>Padrão:</h2>'. "<pre>";
print_r($padrao);
echo "</pre><hr>";

echo '<h2>Fonte:</h2>'. "<pre>";
print_r($fonte);
echo "</pre><hr>";

echo '<h2>0 = false, 1 = true</h2>';
echo '<h2>Resultado:</h2>'. "<pre>";
var_dump($resultado);
echo "</pre><hr>";

echo '<h2>Exemplo 8 - Grupos</h2>';
$padrao = '/^([0-9a-zA-Z\-]+)(\.)(txt)$/'; // Valida grupos: (grupo 1), (grupo 2), (grupo 3)
$fonte = 'teste-legal.txt';
$resultado = preg_match($padrao, $fonte, $matches); // Parâmetro $matches recebe os grupos

echo '<h2>Padrão:</h2>'. "<pre>";
print_r($padrao);
echo "</pre><hr>";

echo '<h2>Fonte:</h2>'. "<pre>";
print_r($fonte);
echo "</pre><hr>";

echo '<h2>0 = false, 1 = true</h2>';
echo '<h2>Resultado:</h2>'. "<pre>";
var_dump($resultado);
echo "</pre><hr>";

echo "<pre>";
var_dump($matches);
echo "</pre><hr>";

echo '<h2>Exemplo 9 - Replace com Grupos</h2>';
$padrao = '/^([0-9]{3})([0-9]{3})([0-9]{3})([0-9]{2})$/'; // Valida grupos
$fonte = '12345678910';
$resultado = preg_match($padrao, $fonte, $matches); // Parâmetro $matches recebe os grupos
$replace = preg_replace($padrao, '$1.$2.$3-$4', $fonte);
// Utiliza a função preg_replace para substituir o padrão encontrado em $fonte
// Padrão: $1 representa o primeiro grupo de captura, $2 o segundo, $3 o terceiro e $4 o quarto
// Os grupos de captura correspondem a partes do texto que atendem ao padrão
// O resultado será a substituição desses grupos de captura por $1.$2.$3-$4

echo '<h2>Padrão:</h2>'. "<pre>";
print_r($padrao);
echo "</pre><hr>";

echo '<h2>Fonte:</h2>'. "<pre>";
print_r($fonte);
echo "</pre><hr>";

echo '<h2>0 = false, 1 = true</h2>';
echo '<h2>Resultado:</h2>'. "<pre>";
var_dump($resultado);
echo "</pre><hr>";

echo "<pre>";
print_r($matches);
echo "</pre><hr>";

echo '<h2>Resultado após o replace:</h2>'. "<pre>";
print_r($replace);
echo "</pre><hr>";
