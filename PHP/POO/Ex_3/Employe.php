<?php
include_once("Personne2.php");

class Employe extends Personne
{
    protected $salaire;

    public function __construct(string $nom, string $prenom, float $salaire)
    {
        parent::setNom($nom);
        parent::setPrenom($prenom);
        $this->salaire = $salaire;
    }

    /**
     * Get the value of salaire
     */
    public function getSalaire(): float
    {
        return $this->salaire;
    }

    /**
     * Set the value of salaire
     *
     * @return  self
     */
    public function setSalaire($salaire)
    {
        $this->salaire = $salaire;

        return $this;
    }

    public function __toString()
    {
        return "Je suis " . parent::getNom() . " " . parent::getPrenom() . " mon salaire est: " . $this->salaire;
    }
}
