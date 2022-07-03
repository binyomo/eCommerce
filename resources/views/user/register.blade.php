@extends('/user/auth')

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
      <button class="login100-form-btn">
      Register
      </button>
    </div>
              
    <div class="text-center p-t-46 p-b-20">
      <span class="txt2">
        Have a acc? <a href="/user/login" class="text-decoration-none text-primary">Login</a>
      </span>
    </div>
  </form>
@endsection