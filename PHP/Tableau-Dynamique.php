<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="Tableau-Dynamique.css">
    <title>Tableau</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <a href="Formulaire-Ajouter.html"><button class="btn btn-primary btn-lg">Ajouter</button></a>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <table class="table table-striped table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Nom</th>
                        <th>Prénom </th>
                        <th>E-Mail</th>
                        <th>Téléphone</th>
                        <th></th>
                        <th></th>
                    </tr>
                    <?php

                    $file = fopen("D:/DWWM/données(exercices).txt", "r");
                    while (!feof($file)) {
                        $ligne = fgets($file);
                        $donnees = explode(",", $ligne);
                        $i = 0;
                        echo "<tr>";
                        echo "<td>$donnees[$i]</td>";
                        $i++;
                        echo "<td>$donnees[$i]</td>";
                        $i++;
                        echo "<td>$donnees[$i]</td>";
                        $i++;
                        echo "<td>$donnees[$i]</td>";
                        $i++;
                        echo "<td>$donnees[$i]</td>";
                        echo "<td><a href='Formulaire-Modifier.php?id=$donnees[0]'><button class='btn btn-warning btn-sm'>Modifier</button></a></td>";
                        echo "<td><a href='Formulaire-Suppression.php?id=$donnees[0]'><button class='btn btn-danger btn-sm'>Supprimer</button></a></td>";
                        echo "</tr>";
                    }
                    fclose($file);
                    ?>
                </table>
            </div>
        </div>
    </div>
</body>

=======
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="Tableau-Dynamique.css">
    <title>Tableau</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <a href="Formulaire-Ajouter.html"><button class="btn btn-primary btn-lg">Ajouter</button></a>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <table class="table table-striped table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Nom</th>
                        <th>Prénom </th>
                        <th>E-Mail</th>
                        <th>Téléphone</th>
                        <th></th>
                        <th></th>
                    </tr>
                    <?php

                    $file = fopen("D:/DWWM/données(exercices).txt", "r");
                    while (!feof($file)) {
                        $ligne = fgets($file);
                        $donnees = explode(",", $ligne);
                        $i = 0;
                        echo "<tr>";
                        echo "<td>$donnees[$i]</td>";
                        $i++;
                        echo "<td>$donnees[$i]</td>";
                        $i++;
                        echo "<td>$donnees[$i]</td>";
                        $i++;
                        echo "<td>$donnees[$i]</td>";
                        $i++;
                        echo "<td>$donnees[$i]</td>";
                        echo "<td><a href='Formulaire-Modifier.php?id=$donnees[0]'><button class='btn btn-warning btn-sm'>Modifier</button></a></td>";
                        echo "<td><a href='Formulaire-Suppression.php?id=$donnees[0]'><button class='btn btn-danger btn-sm'>Supprimer</button></a></td>";
                        echo "</tr>";
                    }
                    fclose($file);
                    ?>
                </table>
            </div>
        </div>
    </div>
</body>

>>>>>>> 4dd7b61 (maj)
</html>