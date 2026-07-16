<?php
/*Atividade 01
Crie um programa em PHP utilizando as variáveis abaixo e exiba as informações
solicitadas.
$nome = " maria aparecida de souza ";
$curso = "programação web";
$nota = 8.756;
Faça:
1. Exiba o nome sem os espaços extras.
2. Exiba o nome todo em letras maiúsculas.
3. Exiba o nome todo em letras minúsculas.
4. Exiba apenas a primeira letra do nome em maiúscula.
5. Exiba a primeira letra de cada palavra em maiúscula.
6. Informe quantos caracteres possui o nome (desconsiderando os espaços do
início e do fim).
7. Exiba a nota com duas casas decimais.
8. Exiba a nota arredondada utilizando round().
9. Exiba a nota utilizando ceil().
10.Exiba a nota utilizando floor().*/

// Entradas - Variáveis
$nome = " gabrielle rodrigues furtado ";
echo ("01- Ex: (trim): " . trim($nome));
echo ("<br>");

$nome = "gabrielle rodrigues furtado";
echo ("02- Ex: (trtoupper): " . strtoupper($nome));
echo ("<br>");

$nome = "GABRIELLE RODRIGUES FURTADO";
echo ("04- Ex: (trtolower): " . strtolower($nome));
echo ("<br>");

$nome = "gabrielle rodrigues furtado";
echo ("05- Ex: (cfirst): " . ucfirst($nome));
echo ("<br>");

$nome = "gabrielle rodrigues furtado";
echo ("06- Ex: (ucwords): " . ucwords($nome));
echo ("<br>");

$nome = "gabrielle rodrigues furtado";
echo ("07- Ex: (strlen): " . strlen($nome));
echo ("<br>");

$nota = 9.745;
echo ("08- Ex: (number_format): " . number_format($nota, 2));
echo ("<br>");

$nota = 9.745;
echo ("09- Ex: (round): " . round($nota, 2));
echo ("<br>");

$nota = 9.745;
echo ("10- Ex: (ceil): " . ceil($nota));
echo ("<br>");

$nota = 9.745;
echo ("11- Ex: (floor): " . floor($nota));
echo ("<br>");





?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 01</title>
</head>

<body>

</body>

</html>