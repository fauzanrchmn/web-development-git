<html>
  <head>
    <title>Login</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
  </head>

  <body class="m-3">

    <form action="{{ route('auth.authenticate') }}" method="POST" >
        @csrf
        <div class="col-sm-8 mt-2">
            <h1 class="h3">Login</h1>
            @if(Session::has('message'))
                <p class="alert alert-info">{{ Session::get('message') }}</p>
            @endif
        </div>

        <div class="col-sm-8 mt-2">
            <label for="email">Email address</label>
            <input type="email" class="form-control" name="email" placeholder="name@email.com">
        </div>

        <div class="col-sm-8 mt-2">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" placeholder="Password">
        </div>

        <div class="col-sm-8 mt-2">
            <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>
        </div>
    </form>

  </body>
</html>
