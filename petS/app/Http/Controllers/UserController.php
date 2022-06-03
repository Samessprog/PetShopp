<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class UserController extends Controller
{


    public function checkAndChangeUserPassword(Request $reque)
    {
        $reque->validate(
            [
                'login' => 'required|regex:".\S"|min:3|max:30|unique:klienci,Login',
                'password' => 'required|regex:".\S"|min:3|max:40',
            ],
            []

        );
    }




    public function checkUserDate(Request $reqq)
    {
        $user = DB::table('klienci')
            ->where('ID_Klent', '1')
            ->get();

            
        $reqq->validate(
            [

                'name' => 'required|regex:"[A-Z]{1}[a-z]"|min:3|max:40|',
                'surName' => 'required|regex:"[A-Z]{1}[a-z]"|min:3|max:40|',
                'streat' => 'required|regex:"[A-Z]{1}[a-z]"|min:3|max:40|',
                'nrHouse' => 'required|regex:"[0-9]"|min:1|max:5|',
                'town' => 'required|regex:"[A-Z]{1}[a-z]"|min:3|max:40|',
                'ZIPcode' => 'required|regex:"^[0-9]{2}-[0-9]{3}"|min:6|max:6|',
                'mail' => 'required|regex:"^[a-z0-9]+@[a-z]+.[a-z]+"|min:3|max:30|unique:klienci,Mail',
                'phoneNumber' => 'required|regex:".\S"|min:3|max:40',

            ],
            [
                'name.regex' => 'illegal sign in the stret',
                'surName.regex' => 'illegal sign in the stret',
                'streat.regex' => 'illegal sign in the stret',
                'nrHouse.regex' => 'illegal sign in the house number',
                'town.regex' => 'illegal sign in the town',
                'ZIPcode.regex' => 'illegal sign in the Zip code',
                'mail.regex' => 'illegal sign in the mail',
                'phoneNumber.regex' =>  'illegal sign in the phone number',

            ]


        );

        
        $name = $_GET['name'];
        $surName = $_GET['surName'];
        $streat = $_GET['streat'];
        $nrHouse = $_GET['nrHouse'];
        $town = $_GET['town'];
        $ZIPcode = $_GET['ZIPcode'];
        $mail = $_GET['mail'];
        $phoneNumber = $_GET['phoneNumber'];
        

        $register = DB::insert('INSERT INTO klienci(Imie,Nazwisko,Ulica,Nr_Domu,Miasto,Kod_pocztowy,Nr_telefonu,Mail) values(?,?,?,?,?,?,?,?)', [$name, $surName,$streat, $nrHouse, $town, $ZIPcode, $mail,$phoneNumber]);

        return view('userMenu', compact('user'));
    }



    public function showUser()
    {




        $user = DB::table('klienci')
            ->where('ID_Klent', '1')
            ->get();


        return view('userMenu', compact('user'));
    }
}
