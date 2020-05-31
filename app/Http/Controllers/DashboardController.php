<?php

namespace App\Http\Controllers;

use App\Shows;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function index() {
        $product = new Shows();


        return view('admin.dashboard', compact('product'));
    }

}
