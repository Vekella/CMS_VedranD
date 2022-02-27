 @extends('templates.main')

 @section('content')

 <div class="row">
    <div class="col-12 ">
        <h1 class="float-lg-start">Uloge</h1>
        @can('Stvaranje Uloga')
        <a class="btn btn-sm btn-success float-right" href="{{ route('roles.create') }}" role="button">Nova uloga</a>

        @endcan
    <br><br>
    </div>
    </div>
    
    
    
    
    <div class="card">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#ID</th>
                <th scope="col">Uloga</th>
                <th scope="col">Postavke</th>
                
              </tr>
            </thead>
            
      
      <tbody>
          @foreach ($roles as $role)
          <tr>
            <th scope="row">{{$role->id}}</th>
            <td>{{$role->name}}</td>
            
            <td>
              @can('Uredjivanje Uloga')
                <a class="btn btn-sm btn-primary" href="{{ route('roles.edit', $role->id) }}" role="button">Uredi</a>
                @endcan
                @can('Brisanje Uloga') <button type="button" class="btn btn-sm btn-danger"
                 onclick="event.preventDefault();
                 document.getElementById('delete-role-form-{{$role->id}}').submit()
                 ">
                 Izbriši</button>@endcan
                <form id="delete-role-form-{{$role->id}}" action="{{route('roles.destroy',$role->id)}}" method="POST" style="display:none" >
                    @csrf
                @method("DELETE")
                </form>
            </td>
          </tr>
              
          @endforeach
 @endsection