<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class ProductController extends Controller
{

    public function product()
    {
        $this->sesion();
        $price = DB::table('produkty')
            ->where('ID_Produktu', '1')
            ->get();

        return view('productse', compact('price'));
    }


    public function productMain()
    {
        $price = DB::table('produkty')
            ->where('ID_Produktu', '1')
            ->get();

        return view('main', compact('price'));
    }

}


