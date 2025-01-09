<?php
$prenom = "toi qui visites";
$age = null;
$message = "";
$alert = false;


if(!empty($_GET['alert']) && $_GET['alert'] == 'display'){
    $alert = true;
    $mot = $_GET['mot'];
}

 if(!empty($_GET['lePrenom'])){
     $prenom = $_GET['lePrenom'];
 }

if(!empty($_GET['leAge']) && ctype_digit($_GET['leAge']) ){
    $age = $_GET['leAge'];
}




if($age && $age < 18 )
{
    $message = "tu es mineur";
}else if($age){
    $message = "tu es majeur";
}





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

<?php if($alert){ ?>
<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Hey !</strong> Merci d'avoir visité l'autre page !    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    <strong>Au fait !</strong> Ton mot était <strong><?= $mot ?></strong> <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

<?php } ?>

    <h1>J'ai une question</h1>

    <form action="index.php" method="GET">

        <input type="text" name="lePrenom"  placeholder="ton prenom?">
        <input type="text" name="leAge"  placeholder="ton age?">
        <button class="btn btn-success" type="submit">OK</button>


    </form>
    <h2>Salut, <?php echo $prenom; ?> !</h2>
    <h2><?php echo $message; ?></h2>

    <form method="POST" action="autrepage.php">
        <input type="text" name="mot" placeholder="à quel mot je pense ?">
        <button class="btn btn-primary" type="submit">Go</button>
    </form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>