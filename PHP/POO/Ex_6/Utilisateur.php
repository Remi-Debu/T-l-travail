<?php
include_once("Personne.php");

class Utilisateur extends Personne
{
    private $login;
    private $password;
    private $service;
    private $profil;

    public function __construct(string $nom, string $prenom, string $mail, string $telephone, float $salaire, Profil $profil)
    {
        parent::__construct($nom, $prenom, $mail, $telephone, $salaire);
        $this->profil = $profil;
    }
    /**
     * Get the value of login
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set the value of login
     *
     * @return  self
     */
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get the value of password
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get the value of service
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * Set the value of service
     *
     * @return  self
     */
    public function setService($service)
    {
        $this->service = $service;

        return $this;
    }

    /**
     * Get the value of profil
     */
    public function getProfil()
    {
        return $this->profil;
    }

    /**
     * Set the value of profil
     *
     * @return  self
     */
    public function setProfil($profil)
    {
        $this->profil = $profil;

        return $this;
    }

    public function calculerSalaire(): float
    {
        $a = "manager";
        $b = "directeur général";
        if (strcasecmp($a, $this->profil->getLibelle()) == 0) {
            return $this->salaire * 1.10;
        } elseif (strcasecmp($b, $this->profil->getLibelle()) == 0) {
            return $this->salaire * 1.40;
        } else {
            return $this->salaire;
        }
    }

    public function afficher(): void
    {
        echo parent::afficher() . "\n-Salaire : " . $this->calculerSalaire() . $this->profil->__toString();
    }
}
