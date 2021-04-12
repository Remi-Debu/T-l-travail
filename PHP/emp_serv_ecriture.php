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
        isset($_POST["noemp"]) && isset($_POST["nom"]) && isset($_POST["prenom"]) && isset($_POST["emploi"]) && isset($_POST["sup"])
        && isset($_POST["embauche"]) && isset($_POST["sal"]) && isset($_POST["comm"]) && isset($_POST["noserv"])
    ) {
        $noemp = $_POST["noemp"];
        $nom = $_POST["nom"];
        $prenom = $_POST["prenom"];
        $emploi = $_POST["emploi"];
        $sup = $_POST["sup"];
        $embauche = $_POST["embauche"];
        $sal = $_POST["sal"];
        $comm = $_POST["comm"];
        $noserv = $_POST["noserv"];

        $bdd = mysqli_init();
        mysqli_real_connect($bdd, "127.0.0.1", "root", "", "emp_serv");
        mysqli_query($bdd, "INSERT INTO employes (noemp, nom, prenom, emploi, sup, embauche, sal, comm, noserv) 
        VALUES ($noemp, '$nom', '$prenom', '$emploi', $sup, '$embauche', $sal, $comm, $noserv)");
        mysqli_close($bdd);
    }

    if (isset($_POST["noserv"]) && isset($_POST["service"]) && isset($_POST["ville"])) {
        $noserv = $_POST["noserv"];
        $service = $_POST["service"];
        $ville = $_POST["ville"];

        $bdd = mysqli_init();
        mysqli_real_connect($bdd, "127.0.0.1", "root", "", "emp_serv");
        mysqli_query($bdd, "INSERT INTO services (noserv, service, ville) VALUES ($noserv, '$service', '$ville')");
        mysqli_close($bdd);
    }
}

$bdd = mysqli_init();
mysqli_real_connect($bdd, "127.0.0.1", "root", "", "emp_serv");
mysqli_query($bdd, "ALTER TABLE employes ADD CONSTRAINT FOREIGN KEY (noserv) REFERENCES services(noserv)");
mysqli_query($bdd, "ALTER TABLE employes ADD CONSTRAINT FOREIGN KEY (sup) REFERENCES employes(noemp)");
mysqli_close($bdd);

header("Location: emp_serv.php");
exit();
