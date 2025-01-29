<?php

require_once "interface.php";
require_once "shape.php";

class triangle extends shape implements shapeable{

    private int $base;
    private int $height;

    public function __construct($NewBase, $NewHeight){
        $this->base = $NewBase;
        $this->height = $NewHeight;
    }


    public function area(){
        //Calcul de l'aire
        return ($this->base * $this->height)/2;
    }


    public function getBase(){
        return $this->base; 
    }
    public function getHeight(){
        return $this->height;
    }



}

?>