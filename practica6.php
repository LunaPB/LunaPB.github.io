<?php

require ("config.php");
echo "<h1> Práctica: Conexión a mi servidor de datos MYSQL </h1><br><br>";
if ($conexion=mysqli_connect($servidor, $usuario, $password, $bd))
{
echo "Tu conexión ha sido exitosa";
}
else
{
echo "Error conectando con MYSQL <br> ".mysqli_connect_error();
}
echo "<br><br>";

mysqli_close($conexion);

?>