<?php

/**
 * Created by PhpStorm.
 * User: oscar
 * Date: 25/10/16
 * Time: 20:09
 */
namespace App\ManualAuth;

class CookieGuard implements Guard
{

    public function __construct()
    {

    }

    public function check()
    {
        return isset($_COOKIE['user']) ? true : false;
    }


}