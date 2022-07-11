@extends('/user/login/auth')

@section('container')
  <form class="login100-form validate-form" method="post" action="/user/login">
    @csrf
    <span class="login100-form-title p-b-43">
      Login to continue
    </span>

    <div class="py-5">
      <div class="form-floating mb-3">
        <input type="text" class="form-control" id="username" name="username" placeholder="name@example.com">
        <label for="username" name="username">Username</label>
      </div>

      <div class="form-floating mb-3">
        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
        <label for="password">Password</label>
      </div>

      <div class="form-check">
        <input class="form-check-input" type="checkbox" name="remember" id="remember" value="true" checked>
        <label class="form-check-label" for="flexCheckDefault">
        Remember Me
        </label>
      </div>
    </div>

    <div class="container-login100-form-btn">
      <button class="btn btn-primary col-12 py-2">
      Login
      </button>
    </div>
    <div class="py-1">
      <a href="/user/register" class="btn btn-success col-12 py-2">
        Don't Have Account? Register ....
      </a>
    </div>
              
    <div class="text-center p-t-46 p-b-20">
      <span class="txt2">
        Back to <a href="/" class="text-decoration-none text-primary">Home</a>
      </span>
    </div>
  </form>
@endsection