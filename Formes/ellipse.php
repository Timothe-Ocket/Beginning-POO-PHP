<?php 

require_once "interface.php";
require_once "shape.php";

class ellipse extends shape implements shapeable{

    private int $widthR;
    private int $heightR;

    public function __construct($NewWidthR, $NewHeightR){
        $this->widthR = $NewWidthR;
        $this->heightR = $NewHeightR;
    }

    
    public function area(){
        //Calcul de l'aire
        return pi() * $this->widthR * $this->heightR;
    }


    public function getWidthR(){
        return $this->widthR;
    }
    public function getHeightR(){
        return $this->heightR;
    }

}





?>