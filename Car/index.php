<?php

require_once "avion.php";
require_once "moto.php";
require_once "collectionneur.php";

$navion = new avion;

$navion -> setSeat(350);
$navion -> setSpeed(950);
$navion -> setWeight(25000);
$navion -> startEngine();
$navion -> setImmatriculation("Amogus");
$navion -> setVehiculeName("Super Avion");

echo $navion -> getSeat()," places<br>";
echo $navion -> getWeight()," tonnes<br>";
echo $navion -> getSpeed(),"Km/h<br>";

echo "<br>";

$moto = new moto();
$moto -> setWheel(2);
$moto -> setImmatriculation("5K1B1D1");
$moto -> setSeat(2);
$moto -> setVehiculeName("Moto stylée 1");

echo "Plaque d'immatriculation : ", $moto -> getImmatriculation(), "<br>";
echo "Plaque d'immatriculation de l'avion : ", $navion -> getImmatriculation(), "<br>";

echo "<br>";

$theCollector = new collectionneur();
// $theCollector = 
$theCollector -> setName("Tim");
echo "Collectionneur : ", $theCollector -> getName();
echo "<br>";

$theCollector -> addToCollection($moto);
$theCollector -> addToCollection($navion);

echo "Nom de la moto dans ma collection : ", $theCollector -> getVehiculeFromCollection("5K1B1D1"), "<br>";
echo "Nom de la voiture dans ma collection : ", $theCollector -> getVehiculeFromCollection("84sD1"), "<br><br>";
echo "Collection complète :<br>", $theCollector -> getFullCollection(), "<br>";

?>