
<?php



// Connection base de données

$username = "admin";
$password = "0000";

//DATA SOURCE NAME
$dsn = "mysql:host=127.0.0.1;dbname=membres";

try {
$PDOObject = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
die('Connexion &eacute;chou&eacute;e : ' . $e->getMessage());
}