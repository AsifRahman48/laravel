<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use App\Models\Todo;
use Illuminate\Http\Request;

class ActionController extends Controller
{
    public function index(){
        return Todo::get('profile_image');
    }

    public function move(Request $request,$id)
    {
        $res=Todo::find($request->id);

            $destination = $res->profile_image;
            if (Storage::disk('public')->exists($destination))
            {
                $path= "Image/move/$destination";
                Storage::disk('public')->move("$destination", $path);
                $res->profile_image = $path;

                $res->save();
            }


        $request->session()->flash('msg','file moved');
        return redirect('todo_show');
    }

    public function copy(Request $request,$id)
    {

        $res=Todo::find($request->id);
        $destination =$res->profile_image;
         if (Storage::disk('public')->exists($destination))
            {
                Storage::disk('public')->copy("$destination", "Image/copy/$destination");

            }
        $res->save();
        $request->session()->flash('msg','file Copied');
        return redirect('todo_show');
    }


    public function download(Request $request, $id)
    {
        $res=Todo::find($request->id);
        $destination =$res->profile_image;
        if (Storage::disk('public')->exists($destination)){
            return Storage::disk('public')->download("$destination");

        }
        $request->session()->flash('msg','file Downloaded');
        return redirect('todo_show');
    }
}
