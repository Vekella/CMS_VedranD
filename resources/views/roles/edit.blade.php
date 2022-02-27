@extends('templates.main')

@section('content')

<h1>Uredite Ulogu</h1>
<div class="card">
<form method="POST" action="{{ route('roles.update',$roles->id) }}">
   @method('PATCH')
  @include('roles.includes.form')
  </form>
</div>
@endsection