<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 5</title>
</head>
<body>
<h1> VARIABLES </h1>
    <?php
    $nombre= 'Carlos Daniel Arcos Roblero';
    $edad=21;
    $beca= 203500;
    $estatus=true;
    echo "Tipos de variables <br>";
    echo $nombre.'<br/>'; // El punto significa que es una concatenacion EJEMPLO $nombre. 
    echo $edad. '<br/>';
    echo $beca. ' <br/>';
    echo $estatus. '<br/>';

    echo $nombre. ' Tiene ' .$edad. ' año de edad y gana ' .$beca.' <br/>'

    ?>

    <h1>Operadores aritmeticos</h1>
    <?php

    $numero1=10;
    $numero2=5;
    $suma=$numero1+$numero2;
    $resta=$numero1-$numero2;
    $multiplica=$numero1*$numero2;
    $divicion=$numero1/$numero2;

    echo 'La Suma es ='.$suma.'<br/>';
    echo 'La Resta es ='.$resta.'<br/>';
    echo 'La Multiplicacion es ='.$multiplica.'<br/>';
    echo 'La Divicion Es ='.$divicion.'<br/>';
    echo 'Incremento de la Suma'.$suma++.'<br/>';
    echo 'Decremento de la Suma'.$suma--.'<br/>';



    ?>






</body>
</html>