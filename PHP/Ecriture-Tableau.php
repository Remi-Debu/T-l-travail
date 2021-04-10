<?php
if (isset($_POST['envoyer'])) {
    if (isset($_POST["id"]) && isset($_POST["nom"]) && isset($_POST["prenom"]) && isset($_POST["email"]) && isset($_POST["telephone"])) {
        $file = fopen("D:/DWWM/données(exercices).txt", "a+");
        $ligne = "\n" . $_POST["id"] . "," . $_POST["nom"] . "," . $_POST["prenom"] . "," . $_POST["email"] . "," . $_POST["telephone"];
        fwrite($file, $ligne);
        fclose($file);
    }
}

if (isset($_POST['modifier'])) {
    if (isset($_POST["id"]) && isset($_POST["nom"]) && isset($_POST["prenom"]) && isset($_POST["email"]) && isset($_POST["telephone"])) {
        $file = fopen("D:/DWWM/données(exercices).txt", "r");
        $file2 = "D:/DWWM/données(exercices).txt";
        $newLigne = $_POST["id"] . "," . $_POST["nom"] . "," . $_POST["prenom"] . "," . $_POST["email"] . "," . $_POST["telephone"];
        while (!feof($file)) {
            $ligne = fgets($file);
            $donnees = explode(",", $ligne);
            if ($donnees[0] == $_POST["id"]) {
                if (feof($file) != true) {
                    file_put_contents($file2, str_replace($ligne, "\n", file_get_contents($file2)));
                } else {
                    file_put_contents($file2, str_replace($ligne, $newLigne, file_get_contents($file2)));
                }
            }
        }
        fclose($file);
    }
}
if (isset($_POST['supprimer'])) {
    $file = fopen("D:/DWWM/données(exercices).txt", "r");
    $file2 = "D:/DWWM/données(exercices).txt";
    while (!feof($file)) {
        $ligne = fgets($file);
        $donnees = explode(",", $ligne);
        if ($donnees[0] == $_POST["id"]) {
            file_put_contents($file2, str_replace($ligne, "", file_get_contents($file2)));
        }
    }
    fclose($file);
}
header("Location: Tableau-Dynamique.php");
exit();
