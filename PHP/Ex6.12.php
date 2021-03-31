<?php
$tailleTab = readline("Entrer la taille du tableau : ");

for ($i = 0; $i < $tailleTab; $i++) {
    $tab1[$i] = readline("Entrer votre valeur : ");
    $tab2[$i] = $tab1[$i] + 1;
}
echo "\nListe des valeurs du tableau 1 : ";
for ($i = 0; $i < $tailleTab; $i++) {
    echo $tab1[$i] . " ";
}
echo "\nListe des valeurs du tableau 2 : ";
for ($i = 0; $i < $tailleTab; $i++) {
    echo $tab2[$i] . " ";
}
