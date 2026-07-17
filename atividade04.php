<?php
/*Atividade 4 – Manipulando Textos
Considere a variável:
$frase = " Aprendendo PHP é muito divertido! ";
Faça:
1. Remova os espaços extras.
2. Conte quantos caracteres possui a frase.
3. Transforme toda a frase em letras maiúsculas.
4. Transforme toda a frase em letras minúsculas.
5. Inverta a frase.
6. Exiba apenas a palavra Aprendendo utilizando substr().
7. Localize a posição da palavra PHP.
8. Substitua divertido por interessante.
9. Repita a palavra PHP cinco vezes.
10.Coloque a primeira letra de cada palavra em maiúscula.*/

$frase = " Aprendendo PHP é muito divertido! ";
echo ("01- Ex: (trim): " . trim($frase));
echo ("<br>");

$frase = " Aprendendo PHP é muito divertido! ";
echo ("02- Ex: (strlen): " . strlen($frase));
echo ("<br>");

$frase = " Aprendendo PHP é muito divertido! ";
echo ("03- Ex: (trtoupper): " . strtoupper($frase));
echo ("<br>");

$frase = " Aprendendo PHP é muito divertido! ";
echo ("04- Ex: (trtolower): " . strtolower($frase));
echo ("<br>");

$frase = " Aprendendo PHP é muito divertido! ";
echo ("05- Ex: (strrev): " . strrev($frase));
echo ("<br>");

$frase = " Aprendendo PHP é muito divertido! ";
echo ("06- Ex: (substr): " . substr($frase, 0, 12));
echo ("<br>");

$frase = " Aprendendo PHP é muito divertido! ";
echo ("07- Ex: (strpos): " . strpos($frase, "PHP"));
echo ("<br>");

$frase = " Aprendendo PHP é muito divertido! ";
echo ("08- Ex: (str_replace): " . str_replace("divertido", "interessante", $frase));
echo ("<br>");;


$frase = " Aprendendo PHP é muito divertido! ";
echo ("09- Ex: (str_repeat): " . str_repeat("PHP", 5));
echo ("<br>");

$frase = " Aprendendo PHP é muito divertido! ";
echo ("10- Ex: (ucwords): " . ucwords($frase));
echo ("<br>");




?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 04</title>
</head>

<body>

</body>

</html>