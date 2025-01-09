<?php
$jePenseA = ["huile", "papier", "éponge", "ravioli"];
$mot = null;
$message = "Déso c'était pas ça";

if(!empty($_POST) && $_POST["mot"] !== "piege")
{
    $mot = $_POST["mot"];
}

if(!$mot){
    header("location: index.php");
}

 $dedans= in_array($mot, $jePenseA);

    if($dedans)
    {
        $message = "Bravo ! Tu sais lire dans mes pensées";
    }

// dire à l'utilisateur si son mot était dans la liste

//faire un bouton de retour vers l'accueil
//si retour vers l'accueil grace à ce bouton
//ajouter sur la page d'accueil un 'alert' de bootstrap
// "merci d'avoir visité l'autre page !"
?>

<p><strong><?= $message ?></strong></p>
<a href="index.php?alert=display&mot=<?= $mot ?>">Retour</a>




