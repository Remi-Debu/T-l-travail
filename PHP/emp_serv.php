<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="emp_serv.css">
    <title>Accueil</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <header>
                    <img src="emp_serv_logo.png" alt="Accueil">
                </header>
            </div>
        </div>
        <?php
        $bdd = mysqli_init();
        mysqli_real_connect($bdd, "127.0.0.1", "root", "", "emp_serv");
        $result = mysqli_query($bdd, "select noemp, nom, prenom, emploi, sup, noserv from employes");
        $donnees = mysqli_fetch_all($result);
        mysqli_free_result($result);
        mysqli_close($bdd);
        ?>

        <div class="row">
            <div class="col-lg-6">
                <div class="table_emp">
                    <table class="table table-striped table-dark">
                        <legend>EMPLOYÉS</legend>
                        <hr>
                        <tr>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>Emploi</th>
                            <th>Supérieur</th>
                            <th>Service</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>

                        <?php
                        $i = 0;
                        while ($i < count($donnees)) {
                            $get_noemp = $donnees[$i][0];
                            echo "<tr><td>" . $donnees[$i][1] . "</td>";
                            echo "<td>" . $donnees[$i][2] . "</td>";
                            echo "<td>" . $donnees[$i][3] . "</td>";
                            echo "<td>" . $donnees[$i][4] . "</td>";
                            echo "<td>" . $donnees[$i][5] . "</td>";
                            echo "<td><a href='emp_serv_details.php?noemp=$get_noemp'><button class='btn btn-info btn-sm'>Détails</button></a></td>";
                            echo "<td><a href='emp_serv_modif.php?noemp=$get_noemp'><button class='btn btn-warning btn-sm'>Modifier</button></a></td>";
                            echo "<td><a href='emp_serv_supp.php?noemp=$get_noemp'><button class='btn btn-danger btn-sm'>Supprimer</button></a></td></tr>";
                            $i++;
                        }
                        ?>
                    </table>
                </div>
            </div>

            <?php
            $bdd = mysqli_init();
            mysqli_real_connect($bdd, "127.0.0.1", "root", "", "emp_serv");
            $result = mysqli_query($bdd, "select * from services");
            $donnees = mysqli_fetch_all($result);
            mysqli_free_result($result);
            mysqli_close($bdd);
            ?>
            <div class="col-lg-6">
                <div class="table_serv">
                    <table class="table table-striped table-dark">
                        <legend>SERVICES</legend>
                        <hr>
                        <tr>
                            <th>N° Service</th>
                            <th>Service</th>
                            <th>Ville</th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>

                        <?php
                        $i = 0;
                        while ($i < count($donnees)) {
                            $get_noserv = $donnees[$i][0];
                            echo "<tr><td>" . $donnees[$i][0] . "</td>";
                            echo "<td>" . $donnees[$i][1] . "</td>";
                            echo "<td>" . $donnees[$i][2] . "</td>";
                            echo "<td><a href='emp_serv_details.php?noserv=$get_noserv'><button class='btn btn-info btn-sm'>Détails</button></a></td>";
                            echo "<td><a href='emp_serv_modif.php?noserv=$get_noserv'><button class='btn btn-warning btn-sm'>Modifier</button></a></td>";
                            echo "<td><a href='emp_serv_supp.php?noserv=$get_noserv'><button class='btn btn-danger btn-sm'>Supprimer</button></a></td></tr>";
                            $i++;
                        }
                        ?>
                    </table>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <footer>
                </footer>
            </div>
        </div>
    </div>
</body>

</html>