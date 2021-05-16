<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IssueController extends Controller
{
    public function index(){
        $data = [
            'nama' => 'Rifo Pangemanan',
            'hobby' => 'coding'
        ];

        return view('issue',$data);
    }
}
