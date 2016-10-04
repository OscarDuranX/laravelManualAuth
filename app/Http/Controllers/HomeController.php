<?php

namespace App\Http\Controllers;


use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use PDO;


class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

//        $user = new \stdClass();
//        $user->name= "Oscar";


//        $pdo = new PDO('sqlite:/home/oscar/Code/laravelManualAuth/database/database.sqlite');
//        $query = $pdo->prepare('SELECT * FROM users WHERE id=1');
//        $query->execute();
//        $row = $query->fetch();
//        dd($row);
//        Middleware



            $user = Auth::user(1);
            return view('home')
                ->withUser($user);




//        return view('home',['user' => $user]);
//        return view('home',compact($user));
    }
}
