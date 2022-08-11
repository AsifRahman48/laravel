@extends('frontend.layouts.master')
@section('title','Todo')

@section('content')
    <a href="{{ route('dashboard') }}">Back</a><br/><br/>
    <a href="{{ route('todo.create') }}">Add Record</a><br/><br/>

    {{session('msg')}}

    <table class="table table-dark">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Address</th>
            <th scope="col">Profile Image</th>
            <th scope="col">Created At</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($todoArr as $list)
        <tr>
            <td scope="col">{{$list->id}}</td>
            <td scope="col">{{$list->name}}</td>
            <td scope="col">{{$list->address}}</td>
            <td>
                <img src="{{ asset('storage/Image/'.$list->profile_image) }}" width="70px" height="70px" alt="Image">
            </td>
            <td scope="col">{{$list->created_at}}</td>
            <td scope="col">
                    <a href="{{ route('todo.delete',$list->id) }}" class="delete">Delete</a>
                    <a href="{{ route('todo.edit',$list->id) }}" class="edit">Edit</a>
            </td>
        </tr>
        @endforeach
        </tbody>
        <style>
            .delete{
                color: white;
            }
            .edit{
                color:white;
            }
        </style>
@endsection
