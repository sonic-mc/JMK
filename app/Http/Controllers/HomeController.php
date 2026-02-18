<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home', [
            'title' => 'JMK Trading (Pvt) Ltd | Mining & Industrial Chemical Supplier'
        ]);
    }
}
