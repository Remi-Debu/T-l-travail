<?php
$phrase = readline("Entrer votre phrase : ");
$occurence1 = 0;
for ($i = 0; $i < strlen($phrase); $i++) {
    if ($phrase[$i] == "a" || $phrase[$i] == "e" || $phrase[$i] == "i" || $phrase[$i] == "o" || $phrase[$i] == "u" || $phrase[$i] == "y") {
        $occurence1++;
    }
}
echo "Le nombre de voyelle dans la phrase saisi est : " . $occurence1;

function verificationVoyelle($caractere)
{
    $voyelle = "aeiouyAEIOUY";

    for ($i = 0; $i < strlen($voyelle); $i++) {
        if ($voyelle[$i] == $caractere) {
            return true;
        }
    }
    return false;
}
$occurence2 = 0;
for ($i = 0; $i < strlen($phrase); $i++) {
    if (verificationVoyelle($phrase[$i]) == true) {
        $occurence2++;
    }
}
echo "\nLe nombre de voyelle dans la phrase saisi est : " . $occurence2;
