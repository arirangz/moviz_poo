<?php

require "Voiture.php";

$voiture1 = new Voiture();
$voiture1->setMarque("Toyota");
$voiture1->setVitesseMax(250);
$voiture1->setNombreRoues(4);
var_dump($voiture1);

$voiture2 = new Voiture();
$voiture2->setMarque("Renault");
$voiture2->setVitesseMax(245);
