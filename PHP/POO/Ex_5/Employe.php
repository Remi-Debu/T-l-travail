<?php
abstract class Employe
{
    protected $matricule;
    protected $nom;
    protected $prenom;
    protected $dateNaissance;

    public function __construct(int $matricule, string $nom, string $prenom, string $dateNaissance)
    {
        $this->matricule = $matricule;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateNaissance = $dateNaissance;
    }

    abstract public function getSalaire(): float;

    public function __toString()
    {
        return "Matricule : " . $this->matricule . "\nNom : " . $this->nom . "\nPrénom : " . $this->prenom . "\nDate de naissance : " . $this->dateNaissance;
    }
}
