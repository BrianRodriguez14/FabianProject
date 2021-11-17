<?php
// PHP Data Objects(PDO) Sample Code:
try {
    $conn = new PDO("sqlsrv:server = tcp:proyectofab.database.windows.net,1433; Database = usuariosFab", "brian", "{Ties15059922}");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "brian", "pwd" => "{Ties15059922}", "Database" => "usuariosFab", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:proyectofab.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);
?>
