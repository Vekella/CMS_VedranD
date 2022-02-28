@extends('templates.main')
@auth
  

@section('content')

<div class="row">
<div class="col-12 ">
    <h1 class="float-lg-start">Lista objavi</h1>
    

</div>
</div>




<div class="card">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#ID</th>
            <th scope="col">Korisnik</th>
            <th scope="col">Naslov</th>
            <th scope="col">Opis</th>
            <th scope="col">Slika</th>
            <th scope="col">Postavke</th>
          </tr>
        </thead>
        
  
  <tbody>
      @foreach ($posts as $post)
      <tr>
        <th scope="row">{{$post->id}}</th>
        <td>{{$post->user->name}}</td>
        <td>{{$post->title}}</td>
        <td>{{$post->description}}</td>
        <td><img src="/{{$post->image}}" alt="" width="100"></td>
        <td>

          @can('Uredjivanje Objava')
          <a class="btn btn-sm btn-primary" href="{{ route('posts.edit', $post->id) }}" role="button">Edit</a>
          @endcan 
          @can('Brisanje Objava')
          <button type="button" class="btn btn-sm btn-danger"
             onclick="event.preventDefault();
             document.getElementById('delete-post-form-{{$post->id}}').submit()
             ">
             Izbriši</button>
            <form id="delete-post-form-{{$post->id}}" action="{{route('posts.destroy',$post->id)}}" method="POST" style="display:none" >
                @csrf
            @method("DELETE")
          @endcan
             
            </form>
        </td>
      </tr>
          
      @endforeach
   

  </tbody>
    </table>
    {{-- {{$posts->links()}} --}}
</div>
@endsection
@endauth
