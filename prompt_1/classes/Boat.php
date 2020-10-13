<?php


namespace Gerhard;

use Gerhard\Vehicle;


/**
 * Class Boat
 * @package Gerhard
 */
class Boat extends Vehicle
{

    /**
     * Boat constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->has_fuel = true;
    }

}