<?php

namespace App\Http\Controllers\API\User\Service;

/**
 * interface
 */
use App\Http\Controllers\API\User\Service\Interface\IUser;

class SUser implements IUser{

    /**
     * inserting new record
     * @params
     * Array $data
     * 
     * @returns
     * Int | bool
     */
    public function createUser(Array $data) : Int | bool{
        return "hello";
    }

    /**
     * get record
     * @params
     * Array $where
     * 
     * @returns
     * Object
     */
    public function getRecords(Array $where) : Object{
        return "hello";
    }

}