<!--# Variables $_GET y $_POST
// * Con GET recibimos datos por la URL
// * Con POST los datos no son visibles a través de la URL, se pasan a través de las cabeceras de la página web y no es tan accesible
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>formulario GET - POST</title>
</head>
<body>
<!-- Con el formulario, usando el method get puedo recoger valores que se pasan por la barra de navegación-->

<h1>FORMULARIO EN PHP con GET</h1>
<form method="get" action="2-recibir.php">
    <p>
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre"/>
    </p>
    <p>
        <label for="apellidos">Apellidos</label>
        <input type="text" name="apellidos"/>
    </p>
    <p>
        <input type="submit" value="Enviar datos"/>
    </p>

</form>
<!--

## 1. Enviar valores por la barra de navegación con GET

Cuando pulso Enviar datos la pestaña de navegación cambia:
* Antes de enviar: http://localhost:8080/3-variables-GET-POST/formulario.php
* Después de enviar: http://localhost:8080/3-variables-GET-POST/recibir.php?nombre=%C3%81ngel&apellidos=Garrido+%C3%81lvarez
-->

<h1>FORMULARIO2 EN PHP CON POST</h1>
<form method="post" action="2-recibir.php">
    <p>
        <label for="nombre">Nombre2</label>
        <input type="text" name="nombre2"/>
    </p>
    <p>
        <label for="apellidos">Apellidos2</label>
        <input type="text" name="apellidos2"/>
    </p>
    <p>
        <input type="submit" value="Enviar datos2"/>
    </p>

</form>

</body>
</html>