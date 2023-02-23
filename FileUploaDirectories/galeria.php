<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <title>Galeria</title>
</head>
<body>
    
<h1 class="text-center p-4">Sección de Galeria de Productos</h1>

<nav class="p-3 m-3">
    <a href="index.php" class="btn btn-secondary m-3">Ir al Índice</a>
    <a href="upload.php" class="btn btn-secondary m-3">Ir a subida de archivos</a>
</nav>



<?php
include "libraries/FileList.php";

$extensiones = '/\.(gif|jpe?g|png|webp)$/i';

$archivos = (new FileList("imagenes"))->getEntries($extensiones);

foreach($archivos as $fichero) {
    
    echo "<figure class='figure p-3'>";
    echo "  <img class='figure-img img-fluid rounded' style='max-width: 300px; max-height: 300px;' src='$fichero'>";
    echo "  <figcaption class='figure-caption text-right p-4'>$fichero</figcaption>";
    echo "</figure>";
}
?>

</body>
</html>
