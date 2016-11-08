<?php

namespace App\Auth\Providers\UserProviders;

/**
 * Created by PhpStorm.
 * User: oscar
 * Date: 8/11/16
 * Time: 20:13
 */
interface UserProvider
{

    public function validate(array $credentials);


    public function getUserByCredentials(array $credentials);

}