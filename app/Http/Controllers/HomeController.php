<?php

namespace App\Http\Controllers;


use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;

class Usuari{
    public $name,$sn1,$sn2;
}
class HomeController extends Controller
{
    public function index()
    {

        $user = new Usuari();
        $user->name="Sergi";
        $user->sn1="terror";
        $user->sn2="possi";

        return view('home')
            ->withUser($user);
    }
}
