<?php

require_once "vehicule.php";

class collectionneur{

    public string   $mName;
    public $vehiculeCollection = array() ;

    function getName(){
        return $this->mName;
    }
    function setName($newName){
        $this->mName = $newName;
    }


    function addToCollection($newToCollection){
        $this->vehiculeCollection[] = $newToCollection;
    }
    
    function removeFromCollection(){
        //$virele -> SearchInCollection(mImmatriculation);
        //if found :
        //$this->vehiculeCollection[]
        //else:
        //echo "Vehicule not found";
    }

    function getVehiculeFromCollection($searchedVehicule){
        foreach ($this -> vehiculeCollection as $index){ 
            $checkingImmatriculation = $index -> getImmatriculation();
            if ($searchedVehicule == $checkingImmatriculation){
                return $index -> getVehiculeName();
            }
        }
        return "Véhicule inexsistant";
    }

    function getFullCollection(){
        foreach ($this -> vehiculeCollection as $index){ 
            echo get_class($index), " : ",$index -> getVehiculeName(), "<br>";
        }
    }



}
?>