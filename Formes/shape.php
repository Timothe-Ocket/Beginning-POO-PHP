<?php

class shape {

public int $mX;
public int $mY;

public function __construct() {
    $this->mX = 10;
    $this->mY = 20;
}

public function getCoords(){
    return $this->mX."x - ".$this->mY."y";
}
    
}

?>