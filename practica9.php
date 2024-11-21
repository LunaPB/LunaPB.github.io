<?php

echo "<h1> Práctica: Conexión a mi servidor de datos MYSQL </h1><br><br>";

try {
    // Establecer conexión
    $conn = new PDO("sqlsrv:server = tcp:lunapb.database.windows.net,1433; Database = programacionweb", "CloudSAdcf09f47", "ProgWeb78*Test");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "La conexión con el servidor de datos SQL ha sido exitosa.<br>";

    // Definir datos para la tabla
    $tablaprueba = "tabla_prueba";
    $columns = [
        ["ID" => "id", "type" => "INT PRIMARY KEY"],
        ["ID" => "nombre", "type" => "VARCHAR(50)"]
    ];

    // Crear tabla
    $createTableQuery = "CREATE TABLE dbo.$tablaprueba (";
    foreach ($columns as $column) {
        $createTableQuery .= "{$column['ID']} {$column['type']}, ";
    }
    $createTableQuery = rtrim($createTableQuery, ", ") . ")";
    
    $conn->exec($createTableQuery);
    echo "La tabla $tablaprueba se ha creado con éxito.";
}
catch (PDOException $e) {
    die("Error al conectar con SQL Server: " . $e->getMessage());
}
?>
