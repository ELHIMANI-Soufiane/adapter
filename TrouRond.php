<?php


class TrouRond
{
    private  $rayon;

    public function __construct($rayon) {
        $this->rayon = $rayon;
    }

    public function getRayon() {
        return $this->rayon;
    }

    public function Correspond(ChevilleRond $ChevilleRond) {

        $result = ($this->getRayon() >= $ChevilleRond->getRayon());
        return $result;
    }
}