@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="css/app.css">
  <div class="container mt-5">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>E-mail</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Action</th>
            </tr>
        </thead>
        @foreach ($user as $item)
        <tbody>
            <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->email}}</td>
            <td>{{$item->profile->phone}}</td>
            <td>{{$item->profile->address}}</td>
            <td>
            <a href="{{route('showformEidt',$item->id)}}">Edit</a> |
                <a href="{{route('deleteprofile',$item->id)}}">delete</a>
            </td>
            </tr>
        </tbody>
        @endforeach
    </table>
  </div>
  @endsection

  
