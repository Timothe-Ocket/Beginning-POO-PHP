<?php

class vehicule {

    public int      $mSeat;     // Number of seats
    public int      $mSpeed;    //
    public int      $mWeight;   //     
    public bool     $mState;    // Vehicule's state (On/Off)
    public string   $mImmatriculation;
    public string   $mName; //Surnom donné au vehicule

    function getSeat(){
        return $this->mSeat;
    }
    function setSeat($newSeat){
        $this->mSeat = $newSeat;
    }


    function getSpeed(){
        return $this->mSpeed;
    }
    function setSpeed($newSpeed){
        $this->mSpeed = $newSpeed;
    }


    function getWeight(){
        return $this->mWeight;
    }
    function setWeight($newWeight){
        $this->mWeight = $newWeight;
    }


    function getState(){
        return $this->mState;
    }
    function startEngine(){
        $this->mState = true;
        return "Engine started";
    }
    function stopEngine(){
        $this->mState = false;
        return "Engine stopped";
    }


    function getImmatriculation(){
        return $this-> mImmatriculation;
    }
    function setImmatriculation($newImmatriculation){
        $this->mImmatriculation = $newImmatriculation;
    }


    function getVehiculeName(){
        return $this->mVehiculeName;
    }
    function setVehiculeName($newVehiculeName){
        $this->mVehiculeName = $newVehiculeName;
    }
}
?>