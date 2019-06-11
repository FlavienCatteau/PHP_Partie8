<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <title>Exercice4P8</title>
    </head>
    <body>
        <header>
            <div class="jumbotron text-center">
                <h1 class="display-3 text-center">Exercice 4 partie 8</h1>
                <p class="lead text-center">Faire une page qui va récupérer les informations du cookie créé à l'exercice 3 et qui les affiches.</p>
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
                <!--On affiche les cookies afin de voir si nos variables sont bien enregistrés dedans-->
                <?php 
                    if (isset($_COOKIE['loginCookie']) && isset($_COOKIE['pwdCookie'])){
                        echo $_COOKIE['loginCookie'].' '.$_COOKIE['pwdCookie'];
                    }
                ?>
            </div>
        </main>
    </body>
</html>
