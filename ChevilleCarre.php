<?php


class ChevilleCarre
{
    private $Largeur;

    public function __construct($Largeur) {
        $this->Largeur = $Largeur;
    }

    public function getLargeur() {
        return $this->Largeur;
    }

    public function getCarre() {

        $result = pow($this->Largeur, 2);
        return $result;
    }
}