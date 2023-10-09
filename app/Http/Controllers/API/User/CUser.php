<?php

namespace App\Http\Controllers\API\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/**
 * service layer
 */
use App\Http\Controllers\API\User\Service\SUser;

class CUser extends Controller
{
    /**
     * class properties
     */
    protected $s_user;

    function __construct(
                SUser $s_user
    ){
        $this->s_user = $s_user;
    }

    /**
     * get record
     * @params
     * Array $data
     * 
     * @returns
     * Object
     */
    public function getRecords(
        String $data = ""
    ){
        try{
            $where = [
                'id' => 1
            ];
            return $this->s_user->getRecords($where);
        }catch(\Exception $e){
            return response()->json([
                'reponse'   => false,
                'message'   => $e
            ], 422);
        }
    }
}
