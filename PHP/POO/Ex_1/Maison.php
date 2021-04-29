<?php
include_once("Batiment.php");

class Maison extends Batiment
{
    private $nbPieces;

    public function __construct(String $adresse, float $superficie, int $nbPieces)
    {
        parent::__construct($adresse);
        parent::setSuperficie($superficie);
        $this->nbPieces = $nbPieces;
    }
    public function setnbPieces(int $nbPieces)
    {
        $this->nbPieces = $nbPieces;
    }
    public function getnbPieces(int $nbPieces): ?int
    {
        return $this->nbPieces;
    }
    public function __toString()
    {
        return parent::__toString() . "\n-Nombre de pièces: " . $this->nbPieces;
    }
}
