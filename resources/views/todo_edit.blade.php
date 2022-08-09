@extends('frontend.layouts.master')
@section('title','Todo Edit')

@section('content')
    <a href="{{ route('todo.show') }}">Back</a><br/><br/>
    <form method="post" action="{{ route('todo.update',$todoArr->id) }}" enctype="multipart/form-data" >
        @csrf
        <table>
            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="textbox" name="name" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter Name" value="{{$todoArr->name}}" required>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Address</label>
                <input type="textbox" name="address" class="form-control" id="address" aria-describedby="emailHelp" placeholder="Enter address" value="{{$todoArr->address}}" required>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Image</label>
                <input type="file" name="profile_image" class="form-control" id="profile_image" aria-describedby="emailHelp" />
                <img src="{{ asset('uploads/students/'.$todoArr->profile_image) }}" width="70px" height="70px" alt="Image">
            </div>
            <div class="form-group">
                <td></td>
                <td> <input type="submit" name="submit" class="btn btn-primary"/></td>
            </div>
        </table>
    </form>
@endsection
