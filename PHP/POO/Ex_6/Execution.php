<?php
include_once("Utilisateur.php");
include_once("Profil.php");

$profCP = (new Profil())->setCode("CP")->setLibelle("Chef de projet");
$profMN = (new Profil())->setCode("MN")->setLibelle("Manager");
$profDP = (new Profil())->setCode("DP")->setLibelle("Directeur de projet");
$profDRH = (new Profil())->setCode("DRH")->setLibelle("Directeur des ressources humaines");
$profDG = (new Profil())->setCode("DG")->setLibelle("Directeur général");



$user[0] = (new Utilisateur("LEROY", "Paul", "leroy.paul@mail.com", "0647758596", 1182.98, $profCP))->setLogin("log")->setPassword("passw")->setService("Informatique");
$user[1] = (new Utilisateur("DELPIERRE", "Pierre", "delp.pierre@mail.com", "0695751535", 2400, $profMN))->setLogin("log")->setPassword("passw")->setService("Informatique");
$user[2] = (new Utilisateur("LAFARRE", "Fanny", "laf.fanny@mail.com", "0632125262", 1576.6, $profDP))->setLogin("log")->setPassword("passw")->setService("Informatique");
$user[3] = (new Utilisateur("KALLEY", "Clément", "kal.clement@mail.com", "0625634798", 999.99, $profDRH))->setLogin("log")->setPassword("passw")->setService("Informatique");
$user[4] = (new Utilisateur("ALTRE", "Jean", "altre.manon@mail.com", "0657596254", 3400, $profDG))->setLogin("log")->setPassword("passw")->setService("Informatique");

echo "Liste des utilisateurs : \n";
foreach ($user as $key => $value) {
    echo $user[$key]->afficher() . "\n\n";
}

echo "----------------------------------------\n";
echo "Liste des managers : \n";
foreach ($user as $key => $value) {
    if ($profMN->getCode() == $user[$key]->getProfil()->getCode()) {
        echo $user[$key]->afficher() . " ";
    }
}
