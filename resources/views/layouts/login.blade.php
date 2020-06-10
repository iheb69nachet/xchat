<!-- Modal1 -->
<div class="wrap-modal1 js-modal1">
    <div class="overlay-modal1 js-hide-modal1"></div>

    <div class="container">
        <div class="limiter">
            <div class="container-login100" data-aos="fade-up" id="mdl1">
                <div class="wrap-login100 p-l-40 p-r-55 p-t-25 p-b-50">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <i class="fa fa-times" aria-hidden="true"></i>
                        <div class="login100-form-title p-b-49 logo2">
                            <span>X.Chat</span>
                        </div>

                        <div class="wrap-input100 validate-input m-b-23" data-validate="Username is reauired">
                            <span class="label-input100">Pseudo Utilisateur</span>
                                <input id="email" type="email" class="input100{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                                <span class="focus-input100" data-symbol="&#xf206;"></span>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>

                        <div class="wrap-input100 validate-input" data-validate="Password is required">
                            <span class="label-input100">Mot de passe</span>
                            <input id="password" type="password" class="input100{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                            <span class="focus-input100" data-symbol="&#xf190;"></span>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <div class="row mt-5">
                            <div class="input100 col-md-6 validate-input">
                                <div class="form-check">
                                    <input class="form-check-input {{ old('remember') ? 'checked' : '' }}" type="checkbox" name="remember" id="remember" >
                                    <label class="form-check-label" for="remember">
                                        {{ __('Souvenir moi') }}
                                    </label>
                                </div>
                        </div>
                        <div class="form-group col-md-6 mb-0 float-r">
                            <div class=" offset-md-4">

                                @if (Route::has('password.request'))
                                    <a class="text-right p-t-8 p-b-31 js-show-modal4" href="#">
                                        {{ __('Mot de Passe Oublier?') }}
                                    </a>
                                @endif
                            </div>
                        </div>

                    </div>
                        <div class="container-login100-form-btn mt-5 mb-3">
                            <div class="wrap-login100-form-btn">
                                <div class="login100-form-bgbtn"></div>
                                <button type="submit"class="login100-form-btn">
                                Se Connecter
                            </button>
                        </div>
                        </div>
                        <div class="flex-col-c">
                            <a href="#" class="txt2 js-show-modal2">
                                S'inscrire
                            </a>
                        </div>
                    </form>

                    </div>
                </div>
         </div>
    </div>
</div>

<!-- / Modal1 -->
