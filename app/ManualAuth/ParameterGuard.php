<?php

/**
 * Created by PhpStorm.
 * User: oscar
 * Date: 25/10/16
 * Time: 20:27
 */
namespace App\ManualAuth;
use \Illuminate\Http\Request;
class ParameterGuard implements Guard
{

    protected $request;

    /**
     * ManualGuardByIdParameter constructor.
     * @param $request
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }


    public function check()
    {
        if($this->request->has('id')){
            return true;
        }
        return false;
    }
}