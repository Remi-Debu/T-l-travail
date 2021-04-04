<<<<<<< HEAD
<?php
$phrase = readline("Entrer votre phrase : ");
$occurence = 1;
for ($i = 0; $i < strlen($phrase); $i++) {
    if ($phrase[$i] == " ") {
        $occurence++;
    }
}
echo "Le nombre de mot dans la phrase saisi est : " . $occurence;
=======
<?php
$phrase = readline("Entrer votre phrase : ");
$occurence = 1;
for ($i = 0; $i < strlen($phrase); $i++) {
    if ($phrase[$i] == " ") {
        $occurence++;
    }
}
echo "Le nombre de mot dans la phrase saisi est : " . $occurence;
>>>>>>> 4dd7b61 (maj)
