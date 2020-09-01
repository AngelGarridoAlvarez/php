<?php
/*
# Variables, tipos de datos y constantes

## 1. Variables

 * Contenedores de datos
 * php es un lenguaje debilmente tipado por lo que es sencillo nombrar y renombrar variables.
 * las variables no pueden empezar por un número
 * no pueden llevar guiones medios ni signos, (sí guión bajo)

*/

$miPrimeraVariable = "Hola mundo, soy una variable";
$numero = 11;
$verdaderoFalso= true;


echo $miPrimeraVariable;
echo '<h1>'.$miPrimeraVariable.'</h1>';
echo '<p> La variable $numero es '.$numero.', y la variable $verdaderoFalso es '.$verdaderoFalso.'.</p>'; //La variable $numero es 11, y la variable $verdaderoFalso es 1.

$numero = 44;
$verdaderoFalso = false;

echo '<p> La variable $numero es '.$numero.', y la variable $verdaderoFalso es '.$verdaderoFalso.'.</p>'; //La variable $numero es 44, y la variable $verdaderoFalso es .


//pudo cambiar el tipado de las variables cuando quiera:
$verdaderoFalso = "ahora soy un string";
echo '<p>la variable $verdaderoFalso ='.' '.$verdaderoFalso.'</p>';

/*
## 2. Tipos de Datos
 * Entero / int / integer = 99
 * Coma flotante / decimales /float / double = 0,7
 * Cadenas de datos / string = "hola, soy un string"
 * Booleans / Booleanos / Bool = 0 / 1, true / false
 * null
 * array
 * objetos

### 2.1. Saber el tipo de dato con gettype
*/

echo gettype($numero);//integer
echo gettype($miPrimeraVariable);//string

$decimal = 0.007;
echo gettype($decimal);//double

$nula = null;
echo gettype($nula);//NULL

//### 2.2. Debuguear  con xdebug var_dump()
var_dump($numero);// /var/www/html/variables-tipos-datos-operadores.php:55:int 44
var_dump($nula);// /var/www/html/variables-tipos-datos-operadores.php:56:null

//### 2.3. Diferencia comillas dobles y comillas simples
// * Las comillas dobles me evitan tener que contanar con "."
// * Las comillas dobles son más lentas a nivel de servidor, por lo que es mejor usar comillas simples si no le vamos a pasar una variable

$stringComillasSimples = 'La variable numero es $numero';
echo $stringComillasSimples;//La variable numero es $numero

$stringComillasDobles = "La variable numero es $numero";
echo $stringComillasDobles;//La variable numero es 44

//### 2.4. Saltos de linea , retornos de carro y tabulaciones dentro de un string
// * funciona en la consola no el navegador

$saltoDeLinea="el salto de linea se hace con \n pero sólo funciona en la consola";
echo $saltoDeLinea;
//el salto de linea se hace con
// pero sólo funciona en la consola


$retornoDeCarro = "retorno de carro con \r pero solo funciona en consola";
echo $retornoDeCarro;
// pero solo funciona en consolaolaretorno de carro con


$tabulacion = "la tabulación se hace con \t pero solo funciona en la consola";
echo $tabulacion;
//la tabulación se hace con          pero solo funciona en la consola


//### 2.5. Imprimir una comilla doble en un string con \
$comillaDobleDentroString = "las comillas dobles dentro de un string se escriben con \ y quedan así \"comillas dobles\"";
echo $comillaDobleDentroString;
//las comillas dobles dentro de un string se escriben con \ y quedan así "comillas dobles"

## 3. Constantes
// * Son contenedores de datos que no pueden variar
// * (Igual que las variables pero no pueden variar)

define('constante','es un contenedor de datos que no puede variar');
echo constante;//es un contenedor de datos que no puede variar

// * Para llamar a la constantes no usamos el símbolo "$".
// * No es lo mismo constante que $constante:

define('yo',"Ángel Garrido Álvarez");
echo yo;//Ángel Garrido Álvarez

$yo = "Manuel Pérez Fernández";
echo $yo;//Manuel Pérez Fernández

//Si intento cambiar el valor a una constante:

define('yo', "Pepe Pérez");//Notice:  Constant yo already defined in /home/angel/github/php/2-variables-tipos-datos-operadores/variables-tipos-datos-operadores.php on line 109
echo yo;//Ángel Garrido Álvarez

// ## 4. Constantes predefinidas
// * php tiene una serie de constantes predefinidas
// * la mayoría empiezan por PHP_ pero otras empiezan por __

echo PHP_OS; // Linux
echo PHP_VERSION;//7.4.3
echo PHP_EXTENSION_DIR;// /usr/lib/php/20190902
echo __LINE__;// 121
echo __FILE__;// /home/angel/github/php/2-variables-tipos-datos-operadores/variables-tipos-datos-operadores.php
function holaMundo()
{echo __FUNCTION__;//Me dice dentro de que función está
};
holaMundo();//holaMundo

// __CLASS__ me dice el nombre de la case

// ## 5. Operadores
$num1 = 1;
$num2 = 2;
echo(($num1+$num2).'<br/>');// 3
echo(($num1-$num2).'<br/>');//-1
echo(($num1*$num2).'<br/>');// 2
echo(($num1/$num2).'<br/>');// 0.5
echo(($num1%$num2).'<br/>');// 1 (1 porque el resto de 1/2 es 1)
echo(($num2%$num1).'<br/>');// 0 (porque el resto de 2/1 = 0)

// ## 6. Operadores incremento y decremento

$year = 2020;
echo "$year\n";//2020
$year++;// $year = $year + 1
echo "$year\n";//2021
$year--;// $year = $year - 1
echo "$year\n";//2020
++$year;// $year = +1 + $year
echo "$year\n";//2021
--$year;// $year = -1 + $year
echo "$year\n";//2020
--$year;// $year = -1 + $year
echo "$year\n";//2019

// ## 7. Operadores de asignación

$edad = 37;

echo $edad."\n"; //37

echo ($edad+3)."\n"; //40
echo $edad."\n"; //37

//poniendo operador + = reasigno el valor a la variable

echo ($edad+=3)."\n"; //40
echo $edad."\n"; //40

$edad /= 2;
echo $edad."\n"; //20

$edad *= 2;
echo $edad."\n"; //40

$edad %= 2;
echo $edad."\n"; //0

// ## 8. Variables Super Globales

// ### Variables de servidor

echo $_SERVER['SERVER_ADDR']."<br/>";// Saca la dirección del servidor - 172.19.0.2
echo $_SERVER['SERVER_NAME']."<br/>";// Saca el nombre del servidor - localhost
echo $_SERVER['SERVER_SOFTWARE']."<br/>";// Saca el software del servidor - Apache/2.4.38 (Debian)
echo $_SERVER['HTTP_USER_AGENT']."<br/>"; // Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36
echo $_SERVER['REMOTE_ADDR']."<br/>"; // 172.19.0.1



?>


