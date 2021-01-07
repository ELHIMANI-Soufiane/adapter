<?php
require 'ChevilleCarre.php';
require 'TrouRond.php';
require 'ChevilleRond.php';
require 'ChevilleCarreAdapter.php';

$TrouRond1 = new TrouRond(5);
$ChevilleRond1 = new ChevilleRond(5);
if ($TrouRond1->Correspond($ChevilleRond1)) {
    echo("la cheville ronde r5 correspond avec le trou rond r5");
}


echo "<br>";



$PetitChevilleCarre = new ChevilleCarre(2);
$LargeChevilleCarre = new ChevilleCarre(20);
//$TrouRond1->Correspond($PetitChevilleCarre);



$PetitChevilleCarreAdapter = new ChevilleCarreAdapter($PetitChevilleCarre);
$LargeChevilleCarreAdapter = new ChevilleCarreAdapter($LargeChevilleCarre);
if ($TrouRond1->Correspond($PetitChevilleCarreAdapter)) {
    echo("la cheville carre w2 correspond avec le trou rond r5");
}
    echo "<br>";
if ($TrouRond1->Correspond($LargeChevilleCarreAdapter)) {
    echo("la cheville carre w20 correspond avec le trou rond r5");
}