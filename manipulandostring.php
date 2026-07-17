<?php
/*Manipulação de strings(textos) */
 
//1) strlen - quantidade de caracteres
$nome = "Cauã";
echo("Ex : strlen: " . strlen($nome));
 
echo("<br>");
 
$senha = "123456";
echo("Ex : strlen: " . strlen($senha));
 
echo("<br>");
//-------------------------------------
 
//2) strupper - tornar caracteres maiúsculos
$palavra = "Bacon";
echo("Ex. strtoupper: " . strtoupper($palavra));
 
echo("<br>");
 
$estado = "mg";
echo("Ex. strtoupper: " . strtoupper($estado));
 
 
echo("<br>");
 
 
//3) strtolower - tornar caracteres minusculos
$produto = "SaboNEte";
echo("Ex. strtolower: " . strtolower($produto));
 
echo("<br>");
 
$email = "Usuario@gmail.com";
echo("Ex. strtolower: " . strtolower($email));
 
 
echo("<br>");
 
//4) ucfirst() primeira letra em maiusculo
$bairro = "ressaca";
echo("Ex. ucfirst: " . ucfirst($bairro));
 
echo("<br>");
 
$frase = "a Argentina ficou";
echo("Ex. ucfirst: " . ucfirst($frase));
 
echo("<br>");
 
 
//5- ucwords() - Primeira letra por palavra em maiusculo
$rua = "avenida afonso pena";
echo("Ex. ucwords: " . ucwords($rua));
 
echo("<br>");
 
//6 - trim() - remove espaços antes e depois
$texto = "   Php Básico   ";
echo("Ex. trim: " . trim($texto));
echo("<br>");
 
$login = "admin   ";
echo("Ex. trim: " . trim($login));
echo("<br>");
 
//7- str_repeat() - Repete string quantas vezes quiser
echo(str_repeat(":)", 30));
echo("<br>");
 
//8- substr() - Retorna parte de uma string
echo("Ex. substr()" . substr("Programação", 0, 5));
echo("<br>");
 
$cpf = "12345678900";
echo("Ex. substr()" . substr("$cpf", 0, 3));
echo("<br>");
 
//9 - str_replace() - Substitui uma palavra por outra
$texto = "PHP Básico";
echo("Ex . str_replace(): ". str_replace("Básico", "Avançado", $texto));
echo("<br>");
 
$texto = "Bom dia aluno";
echo("Ex . str_replace(): ". str_replace("aluno", "Cauã", $texto));
echo("<br>");
 
//10 - strcmp() - compara duas strings se 0 são iguais
$senha = "1234";
$confirmaSenha = "1234";
echo("Ex. strcmp(): " . strcmp($senha, $confirmaSenha));
echo("<br>");
 
//11-str_contains() - Verifica se na string contém um texto
$email = "usuario@gmail.com";
echo("Ex. str_contains(): " . str_contains($email,"@"));
echo("<br>");
 
//12 - str_ends_with() - Verifica se string termina com texto
$arquivo = "foto.jpg";
echo("Ex. str_ends_with(): " . str_ends_with($arquivo, ".jpg"));
echo("<br>");
 
//13 - str_starts_with() - Verifica se string começa com texto
$codigo = "PROD001";
echo("Ex. str_starts_with(): " . str_starts_with($codigo, "PROD"));
echo("<br>");
 
//14 - str_pad() - Completa string até um tamanho definido
$codigo = "25";
echo("Ex. str_pad(): " . str_pad($codigo, 5, "0" ,STR_PAD_LEFT));
echo("<br>");
 
//15 - strip_tags() - Remove html de strings
$titulo = "<h1>PHP</h1>";
echo("Ex. strip_tags(): " . strip_tags($titulo));
echo("<br>");
?>
 
 <!DOCTYPE html>
 <html lang="pt-br">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulando string</title>
 </head>
 <body>
    
 </body>
 </html>