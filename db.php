<?php
$host = getenv('AZURE_MYSQL_HOST');
$user = getenv('AZURE_MYSQL_USERNAME');
$pass = getenv('AZURE_MYSQL_PASSWORD');
$db   = getenv('AZURE_MYSQL_DBNAME');

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
