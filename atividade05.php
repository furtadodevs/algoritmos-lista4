<?php
/*Atividade 5 – Desafio Completo
Crie um programa utilizando as variáveis abaixo.
$nome = " joão da silva ";
$curso = "desenvolvimento de sistemas";
$salario = 3589.457;
$email = "joao@empresa.com";
$texto = "<h2>Bem-vindo ao PHP</h2>";
Faça:
1. Remova os espaços do nome.
2. Exiba o nome com todas as letras maiúsculas.
3. Exiba o nome com todas as letras minúsculas.
4. Exiba o nome com apenas a primeira letra maiúscula.
5. Exiba o curso com a primeira letra de cada palavra em maiúscula.
6. Conte quantos caracteres possui o nome.
7. Inverta o nome.
8. Exiba apenas os quatro primeiros caracteres do curso.
9. Verifique se o e-mail contém @empresa.
10.Verifique se o e-mail termina com .com.
11.Verifique se o e-mail começa com joao.
12.Substitua empresa por escola.
13.Remova as tags HTML da variável $texto.
14.Formate o salário para o padrão brasileiro.
15.Arredonde o salário utilizando round().
16.Arredonde o salário para cima utilizando ceil().
17.Arredonde o salário para baixo utilizando floor().
18.Calcule a raiz quadrada de 144.
19.Calcule 8³ utilizando pow().
20.Exiba o maior número entre 15, 42, 8, 96 e 23 utilizando max() e o menor
utilizando min().*/

$nome = " joão da silva ";
echo ("01- Ex: (trim): " . trim($nome));
echo ("<br>");

$nome = " joão da silva ";
echo ("02- Ex: (trtoupper): " . strtoupper($nome));
echo ("<br>");

$nome = " joão da silva ";
echo ("03- Ex: (trtolower): " . strtolower($nome));
echo ("<br>");

$nome = " joão da silva ";
echo ("04- Ex: (ucfirst): " . ucfirst($nome));
echo ("<br>");

$curso = "desenvolvimento de sistemas";
echo ("05- Ex: (ucwords): " . ucwords($nome));
echo ("<br>");

$nome = " joão da silva ";
echo ("06- Ex: (strlen): " . strlen($nome));
echo ("<br>");

$nome = " joão da silva ";
echo ("07- Ex: (strrev): " . strrev($nome));
echo ("<br>");

$curso = "desenvolvimento de sistemas";
echo ("08- Ex: (substr): " . substr($curso, 0, 4));
echo ("<br>");

$email = "joao@empresa.com";
echo ("09- Ex: (str_contains): " . str_contains($email,"@empresa."));
echo ("<br>");

$email = "joao@empresa.com";
echo ("10- Ex: (str_ends_with): " . str_ends_with($email,".com"));
echo ("<br>");

$email = "joao@empresa.com";
echo ("11- Ex: (str_starts_with): " . str_starts_with($email,"joao."));
echo ("<br>");

$email = "joao@empresa.com";
echo ("12- Ex: (str_replace): " . str_replace("empresa", "escola", $email));
echo ("<br>");

$texto = "<h2>Bem-vindo ao PHP</h2>";
echo ("13- Ex: (strip_tags): " . strip_tags($texto));
echo ("<br>");

$salario = 3589.457;
echo ("14- Ex: (number_format): " . number_format($salario,2,",","."));
echo ("<br>");

$salario = 3589.457;
echo ("15- Ex: (round): " . round($salario));
echo ("<br>");

$salario = 3589.457;
echo ("16- Ex: (ceil): " . ceil($salario));
echo ("<br>");

$salario = 3589.457;
echo ("17- Ex: (floor): " . floor($salario));
echo ("<br>");

$numero1 = 144;
echo ("18- Ex: (sqrt): " . sqrt($numero1));
echo ("<br>");

$numero2 = 8;
echo ("19- Ex: (pow): " . pow($numero2,3));
echo ("<br>");

echo ("20- Ex: (max): " . max(15,42,8,96,23));
echo ("<br>");
echo ("20- Ex: (min): " . min(15,42,8,96,23));
echo ("<br>");

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 5</title>
</head>
<body>
    
</body>
</html>