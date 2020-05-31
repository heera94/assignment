<?php

namespace App\Http\Controllers\Front;

use App\Shows;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function productList()
    { 
        

        return view('front.index');
    }
}
