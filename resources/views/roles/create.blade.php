@extends('templates.main')

@section('content')

<h1>Stvorite novu ulogu</h1>
<div class="card">
<form method="POST" action="{{ route('roles.store') }}">
    @csrf
    @include('roles.includes.form',['create'=>true])
  </form>
</div>

@endsection