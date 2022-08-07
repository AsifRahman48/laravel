@extends('frontend.layouts.master')
@section('title','Todo Create')

@section('content')
    <a href="{{ route('todo.show') }}">Back</a><br/><br/>
<form method="post" action="{{ route('todo.store') }}">
    @csrf
    <table>
        <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="textbox" name="name" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter Name"  required>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Address</label>
            <input type="textbox" name="address" class="form-control" id="address" aria-describedby="emailHelp" placeholder="Enter address"  required>
        </div>
        <div class="form-group">
            <td></td>
            <td> <input type="submit" name="submit" class="btn btn-primary"/></td>
        </div>
    </table>
</form>
@endsection
