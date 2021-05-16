<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WikiesController extends Controller
{
    public function index(){
        return view('wikies');
    }
}
