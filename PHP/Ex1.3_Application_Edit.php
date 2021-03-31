<?php
$dataFile = fopen("D:/DWWM/données(exercices).txt", "r+");
$displayFile = fread($dataFile, filesize("D:/DWWM/données(exercices).txt"));
$data = explode(",", $displayFile);

$dataEdit = readline("Entrer le nom à modifier: ");
$nom = readline("Entrer nom: ");
$prenom = readline("Entrer prénom: ");
$mail = readline("Entrer mail: ");
$phone = readline("Entrer phone: ");

for ($i = 0; $i < count($data); $i++) {
    if (strcmp($dataEdit, $data[$i]) == 0) {
        $data[$i] = $nom;
        $data[$i + 1] = $prenom;
        $data[$i + 2] = $mail;
        $data[$i + 3] = $phone;
    }
}
rewind($dataFile);
for ($i = 0; $i < count($data); $i++) {
    if ($i == 0) {
        fwrite($dataFile, "$data[$i]");
    } else {
        fwrite($dataFile, ",$data[$i]");
    }
}

fclose($dataFile);
