@extends('templates.main')
@auth
  

@section('content')

<h1>Uredite Korisnika</h1>
<div class="card">
<form method="POST" action="{{ route('posts.update', $post->id) }}">
   @method('PATCH')
  @include('posts.includes.form')
  </form>
</div>
@endsection
@endauth
