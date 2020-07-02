<?php


class Auto {
    protected $color = "red";
    public $selleria;

    public function setColor($color){
        $this->color = $color;
    }

    public function getColor(){
        return $this->color;
    }


}

$auto = new Auto();
$auto->setColor("white");
var_dump ($auto);