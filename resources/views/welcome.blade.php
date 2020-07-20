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
            <img src="./assets/StoppageTime11.png" width="30" height="30" class="d-inline-block align-top" alt="">
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
        <div class="row">
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="/assets/StoppageTime11.png" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>
        </div>
            
        </div>
        {{-- <script src="../../js/website.js"></script> --}}
    </body>
</html>
