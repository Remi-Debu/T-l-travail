<?php
class Personne
{
    private $nom;
    private $prenom;
    private $annee;

    public function __construct(String $nom, String $prenom, String $annee)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->annee = $annee;
    }

    public function set_nom(String $nom)
    {
        $this->nom = $nom;
        return $this;
    }
    public function get_nom(): String
    {
        return $this->nom;
    }

    public function set_prenom(String $prenom)
    {
        $this->prenom = $prenom;
        return $this;
    }
    public function get_prenom(): String
    {
        return $this->prenom;
    }

    public function set_annee(String $annee)
    {
        $this->annee = $annee;
        return $this;
    }
    public function get_annee(): String
    {
        return $this->annee;
    }
    public function __toString()
    {
        return "C'est un __toString";
    }
}
