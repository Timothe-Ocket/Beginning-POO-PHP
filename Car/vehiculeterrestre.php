<?php

require_once "vehicule.php";

class vehiculeterrestre extends vehicule{
    
    public int      $mWheel;      // Number of wheels
    public string   $mColor;      // Car's color

    function getWheel(){
        return $this->mWheel;
    }
    function setWheel($newWheel){
        $this->mWheel = $newWheel;
    }


    function getColor(){
        return $this->mColor;
    }
    function setColor($newColor){
        $this->mColor = $newColor;
    }
}

?>