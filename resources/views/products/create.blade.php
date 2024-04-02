<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>

<body>
    <nav class="navbar navbar-expand-sm bg-dark">
    <ul class="navbar-nav">
  <li class="nav-item">
    <a class="nav-link text-light" aria-current="page" href="/">Products</a>
  </li>

</ul>
    </nav>
    <div class="container">
        <div class="row justify-content-center">
          <div class="col-sm-8">
            <div class="card mt-3 p-3">
            <form method="POST" action="/products/store">
              @csrf
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name">
              </div>
              <div class="form-group">
                <label for="desp">Description</label>
                <textarea class="form-control" rows="4" name="desp"></textarea>
              </div>
              <div class="form-group">
                <label for="price">Price</label>
                <input type="text" class="form-control" name="price">
              </div>
              <div class="form-group">
                <label>Image</label>
                <input type="file" class="form-control" name="image">
              </div>
              <button type="submit" class="btn btn-dark mt-3">Submit</button>
            </form>
            </div>
          </div>
        </div>
    </div>
</body>

</html>