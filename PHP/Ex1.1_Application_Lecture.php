<?php
$dataFile = fopen("D:/DWWM/données(exercices).txt", "r");
$displayFile = fread($dataFile, filesize("D:/DWWM/données(exercices).txt"));
fclose($dataFile);
echo $displayFile;

$data = explode(",", $displayFile);
echo "\nContenu du fichier:\n";
for ($i = 0; $i < count($data); $i += 4) {
    echo "Nom: " . $data[$i] . ", ";
    echo "Prénom: " . $data[$i + 1] . ", ";
    echo "Mail: " . $data[$i + 2] . ", ";
    echo "N° Téléphone: " . $data[$i + 3] . "\n";
}