<?php
$bdd = mysqli_init();
mysqli_real_connect($bdd, "127.0.0.1", "root", "", "emp_serv");
mysqli_query($bdd, "ALTER TABLE employes DROP CONSTRAINT employes_ibfk_1");
mysqli_query($bdd, "ALTER TABLE employes DROP CONSTRAINT employes_ibfk_2");
mysqli_close($bdd);

if (isset($_POST['modifier'])) {
    if (isset($_POST["noemp"]) && isset($_POST["nom"]) && isset($_POST["prenom"]) && isset($_POST["emploi"])) {
        $noemp = $_POST["noemp"];
        $nom = $_POST["nom"];
        $prenom = $_POST["prenom"];
        $emploi = $_POST["emploi"];

        $bdd = mysqli_init();
        mysqli_real_connect($bdd, "127.0.0.1", "root", "", "emp_serv");
        mysqli_query($bdd, "UPDATE employes SET nom = '$nom', prenom = '$prenom', emploi = '$emploi' WHERE noemp = $noemp");
        mysqli_close($bdd);
    }

    if (isset($_POST["noserv"]) && isset($_POST["service"]) && isset($_POST["ville"])) {
        $noserv = $_POST["noserv"];
        $service = $_POST["service"];
        $ville = $_POST["ville"];

        $bdd = mysqli_init();
        mysqli_real_connect($bdd, "127.0.0.1", "root", "", "emp_serv");
        mysqli_query($bdd, "UPDATE services SET service = '$service', ville = '$ville' WHERE noserv = $noserv");
        mysqli_close($bdd);
    }
}

if (isset($_POST['supprimer'])) {
    if (isset($_POST["noemp"])) {
        $noemp = $_POST["noemp"];

        $bdd = mysqli_init();
        mysqli_real_connect($bdd, "127.0.0.1", "root", "", "emp_serv");
        mysqli_query($bdd, "DELETE FROM employes WHERE noemp = $noemp");
        mysqli_close($bdd);
    }

    if (isset($_POST["noserv"])) {
        $noserv = $_POST["noserv"];

        $bdd = mysqli_init();
        mysqli_real_connect($bdd, "127.0.0.1", "root", "", "emp_serv");
        mysqli_query($bdd, "DELETE FROM services WHERE noserv = $noserv");
        mysqli_close($bdd);
    }
}

if (isset($_POST['ajouter'])) {
    if (
        isset($_POST["noemp"]) && isset($_POST["nom"]) && isset($_POST["prenom"]) && isset($_POST["emploi"])
        && isset($_POST["embauche"]) && isset($_POST["sal"]) && isset($_POST["noserv"])
    ) {
        $bdd = mysqli_init();
        mysqli_real_connect($bdd, "127.0.0.1", "root", "", "emp_serv");
        $result = mysqli_query($bdd, "SELECT noemp from employes");
        $donnees = mysqli_fetch_all($result);
        mysqli_free_result($result);
        mysqli_close($bdd);
        for ($i = 0; $i < count($donnees); $i++) {
            if ($donnees[$i][0] != $_POST["noemp"]) {
                if (
                    preg_match("#[A-Z]#", $_POST["nom"]) && preg_match("#[A-Z]#", $_POST["prenom"]) && preg_match("#[A-Z]#", $_POST["emploi"])
                    && preg_match("#[0-9][0-9][0-9][0-9]-[0-9][0-9]-[0-9][0-9]#", $_POST["embauche"])
                ) {
                    $noemp = $_POST["noemp"];
                    $nom = $_POST["nom"];
                    $prenom = $_POST["prenom"];
                    $emploi = $_POST["emploi"];
                    $embauche = $_POST["embauche"];
                    $sal = $_POST["sal"];
                    $noserv = $_POST["noserv"];

                    $bdd = mysqli_init();
                    mysqli_real_connect($bdd, "127.0.0.1", "root", "", "emp_serv");
                    mysqli_query($bdd, "INSERT INTO employes (noemp, nom, prenom, emploi, embauche, sal, noserv) 
                                        VALUES ($noemp, '$nom', '$prenom', '$emploi', '$embauche', $sal, $noserv)");

                    if (isset($_POST["sup"])) {
                        $sup = $_POST["sup"];
                        mysqli_query($bdd, "UPDATE employes SET sup = $sup WHERE noemp = $noemp");
                    } else {
                        $sup = NULL;
                        mysqli_query($bdd, "UPDATE employes SET sup = $sup WHERE noemp = $noemp");
                    }
                    if (isset($_POST["comm"])) {
                        $comm = $_POST["comm"];
                        mysqli_query($bdd, "UPDATE employes SET comm = $comm WHERE noemp = $noemp");
                    } else {
                        $comm = NULL;
                        mysqli_query($bdd, "UPDATE employes SET comm = $comm WHERE noemp = $noemp");
                    }
                    mysqli_close($bdd);
                }
            }
        }
    }

    if (isset($_POST["noserv"]) && isset($_POST["service"]) && isset($_POST["ville"])) {
        $bdd = mysqli_init();
        mysqli_real_connect($bdd, "127.0.0.1", "root", "", "emp_serv");
        $result = mysqli_query($bdd, "SELECT noserv from services");
        $donnees = mysqli_fetch_all($result);
        mysqli_free_result($result);
        mysqli_close($bdd);
        for ($i = 0; $i < count($donnees); $i++) {
            if ($donnees[$i][0] != $_POST["noserv"]) {
                if (preg_match("#[A-Z]#", $_POST["service"]) && preg_match("#[A-Z]#", $_POST["ville"])) {
                    $noserv = $_POST["noserv"];
                    $service = $_POST["service"];
                    $ville = $_POST["ville"];

                    $bdd = mysqli_init();
                    mysqli_real_connect($bdd, "127.0.0.1", "root", "", "emp_serv");
                    mysqli_query($bdd, "INSERT INTO services (noserv, service, ville) VALUES ($noserv, '$service', '$ville')");
                    mysqli_close($bdd);
                }
            }
        }
    }
}

$bdd = mysqli_init();
mysqli_real_connect($bdd, "127.0.0.1", "root", "", "emp_serv");
mysqli_query($bdd, "ALTER TABLE employes ADD CONSTRAINT FOREIGN KEY (noserv) REFERENCES services(noserv)");
mysqli_query($bdd, "ALTER TABLE employes ADD CONSTRAINT FOREIGN KEY (sup) REFERENCES employes(noemp)");
mysqli_close($bdd);

header("Location: emp_serv.php");
exit();
