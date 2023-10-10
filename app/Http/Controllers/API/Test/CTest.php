<?php

namespace App\Http\Controllers\API\Test;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/**
 * Director
 */
use App\Http\Controllers\API\Test\Director\DVehicle;

/**
 * Builder
 */
use App\Http\Controllers\API\Test\Builder\Bbmw;

/**
 * Concrete
 */
use App\Http\Controllers\API\Test\Concrete\CCar;

class CTest extends Controller
{
    //
    public function start(){
        $bmwCar = (new DVehicle())->build(
            new Bbmw(
                new CCar()
            )
        );
        return response()->json([
            'data'      => $bmwCar
        ], 200);
    }
}