<?php

namespace App\Http\Controllers\API\Test\Director;

/**
 * Interface
 */
use App\Http\Controllers\API\Test\Interface\IVehicle;

class DVehicle{
    public function build(
                    IVehicle $IVehicle
    ){
        $IVehicle->setModel();
        $IVehicle->setType();
        $IVehicle->setColor();
        return $IVehicle->getVehicle();
    }
}