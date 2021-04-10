<?php
if (isset($_POST['modifier'])) {
    if (isset($_POST["noemp"]) && isset($_POST["nom"]) && isset($_POST["prenom"]) && isset($_POST["emploi"]) && isset($_POST["noserv"])) {
        $noemp = $_POST["noemp"];
        $nom = $_POST["nom"];
        $prenom = $_POST["prenom"];
        $emploi = $_POST["emploi"];
        $noserv = $_POST["noserv"];

        $bdd = mysqli_init();
        mysqli_real_connect($bdd, "127.0.0.1", "root", "", "emp_serv");
        mysqli_query($bdd, "UPDATE employes SET nom = '$nom', prenom = '$prenom', emploi = '$emploi', noserv = $noserv WHERE noemp = $noemp");
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
        $result = mysqli_query($bdd, "DELETE FROM employes WHERE noemp = $noemp");
        mysqli_close($bdd);
    }

    if (isset($_POST["noserv"])) {
        $noserv = $_POST["noserv"];

        $bdd = mysqli_init();
        mysqli_real_connect($bdd, "127.0.0.1", "root", "", "emp_serv");
        $result = mysqli_query($bdd, "DELETE FROM services WHERE noserv = $noserv");
        mysqli_close($bdd);
    }
}
header("Location: emp_serv.php");
exit();
