@extends('layouts.app')


@section('content')
<div class="container pt-5 mt-5">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card m-4">
                <div class="card-header text-center"style="background-image: radial-gradient(circle at 14.64% -11.24%, #e8de86 0, #dce189 4.17%, #d0e48d 8.33%, #c3e793 12.5%, #b6ea9b 16.67%, #a8eca4 20.83%, #9aeead 25%, #8befb8 29.17%, #7cf0c3 33.33%, #6df1cf 37.5%, #5df2db 41.67%, #4cf2e6 45.83%, #3cf2f2 50%, #2df1fd 54.17%, #25f1ff 58.33%, #28efff 62.5%, #36eeff 66.67%, #49ecff 70.83%, #5ce9ff 75%, #71e7ff 79.17%, #85e3ff 83.33%, #99e0ff 87.5%, #acdcff 91.67%, #bfd8ff 95.83%, #d0d4ff 100%);" >{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
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
@endsection

