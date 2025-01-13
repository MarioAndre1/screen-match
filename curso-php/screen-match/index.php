<?php

require __DIR__ . "/src/Modelo/Filme.php";

echo "Bem-vindo(a) ao ScreenMatch\n";

$filme = new Filme();
$filme->nome = 'Thor - Ragnarok';
$filme->anoLancamento = 2021;
$filme->genero = 'super-heroi';
$filme->nota = 7.2;

var_dump($filme);