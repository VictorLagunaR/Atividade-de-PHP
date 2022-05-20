<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio 2</title>
    <style>
        body{
            display:flex;
            flex-direction:column;
        }
        img{
            width:500px;
            height:400px;
        }
    </style>
</head>
<body>
<h2>Exercício 2 - Areá e Perimetro</h2>

</body>
</html>

<?php 

$peso = $_POST['peso'];
$altura = $_POST['altura'];

$IMC = $peso / ($altura * $altura);


echo "O seu IMC é: ", $IMC;

if ($IMC > 25) {
    
    echo "<br>";
    echo "<br>";
    echo "Você está acima do peso!!!!!!";
    echo "<img src='imagem/gordo.jpg'>";
    }
else {
    echo "Você está saudável!!! <br><br>";
    echo "<img src='imagem/saudavel.jpg'>";
}

?>