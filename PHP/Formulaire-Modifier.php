<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="Formulaire.css">
    <title>Modification</title>
</head>

<body>
    <?php
    if (isset($_GET['id'])) {
        $file = fopen('D:/DWWM/données(exercices).txt', 'r');
        while (!feof($file)) {
            $ligne = fgets($file);
            $donnees = explode(",", $ligne);
            if ($_GET['id'] == $donnees[0]) {
                $preselection = $donnees;
            }
        }
        fclose($file);
    }
    ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <legend>Modification</legend>
                <hr>
                <form action="Ecriture-Tableau.php" method="POST">
                    <input id="idPersonne" type="number" class="form-control" name="id" placeholder="Entrez l'ID" value="<?php echo $preselection[0] ?>" hidden>
                    <label for="nomPersonne">Nom:</label>
                    <br>
                    <input id="nomPersonne" type="text" class="form-control" name="nom" placeholder="Entrez votre nom" value="<?php echo $preselection[1] ?>">
                    <label for="prenomPersonne">Prénom:</label>
                    <br>
                    <input id="prenomPersonne" type="text" class="form-control" name="prenom" placeholder="Entrez votre prénom" value="<?php echo $preselection[2] ?>">
                    <label for="mailPersonne">E-Mail:</label>
                    <br>
                    <input id="mailPersonne" type="email" class="form-control" name="email" placeholder="Entrez votre E-Mail" value="<?php echo $preselection[3] ?>">
                    <label for="phonePersonne">Téléphone:</label>
                    <br>
                    <input id="phonePersonne" type="tel" class="form-control" name="telephone" placeholder="Entrez votre téléphone" value="<?php echo $preselection[4] ?>">
                    <input type="submit" class="btn btn-success btn-sm" name="modifier" value="Modifier">
                    <input type="reset" class="btn btn-warning btn-sm" value="Réinitialiser">
                </form>
                <a href="Tableau-Dynamique.php"><button class="btn btn-primary btn-lg">Page d'Accueil</button></a>
            </div>
        </div>
    </div>
</body>

</html>