<?php

include('oop/Database.php');

$ime = $_POST['ime'];
$prezime = $_POST['prezime'];
$pesma = $_POST['pesma'];
$zanr = $_POST['zanr'];
$godine = $_POST['godine'];
$drzava = $_POST['drzava'];

$database = new Database('glasanje');

$sql = "INSERT INTO takmicar VALUES (NULL, '$ime', '$prezime', '$pesma', '$zanr', '$godine', '$drzava')";
$sql_result = $database->connection->query($sql);

$last_id = $database->connection->insert_id;
$sql2 = "INSERT INTO glasovi VALUES (NULL, '$last_id', '0')";
$database->connection->query($sql2);

header('Location: takmicari.php');
