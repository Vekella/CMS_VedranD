


@csrf
<div class="form-group">
  <label for="title">Naslov</label>
  <input name="title" type="text" class="form-control @error('title') is-invalid @enderror" id="title" aria-describedby="emailHelp" value="{{old('title')}}@isset($posts){{$posts->title}}@endisset" placeholder="Unesite naslov objave">
   @error('title')
       <span class="invalid-feedback" role="alert">
           {{$message}}
   @enderror
   <label for="description">Opis</label>
  <input name="description" type="text-area" class="form-control @error('description') is-invalid @enderror" id="description" aria-describedby="emailHelp" value="{{old('description')}}@isset($posts){{$posts->description}}@endisset" placeholder="Unesite opis objave">
   @error('description')
       <span class="invalid-feedback" role="alert">
           {{$message}}
   @enderror
   <label for="image">Slika</label>
  <input name="image" type="file" class="form-control @error('image') is-invalid @enderror" id="image" aria-describedby="emailHelp" value="{{old('image')}}@isset($posts){{$posts->image}}@endisset" placeholder="Prijenos fotografije">
   @error('image')
       <span class="invalid-feedback" role="alert">
           {{$message}}
   @enderror
</div>
<br>
<div class="mb-3">
  
</div>
 

  
<button type="submit" class="btn btn-primary">Objavite</button>