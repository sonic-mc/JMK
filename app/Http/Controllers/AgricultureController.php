<?php

namespace App\Http\Controllers\Divisions;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AgricultureController extends Controller
{
    public function index()
    {
        return view('divisions.agriculture.index', [
            'title' => 'Agriculture Division'
        ]);
    }
}
