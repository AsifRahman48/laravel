<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{

    public function index()
    {
        //
    }


    public function create()
    {
        return view('todo_create');
    }


    public function store(Request $request)
    {
        $res=new Todo;
        $res->name=$request->input('name');
        $res->address=$request->input('address');
        $res->save();
        $request->session()->flush('msg','Data insert Successfully');
        return redirect('todo_show');
    }


    public function show(Todo $todo)
    {
        return view('todo')->with('todoArr',Todo::all());
    }


    public function edit( $id)
    {
        return view('todo_edit')->with('todoArr',Todo::find($id));
    }


    public function update(Request $request, Todo $todo)
    {
        $res=Todo::find($request->id);
        $res->name=$request->input('name');
        $res->address=$request->input('address');
        $res->save();
        $request->session()->flush('msg','Data Updated');
        return redirect('todo_show');
    }


    public function destroy( $id)
    {
        Todo::destroy(array('id',$id));
        return redirect('todo_show');
    }
}
