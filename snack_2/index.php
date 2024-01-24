<?php 

    if (isset($_GET['name']) && isset($_GET['email']) && isset($_GET['age'])) {

        $name = $_GET['name'];
        $email = $_GET['email'];
        $age = $_GET['age'];
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Snack_2</title>
</head>
<body>
<div class="container">
        <div class="row">
            <div class="col-12">
                <form action="./index.php" method="get">
                    <div class="row">
                        <div class="col-4 py-4">
                            <label for="control-label" class="form-label">Inserisci il tuo nome</label>
                            <input type="text" class="form-control" name="name" id="name" required>
                        </div>
                        <div class="col-4 py-4">
                            <label for="control-label" class="form-label">Inserisci la tua mail</label>
                            <input type="text" class="form-control" name="email" id="email" required>
                        </div>
                        <div class="col-4 py-4">
                            <label for="control-label" class="form-label">Inserisci la tua età</label>
                            <input type="text" class="form-control" name="age" id="age" required>
                        </div>
                        <div class="col-12 py-1">
                            <button type="submit" class="btn btn-sm btn-success">Invia</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>