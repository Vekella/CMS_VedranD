@extends('templates.main')
@auth
  

@section('content')

<h1>Uredite Objavu</h1>
<div class="card">
<form method="POST" action="{{ route('own-posts.update', $post->id) }}">
   @method('PATCH')
  @include('ownposts.includes.form')
  </form>
</div>
@endsection
@endauth
