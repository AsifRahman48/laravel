<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
   function testing(){
   // echo $id;
    return view('test');
   }

    function about(){
    // echo $id;
     return view('about');
    }
 /*
    function admin(){
    // echo $id;
     return view('admin');
    }*/

    function header(){
    // echo $id;
     return view('header');
    }

    function home(){
    // echo $id;
     return view('home');
    }
    function form(Request $request){
      // echo $id;
       //dd($request->name,$request->address);

        $request->validate([
            'name'=>'required',
            'address'=>'required',
            'file'=>'required|mimes:jpeg,png|max:1024'
        ]);
       // $x=$request->post('name');
        //$y=$x."</br>".$request->post('address');
     //  return $y;

      echo  $request->file('file')->store('media');
      }
 }
