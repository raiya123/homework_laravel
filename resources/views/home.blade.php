@extends('layouts.app')

@section('content')
<div class="container">
    <a href="{{route('posts')}}" class="btn btn-info float-right">Add New Post</a>
    <a href="{{route('showPost')}}" class="btn btn-warning">Show All Post</a>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">You are logined as:</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <p>Id:   {{Auth::id()}}</p>
                    <p>Name: {{Auth::user()->name}}</p>
                    <p>E-mail: {{Auth::user()->email}}</p>
                    <p>Phone: {{Auth::user()->profile->phone}}</p>
                    <p>Address: {{Auth::user()->profile->address}}</p>
                    {{-- <p>Address: {{Auth::user()->posts->title}}</p> --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
