<?php


class ChevilleRond
{
    private  $rayon;

public function __construct($rayon) {
    $this->rayon = $rayon;
}

    public function getRayon() {
        return $this->rayon;
    }
}