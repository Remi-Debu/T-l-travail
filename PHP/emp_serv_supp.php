<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="emp_serv.css">
    <title>Suppression</title>
</head>

<body>
    <?php
    if (isset($_GET['noemp'])) {
        $bdd = mysqli_init();
        mysqli_real_connect($bdd, "127.0.0.1", "root", "", "emp_serv");
        $result = mysqli_query($bdd, "SELECT noemp, nom, prenom, emploi, sup, noserv FROM employes");
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
                $preselec_sup = $donnees[$i][4];
                $preselec_noserv = $donnees[$i][5];
            }
            $i++;
        }
    ?>
        <div class='container-fluid'>
            <div class='row'>
                <div class='col-lg-12'>
                    <div class='style_formulaire'>
                        <legend>Suppression</legend>
                        <hr>

                        <form action='emp_serv_ecriture.php' method='POST'>
                            <input id='noemp' type='number' class='form-control' name='noemp' value=<?php echo $preselec_noemp ?> hidden>

                            <label for='noemploye'>N° Employé:</label>
                            <br>
                            <div class="imitation_input2"><?php echo "$preselec_noemp" ?></div>

                            <label for='nomPersonne'>Nom:</label>
                            <br>
                            <input id='nomPersonne' type='text' class='form-control' name='nom' value=<?php echo $preselec_nom ?> disabled>

                            <label for='prenomPersonne'>Prénom:</label>
                            <br>
                            <input id='prenomPersonne' type='text' class='form-control' name='prenom' value=<?php echo $preselec_prenom ?> disabled>

                            <label for='emploiPersonne'>Emploi:</label>
                            <br>
                            <input id='emploiPersonne' type='text' class='form-control' name='emploi' value=<?php echo $preselec_emploi ?> disabled>

                            <label for='noServ'>N° Service:</label>
                            <br>
                            <input id='noServ' type='number' class='form-control' name='noserv' value=<?php echo $preselec_noserv ?> disabled>

                            <input type='submit' class='btn btn-danger btn-sm' name='supprimer' value='Supprimer'>
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
                        <legend>Suppression</legend>
                        <hr>
                        <form action='emp_serv_ecriture.php' method='POST'>
                            <input id='noserv' type='number' class='form-control' name='noserv' value=<?php echo $preselec_noserv ?> hidden>

                            <label for='service'>Service:</label>
                            <br>
                            <input id='service' type='text' class='form-control' name='service' value=<?php echo $preselec_service ?> disabled>

                            <label for='ville'>Ville:</label>
                            <br>
                            <input id='ville' type='text' class='form-control' name='ville' value=<?php echo $preselec_ville ?> disabled>

                            <input type='submit' class='btn btn-danger btn-sm' name='supprimer' value='Supprimer'>
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