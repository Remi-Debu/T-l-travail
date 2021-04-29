<?php
abstract class Personne
{
    protected $id;
    protected $nom;
    protected $prenom;
    protected $mail;
    protected $telephone;
    protected $salaire;
    public static $counter = 0;

    public function __construct(string $nom, string $prenom, string $mail, string $telephone, float $salaire)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->mail = $mail;
        $this->telephone = $telephone;
        $this->salaire = $salaire;
    }

    abstract public function calculerSalaire(): float;
}
