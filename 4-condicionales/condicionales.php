<?php
// # CONDICIONALES

/*
## OPERADORES DE COMPARACIÓN
 * == igual
 * === igual estricto (tiene en cuenta el tipado)
 * != distinto
 * !== distinto estricto
 * <> distinto de
 * < mayor
 * > menor
 * <= menor o igual
 * >= mayor o igual

## OPERADORES LÓGICOS
 * && ,
 * || ,
 * !
 */

//  ## 1. IF



$nombre=$_GET['nombre'];

if($nombre == "Ángel"){
    echo "Hola puto amo";
} else {
    echo "Hola $nombre";
}
//Introducimos en el navegador http://localhost:8080/4-condicionales/condicionales.php?nombre=Ángel

echo "<br>";


$year = 2020;
$year=$_GET['year'];


if($year <=2020){
    echo "todavía no es 2021";
} else {
    echo "ya hemos celebrado la noche vieja de 2021";
}

//probamos con http://localhost:8080/4-condicionales/condicionales.php?nombre=manolo&year=2021

//  ## 2. ELSE IF

echo "<br>";

$coche = $_GET['coche'];

if($coche == 'toyota'){
    echo "$coche es tu marca favorita";
} elseif ($coche == 'citroen') {
    echo "Me encantaba el citröen Xantia de papá";
} elseif ($coche == 'rover') {
    echo "con el Rover 420hdi de Mamá me lo pasé pipa";
} else {
    echo "no tengo nada que decir de $coche, prueba con toyota, citroen o rover";
}

//probamos con http://localhost:8080/4-condicionales/condicionales.php?nombre=manolo&year=2021&coche=rover

//  ## 3. SWITCH

echo "<hr>";

$dia = $_GET["dia"];

switch ($dia){
    case "lunes":
        echo "Feliz lunes!";
        break;
    case "martes":
        echo "Los martes hay paella";
        break;
    case "miercoles":
        echo "Miércoles, El día de expectador";
        break;
    case "jueves":
        echo "me encantan los juernes";
        break;
    case "viernes":
        echo "Viernes = pizza + cerveza";
        break;
    case "sabado":
        echo "Sábado sabadete";
        break;
    case "domingo":
        echo "Domingo = señor de los anillos + siesta";
        break;
    default:
        echo "Sea el día que sea, sacale el gusto";
}
// Probamos con http://localhost:8080/4-condicionales/condicionales.php?nombre=manolo&year=2021&coche=toyota&dia=viernes


//  ## 3. GOTO - saltar a otra parte del programa
echo "<hr>";


$salto = $_GET['salto'];
if($salto == true){
    echo "Me he saltado 4 instrucciones";
    goto miMarca;
}

echo "<hr>";
echo "<h3> Instrucción 1 </h3>";
echo "<h3> Instrucción 2 </h3>";
echo "<h3> Instrucción 3 </h3>";
echo "<h3> Instrucción 4 </h3>";
miMarca:
echo "<h3> Instrucción 5 </h3>";

//Probar con http://localhost:8080/4-condicionales/condicionales.php?nombre=manolo&year=2021&coche=toyota&dia=jueves&salto=true


?>