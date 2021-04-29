<?php
include_once("Personne.php");
$personne1 = new Personne("Dupont", "Paul", "01/01/2000");

echo "Je m'appelle " . $personne1->get_nom() . " " . $personne1->get_prenom() . ". Je suis né le " . $personne1->get_annee();

$personne1->set_nom("Debu");
$personne1->set_prenom("Rémi");
$personne1->set_annee("12/12/2020");

echo "\nJe m'appelle " . $personne1->get_nom() . " " . $personne1->get_prenom() . ". Je suis né le " . $personne1->get_annee();

echo "\n" . $personne1;

$personne2 = (new Personne("", "", ""))->set_nom("Delpierre")->set_prenom("Pierre")->set_annee("04/04/1999");
echo "\nJe m'appelle " . $personne2->get_nom() . " " . $personne2->get_prenom() . ". Je suis né le " . $personne2->get_annee();
