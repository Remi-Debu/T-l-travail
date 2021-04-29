<?php
include_once("Employe.php");

class Cadre extends Employe
{
    private $indice;

    public function __construct(int $matricule, string $nom, string $prenom, string $dateNaissance, int $indice)
    {
        parent::__construct($matricule, $nom, $prenom, $dateNaissance);
        $this->indice = $indice;
    }

    public function getSalaire(): float
    {
        if ($this->indice == 1)
            return 13000;
        else if ($this->indice == 2)
            return 15000;
        else if ($this->indice == 3)
            return 17000;
        else if ($this->indice == 4)
            return 20000;
        else
            return -1;
    }

    public function __toString()
    {
        return "Le cadre : " . parent::__toString() . "\nIndice : " . $this->indice;
    }
}
