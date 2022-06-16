@extends('layouts.app')

@section('content')
<section class="section section-on-footer" data-background="images/backgrounds/bg-dots.png">
<div class="container">
    <div class="row">
        <div class="col-12 text-center">
            <div class="card">
               <h2 class="section-title">{{ __('Login') }}</h2>

                <div class="col-lg-8 mx-auto">
                 <div class="bg-white rounded text-center p-5 shadow-down">  
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                         <div class="col-md-12">
                                <input id="correo" type="email" class="form-control @error('correo') is-invalid @enderror" name="correo" value="{{ old('correo') }}" required autocomplete="correo" autofocus placeholder="Ingresa Tu correo">

                                @error('correo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-12">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"
                                placeholder="Ingresa Tu Contraseña">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-5 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Guardar Sesión') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-2">
                            <div class="col-lg-6 col-10 mx-auto">
                                <button class="btn btn-primary w-100" type="submit" class="btn btn-primary">
                                    {{ __('Entrar') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}"><h6>
                                        {{ __('¿Olvide mi contraseña?') }}</h6>
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</section>
<!-- footer -->
<footer class="bg-dark footer-section">
  <div class="section">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <h5 class="text-light">Email</h5>
          <p class="text-white paragraph-lg font-secondary">compraturopa@gmail.com</p>
        </div>
        <div class="col-md-4">
          <h5 class="text-light">Phone</h5>
          <p class="text-white paragraph-lg font-secondary">+52 464 145 0000</p>
        </div>
        <div class="col-md-4">
          <h5 class="text-light">Address</h5>
          <p class="text-white paragraph-lg font-secondary">Calzada al Panteón No.100 Pueblo Nuevo</p>
        </div>
      </div>
    </div>
  </div>
  <div class="border-top text-center border-dark py-5">
    <p class="mb-0 text-light">Copyright &copy;<script>
        var CurrentYear = new Date().getFullYear()
        document.write(CurrentYear)
      </script> compraturopa by <a class="text-white-50" href="Themefisher">Compañia "Los Compas"</a></p>
  </div>
</footer>
<!-- /footer -->
@endsection
