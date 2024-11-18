<?php

echo "<h1> Práctica: Conexión a mi servidor de datos MYSQL </h1><br><br>";
try {
    $conn = new PDO("sqlsrv:server = tcp:lunapb.database.windows.net,1433; Database = programacionweb", "CloudSAdcf09f47", "ProgWeb78*Test");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
echo "Tu conexión ha sido exitosa";
}
catch (PDOException $e) {
    print("La conexión ha fallado.");
    die(print_r($e));
}
?>
