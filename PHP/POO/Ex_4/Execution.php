<?php
include_once("Developpeur.php");
include_once("Manager.php");

$developpeur1 = new Developpeur("SALIM", "Martin", "SALIM.martin@mail.com", "0698653225", 1000, "PHP");
$developpeur2 = new Developpeur("DUPONT", "Pierre", "DUPONT.pierre@mail.com", "0685526545", 1250.51, "PHP");
$manager1 = new Manager("LACHGAR", "Jean", "LACHGAR.jean@mail.com", "0612457898", 3000, "Informatique");
$manager2 = new Manager("LEROY", "Richard", "LEROY.richard@mail.com", "0785957585", 3129.49, "Informatique");

echo "\n" . $developpeur1->afficher() . $developpeur2->afficher();
$developpeur2->afficher();
$manager1->afficher();
$manager2->afficher();

echo $developpeur1->calculerSalaire() . "\n";
echo $developpeur2->calculerSalaire() . "\n";
echo $manager1->calculerSalaire() . "\n";
echo $manager2->calculerSalaire();

echo "\nVous avez crée : " . Personne::$counter . " personnes";
