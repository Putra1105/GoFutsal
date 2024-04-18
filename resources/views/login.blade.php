@extends('layouts.auth')
@section('content')
<style>
  @font-face {
      font-family: 'Plus Jakarta Sans';
      src: url('fonts/PlusJakartaSans-Medium.ttf');
  }

  body {
      font-family: 'Plus Jakarta Sans', sans-serif;
  }

  .back-image {
      position: absolute;
      z-index: -1;
      width: 100%;
      height: 100%;
      filter: blur(2px);
  }
</style>
  <div class="col-6">
    @if (session('failed'))
      <div class="alert alert-danger" role="alert">
        {{ session('failed') }}
      </div>
    @endif
    <div class="card border-primary">
      <div class="card-header bg-warning">
        <h4 class="text-center">Login</h4>
      </div>
      <div class="card-body">
        <form method="POST">
          @csrf
          <div class="mb-3">
            <label class="form-label" for="email">Email</label>
            <input class="form-control" type="email" name="email" id="email">
          </div>
          <div class="mb-3">
            <label class="form-label" for="password">Password</label>
            <input class="form-control" type="password" name="password" id="password">
          </div>
          <button class="btn btn-primary w-100">Login</button>
          {{-- <p class="mb-0 text-center">belum punya akun ? <a href="{{ route('regis.view') }}">registrasi</a></p> --}}
        </form>
      </div>
    </div>
  </div>
@endsection
