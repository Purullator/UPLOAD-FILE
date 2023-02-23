<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<nav class="p-3 m-3">
    <a href="index.php" class="link-dark">Ir al Índice</a>
    <a href="galeria.php" class="link-dark">Ir a la Galería</a>
</nav>

<?php

include "libraries/Upload.php";


foreach($_FILES as $key=>$value) {  

try{  

$ruta = Upload::save($key, 'imagenes', true, 1048576, 'image/*', 'img_', true);

echo "<p>Éxito en la operación, fichero subido a $ruta.</p>";

} catch(Exception $e){
    echo "<p>ERROR en ".$_FILES[$key]['name'].": ".$e->getMessage(). "</p>";
}

}

?>




</body>
</html>


