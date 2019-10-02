<?php

class Team  {

    //These are the attributes
    public $players = array();
    public $teamName = "Orioles";

    //This function by addPlayer
    function addPlayer(Player $player) {
        $this->players[] = $player;
   
    }

    //Returns the count of the players
    function getCount() {
        return count($this->players);
    }

    //This function takes the sort by paremter and assocites the approrpaite self::cmpFunction
    function sortBy($sortType)  {

        switch ($sortType)  {
            case 'N':
            usort($this->players,'self::no');
            break;
            case 'F':
            usort($this->players,'self::firstName');
            break;
            case 'L':
            usort($this->players,'self::lastName');
            break;
            case 'B':
            usort($this->players,'self::bats');
            break;
            case 'P':
            usort($this->players,'self::pos');
            break;
            case 'A':
            usort($this->players,'self::age');
            break;
            case 'T':
            usort($this->players,'self::throw');
            break;
            case 'H':
            usort($this->players,'self::height');
            break;
            case 'W':
            usort($this->players,'self::weight');
            break;
            case 'Bp':
            usort($this->players,'self::birthPlace');
            break;
            default:
                usort($this->players, 'self::age');
            break;
        }
    }
    //All the custom compatators for each attribute ...
    function no($x, $y)    {
        if ($x->no > $y->no)    {
            return 1;
        } else if ($x->no < $y->no) {
            return -1;
        } else {
            return 0;
        }
    }
    function firstName($x, $y)    {
        if ($x->firstName > $y->firstName)    {
            return 1;
        } else if ($x->firstName < $y->firstName) {
            return -1;
        } else {
            return 0;
        }
    }
    function lastName($x, $y)    {
        if ($x->lastName > $y->lastName)    {
            return 1;
        } else if ($x->lastName < $y->lastName) {
            return -1;
        } else {
            return 0;
        }
    }
    function bats($x, $y)    {
        if ($x->bats > $y->bats)    {
            return 1;
        } else if ($x->bats < $y->bats) {
            return -1;
        } else {
            return 0;
        }
    }
    function pos($x, $y)    {
        if ($x->position > $y->position)    {
            return 1;
        } else if ($x->position < $y->position) {
            return -1;
        } else {
            return 0;
        }
    }
    function age($x, $y)    {
        if ($x->age > $y->age)    {
            return 1;
        } else if ($x->age < $y->age) {
            return -1;
        } else {
            return 0;
        }
    }
    function throw($x, $y)    {
        if ($x->throw > $y->throw)    {
            return 1;
        } else if ($x->throw < $y->throw) {
            return -1;
        } else {
            return 0;
        }
    }
    function height($x, $y)    {
        if ($x->height > $y->height)    {
            return 1;
        } else if ($x->height < $y->height) {
            return -1;
        } else {
            return 0;
        }
    }
    function weight($x, $y)    {
        if ($x->weight > $y->weight)    {
            return 1;
        } else if ($x->weight < $y->weight) {
            return -1;
        } else {
            return 0;
        }
    }
    function birthPlace($x, $y)    {
        if ($x->birthPlace > $y->birthPlace)    {
            return 1;
        } else if ($x->birthPlace < $y->birthPlace) {
            return -1;
        } else {
            return 0;
        }
    }
    
}?>