@extends('templates.main')
@auth
  

@section('content')

<h1>Stvorite novog korisnika</h1>
<div class="card">
<form method="POST" action="{{ route('users.store') }}">
    @include('users.includes.form',['create'=>true])
  </form>
</div>
@endsection
@endauth

