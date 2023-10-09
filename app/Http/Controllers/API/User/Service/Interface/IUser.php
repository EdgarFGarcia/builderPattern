<?php

namespace App\Http\Controllers\API\User\Service\Interface;

interface IUser{

    /**
     * inserting new record
     * @params
     * Array $data
     * 
     * @returns
     * Int | bool
     */
    public function createUser(Array $data) : Int | bool;

    /**
     * get record
     * @params
     * Array $where
     * 
     * @returns
     * Object
     */
    public function getRecords(Array $where) : Object;

}