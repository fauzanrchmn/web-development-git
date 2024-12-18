<html>
	<head>
		<title>Project Pertemuan 11</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">

		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
	</head>

	<body>
        <div class="py-2 bg-body-tertiary border-bottom">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">

                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    @auth
                        <li><a href="/" class="nav-link px-2 link-body-emphasis">Home</a></li>
                        <li><a href="/product" class="nav-link px-2 link-secondary">Product</a></li>
                    @else
                        <li><a href="/login" class="nav-link px-2 link-body-emphasis">Login</a></li>
                        <li><a href="/register" class="nav-link px-2 link-secondary">Register</a></li>
                    @endauth
                </ul>

                <div class="text-end flex" style="display: flex">
                    @auth
                        <span style="margin: auto">
                            {{ Auth::user()->name }} &nbsp;
                        </span>
                        <form action="{{ url('logout') }}" method="POST" class="m-0">
                            @csrf
                            <button class="btn btn-danger" type="submit"> Logout </button>
                        </form>
                    @endauth
                </div>
            </div>
        </div>

        <div class="m-3">
            @yield('content')
        </div>
    </body>

</html>
