@extends('templates.main')

@section('content')
@auth

<div class="row">
    <div class="col-12 ">
        <h1 class="float-lg-start">{{$user->name}}</h1>
        <a class="btn btn-sm btn-primary" href="{{ route('own-posts.edit', $post->id) }}" role="button">Uredi</a>
        <button type="button" class="btn btn-sm btn-danger"
             onclick="event.preventDefault();
             document.getElementById('delete-ownpost-form-{{$post->id}}').submit()
             ">
             Izbriši</button>
             <form id="delete-ownpost-form-{{$post->id}}" action="{{route('own-posts.destroy',$post->id)}}" method="POST" style="display:none" >
                @csrf
            @method("DELETE")
            </form>
        <a class="btn btn-sm btn-success float-right" href="{{ route('own-posts.create') }}" role="button">Nova objava</a></div></div>
        <br><br><br>
       
        @include('ownposts.includes.showpost')
        <br>
        
        
    <br><br>
    </div>
    </div>



@endauth


@endsection