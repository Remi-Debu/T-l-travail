<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="emp_serv.css">
    <title>Modification</title>
</head>

<body>
    <?php
    if (isset($_GET['noemp'])) {
        $bdd = mysqli_init();
        mysqli_real_connect($bdd, "127.0.0.1", "root", "", "emp_serv");
        $result = mysqli_query($bdd, "SELECT e.noemp, e.nom, e.prenom, e.emploi, concat(e2.nom, ' ', e2.prenom) 'superieur', service FROM employes e 
                                      INNER JOIN services s ON e.noserv = s.noserv 
                                      INNER JOIN employes e2 ON e.sup = e2.noemp OR e.sup IS NULL
                                      GROUP BY noemp;");
        $donnees = mysqli_fetch_all($result);
        mysqli_free_result($result);
        mysqli_close($bdd);
        $i = 0;
        while ($i < count($donnees)) {
            if ($_GET['noemp'] == $donnees[$i][0]) {
                $preselec_noemp = $donnees[$i][0];
                $preselec_nom = $donnees[$i][1];
                $preselec_prenom = $donnees[$i][2];
                $preselec_emploi = $donnees[$i][3];
                $preselec_superieur = $donnees[$i][4];
                $preselec_service = $donnees[$i][5];
            }
            $i++;
        }
    ?>
        <div class='container-fluid'>
            <div class='row'>
                <div class='col-lg-12'>
                    <div class='style_formulaire'>
                        <legend>Modification</legend>
                        <hr>

                        <form action='emp_serv_ecriture.php' method='POST'>
                            <input id='noemploye' type='number' class='form-control' name='noemp' value=<?php echo $preselec_noemp ?> hidden>

                            <label for='nomPersonne'>Nom:</label>
                            <br>
                            <input id='nomPersonne' type='text' class='form-control' name='nom' placeholder='Entrez votre nom' value=<?php echo $preselec_nom ?>>

                            <label for='prenomPersonne'>Prénom:</label>
                            <br>
                            <input id='prenomPersonne' type='text' class='form-control' name='prenom' placeholder='Entrez votre prénom' value=<?php echo $preselec_prenom ?>>

                            <label for='emploiPersonne'>Emploi:</label>
                            <br>
                            <input id='emploiPersonne' type='text' class='form-control' name='emploi' placeholder='Entrez votre emploi' value=<?php echo $preselec_emploi ?>>

                            <?php
                            if ($preselec_noemp == 1000) {
                            } else { ?>
                                <label for='nosup'>Supérieur:</label>
                                <br>
                                <div class='imitation_input'><?php echo "$preselec_superieur" ?></div>
                            <?php
                            } ?>

                            <label for='nosup'>Service:</label>
                            <br>
                            <?php echo "<div class='imitation_input'>$preselec_service</div>"; ?>

                            <input type='submit' class='btn btn-success btn-sm' name='modifier' value='Modifier'>
                            <input type='reset' class='btn btn-warning btn-sm' value='Réinitialiser'>
                        </form>

                        <a href='emp_serv.php'><button class='btn btn-primary btn-lg'>Page d'Accueil</button></a>
                    </div>
                </div>
            </div>
        </div>
    <?php
    }

    if (isset($_GET['noserv'])) {
        $bdd = mysqli_init();
        mysqli_real_connect($bdd, "127.0.0.1", "root", "", "emp_serv");
        $result = mysqli_query($bdd, "SELECT * FROM services");
        $donnees = mysqli_fetch_all($result);
        mysqli_free_result($result);
        mysqli_close($bdd);
        $i = 0;
        while ($i < count($donnees)) {
            if ($_GET['noserv'] == $donnees[$i][0]) {
                $preselec_noserv = $donnees[$i][0];
                $preselec_service = $donnees[$i][1];
                $preselec_ville = $donnees[$i][2];
            }
            $i++;
        }
    ?>
        <div class='container-fluid'>
            <div class='row'>
                <div class='col-lg-12'>
                    <div class='style_formulaire'>
                        <legend>Modification</legend>
                        <hr>
                        <form action='emp_serv_ecriture.php' method='POST'>
                            <input id='noservice' type='number' class='form-control' name='noserv' placeholder='Entrez le N° service' value=<?php echo $preselec_noserv ?> hidden>

                            <label for='serv'>Service:</label>
                            <br>
                            <input id='serv' type='text' class='form-control' name='service' placeholder='Entrez le service' value=<?php echo $preselec_service ?>>

                            <label for='vill'>Ville:</label>
                            <br>
                            <input id='vill' type='text' class='form-control' name='ville' placeholder='Entrez la ville' value=<?php echo $preselec_ville ?>>

                            <input type='submit' class='btn btn-success btn-sm' name='modifier' value='Modifier'>
                            <input type='reset' class='btn btn-warning btn-sm' value='Réinitialiser'>
                        </form>

                        <a href='emp_serv.php'><button class='btn btn-primary btn-lg'>Page d'Accueil</button></a>
                    </div>
                </div>
            </div>
        </div>
    <?php
    }
    ?>
</body>

</html>