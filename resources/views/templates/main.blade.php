<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Upravljanje Sadržajem</title>

        <!-- Fonts -->
        <!-- Styles -->
        <link href="{{asset('css/app.css')}}"  rel="stylesheet">
        
        {{-- JS --}}
            <script src="/js/app.js" defer></script>

    </head>
    <body class="antialiased">
      
        <nav class="navbar navbar-expand-lg ">
          <div class="container">
            <a class="navbar-brand"
            @auth
              href="/profile"
            @endauth
             
            href="/login"
             >Profilna stranica</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
                @auth
                <li class="nav-item active">
                  <a class="nav-link" href="{{route('users.index')}}">Korisnici</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{route('roles.index')}}">Uloge</a>
                </li>
                 <li class="nav-item">
                  <a class="nav-link" href="{{route('posts.index')}}">Objave</a>
                </li> 
                @else

                <li class="nav-item active">
                  <a class="nav-link" href="/login" style="color: gray">Korisnici</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/login" style="color: gray">Uloge</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/login" style="color: gray">Objave</a>
                </li>
                @endauth
                
                

                {{-- <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </div>
                </li> --}}
                {{-- <li class="nav-item">
                  <a class="nav-link disabled" href="#">Disabled</a>
                </li> --}}
              </ul>
            </div>
               <div class="form-inline  justify-content-between">
                @if (Route::has('login'))
                <div class="form-inline hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="text-sm text-gray-700 dark:text-gray-500 underline">Odjava</a>
                   <form id="logout-form" action="{{ route('logout')}}" method="POST" style="display: none">
                  @csrf
                  </form>
                   
                   
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Prijava</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Novi račun</a>
                        @endif
                    @endauth
                </div>
            @endif
            </div>
          </div>
          </nav>
        
<main class="container">
  @include('includes.alert')
  @yield('content')
</main>
            
    </body>
</html>
