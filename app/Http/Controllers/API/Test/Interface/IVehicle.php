<?php

namespace App\Http\Controllers\API\Test\Interface;

interface IVehicle{
    public function setModel();
    public function setType();
    public function setColor();
    public function getVehicle();
}