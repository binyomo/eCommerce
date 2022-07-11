@extends('/mitra/login/auth')

@section('container')
  <div class="mb-4">
    <h3 class="fw-bold mb-2">Login Mitra</h3>
    <p class="mb-4">Lakukan Penjualan Dengan Mudah Dan Cepat Di "Toko Online"</p>
  </div>

  @if(session()->has('loginError'))
    <div class="pb-3 fs-6 fw-bold text-danger">Data Yang Dimasukkan Salah</div>
  @endif

  <form action="" method="post">
  @csrf
    <div class="form-floating mb-2">
      <input type="text" name="username" id="username" class="form-control @error('username') is-invalid @enderror" placeholder="Username" value="{{ old('username') }}" autofocus="" required="">
      <label for="username">Username</label>
      @error('username')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
      @enderror
    </div>

    <div class="form-floating">
      <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" required="">
      <label for="password">Password</label>
      @error('password')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>

    <div class="form-check mt-2">
      <input class="form-check-input" type="checkbox" name="remember" id="chinput" value="true" checked>
      <label class="form-check-label" for="chinput">
      Remember Me
    </div>
                  
    <div class="mt-3">
      <button type="submit" class="btn btn-success">Submit</button>
      <a href="/"><button type="button" class="btn btn-primary">Home</button></a> 
    </div>

    <div class="mt-2">
      <p>Dont Have Account? <a href="/mitra/register" class="text-decoration-none">Register</a></p>
    </div>
  </form>   
@endsection