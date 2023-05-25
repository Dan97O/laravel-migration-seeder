<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;

class PageController extends Controller
{
    public function index()
    {
        //dd(Train::all());
        $trains = Train::all();
        return view('home', compact('trains'));
    }
}
