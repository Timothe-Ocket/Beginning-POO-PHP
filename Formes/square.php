<?php

require_once "interface.php";
require_once "shape.php";

class square extends shape implements shapeable{

    private int $width;
    private int $height;

    public function __construct($NewWidth, $NewHeight){
        $this->width = $NewWidth;
        $this->height = $NewHeight;
    }


    public function area(){
        //Calcul de l'aire
        return $this->width * $this->height;
    }


    public function getWidth(){
        return $this->width;
    }
    public function getHeight(){
        return $this->height;
    }




}

?>