@extends('/mitra/login/auth')

@section('container')
  <div class="mb-4">
    <h3 class="fw-bold mb-2">Register Mitra</h3>
    <p class="mb-4">Lakukan Penjualan Dengan Mudah Dan Cepat Di "Toko Online"</p>
  </div>

  @if(session()->has('loginError'))
    <div class="pb-3 fs-6 fw-bold text-danger">Data Yang Dimasukkan Salah</div>
  @endif

  <form action="" method="post">
  @csrf
    <div class="form-floating mb-2">
      <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="email" required="" autofocus="">
      <label for="email">Email</label>
      @error('email')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>

    <div class="form-floating mb-2">
      <input type="text" name="username" id="username" class="form-control @error('username') is-invalid @enderror" placeholder="Username" value="{{ old('username') }}" required="">
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
                  
    <div class="mt-3">
      <button type="submit" class="btn btn-success">Register</button>
      <a href="/"><button type="button" class="btn btn-primary">Home</button></a> 
    </div>

    <div class="mt-2">
      <p>Have Account? <a href="/mitra/login" class="text-decoration-none">Login</a></p>
    </div>
  </form>   
@endsection