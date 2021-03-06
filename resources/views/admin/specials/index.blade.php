<!DOCTYPE html>
<html lang="en">
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
    <nav class="navbar navbar-light bg-light">
        <a href="/">
            <div class="btn btn-primary">Home</div>
        </a>
        <a href="/contact-us">
            <div class="btn btn-primary">Contact Us</div>
        </a>
    </nav>
    <table class="table table-striped table-dark">
        <thead>
          <tr>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Was ($)</th>
            <th scope="col">Current ($)</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($specials as $special)
                <tr>
                    <td>{{$special['name']}}</td>
                    <td>{{$special['description']}}</td>
                    <td>${{$special['was_priced']}}</td>
                    <td>${{$special['current_price']}}</td>
                <td><a href="/admin/specials/{{ $special['id']}}/edit"><button type="button" class="btn btn-warning">Edit</button></a></td>
                    <form method="post" action="/admin/specials/{{ $special['id']}}">
                        @method('delete');
                        @csrf
                        <td><button type="submit" class="btn btn-danger">Delete</button></td>
                    </form>
                    
                </tr>
            @endforeach
          
        </tbody>
      </table>
      <a href="/admin/specials/create">
        <div class="btn btn-primary">Add New Special</div>
    </a> 
</body>
</html>

