<?php
//http://localhost:8080/06-ejercicios-1/ejercicios.php

echo "<h1>Ejercicios básicos php - 1</h1>

<h2><u>Ejercicio 1:</u></h2>
 <h3>Crear 2 variables, país y continente e imprimir su valor por pantalla, y luego decir que tipo de dato tienen:</h3>";

$pais = 'España'; //
$continente = 'Europa';

echo "<p>Estamos en $pais, $continente.</p>";
echo '<p>La variable pais es un ' . gettype($pais) . '</p>';
echo '<p>La variable continente es un ' . gettype($continente) . '</p>';

echo "<br>";

echo "<h2><u>Ejercicio 2:</u></h2>
 <h3>Imprimir por pantalla todos los números pares del 1 al 100:</h3>";

$numero = 0;
while ($numero <= 100) {
    if ($numero % 2 == 0 && $numero != 100) {
        echo "$numero, ";
    }
    if ($numero == 100) {
        echo "$numero.";
    }

    $numero++;
}

echo "<br>";

echo "<h2><u>Ejercicio 3:</u></h2>
 <h3>Escribir un programa que imprima por pantalla los cuadrados de los primeros 40 números naturales:</h3>";

$numero2 = 1;
while ($numero2 <= 40) {
    if ($numero2 == 40) {
        echo "El cuadrado de $numero2 es " . $numero2 * $numero2 . ".";

    }
    if ($numero2 != 40) {
        echo "El cuadrado de $numero2 es " . $numero2 * $numero2 . ", <br>";

    }

    $numero2++;
}

echo "<br>";

echo "<h2><u>Ejercicio 4:</u></h2>
 <h3>Recoger dos números por la URL con un parámetro get y hacer y hacer todas las funciones básicas de una calculadora:</h3>";
if (isset($_GET['numero1']) && isset($_GET['numero2'])) {
    $num1 = $_GET['numero1'];
    $num2 = $_GET['numero2'];

    echo "Has elegido como número 1 el $num1, y como número 2 el $num2.";
    echo "<ul>";
    echo "<li>$num1 + $num2 = " . ($num1 + $num2) . "</li>";
    echo "<li>$num1 - $num2 = " . ($num1 - $num2) . "</li>";
    echo "<li>$num1 x $num2 = " . ($num1 * $num2) . "</li>";
    echo "<li>$num1 / $num2 = " . ($num1 / $num2) . "</li>";
    echo "</ul>";

} else {
    echo "Introduce los parámetros por la url como en el siguiente ejemplo:<br> http://localhost:8080/06-ejercicios-1/ejercicios.php/?numero1=1&numero2=2
";
}
//http://localhost:8080/06-ejercicios-1/ejercicios.php/?numero1=1&numero2=2

echo "<br>";

echo "<h2><u>Ejercicio 5:</u></h2>
 <h3>Mostrar todos los números comprendidos entre dos números que se introduzcan por la URL:</h3>";

$num1 = $_GET['numero1'];
$num2 = $_GET['numero2'];

if (isset($_GET['numero1']) && isset($_GET['numero2']) && $_GET['numero1'] < $_GET['numero2']) {
    for ($i = 0; $i <= $num2 - $num1; $i++) {
        ;
        echo $num1 + $i . "<br>";
    }
} elseif (isset($_GET['numero1']) && isset($_GET['numero2']) && $_GET['numero1'] > $_GET['numero2']) {
    for ($i = 0; $i <= $num1 - $num2; $i++) {
        ;
        echo $num1 - $i . "<br>";
    }
} else {
    echo "Introduce los parámetros por la url como en el siguiente ejemplo:<br> http://localhost:8080/06-ejercicios-1/ejercicios.php/?numero1=1&numero2=2
";
}
echo "<br>";

echo "<h2><u>Ejercicio 6:</u></h2>
 <h3>Imprimir todas las tablas de multiplicar del 1 al 10 en una tabla html:</h3>";

echo "<table border='1'>";
for ($i = 0; $i <= 10; $i++) {
    echo "<tr>";
    for ($j = 0; $j <= 10; $j++) {
        if ($i == 0) {
            echo "<td>Tabla del $j</td>";
        } else {
            echo "<td> $j x $i = " . ($i * $j) . "</td>";
        }
    }
    echo "</tr>";
};
echo "</table>";

echo "<br>";

echo "<h2><u>Ejercicio 7:</u></h2>
 <h3>Mostrar todos los números impares comprendidos entre dos números que se introduzcan por la URL:</h3>";

$num1 = $_GET['numero1'];
$num2 = $_GET['numero2'];

if (isset($_GET['numero1']) && isset($_GET['numero2']) && $_GET['numero1'] < $_GET['numero2']) {
    for ($i = 0; $i <= $num2 - $num1; $i++) {
        if(($num1 + $i) % 2 != 0) {
            echo $num1 + $i . "<br>";
        }
    }
} elseif (isset($_GET['numero1']) && isset($_GET['numero2']) && $_GET['numero1'] > $_GET['numero2']) {
    for ($i = 0; $i <= $num1 - $num2; $i++) {
        if(($num1 - $i) % 2 != 0) {
            echo $num1 - $i . "<br>";
        }
    }
} else {
    echo "Introduce los parámetros por la url como en el siguiente ejemplo:<br> http://localhost:8080/06-ejercicios-1/ejercicios.php/?numero1=1&numero2=2
";
}
echo "<br>";

?>

