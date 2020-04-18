@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="text-center">
             <h1>Identifiez-vous !</h1>
             </div>
                <div >{{ __('.') }}</div>
<div>
                <div class="card-body">
                    <form method="POST" action="{{ route('login_bison') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-form-label">
                            </label>
                            <div class="col-md-8">

                                <input id="email" type="email" placeholder="E-mail" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                        </div>
<hr>
                        <div class="form-group row">
                            <label for="password" class="col-form-label text-right"></label>

                            <div class="col-md-8">
                                <input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror"
                                name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
<hr>
                        <div class="row">
                            <div class="col">

                                   <div class="col-12">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                    {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Ce souvenir') }}
                                    </label>
</div>
<div>
</div>
</div>
</div>
<div >
<button type="submit" class="btn btn-primary mt-4">{{ __('Connexion') }}</button>
</div >
                    </form>
                </div>
                          </div>
{{--                          <div><a class="nav-link " href="{{ route('register') }}">{{ __('Register') }}</a>--}}
                          @if (Route::has('password.request'))
                          <div class="text-right col-12"><a class="btn btn-link col-12" href="{{ route('password.request') }}">{{ __('Mot de passe oublié ?') }}</a>
                           @endif </div></div>
{{--                      </div>--}}
{{--    </div>--}}
</div>
<div>
</div>
</div>
@endsection

