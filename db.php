<?php
$host = 'localhost';
$db = 'contacts';
$user = 'root'; // replace with your database username
$pass = '123456'; // replace with your database password

try {
    $pdo = new PDO("mysql:host=127.0.0.1;dbname=contacts", username:'root',password:'123456');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>