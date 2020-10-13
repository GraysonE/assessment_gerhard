<?php


namespace Gerhard;

use Gerhard\Vehicle;


/**
 * Class Car
 * @package Gerhard
 */
class Car extends Vehicle
{

    /**
     * Car constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->has_keys = true;

    }

}