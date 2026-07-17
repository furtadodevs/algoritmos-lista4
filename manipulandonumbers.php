<?php
/*Manipulação de numeros */
 
//1 - number_format() - sem separador personalizado
$numero = 15.6789;
echo("Ex : number_format(): " . number_format($numero,2));
echo("<br>");
 
$preco = 12.5;
echo("Ex : number_format(): R$ " . number_format($preco,2));
echo("<br>");
 
//2- number_format() - mais adequado ao brasil
$salario =3500.5;
echo("Ex : number_format(): R$ " . number_format($salario,2,",","."));
echo("<br>");
 
//3- round () - Arredonda para o mais proximo ou valor indicado
$nota = 8.50;
echo("Ex : round(): " . round($nota));
echo("<br>");
 
$nota = 8.80;
echo("Ex : round(): " . round($nota,0));
echo("<br>");
 
//4- ceil() - arrdonda sempre para cima
$nota = 8.80;
echo("Ex : ceil(): " . ceil($nota));
echo("<br>");
 
//5- floor () arredonda sempre para baixo
$nota = 8.80;
echo("Ex : floor(): " . floor($nota));
echo("<br>");
 
//6- abs () - numero absoluto (-15 ou 15) = 15
$calculo = -15;
echo("Ex : abs(): " . abs($calculo));
echo("<br>");
 
//7 - sqrt - raiz quadrada
$calculo = 25;
echo("Ex : sqrt(): " . sqrt($calculo));
echo("<br>");
 
//8 - pow() - potência
$num = 2;
echo("Ex : pow(): " . pow($num,3));
echo("<br>");
 
//9 - max() - encontra maior valor
echo("Ex : max(): " . max(10,40,30,20));
echo("<br>");
 
//10 - min() - encontra menor valor
echo("Ex : min(): " . min(10,40,30,20));
echo("<br>");
 
//11- rand() - gera um numero aleatorio
echo("Ex : min(): " . min(1,100));
echo("<br>");

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulando numbers</title>
</head>
<body>
    
</body>
</html>