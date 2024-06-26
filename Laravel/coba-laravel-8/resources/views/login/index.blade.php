@extends('layouts.main')

@section('container')
  <div class="row justify-content-center">
    <div class="col-md-4">
      @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{ session('success') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif
      @if (session()->has('loginError'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          {{ session('loginError') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif
      <main class="form-signin">
        <h1 class="h3 fw-normal mb-3 text-center">Please login</h1>
        <form action="/login" method="post">
          @csrf
          <div class="form-floating">
            <input class="form-control @error('email') is-invalid @enderror" id="email" name="email" type="email"
              value="{{ old('email') }}" placeholder="name@example.com" autofocus required>
            <label for="email">Email address</label>
            @error('email')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
          <div class="form-floating">
            <input class="form-control" id="password" name="password" type="password" placeholder="Password" required>
            <label for="password">Password</label>
          </div>
          <button class="btn btn-primary w-100 py-2" type="submit">Login</button>
        </form>
        <small class="d-block mt-3 text-center">Not registered? <a href="/register">Register Now!</a></small>
      </main>
    </div>
  </div>
@endsection
