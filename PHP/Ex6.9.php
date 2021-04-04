<<<<<<< HEAD
<?php
$tailleTab = readline("Entrer la taille du tableau : ");
$sommeTab = 0;
for ($i = 0; $i < $tailleTab; $i++) {
    $tab[$i] = readline("Entrer votre valeur : ");
    $sommeTab = $sommeTab + $tab[$i];
}
echo "\nListe des valeurs du tableau : ";
for ($i = 0; $i < $tailleTab; $i++) {
    echo $tab[$i] . " ";
}
echo "\n\nSomme des valeurs du tableau : " . $sommeTab;
?>
=======
<?php
$tailleTab = readline("Entrer la taille du tableau : ");
$sommeTab = 0;
for ($i = 0; $i < $tailleTab; $i++) {
    $tab[$i] = readline("Entrer votre valeur : ");
    $sommeTab = $sommeTab + $tab[$i];
}
echo "\nListe des valeurs du tableau : ";
for ($i = 0; $i < $tailleTab; $i++) {
    echo $tab[$i] . " ";
}
echo "\n\nSomme des valeurs du tableau : " . $sommeTab;
?>
>>>>>>> 4dd7b61 (maj)
