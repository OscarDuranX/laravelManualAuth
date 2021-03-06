<?php
/**
 * Created by PhpStorm.
 * User: oscar
 * Date: 8/11/16
 * Time: 20:19
 */

namespace App\Auth\Providers\EloquentUserProvider;


use App\Auth\Guards\Guard;
use App\User;
use Hash;

class EloquentUserProvider implements Guard
{
    public function validate(array $credentials)
    {
       $user = $this->getUserByCredentials($credentials);

        if( Hash::check($credentials['password'], $user->password) ){
            return redirect('home');

        }else{
            \Session::flash('error',["Login Incorrecte"]);
            return redirect('login');
        }
    }

    public function getUserByCredentials(array $credentials)
    {
        try {
            return User::where(
                ["email" => $credentials['email']])->firstOrFail();
        } catch (\Exception $e){
            return false;
        }


    }


}