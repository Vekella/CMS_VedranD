@extends('templates.main')

@section('content')
@auth

<div class="row">
    <div class="col-12 ">
        <h1 class="float-lg-start">{{$user->name}}</h1>
        
        <a class="btn btn-sm btn-success float-right" href="{{ route('own-posts.create') }}" role="button">Nova objava</a></div></div>
        <br><br><br>
       
        @include('ownposts.includes.showpost')
        <br>
        
        
    <br><br>
    </div>
    </div>



@endauth


@endsection