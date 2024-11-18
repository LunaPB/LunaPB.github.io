<?php

echo "<h1> Práctica: Conexión a mi servidor de datos MYSQL </h1><br><br>";
// PHP Data Objects(PDO) Sample Code:
try {
    $conn = new PDO("sqlsrv:server = tcp:lunapb.database.windows.net,1433; Database = programacionweb", "CloudSAdcf09f47", "{your_password_here}");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "CloudSAdcf09f47", "pwd" => "{your_password_here}", "Database" => "programacionweb", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:lunapb.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);
?>
