<?php

class Glas
{
    public $id;
    public $takmicar_id;
    public $broj_glasova;

    public function dodajGlas($takmicar_id, $broj_glasova)
    {
        $sql = "UPDATE glasovi SET broj_glasova='" . $broj_glasova . "' WHERE takmicar_id=" . $takmicar_id;

        $database = new Database('glasanje');
        return $database->connection->query($sql);
    }
}
