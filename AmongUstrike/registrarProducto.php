<?php

include("conexion.php");
$ID = $_POST['ID'];
$Nombre = $_POST['Nombre'];
$Descripción = $_POST['Descripción'];
$Precio = $_POST['Precio'];
$Imagen = $_POST['Imagen'];

$consulta = "insert into productos(ID, Nombre, Descripción, Precio, Imagen) values('$ID', '$Nombre', '$Descripción', '$Precio', '$Imagen')";
$Resultado = mysqli_query($conexion, $consulta);

?>