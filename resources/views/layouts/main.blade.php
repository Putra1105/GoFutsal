<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>GoFutsal</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  @stack('heads')
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary bg-blue-gojek">
    <div class="container">
      <a class="navbar-brand">
        <img class="header" style="width: 50px;" src="{{ asset('images/GoFutsalTransparent.png') }}" alt="Logo Go Futsal"/>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active text-white" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link @guest disabled @endguest text-white" href="{{ route('booking.index') }}">Booking</a>
          </li>
         
            <li class="nav-item">
              <a class="nav-link text-white" href="{{ route('riwayat.index') }}">Riwayat Transaksi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="{{ route('daftarbooking.index') }}">Daftar Booking</a>
            </li>
        </ul>
        @auth
          <a class="btn px-3 btn btn-danger" href="{{ route('logout') }}">Logout</a>
        @endauth
        @guest
          <a class="btn px-3 me-2 btn-outline-primary" href="{{ route('regis.view') }}">Daftar</a>
          <a class="btn px-3 btn-primary" href="{{ route('login.view') }}">Login</a>
        @endguest
      </div>
    </div>
  </nav>
  <div class="container">
    @yield('content')
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  @stack('scripts')
</body>

</html>