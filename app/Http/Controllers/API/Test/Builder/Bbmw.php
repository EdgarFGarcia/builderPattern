<?php

namespace App\Http\Controllers\API\Test\Builder;

/**
 * Concrete class
 */
use App\Http\Controllers\API\Test\Concrete\CCar;

/**
 * interface
*/
use App\Http\Controllers\API\Test\Interface\IVehicle;

class Bbmw implements IVehicle{

    /**
     * class properties
     */
    protected $vehicle;

    /**
     * constructor
     */
    function __construct(
                    CCar $vehicle
    ){
        $this->vehicle = $vehicle;
    }

    /**
     * set model
     * instance of vehicle concrete class
     */
    public function setModel(){
        $this->vehicle->setModel = "Power Van";
    }

    /**
     * set type
     * instance of vehicle concrete class
     */
    public function setType(){
        $this->vehicle->setType = "Van";
    }

    /**
     * set color
     * instance of vehicle concrete class
     */
    public function setColor(){
        $this->vehicle->setColor = "Red";
    }

    /**
     * get vehicle
     * instance of vehicle concrete class
     */
    public function getVehicle(){
        return $this->vehicle;
    }

}