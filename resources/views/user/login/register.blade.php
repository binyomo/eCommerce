@extends('/user/login/auth')

@section('container')
  <form class="login100-form validate-form" method="post" action="/user/register">
    @csrf
    <span class="login100-form-title p-b-43">
      Register To Login
    </span>

    <div class="py-5">
      <div class="form-floating mb-3">
        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="name@example.com">
        <label for="email" name="email">Email</label>
        @error('email')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>

      <div class="form-floating mb-3">
        <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" placeholder="name@example.com">
        <label for="username" name="username">Username</label>
        @error('username')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>

      <div class="form-floating">
        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Password">
        <label for="password">Password</label>
        @error('password')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>
    </div>

    <div class="container-login100-form-btn">
      <button class="btn btn-primary col-12 py-2">
      Register
      </button>
    </div>
    <div class="py-1">
      <a href="/user/login" class="btn btn-success col-12 py-2">
        Have Account? Login..
      </a>
    </div>
              
    <div class="text-center p-t-46 p-b-20">
      <span class="txt2">
        Back to <a href="/" class="text-decoration-none text-primary">Home</a>
      </span>
    </div>
  </form>
@endsection