


@csrf
<div class="form-group">
  <label for="name">Ime Uloge</label>
  <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" id="name" aria-describedby="emailHelp" value="{{old('name')}}@isset($roles){{$roles->name}}@endisset" placeholder="Unesite ime uloge">
   @error('name')
       <span class="invalid-feedback" role="alert">
           {{$message}}
   @enderror
</div>
<br>
<div class="mb-3">
  <div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
      <strong>Dozvole</strong>
      <br/>
      @foreach($permission as $value)
          <label>{{ Form::checkbox('permission[]', $value->id, false, array('class' => 'name')) }}
          {{ $value->name }}</label>
      <br/>
      @endforeach
  </div>
</div>
</div>
 

  
<button type="submit" class="btn btn-primary">@isset($roles)
  Uredite Ulogu
  @else
  Stvorite Ulogu
@endisset</button>