<?php

/*este archivo tiene que ir en la carpeta /htdocs/php-environment de xampp
*/
echo "Hello Fucking World";
$saludo ="Hola mundo"; //aquí no hace falta poner var, const, let
echo $saludo;

$verdadero = true;
$numero = 5.4;

//Dos tipos de cademas de texto

$saludo1= "$saludo";
$saludo2='$saludo';

echo $saludo1;
echo $saludo2;

$frutas = []; //esto es un array vacío
$frutas2 = ['manzana','pera', $saludo, "5", "yo te digo $saludo"];
echo $frutas2; //esto no me vale para ver el contenido del array ---> me devuelve array
print_r($frutas2); //eso es para ver el contenido del array
echo $frutas2[0];

//Las comillas simples van a mostrar el texto de forma literal mientras que las comillas dobles son capaces de interpretar lo que pongas dentro del texto;

//esto es un comentario

/* Esto es otro comentario*/

//AÑADIR UNA CLAVE A UN ELEMENTO DE UN ARRAY:

$usuarios = [
    'Angel',
    '0888878t' =>'Moises',
    4 => 'Yara',
    5 => 'Moises',
    'Chumino veloz',

];

print_r($usuarios);

$num = $_GET['num'];
$nombre = $_GET['nombre'];


/* pasar variables por la html:

http://localhost:8080/index.php?clave=valor
http://localhost:8080/index.php?numero=5&nombre=moises&edad=34

se cogen vraiables con $GET[]
*/

echo "<h1> $saludo $numero</h1>";
echo "<p><h1>" . $_GET['titulo'] . "</h1> </p>";

//probar: http://localhost:8080/index.php?titulo=lorem%20ipsum

echo "<p><h1>" . $_GET['titulo'] . "</h1> </p>";

$titulo2 = $_GET['titulo2'];
$color = $_GET['color'];

echo "<h1 style='color: #$color'>$titulo2</h1>";
http://localhost:8080/index.php?titulo=lorem ipsum&titulo2=tu madre con tomate&color=#544


if ($numero < 5 || )


?>

