<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <title>Exercice1P8</title>
    </head>
    <body>
        <header>
            <div class="jumbotron text-center">
                <h1 class="display-3 text-center">Exercice 1 partie 8</h1>
                <p class="lead text-center">Faire une page HTML permettant de donner à l'utilisateur :</p>
                <ol>
                    <li>son User Agent</li>
                    <li>son adresse ip</li>
                    <li>le nom du serveur</li>
                </ol>
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
                <?php
                    echo 'L\'user agent est ' . $_SERVER['HTTP_USER_AGENT'];
                    ?>
                    <br/>
                    <hr/>
                    <?php
                    echo 'L\'adresse ip est ' . $_SERVER['REMOTE_ADDR'];
                    ?>
                    <br/>
                    <hr/>
                    <?php
                    echo 'Le nom du serveur est ' . $_SERVER['SERVER_NAME'];
                ?>
            </div>
        </main>
    </body>
</html>
