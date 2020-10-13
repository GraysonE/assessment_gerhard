<?php


namespace Gerhard;

use Gerhard\Vehicle;


class Boat extends Vehicle
{

    public function __construct()
    {
        $this->has_fuel = true;
//        $this->has_keys = false; // Default will set this
    }

}