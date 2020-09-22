<?php

// # Iteradores - Bucles

// ## 1. Bucle While
// * Las instrucciones se ejecutan cuando se cumple la condición
/*
while(condición){
instrucciones
}

### 1.1. Ejemplo mostrar números del 1 al 100 separados por comas y con un . final en el 100.
 */
$numero = 0;
while ($numero<=100){
    echo $numero;
    if($numero == 100){
        echo '.';
    } else {
        echo ', ';
    }
    $numero++;
}

// http://localhost:8080/05-bucles/bucles.php

echo "<hr/>";

// ### 1.2. Ejemplo mostrar tabla de multiplicar. Comprobamos un número que nos llega por $_GET y lo multiplicamos del 1 al 10.

// Con isset comprobamos si la variable existe

if(isset($_GET['numero'])){
    $numero = (int)$_GET['numero'];//casteamos la variable numero con int para que en lugar de devolvernos un string nos devuelva un entero
} else {
    $numero = 1;
}

var_dump($numero); //var_dump nos da la info de $numero

echo "<hr/>";
echo "<h1>Tabla de multriplicar del número $numero</h1>";

$contador = 1;
while ($contador <= 10) {
    echo "$numero x $contador = ".($numero*$contador)."<br/>";
    $contador ++;
}

// http://localhost:8080/05-bucles/bucles.php?numero=10

echo "<hr/>";

/*
 ## 2. Bucle Do While
 * Las instrucciones se ejecutan al menos una vez
 * Es = que while con la diferencia de que la condición se evalua al final del bloque de instrucciones, por lo que el código del bloque de instrucciones se va a ejecutar al menos una vez
 * Repite las instrucciones hasta que se cumpla la condición del while
 do{
     bloque de instrucciones;
 } while(condición);
*/

// Hacemos que se nos muestre por pantalla que solo podemos acceder a la fiesta 1 si somos menores de 18, y si somos mayores de 18 podemos acceder hasta 10 fiestas
$contador = 1;
$edad = 18;

do {
    echo "tienes acceso a la fiesta $contador <br>";
    $contador++;
} while ($edad >= 18 && $contador <= 10);

// http://localhost:8080/05-bucles/bucles.php?numero=10

// ## 3. Bucle for
/*
 for(variable contador; condición; incremento contador){
bloque de instrucciones
 * se intera tantas veces como se repita el contador
 * la condición se evalua en cada iteración
}
 */

//* Ejemplo: sumar todos los números del 1 al 100 y que se muestre el resultdo final

$resultado = 0;
for($i = 0; $i <= 100; $i++){
    $resultado = $resultado + $i;
    $resultadoAnterior = $resultado -$i;
    echo "<h4>$i. El resultado es $resultadoAnterior + $i = $resultado</h4>";

}

?>
