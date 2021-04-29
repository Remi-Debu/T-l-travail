<?php
include_once("Ouvrier.php");
include_once("Patron.php");
include_once("Cadre.php");

$ouvrier1 = new Ouvrier(1000, "DUPONT", "Paul", "1999-01-01", new DateTime("2011-12-12"));
$cadre1 = new Cadre(1100, "DELPIERRE", "Jean", "1994-01-01", 1);
$patron1 = new Patron(1200, "LEROY", "Théo", "1996-01-01", 10);

echo $ouvrier1;
echo "\n";
echo $ouvrier1->getSalaire();
echo "\n ---------------- \n";
echo $cadre1;
echo "\n";
echo $cadre1->getSalaire();
echo "\n ---------------- \n";
echo $patron1;
echo "\n";
echo $patron1->getSalaire();
