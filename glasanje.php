<?php

include('oop/Database.php');
include('oop/Glas.php');

$database = new Database('glasanje');
$sql_glasovi_takmicar = "SELECT * FROM glasovi WHERE takmicar_id=" . $_POST['takmicarID'];
$data = $database->connection->query($sql_glasovi_takmicar);
$takmicar_br_glasova = $data->fetch_object()->broj_glasova + 1;

$glas = new Glas();
return $glas->dodajGlas($_POST['takmicarID'], $takmicar_br_glasova);
