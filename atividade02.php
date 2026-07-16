<?php
/*Atividade 2 – Loja Virtual
Uma loja cadastrou o seguinte produto:
$produto = "Notebook Gamer";
$preco = 4599.989;
$desconto = -350;
Faça:
1. Exiba o nome do produto em letras maiúsculas.
2. Exiba o nome do produto em letras minúsculas.
3. Inverta o nome do produto.
4. Exiba apenas a palavra "Notebook".
5. Formate o preço para o padrão brasileiro.
6. Exiba apenas o valor inteiro do preço utilizando round().
7. Exiba o preço arredondado para cima.
8. Exiba o preço arredondado para baixo.
9. Mostre o valor absoluto do desconto.
10.Calcule o quadrado do número 5 utilizando pow().*/


$produto = "Notebook Gamer";
echo ("01- Ex: (trtoupper): " . strtoupper($produto));
echo ("<br>");

$produto = "Notebook Gamer";
echo ("02- Ex: (trtolower): " . strtolower($produto));
echo ("<br>");

$produto = "Notebook Gamer";
echo ("03- Ex: (strrev): " . strrev($produto));
echo ("<br>");

$preco = 4599.989;
echo ("04- Ex: (number_format): " . number_format($preco,2,",","."));
echo ("<br>");

$preco = 4599.989;
echo ("05- Ex: (round): " . round($preco));
echo ("<br>");

$preco = 4599.989;
echo ("05- Ex: (ceil): " . ceil($preco));
echo ("<br>");

$preco = 4599.989;
echo ("05- Ex: (floor): " . floor($preco));
echo ("<br>");

$desconto = -350;
echo ("05- Ex: (abs): " . abs($desconto));
echo ("<br>");

$numero = 5;
echo ("06- Ex: (pow): " . pow($numero, 5));
echo ("<br>");


?>





<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 2</title>
</head>

<body>

</body>

</html>