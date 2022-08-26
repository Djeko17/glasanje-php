<?php

include('../oop/Database.php');

$database = new Database('glasanje');

$sql = "SELECT * FROM takmicar";
$sql_result = $database->connection->query($sql);
?>

<table class="table table-bordered table-striped" style="width:1100px; margin-left: 120px; margin-top: 30px;">
    <thead class="text-primary">
        <tr>
            <th>Ime Prezime</th>
            <th>Pesma</th>
            <th>Zanr</th>
            <th>Godine</th>
            <th>Drzava</th>
            <th></th>
        </tr>
    </thead>
    <tbody>

        <?php
        while ($takmicar = mysqli_fetch_assoc($sql_result)) {
        ?>
            <tr>
                <td><?php echo $takmicar['ime'] . ' ' . $takmicar['prezime']; ?></td>
                <td><?php echo $takmicar['pesma'] ?></td>
                <td><?php echo $takmicar['zanr'] ?></td>
                <td><?php echo $takmicar['godine'] ?></td>
                <td><?php echo $takmicar['drzava'] ?></td>
                <td><button class="btn btn-danger" id="delete-btn" value="<?php echo $takmicar['id'] ?>">Obrisi</button></td>
            </tr>
        <?php } ?>

    </tbody>

</table>