<?php
class Batiment
{
    private $adresse;
    private $superficie;

    public function __construct(String $adresse)
    {
        $this->adresse = $adresse;
    }
    public function setAdresse(String $adresse)
    {
        $this->adresse = $adresse;
    }
    public function getAdresse(): String
    {
        return $this->adresse;
    }
    public function setSuperficie(float $superficie)
    {
        $this->superficie = $superficie;
    }
    public function getSuperficie(): ?float
    {
        return $this->superficie;
    }
    public function __toString()
    {
        return "Bâtiment:\n-Adresse: " . $this->adresse . "\n-Superficie: " . $this->superficie . "m²";
    }
}
