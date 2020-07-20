<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{config('APP_NAME')}}</title>
        <link rel="stylesheet" href="/css/website.css"/>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        
    </head>
    <body>
        <!-- Image and text -->
        <nav class="navbar navbar-light bg-light">
            <a class="navbar-brand" href="#">
            <img src="./assets/StoppageTime1.png" width="30" height="30" class="d-inline-block align-top" alt="">
            {{ config('app.name')}}
            </a>
            @foreach ($pages as $page)
                                <a href="{{ url('/'. $page['slug'])}}">{{$page['name']}}</a>
                            @endforeach
                        
        </nav>
        <div id="app">
            <div class="flex-center position-ref full-height">
                @if (Route::has('login'))
                    <div class="top-right links">
                        @auth
                           
                        @else
                            <a href="{{ route('login') }}">Login</a>
    
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}">Register</a>
                            @endif
                            
                        
                        @endauth
                    </div>
                @endif
            </div>
        <div class="row bg-dark">
            @foreach ($specials as $special)
            <div class="col-md-3">
                <div class="card bg-dark text-white" style="width: 18rem;">
                <img class="card-img-top" src=".\assets\sale.png" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">{{$special->name}}</h5>
                  <span>
                      <h6 class="card-title">Previous Price:$ {{$special->was_priced}}</h6>
                      <h6 class="card-title">Current Price:$ {{$special->current_price}}</h6>
                  </span>
                
                  <p class="card-text">{{$special->description}}</p>
                    <a href="/admin/specials/{{$special->id}}" class="btn btn-primary">View Special</a>
                </div>
              </div>
            </div>
            @endforeach
        </div>
            
        </div>
        {{-- <script src="../../js/website.js"></script> --}}
    </body>
</html>
