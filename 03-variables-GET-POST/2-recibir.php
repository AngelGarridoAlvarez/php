<!--# Variables $_GET y $_POST

* Con GET recibimos datos por la URL
* Con POST los datos no son visibles a través de la URL, se pasan a través de las cabeceras de la página web y no es tan accesible

2. ## Capturar valores de la barra del navegador con GET-->

<?php
$miNombre = $_GET['nombre'];
$misApellidos = $_GET['apellidos'];

echo "<p> El nombre completo elegido es $miNombre $misApellidos </p>";
echo "<p> Para ver el correo añade a la dirección de tu barra de navegación &correo=el-correo-que-me-de-la-gana</p>";

//### Enviar valores directamente a través de la barra del navegador
// * Simplemente hay que añadir &nombreParámetro = valor o ?nombreParámetro = valor en el caso de que sea el primer parámetro que le pasamos a través del navegador
// * http://localhost:8080/3-variables-GET-POST/2-recibir.php?nombre=Manolo&apellidos=Cabeza+Bolo&correo=manolo@cabezabolo.com

$correo =  $_GET['correo'];
echo "<p> El correo elegido es $correo </p>";

//### ARRAY $_GET['indice']
//* $_GET[] es un array
//* Podemos comprobar con var_dump los datos del array a través del navegador:

echo '<p> El array  $_GET presenta la siguiente estructura</p>';
var_dump($_GET);

/*
 /var/www/html/03-variables-GET-POST/2-recibir.php:22:
array (size=3)
  'nombre' => string 'Manolo' (length=6)
  'apellidos' => string 'Cabeza Bolo' (length=11)
  'correo' => string 'el-correo-que-me-de-la-gana' (length=27)
 */


// 2. ## Capturar valores con POST a través de las cabeceras:

$miNombre2 = $_POST['nombre2'];
$misApellidos2 = $_POST['apellidos2'];

echo "<p> El nombre completo elegido es $miNombre2 $misApellidos2 </p>";
echo "<p> El array \$_POST presenta la siguiente estructura:</p>";

var_dump($_POST);
/*
 /var/www/html/03-variables-GET-POST/2-recibir.php:41:
array (size=2)
  'nombre2' => string 'Ángel' (length=6)
  'apellidos2' => string 'Garrido Álvarez' (length=16)

*/

?>

