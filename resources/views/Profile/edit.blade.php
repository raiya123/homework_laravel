@extends('layouts.app')
@section('content')
<div class="container">
   <div class="row">
    <div class="col-4"></div>
    <div class="col-4">
        <div class="card">
            <div class="card-header">Edit User</div>
            <div class="card-body">
                <form action="{{route('update',$user->id)}}" method="POST">
                 @method('put')
                    @csrf
                   <div class="form-group">
                       <label for="">Name</label>
                    <input type="text" name="name" value="{{$user->name}}"  class="form-control" >
                   </div>
                   <div class="form-group">
                       <label for="">E-mail Address</label>
                       <input type="email" name="email" value="{{$user->email}}"  class="form-control">
                   </div>
                   <div class="form-group">
                       <label for="">Phone</label>
                       <input type="number" name="phone" value="{{$user->profile->phone}}"  class="form-control">
                   </div>
                   <div class="form-group">
                       <label for="">Address</label>
                       <input type="text" name="address" value="{{$user->profile->address}}" class="form-control">
                   </div>
                   <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-4"></div>
   </div>
</div>
@endsection