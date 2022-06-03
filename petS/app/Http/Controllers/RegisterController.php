<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class RegisterController extends Controller
{

    public function register(Request $req)
    {

        $req->validate(

            [
                'login' => 'required|regex:".\S"|min:3|max:30|unique:klienci,Login',
                'password' => 'required|regex:".\S"|min:3|max:40',
                'rePassword' => 'required|regex:".\S"|min:3|max:40|same:password',
                'streat' => 'required|regex:"[A-Z]{1}[a-z]"|min:3|max:40|',
                'nrHouse' => 'required|regex:"[0-9]"|min:1|max:5|',
                'town' => 'required|regex:"[A-Z]{1}[a-z]"|min:3|max:40|',
                'ZIPcode' => 'required|regex:"^[0-9]{2}-[0-9]{3}"|min:6|max:6|',
                'mail' => 'required|regex:"^[a-z0-9]+@[a-z]+.[a-z]+"|min:3|max:30|unique:klienci,Mail',
                'phoneNumber' => 'required|regex:"^[0-9]{9,12}"|min:3|max:30|unique:klienci,Nr_telefonu',

            ],
            [
                'login.regex' => 'illegal sign in the login',
                'unique' => ':attribute is in our database',

                'password.regex' => 'illegal sign in the password',
                'password.same' => 'the passwords must be the same',

                'streat.regex' => 'illegal sign in the stret',
                'nrHouse.regex' => 'illegal sign in the house number',
                'town.regex' => 'illegal sign in the town',
                'ZIPcode.regex' => 'illegal sign in the Zip code',
                'mail.regex' => 'illegal sign in the mail',
                'phoneNumber.regex' =>  'illegal sign in the phone number',

            ]

        );


        $login = $_GET['login'];
        $role = 'user';
        $login = $_GET['login'];
        $password = $_GET['password'];
        $rePassword = $_GET['rePassword'];
        $streat = $_GET['streat'];
        $nrHouse = $_GET['nrHouse'];
        $town = $_GET['town'];
        $ZIPcode = $_GET['ZIPcode'];
        $mail = $_GET['mail'];
        $phoneNumber = $_GET['phoneNumber'];


        $register = DB::insert('INSERT INTO klienci(Imie,Nazwisko,Ulica,Nr_Domu,Miasto,Kod_pocztowy,Nr_telefonu,Mail,Login, Role,Haslo) values("?","?",?,?,?,?,?,?,?,?,?)', [$streat, $nrHouse, $town, $ZIPcode, $phoneNumber, $mail, $login,  $role, $password]);
        return view('main');
        
    }
}
