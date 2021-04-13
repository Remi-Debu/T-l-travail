<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="emp_serv.css">
    <title>Ajouter</title>
</head>

<body>
    <?php
    if (isset($_GET['noemp'])) { ?>
         <div class='container-fluid'>
             <div class='row'>
                 <div class='col-lg-12'>
                     <div class='style_formulaire'>
                         <legend>Ajouter</legend>
                         <hr>

                         <form action='emp_serv_ecriture.php' method='POST'>
                             <label for='noemploye'>N° Employé:</label>
                             <br>
                             <input id='noemploye' type='number' class='form-control' name='noemp' placeholder='Entrez N° employé' required autofocus>

                             <label for='nomPersonne'>Nom:</label>
                             <br>
                             <input id='nomPersonne' type='text' class='form-control' name='nom' placeholder='Entrez votre nom' required>

                             <label for='prenomPersonne'>Prénom:</label>
                             <br>
                             <input id='prenomPersonne' type='text' class='form-control' name='prenom' placeholder='Entrez votre prénom' required>

                             <label for='emploiPersonne'>Emploi:</label>
                             <br>
                             <input id='emploiPersonne' type='text' class='form-control' name='emploi' placeholder='Entrez votre emploi' required>

                             <label for='nosup'>N° Supérieur:</label>
                             <br>
                             <input id='nosup' type='number' class='form-control' name='sup' placeholder='Entrez N° supérieur'>

                             <label for='dateembauche'>Date d'embauche:</label>
                             <br>
                             <input id='dateembauche' type='date' class='form-control' name='embauche' required>

                             <label for='salaire'>Salaire:</label>
                             <br>
                             <input id='salaire' type='number' class='form-control' name='sal' placeholder='Entrez votre salaire' required>

                             <label for='commission'>Commission:</label>
                             <br>
                             <input id='commission' type='number' class='form-control' name='comm' placeholder='Entrez votre commission'>

                             <label for='noService'>N° Service:</label>
                             <br>
                             <input id='noService' type='number' class='form-control' name='noserv' placeholder='Entrez N° service' required>

                             <input type='submit' class='btn btn-success btn-sm' name='ajouter' value='Ajouter'>
                             <input type='reset' class='btn btn-warning btn-sm' value='Réinitialiser'>
                         </form>

                         <a href='emp_serv.php'><button class='btn btn-primary btn-lg'>Page d'Accueil</button></a>
                     </div>
                 </div>
             </div>
         </div>
     <?php
        }

     if (isset($_GET['noserv'])) { ?>
             <div class='container-fluid'>
                 <div class='row'>
                     <div class='col-lg-12'>
                         <div class='style_formulaire'>
                             <legend>Ajouter</legend>
                             <hr>
                             <form action='emp_serv_ecriture.php' method='POST'>
                                 <label for='noservice'>N° service:</label>
                                 <br>
                                 <input id='noservice' type='number' class='form-control' name='noserv' placeholder='Entrez le N° service' required autofocus>

                                 <label for='serv'>Service:</label>
                                 <br>
                                 <input id='serv' type='text' class='form-control' name='service' placeholder='Entrez le service' required>
        
                                 <label for='vill'>Ville:</label>
                                 <br>
                                 <input id='vill' type='text' class='form-control' name='ville' placeholder='Entrez la ville' required>

                                 <input type='submit' class='btn btn-success btn-sm' name='ajouter' value='Ajouter'>
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