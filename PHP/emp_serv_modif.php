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
        $result = mysqli_query($bdd, "select noemp, nom, prenom, emploi, noserv from employes");
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
                $preselec_noserv = $donnees[$i][4];
            }
            $i++;
        }
    
     echo "<div class='container-fluid'>
             <div class='row'>
                 <div class='col-lg-12'>
                     <div class='style_formulaire'>
                         <legend>Modification</legend>
                         <hr>

                         <form action='emp_serv_ecriture.php' method='POST'>
                             <input id='noemploye' type='number' class='form-control' name='noemp' value=$preselec_noemp hidden>

                             <label for='nomPersonne'>Nom:</label>
                             <br>
                             <input id='nomPersonne' type='text' class='form-control' name='nom' placeholder='Entrez votre nom' value=$preselec_nom>

                             <label for='prenomPersonne'>Prénom:</label>
                             <br>
                             <input id='prenomPersonne' type='text' class='form-control' name='prenom' placeholder='Entrez votre prénom' value=$preselec_prenom>

                             <label for='emploiPersonne'>Emploi:</label>
                             <br>
                             <input id='emploiPersonne' type='text' class='form-control' name='emploi' placeholder='Entrez votre emploi' value=$preselec_emploi>

                             <label for='noService'>N° Service:</label>
                             <br>
                             <input id='noService' type='number' class='form-control' name='noserv' placeholder='Entrez N° service' value=$preselec_noserv>

                             <input type='submit' class='btn btn-success btn-sm' name='modifier' value='Modifier'>
                             <input type='reset' class='btn btn-warning btn-sm' value='Réinitialiser'>
                         </form>

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
                             <legend>Modification</legend>
                             <hr>
                             <form action='emp_serv_ecriture.php' method='POST'>
                                 <input id='noservice' type='number' class='form-control' name='noserv' placeholder='Entrez le N° service' value=$preselec_noserv hidden>

                                 <label for='serv'>Service:</label>
                                 <br>
                                 <input id='serv' type='text' class='form-control' name='service' placeholder='Entrez le service' value=$preselec_service>
        
                                 <label for='vill'>Ville:</label>
                                 <br>
                                 <input id='vill' type='text' class='form-control' name='ville' placeholder='Entrez la ville' value=$preselec_ville>

                                 <input type='submit' class='btn btn-success btn-sm' name='modifier' value='Modifier'>
                                 <input type='reset' class='btn btn-warning btn-sm' value='Réinitialiser'>
                             </form>
                             
                             <a href='emp_serv.php'><button class='btn btn-primary btn-lg'>Page d'Accueil</button></a>
                         </div>
                     </div>
                 </div>
             </div>";
     }
     ?>
</body>

</html>