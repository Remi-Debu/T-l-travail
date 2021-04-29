<?php
include_once("Employe.php");

class Patron extends Employe
{
    private static $CA = 111222;
    private $pourcentage;

    public function __construct(int $matricule, string $nom, string $prenom, string $dateNaissance, float $pourcentage)
    {
        parent::__construct($matricule, $nom, $prenom, $dateNaissance);
        $this->pourcentage = $pourcentage;
    }

    public function getSalaire(): float
    {
        return (self::$CA * $this->pourcentage / 100) / 12;
    }

    public function __toString()
    {
        return "Le patron : " . parent::__toString() . "\nChiffre d'affaire : " . self::$CA;
    }
}
