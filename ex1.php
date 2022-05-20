<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Exercício 1 - Areá e Perimetro</h2>
</body>
</html>

<?php 

$lado = $_POST['lado'];
$altura = $_POST['altura'];

$area = $lado * $altura;
$perimetro = 2*($altura + $lado);

echo "A aréa desse retângulo é: ", $area;
echo "<br>";
echo "<br>";
echo "O perimetro desse retângulo é: ", $perimetro;

?>