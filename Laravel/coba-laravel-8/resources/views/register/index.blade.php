@extends('layouts.main')

@section('container')
  <div class="row justify-content-center">
    <div class="col-lg-5">
      <main class="form-registration">
        <h1 class="h3 fw-normal mb-3 text-center">Registration Form</h1>
        <form action="/register" method="post">
          @csrf
          <div class="form-floating">
            <input class="form-control rounded-top @error('name') is-invalid @enderror" id="name" name="name"
              type="text" value="{{ old('name') }}" placeholder="Name" required>
            <label for="name">Nama</label>
            @error('name')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
          <div class="form-floating">
            <input class="form-control @error('username') is-invalid @enderror" id="username" name="username"
              type="text" value="{{ old('username') }}" placeholder="Username" required>
            <label for="username">Username</label>
            @error('username')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
          <div class="form-floating">
            <input class="form-control @error('email') is-invalid @enderror" id="email" name="email" type="email"
              value="{{ old('email') }}" placeholder="name@example.com" required>
            <label for="email">Email address</label>
            @error('email')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
          <div class="form-floating">
            <input class="form-control rounded-bottom @error('password') is-invalid @enderror" id="password"
              name="password" type="password" placeholder="Password" required>
            <label for="password">Password</label>
            @error('password')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
          <button class="btn btn-primary w-100 mt-3 py-2" type="submit">Register</button>
        </form>
        <small class="d-block mt-3 text-center">Already registered? <a href="/register">Login</a></small>
      </main>
    </div>
  </div>
@endsection
