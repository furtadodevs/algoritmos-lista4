<?php
/*Atividade 3 – Sistema de Login
$email = "usuario@gmail.com";
$senha = "PHP123";
Faça:
1. Verifique se o e-mail contém o caractere @.
2. Verifique se o e-mail termina com .com.
3. Verifique se o e-mail começa com usu.
4. Conte quantos caracteres possui a senha.
5. Inverta a senha.
6. Repita a senha duas vezes.
7. Complete a senha até possuir 12 caracteres utilizando *.
8. Compare a senha com "PHP123" utilizando strcmp().
9. Substitua a palavra "usuario" por "admin" no e-mail.
10.Exiba o e-mail em letras maiúsculas.*/

$email = "usuario@gmail.com";
echo ("01- Ex: (str_contains): " . str_contains($email,"@"));
echo ("<br>");

$email = "usuario@gmail.com";
echo ("02- Ex: (str_ends_with): " . str_ends_with($email,".com"));
echo ("<br>");

$email = "usuario@gmail.com";
echo ("03- Ex: (str_starts_with): " . str_starts_with($email,"usu"));
echo ("<br>");

$senha = "PHP123";
echo ("04- Ex: (strlen): " . strlen($senha));
echo ("<br>");

$senha = "PHP123";
echo ("05- Ex: (strrev): " . strrev($senha));
echo ("<br>");


$senha = "PHP123";
echo ("06- Ex: (str_repeat): " . str_repeat($senha, 2));
echo ("<br>");

$senha = "PHP123";
echo ("07- Ex: (str_pad): " . str_pad($senha,12,"*"));
echo ("<br>");

$senha = "PHP123";
echo ("08- Ex: (strcmp): " . strcmp($senha,"PHP123"));
echo ("<br>");

$email = "usuario@gmail.com";
echo ("09- Ex: (str_replace): " . str_replace("usuario","admin",$email));
echo ("<br>");

$email = "usuario@gmail.com";
echo ("10- Ex: (trtoupper): " . strtoupper($email));
echo ("<br>");



?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 03</title>
</head>
<body>
    
</body>
</html>