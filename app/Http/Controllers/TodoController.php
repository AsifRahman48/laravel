<?php

namespace App\Http\Controllers;

use App\Models\Todo;
//use Faker\Core\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class TodoController extends Controller
{

    public function index()
    {
        return Storage::delete('asif1.jpg');
    }


    public function create()
    {
        return view('todo_create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required'
        ]);


        $res=new Todo;
        $res->name=$request->input('name');
        $res->address=$request->input('address');

        if($request->hasFile('profile_image'))
        {
            $file=$request->file('profile_image');
            $extension=$file->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $path=Storage::disk('public')->put("Image",$file);
            $res->profile_image=$path;

        }
        $res->save();
        $request->session()->flash('msg','Data insert Successfully');
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

        if($request->hasFile('profile_image'))
        {

            $destination =$res->profile_image;
            if (Storage::disk('public')->exists($destination))
            {
                Storage::disk('public')->delete($destination);
            }

            $file=$request->file('profile_image');
            $extension=$file->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $path=Storage::disk('public')->put("Image",$file);
            $res->profile_image=$path;
        }
        $res->save();
        $request->session()->flash('msg','Data Updated');
        return redirect('todo_show');
    }


    public function destroy( $id)
    {
        $res=Todo::find($id);
        $destination =$res->profile_image;
        if (Storage::disk('public')->exists($destination))
        {
            Storage::disk('public')->delete($destination);
        }
        Todo::destroy(array('id',$id));

        return redirect('todo_show')->with('msg','Data Deleted');
    }
}
