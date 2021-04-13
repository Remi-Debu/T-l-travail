<?php
$bdd = mysqli_init();
mysqli_real_connect($bdd, "127.0.0.1", "root", "", "emp_serv");
$result = mysqli_query($bdd, "SELECT noemp, noserv from employes");
$donnees = mysqli_fetch_all($result);
mysqli_free_result($result);
mysqli_close($bdd);
for ($i=0; $i < count($donnees); $i++) { 
    if ($donnees[$i][0] != 4) {
        echo "success ";
    } else {
        echo "error ";
    }
}
