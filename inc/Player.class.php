<?php

class Player {

//Player attributes
public $no = "";
public $firstName = "";
public $lastName = "";
public $position = "";
public $bats = "";
public $throw = "";
public $age = "";
public $height = "";
public $weight = "";
public $birthPlace = "";

//Constructor
function __construct($num,$fn,$ln,$pos,$b,$thw,$a,$ht,$wt,$bplace)
{
    $this->no = $num;
    $this->firstName = $fn;
    $this->lastName = $ln;
    $this->position = $pos;
    $this->bats = $b;
    $this->throw = $thw;
    $this->age = $a;
    $this->height = $ht;
    $this->weight = $wt;
    $this->birthPlace = $bplace;
}
}

?>