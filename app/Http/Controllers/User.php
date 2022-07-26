<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class User extends Controller
{
    function test($id=''){
        return view('user_index');
    }
}
