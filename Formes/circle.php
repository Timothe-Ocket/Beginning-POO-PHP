<?php

require_once "interface.php";
require_once "shape.php";

class circle extends shape implements shapeable, moveable{

    private int $radius;

    public function __construct($NewRadius){
        parent::__construct();
        $this->radius = $NewRadius;
    }

    public function area(){
        //Calcul de l'aire
        return pow($this->radius, 2) * pi();
    }

    public function move($theX, $theY){
        $this->mX += 1;
        $this->mY += 1;
    }

    public function getRadius(){
        return $this->radius;
    }

}


?>