<?php
include_once("Employe.php");

class Ouvrier extends Employe
{
    private $dateEntree;
    private static $SMIC = 2500;

    public function __construct(int $matricule, string $nom, string $prenom, string $dateNaissance, DateTime $dateEntree)
    {
        parent::__construct($matricule, $nom, $prenom, $dateNaissance);
        $this->dateEntree = $dateEntree;
    }

    public function getSalaire(): float
    {
        $dateAuj = new DateTime();
        $interval = $dateAuj->diff($this->dateEntree);
        $anciennete = $interval->y;
        $salaire = self::$SMIC + $anciennete * 100;
        if ($salaire < self::$SMIC * 2) {
            return $salaire;
        } else {
            return self::$SMIC * 2;
        }
    }

    public function __toString()
    {
        return "L'ouvrier : " . parent::__toString() . "\nDate d'entrée : " . $this->y;
    }
}
