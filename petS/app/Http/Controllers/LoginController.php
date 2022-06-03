<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class LoginController extends Controller
{

   

    public $Login;
    public $role;
    public $ID;

    public function login(Request $req)
    {
        //Walidacja (Sprawdzenie czy pola nie są puste)
        $req->validate(
            [
                'login' => 'required|exists:klienci',
                'password' => 'required',
            ],
            [
                'required' => 'Pole :attribute jest puste!',
                'exists' => 'Nie ma takiego loginu w naszej baize!'
            ]
        );

        $login = $_GET['login'];
        $password = $_GET['password'];

        $user = DB::table('klienci')->where('Login', $login)->first();

        $this->login = $user->Login;
        $this->role = $user->Role;
        $this->ID = $user->ID_Klent;

        $passwordDB = $user->Haslo;
    




        if ($login ==  $this->login &&  $password ==  $passwordDB) {
            if (session_status() == PHP_SESSION_NONE) {
                session_start();
            }
            $_SESSION["Role"] = $this->role;
            $_SESSION["Login"] = $this->login;
            $_SESSION["ID"] = $this->ID;
            $price = DB::table('produkty')
            ->where('ID_Produktu', '1')
            ->get();    

            return view('main', ['login' => $this->login], compact('price'));
        } else {
            $price = DB::table('produkty')
            ->where('ID_Produktu', '1')
            ->get();
            $mess = 'un login';
            return view('main', ['errorM' => $mess], compact('price'));
        }
    }


    
    public function logOut()
    {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        $price = DB::table('produkty')
        ->where('ID_Produktu', '1')
        ->get();

        session_destroy();
        return view('main', compact('price'));
    }

   
}
