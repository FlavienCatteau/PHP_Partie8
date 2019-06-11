<?php session_start()?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <title>Exercice2P8</title>
    </head>
    <body>
        <header>
            <div class="jumbotron text-center">
                <h1 class="display-3 text-center">Exercice 2 partie 8</h1>
                <p class="lead text-center">Sur la page index, faire un liens vers une autre page. Passer d'une page à l'autre le contenu des variables lastname, firstname et age grâce aux sessions. Ces variables auront été définies directement dans le code.</p>
                <p>Il faudra afficher le contenu de ces variables sur la deuxième page.</p>
            </div>
            <div class="container-fluid text-center">
                <a href="../exercice1P8/index.php"><button class="button">Exercice 1</button></a>
                <a href="../exercice2P8/index.php"><button class="button">Exercice 2</button></a>
                <a href="../exercice3P8/index.php"><button class="button">Exercice 3</button></a>
                <a href="../exercice4P8/index.php"><button class="button">Exercice 4</button></a>
                <a href="../exercice5P8/index.php"><button class="button">Exercice 5</button></a>
            </div>
        </header>
        <main>
            <div class="php text-center">
                <p>Variables récupérées :</p>
                <p><b>firstName: </b><?= $_SESSION['firstName'] ?></p>
                <p><b>lastName: </b><?= $_SESSION['lastName'] ?></p>
                <p><b>age: </b><?= $_SESSION['age'] ?></p>
                <a href="index.php" class="btn btn-primary">Retour</a>
            </div>
        </main>
    </body>
</html>