<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Punto_4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
  <form action="Punto_4.php" method="POST">
  <div class="input-group mb-3">
  <input type="number" name="numero1" class="form-control" placeholder="Valor 1" aria-label="Valor 1">
</div>
<div class="input-group mb-3">
  <input type="number" name="numero2" class="form-control" placeholder="Valor 2" aria-label="Valor 2">
</div>
<div class="input-group mb-3">
  <input type="number" name="numero3" class="form-control" placeholder="Valor 3" aria-label="Valor 3">
</div>
<input type="submit" class="btn btn-primary" value="Enviar consulta">
  </form>

<?php
$valor1=$_POST['numero1'];
$valor2=$_POST['numero2'];
$valor3=$_POST['numero3'];
$resultado=$valor3+$valor1+$valor2;
$resultadofinal=$resultado/3;
echo "Promedio de $valor1, $valor2 y $valor3 = $resultadofinal";
?>



</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</html>
