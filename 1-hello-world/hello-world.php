<!--
 # PHP

## 1. Para ejecutar este archivo.php podemos:
1. Hacerlo desde el servidor, utilizando Xampp o Docker y poniendo en nuestro navegador el puerto correspondiente:
     ejemplo: http://localhost:8080/hello-world.php
2. Desde la consola teniendo instalado php en nuestro ordenador y ejecutando el fichero correspondiente:
     ejemplo: php 1-hello-world.php
*/


 ## 2. **Para que funcione un código php**:
        * este tiene que ir dentro de un archivo php
        * tiene que estar instalado php en el servidor
-->

<h1>Hello World con html</h1>

<?php

echo "<h1>Hello World con PHP</h1>";

?>

<!-- ## 3. puedo hacer una estructura html en php, pero no una estructura php en un archivo.html -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hello World - Imprimir por pantalla</title>
</head>
<body>
<h2>Imprimir por pantalla con "echo" / Concatenar con "."</h2>

<!-- ## 4. Concatenaciones-->
<?php
echo "<h3>Lista de videojuegos para este verano:</h3>";
echo "<ul>"
    ."<li>Skyrim</li>"
    ."<li>Hotline Miami Collection</li>"
    ."<li>Go Vacation</li>"
    ."<li>Zumba Burn It Up</li>"
    ."</ul>";

echo "<p> es es toda la lista"." "."-"." "."estoy concatenando con '.'"


?>

<!-- ## 5. Puedo poner todas las etiquetas HTML que considere -->

<p>Esto es html</p>

<?php
echo "<p> Esto es php</p>"
?>

<!-- ## 6. Forma abreviada de poner echo <?=""?> -->
<?="Esto es un echo de php abreviado"?>

<!-- ## 7. Comentarios de Código-->
<!-- Se ponen igual que en JavaScript con // y con /* */-->

<?php
//esto es un comentario
/*
Esto es un comentario multilinea
*/
echo "<p>los comentarios se ponen igual que en JavaScript con // para comentar una línea y con /* */ para comentarios multilinea</p>"
?>

</body>
</html>

