<?php

namespace App\Http\Controllers\Divisions;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MiningController extends Controller
{
    public function index()
    {
        return view('divisions.mining.index', [
            'title' => 'Mining & Industrial Division'
        ]);
    }
}
