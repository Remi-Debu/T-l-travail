<?php
include_once("../Voiture/Marque.php");
include_once("../Voiture/Modele.php");

$marque1 = (new Marque())->setMarque("PEUGEOT");
$marque2 = (new Marque())->setMarque("AUDI");
$marque3 = (new Marque())->setMarque("VOLVO");

$voitures = [$marque1, $marque2, $marque3];

$modele11 = (new Modele())->setModel("PEUGEOT")->setMarque("307");
$modele12 = (new Modele())->setModel("PEUGEOT")->setMarque("308");
$modele13 = (new Modele())->setModel("PEUGEOT")->setMarque("206");

$modele21 = (new Modele())->setModel("AUDI")->setMarque("A1");
$modele22 = (new Modele())->setModel("AUDI")->setMarque("A3");
$modele23 = (new Modele())->setModel("AUDI")->setMarque("A4");

$modele31 = (new Modele())->setModel("VOLVO")->setMarque("XC40");
$modele32 = (new Modele())->setModel("VOLVO")->setMarque("XC60");
$modele33 = (new Modele())->setModel("VOLVO")->setMarque("XC90");

echo $modele11->getModel();
