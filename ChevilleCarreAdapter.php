<?php


class ChevilleCarreAdapter extends ChevilleRond
{
    private $chevilleCarre;

    public function __construct(ChevilleCarre $chevilleCarre) {
        $this->chevilleCarre = $chevilleCarre;
    }

    public function  getRayon() {
        // Calcule le rayon equivalent pour la cheville
        $result = (sqrt(pow(($this->chevilleCarre->getLargeur() / 2), 2) * 2));
        return $result;
    }
}