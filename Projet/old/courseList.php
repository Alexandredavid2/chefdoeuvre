<?php
error_reporting(E_ALL);
require_once "Database.php";


$database = new Database();

$query = $database->db_query("SELECT * FROM courses");

$result = $query->fetchAll(PDO::FETCH_OBJ);
echo(json_encode($result));

?>
