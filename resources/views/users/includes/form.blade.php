


@csrf 
<div class="form-group">
  <label for="name">Ime</label>
  <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" id="name" aria-describedby="emailHelp" value="{{old('name')}}@isset($user){{$user->name}}@endisset" placeholder="Unesite vaše ime">
   @error('name')
       <span class="invalid-feedback" role="alert">
           {{$message}}
   @enderror
</div>
<div class="form-group">
    <label for="email">Email</label>
    <input name="email" type="email" class="form-control @error('email') is-invalid @enderror" id="email" aria-describedby="emailHelp" 
    value="{{old('email')}} @isset($user) {{$user->email}}
        
    @endisset" placeholder="Unesite vašu e-mail adresu">
    @error('email')
       <span class="invalid-feedback" role="alert">
           {{$message}}
   @enderror
  </div>
  @isset($create)
<div class="form-group">
  <label for="password">Zaporka</label>
  <input name="password" type="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Zaporka">
  @error('password')
  <span class="invalid-feedback" role="alert">
      {{$message}}
@enderror
</div>
<div class="">
  <div class="form-group">
      <Label>Potvrdite lozinku</Label>
      {!! Form::password('confirm-password', array('placeholder' => 'Potvrdite zaporku','class' => 'form-control')) !!}
  </div>
@endisset

</div>
  <br>
  <div class="mb-3">
    <div class="">
      <div class="form-group">
          <label for="">Uloge</label>
          {!! Form::select('roles[]', $roles,[], array('class' => 'form-control','multiple')) !!}
      </div>
  </div>
<button type="submit" class="btn btn-primary">@isset($user)
  Uredite račun
  @else
  Stvorite račun
@endisset</button>