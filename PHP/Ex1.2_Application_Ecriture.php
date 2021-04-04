<<<<<<< HEAD
<?php
$dataFile = fopen("D:/DWWM/données(exercices).txt", "a+");
$displayFile = fread($dataFile, filesize("D:/DWWM/données(exercices).txt"));
$data = explode(",", $displayFile);

$addNom = readline("Entrer nom: ");
fwrite($dataFile, ",$addNom");
$addPrenom = readline("Entrer prénom: ");
fwrite($dataFile, ",$addPrenom");
$addMail = readline("Entrer mail: ");
fwrite($dataFile, ",$addMail");
$addPhone = readline("Entrer n° téléphone: ");
fwrite($dataFile, ",$addPhone");

fclose($dataFile);
=======
<?php
$dataFile = fopen("D:/DWWM/données(exercices).txt", "a+");
$displayFile = fread($dataFile, filesize("D:/DWWM/données(exercices).txt"));
$data = explode(",", $displayFile);

$addNom = readline("Entrer nom: ");
fwrite($dataFile, ",$addNom");
$addPrenom = readline("Entrer prénom: ");
fwrite($dataFile, ",$addPrenom");
$addMail = readline("Entrer mail: ");
fwrite($dataFile, ",$addMail");
$addPhone = readline("Entrer n° téléphone: ");
fwrite($dataFile, ",$addPhone");

fclose($dataFile);
>>>>>>> 4dd7b61 (maj)
