<?php

include('oop/Database.php');

$database = new Database('glasanje');

$takmicarID = $_POST['takmicarID'];
$sql = "DELETE FROM takmicar WHERE id=" . $takmicarID;
$database->connection->query($sql);
