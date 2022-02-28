


@csrf
<div class="form-group">
  <label for="title">Naslov</label>
  <input name="title" type="text" class="form-control @error('title') is-invalid @enderror" id="title" aria-describedby="emailHelp" value="{{old('title')}}@isset($post){{$post->title}}@endisset" placeholder="Unesite naslov objave">
   @error('title')
       <span class="invalid-feedback" role="alert">
           {{$message}}
   @enderror
   <label for="description">Opis</label>
  <input name="description" type="text-area" class="form-control @error('description') is-invalid @enderror" id="description" aria-describedby="emailHelp" value="{{old('description')}}@isset($post){{$post->description}}@endisset" placeholder="Unesite opis objave">
   @error('description')
       <span class="invalid-feedback" role="alert">
           {{$message}}
   @enderror
   <label for="image">Slika</label><br>
  @isset($post)
  <img src="/{{$post->image}}" alt="" width="100">
  @endisset
   
  <input name="image" type="file" class="form-control @error('image') is-invalid @enderror" id="image" aria-describedby="emailHelp" value="{{old('image')}}@isset($post){{$post->image}}@endisset" placeholder="Prijenos fotografije">
   @error('image')
       <span class="invalid-feedback" role="alert">
           {{$message}}
   @enderror
</div>
<br>
<div class="mb-3">
  
</div>
 

  
<button type="submit" class="btn btn-primary">Objavite</button>