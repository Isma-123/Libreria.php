<?php
$host     = 'mysql';       // ⚠️ IMPORTANTE
$user     = 'root';
$password = '';
$dbname   = 'libreria';
$port     = 3306;

$mysqli = new mysqli($host, $user, $password, $dbname, $port);

if ($mysqli->connect_error) {
    die("Error de conexión MySQLi: " . $mysqli->connect_error);
}

$mysqli->set_charset('utf8mb4');
?>
