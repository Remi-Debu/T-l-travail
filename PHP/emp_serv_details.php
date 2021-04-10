<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="emp_serv.css">
    <title>Détails</title>
</head>

<body>
    <?php
    if (isset($_GET['noemp'])) {
        $bdd = mysqli_init();
        mysqli_real_connect($bdd, "127.0.0.1", "root", "", "emp_serv");
        $result = mysqli_query($bdd, "select noemp, nom, prenom, emploi, sup, noserv, embauche, sal, comm from employes");
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
                $preselec_embauche = $donnees[$i][6];
                $preselec_sal = $donnees[$i][7];
                $preselec_comm = $donnees[$i][8];
            }
            $i++;
        }
        echo "<div class='container-fluid'>
                 <div class='row'>
                     <div class='col-lg-12'>
                         <div class='style_formulaire'>
                             <legend>Détails</legend>
                             <hr>

                             <label for='noemp'>N° Employé:</label>
                             <br>
                             <input id='noemp' type='number' class='form-control' name='noemp' value=$preselec_noemp disabled>";

                             if ($preselec_sup != null) {
                                 echo "<label for='supEmp'>N° Supérieur:</label>
                                 <br>
                                 <input id='supEmp' type='number' class='form-control' name='sup' value=$preselec_sup disabled>";
                             }

                             echo "<label for='nomPersonne'>Nom:</label>
                             <br>
                             <input id='nomPersonne' type='text' class='form-control' name='nom' value=$preselec_nom disabled>

                             <label for='prenomPersonne'>Prénom:</label>
                             <br>
                             <input id='prenomPersonne' type='text' class='form-control' name='prenom' value=$preselec_prenom disabled>

                             <label for='embauche'>Date d'embauche:</label>
                             <br>
                             <input id='embauche' type='date' class='form-control' name='embauche' value=$preselec_embauche disabled>

                             <label for='emploiPersonne'>Emploi:</label>
                             <br>
                             <input id='emploiPersonne' type='text' class='form-control' name='emploi' value=$preselec_emploi disabled>

                             <label for='salaire'>Salaire:</label>
                             <br>
                             <input id='salaire' type='number' class='form-control' name='sal' value=$preselec_sal disabled>";

                             if ($preselec_comm != null) {
                                  echo "<label for='commission'>Commission:</label>
                                  <br>
                                  <input id='commission' type='number' class='form-control' name='comm' value=$preselec_comm disabled>";
                             }

                             echo "<label for='noServ'>N° Service:</label>
                             <br>
                             <input id='noServ' type='number' class='form-control' name='noserv' value=$preselec_noserv disabled>

                             <a href='emp_serv.php'><button class='btn btn-primary btn-lg'>Page d'Accueil</button></a>
                         </div>
                     </div>
                 </div>
             </div>";
    }
    
    if (isset($_GET['noserv'])) {
        $bdd = mysqli_init();
        mysqli_real_connect($bdd, "127.0.0.1", "root", "", "emp_serv");
        $result = mysqli_query($bdd, "select * from services");
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
        echo "<div class='container-fluid'>
                 <div class='row'>
                     <div class='col-lg-12'>
                         <div class='style_formulaire'>
                             <legend>Détails</legend>
                             <hr>

                             <label for='noserv'>N° Service:</label>
                             <br>
                             <input id='noserv' type='number' class='form-control' name='noserv' value=$preselec_noserv disabled>

                             <label for='service'>Service:</label>
                             <br>
                             <input id='service' type='text' class='form-control' name='service' value=$preselec_service disabled>
        
                             <label for='ville'>Ville:</label>
                             <br>
                             <input id='ville' type='text' class='form-control' name='ville' value=$preselec_ville disabled>

                             <a href='emp_serv.php'><button class='btn btn-primary btn-lg'>Page d'Accueil</button></a>
                         </div>
                     </div>
                 </div>
             </div>";
    }
    ?>

</body>

</html>