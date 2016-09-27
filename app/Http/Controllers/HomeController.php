<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class HomeController extends Controller
{
    public function index()
    {
        $name = 'Oscar';
        $data = ['username' =>  $name ];
        return view('home', $data);
    }
}
