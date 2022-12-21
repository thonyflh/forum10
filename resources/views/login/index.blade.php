@extends('layouts.main')

@section('container')

<style>
.form-signin {
  max-width: 330px;
  padding: 15px;
}

.form-signin .form-floating:focus-within {
  z-index: 2;
}

.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}

.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
</style>

{{-- @if (session()->has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

@if (session()->has('loginError'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('loginError') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

@endif --}}

<div class="row justify-content-center">
    <div class="col-md-4">
        <main class="form-signin w-100 m-auto">
            <form action="/login" method="POST">
                @csrf
              <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
              <div class="form-floating">
                <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
                <label for="email">Email address</label>
              </div>
              <div class="form-floating">
                <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                <label for="password" required>Password</label>
              </div>
              <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>

              <a href="/login/google" class="w-100 btn btn-lg btn-danger mt-3">Google</a>

              {{-- <button class="w-100 btn btn-lg btn-danger mt-3" type="submit">Google</button> --}}

            </form>
            <small>Not registered? <a href="/register">Register Now</a></small>
        </main>
    </div>
</div>


@endsection
