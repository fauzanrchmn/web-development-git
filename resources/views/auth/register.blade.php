<html>
  <head>
    <title>Register</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
  </head>

  <body class="m-3">

    <form action="{{ route('auth.store') }}" method="POST">
        @csrf

        <div class="col-sm-8 mt-2">
            <h1 class="h3">Register</h1>
        </div>

        <div class="col-sm-8 mt-2">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" placeholder="name">
        </div>

        <div class="col-sm-8 mt-2">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" placeholder="name@email.com">
        </div>

        <div class="col-sm-8 mt-2">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="Password">
        </div>

        <div class="col-sm-8 mt-2">
            <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
        </div>
    </form>

  </body>
</html>
