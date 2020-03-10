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
        @foreach ($profile as $item)
        <tbody>
            <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->user->name}}</td>
            <td>{{$item->user->email}}</td>
            <td>{{$item->phone}}</td>
            <td>{{$item->address}}</td>
            <td>
                <a href="#">Edit</a> |
                <a href="#">delete</a>
            </td>
            </tr>
        </tbody>
        @endforeach
    </table>
  </div>
  @endsection
