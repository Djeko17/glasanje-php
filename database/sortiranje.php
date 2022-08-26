<?php

include('../oop/Database.php');

$database = new Database('glasanje');

$sortiranje = $_POST['sortiranje'];

$sql = "SELECT * FROM takmicar ORDER BY ime " . $sortiranje;
$sql_result = $database->connection->query($sql);

while ($takmicar = mysqli_fetch_assoc($sql_result)) {
?>
    <div class="takmicar-div">
        <h3 class="text-primary"><?php echo $takmicar['ime'] . ' ' . $takmicar['prezime']; ?></h3>
        <h4 class="text-secondary mx-5"><?php echo $takmicar['pesma'] ?></h4>
        <button class="btn btn-danger mx-5" value="<?php echo $takmicar['id'] ?>" id="glasanje" ime="<?php echo $takmicar['ime'] . ' ' . $takmicar['prezime']; ?>">Glasaj</button>
    </div>

<?php } ?>