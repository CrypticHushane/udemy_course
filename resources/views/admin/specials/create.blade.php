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
        <a href="/admin/specials">
            <div class="btn btn-primary">View Specials</div>
        </a>
    </nav>
    <div id="app" class="container p-5" >
    <div class="flex-center position-ref full-height">
      <form method="POST" action="/admin/specials">
        @csrf
        <div class="form-group">
          <label for="name">Name:</label>
          <input
            type="text"
            class="form-control"
            name="name"
            placeholder="Full Name"
            required
          />
        </div>
        <div class="form-group">
            <label for="was_priced">Previous Price: </label>
            <input
              type="number"
              class="form-control"
              name="was_priced"
              step="0.01"
              required
            />
          </div>
          <div class="form-group">
            <label for="current_price">Current Price: </label>
            <input
              type="current_price"
              class="form-control"
              name="current_price"
              step="0.01"
              required
            />
          </div>
          <div class="form-group">
            <label for="description">Description:</label>
            <textarea
              class="form-control"
              name="description"
              rows="3"
              required
            ></textarea>
          </div>
        <button type="submit" class="btn btn-primary" >Add Special</button>
      </form>
    </div>
  </div>
</body>
</html>
