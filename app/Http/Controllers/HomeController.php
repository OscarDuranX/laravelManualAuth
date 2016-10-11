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

        $this->setUserCookie();

//            $user = Auth::user(1);
//            return view('home')
//                ->withUser($user);

        // Variable d'estat de sessió
        if($this->userIsAuthenticated()){
            $user = $this->getUser();
            return view('home')
                ->withUser($user);
        }else{
            return redirect('login');
        }


//        return view('home',['user' => $user]);
//        return view('home',compact($user));
    }

    private function getUser()
    {
        $id = $_COOKIE['user'];


        return User::findOrFail($id);
;    }

    private function userIsAuthenticated()
    {

        isset($_COOKIES['user']) ? true : false;

    }

    private function setUserCookie()
    {
        $user = 1;
        setcookie('user',$user);
    }
}
