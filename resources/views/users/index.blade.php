@extends('templates.main')
@auth
  

@section('content')

<div class="row">
<div class="col-12 ">
    <h1 class="float-lg-start">Korisnici</h1>
    @can('Stvaranje Korisnika')
    <a class="btn btn-sm btn-success float-right" href="{{ route('users.create') }}" role="button">Novi korisnik</a>

    @endcan
<br><br>
</div>
</div>




<div class="card">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#ID</th>
            <th scope="col">Ime</th>
            <th scope="col">Email adresa</th>
            <th scope="col">Postavke</th>
          </tr>
        </thead>
        
  
  <tbody>
      @foreach ($users as $user)
      <tr>
        <th scope="row">{{$user->id}}</th>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>

          @can('Uredjivanje Korisnika') <a class="btn btn-sm btn-primary" href="{{ route('users.edit', $user->id) }}" role="button">Uredi</a>@endcan
             @can('Brisanje Korisnika')<button type="button" class="btn btn-sm btn-danger"
             onclick="event.preventDefault();
             document.getElementById('delete-user-form-{{$user->id}}').submit()
             ">
             Izbriši</button>@endcan
            <form id="delete-user-form-{{$user->id}}" action="{{route('users.destroy',$user->id)}}" method="POST" style="display:none" >
                @csrf
            @method("DELETE")
            </form>
        </td>
      </tr>
          
      @endforeach
   

  </tbody>
    </table>
    {{$users->links()}}
</div>
@endsection
@endauth
