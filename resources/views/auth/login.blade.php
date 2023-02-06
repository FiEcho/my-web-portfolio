@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-sm-4">
                <div class="card mt-5 shadow p-3 mb-5 bg-body rounded border border-0">
                    <div>
                        <h3 class="text-center">{{ __('Login') }}</h3>
                    </div>

                    <div class="card-body ">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf


                            <div class="form-floating mb-3 ">
                                <input type="email" class="form-control  @error('email') is-invalid @enderror"
                                    name="email" id="floatingInput" value="{{ old('email') }}" required
                                    autocomplete="email" autofocus>
                                <label for="email">{{ __('Email Address') }}</label>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-floating">
                                <input id="password" type="password"
                                    class="form-control  @error('password') is-invalid @enderror" name="password" required
                                    autocomplete="current-password">
                                <label for="floatingPassword">{{ __('Password') }}</label>

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                            <div class="row mb-3 mt-2">
                                <div class="col-md-12 offset-md-0">
                                    <div class="form-check">
                                        <input class="form-check-input " type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>
                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                        @if (Route::has('password.request'))
                                            <a class=" btn btn-link float-right" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-12 offset-md-0 d-flex">
                                    <button type="submit"
                                        class="content-center px-20 py-3 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out ">
                                        {{ __('Login') }}
                                    </button>


                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
