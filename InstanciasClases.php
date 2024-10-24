<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2> Prueba con poligonos </h2>
<?php

require_once"./clases/PoligonoAbstracta.php";
require_once"./clases/TrianguloEquilatero.php";
require_once"./clases/Cuadrado.php";
$t1 = new TrianguloEquilatero(5.0, 5.0,);
var_dump($t1->calcularArea());
var_dump($t->calcularPerimetro());
echo "<p>$t1</p>";
$c1 = new Cuadrado (6);


?>
</body>
</html>
