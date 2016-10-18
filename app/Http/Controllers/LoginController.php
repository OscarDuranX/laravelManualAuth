<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }


    //Dependence ingection
    public function login(Request $request)
    {
        // Obtenir de la base de dades l'usuari amb email --> Model User
        // Comprovar el password:
        // Hash del password proporcionat (bcrypt)
        //  - Comparar amb el de base de dades
        // Error -> RETURN TO LOGIN PAGE
        // CORRECT -> REDIRECT TO HOME

        try {
            $user = User::where(["email" => $request->input('email')])->firstOrFail();
        } catch (\Exception $e){
            return redirect('login');
        }

        if( Hash::check($request->input('password'), $user->password) ){
            return redirect('home');

        }else{
            return redirect('login');
        }



    }
}
