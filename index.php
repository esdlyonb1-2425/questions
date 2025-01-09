<?php
$prenom = "toi qui visites";


?>



<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <h1>J'ai une question</h1>

    <form method="GET">

        <input type="text" name="lePrenom"  placeholder="ton prenom?">
        <button class="btn btn-success" type="submit">OK</button>

    </form>
    <h2>Salut, <?php echo $prenom; ?> !</h2>
</body>
</html>