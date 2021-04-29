<?php
include_once("Maison.php");

$batiment1 = new Batiment("10 rue F.Chopin, Lille 59000");
$batiment1->setSuperficie(1000.5);
echo $batiment1->__toString();

$maison1 = new Maison("10 rue F.Chopin, Lille 59000", 70.5, 5);
$maison1->setnbPieces(2);
echo "\n\n" . $maison1->__toString();
