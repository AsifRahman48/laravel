<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;


use Illuminate\Http\Request;

class Asif extends Controller
{
    function test($id){
        return view('user_index');
    }
}
