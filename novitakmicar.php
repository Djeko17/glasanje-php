<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>National Song Contest Takmicari</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

    <div class="container">

        <h1 class="text-center" id="nsc-home">National Song Contest</h1>

        <form method="post" action="dodajtakmicara.php" id="forma-novi" class="text-center">
            <div class="mb-3">
                <label class="form-label">Ime</label>
                <input type="text" class="form-control" name="ime">
            </div>
            <div class="mb-3">
                <label class="form-label">Prezime</label>
                <input type="text" class="form-control" name="prezime">
            </div>
            <div class="mb-3">
                <label class="form-label">Pesma</label>
                <input type="text" class="form-control" name="pesma">
            </div>
            <div class="mb-3">
                <label class="form-label">Zanr</label>
                <input type="text" class="form-control" name="zanr">
            </div>
            <div class="mb-3">
                <label class="form-label">Godine</label>
                <input type="text" class="form-control" name="godine">
            </div>
            <div class="mb-3">
                <label class="form-label">Drzava</label>
                <input type="text" class="form-control" name="drzava">
            </div>
            <button type="submit" class="btn btn-primary" id="dodajt-button">Dodaj takmicara</button>
        </form>

    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="javascript.js"></script>
</body>

</html>