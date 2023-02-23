<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="js/jspre.js"></script>
    <script src="js/jsinput.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>

<h1 class="text-center p-4">Sección de Subida de imágenes</h1>

<nav>
    <a href="galeria.php" class="btn btn-secondary m-3">Ir a la Galeria</a>
    <a href="upload.php" class="btn btn-secondary m-3">Ir a subida de archivos</a>
</nav>

<form class="text-center" action="upload.php" method="post" enctype="multipart/form-data">

   
    <fieldset id="fotos">  
   <label class="p-4">Sube tu imagen de Perfil:</label>
   <input type="hidden" name="MAX_FILE_SIZE" value="1240000">
   <input class="form-control" id="selectArch" type="file" accept="image/*" name="fichero1">
   <img id="imagenPrev" style="max-width: 300px; max-height: 300px;" class="img-fluid p-3" alt="Your image will be previsualized here">
   </fieldset>


  
    <input type="button" id="mas" onclick="addInput();" value="+">
    <input type="button" id="menos" onclick="removeInput();" value="-" disabled="disabled">
    <input type="submit" value="Send" class="btn btn-primary">
    </form>
</body>
</html>