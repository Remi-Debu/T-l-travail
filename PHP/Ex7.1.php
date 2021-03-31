<?php
$somme = 0;
$consecutif;
$tailleTab = readline("Entrer la taille du tableau : ");
for ($i = 0; $i < $tailleTab; $i++) {
    $tab1[$i] = readline("Entrer vos notes : ");
}
echo "\nValeurs du tableau : ";
for ($i = 0; $i < $tailleTab; $i++) {
    echo $tab1[$i] . " ";
}
for ($i = 1; $i < $tailleTab; $i++) {
    if ($tab1[$i - 1] == $tab1[$i] - 1) {
        $consecutif = true;
    } else {
        $consecutif = false;
    }
}
if ($consecutif == true) {
    echo "\nConsécutif";
} else {
    echo "\nNon Consécutif";
}

