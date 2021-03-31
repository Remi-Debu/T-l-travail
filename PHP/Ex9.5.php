<?php
$phrase = readline("Entrer votre phrase : ");
$caractereSuppr = readline("Entrer le rang du caractère à supprimer : ");

for ($i = $caractereSuppr; $i < strlen($phrase) - 1; $i++) {
    $phrase[$i] = $phrase[$i + 1];
}
$phrase = substr($phrase, 0, -1);
echo "Votre nouvelle phrase : " . $phrase;
