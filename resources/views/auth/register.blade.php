{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
@extends('templates.main')

@section('content')

<h1>Novi korisnički račun</h1>

<form method="POST" action="{{ route('register') }}">
    @csrf 
    <div class="form-group">
      <label for="name">Ime</label>
      <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" id="name" aria-describedby="emailHelp" value="{{old('name')}}" placeholder="Unesite vaše ime">
       @error('name')
           <span class="invalid-feedback" role="alert">
               {{$message}}
       @enderror
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input name="email" type="email" class="form-control @error('email') is-invalid @enderror" id="email" aria-describedby="emailHelp" value="{{old('email')}}" placeholder="Unesite vašu e-mail adresu">
        @error('email')
           <span class="invalid-feedback" role="alert">
               {{$message}}
       @enderror
      </div>
    <div class="form-group">
      <label for="password">Zaporka</label>
      <input name="password" type="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Zaporka">
      @error('password')
      <span class="invalid-feedback" role="alert">
          {{$message}}
  @enderror
    </div>

    <div class="form-group">
        <label for="password_confirmation">Potvrda zaporke</label>
        <input name="password_confirmation" type="password" class="form-control @error('password_confirmation') is-invalid @enderror" id="password_confirmation" placeholder="Potvrda Zaporke">
        @error('password_confirmation')
        <span class="invalid-feedback" role="alert">
            {{$message}}
    @enderror 
    </div>
      <br>
    <button type="submit" class="btn btn-primary">Stvorite račun</button>
  </form>
@endsection