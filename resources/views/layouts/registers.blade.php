 <!-- Modal2 -->
 <div class="wrap-modal2 js-modal2">
    <div class="overlay-modal2 js-hide-modal2"></div>

    <div class="container">
        <div class="limiter">
            <div class="container-login100" data-aos="fade-up" id="mdl2">
                <div class="wrap-login100 p-l-40 p-r-55 p-t-25 p-b-50">
                    <form class="login100-form validate-form" method="POST" action="{{ route('register') }}">
                            <i class="fa fa-times m2_close" aria-hidden="true"></i>
                            <div class="login100-form-title p-b-49 logo2">
                                <span>X.Chat</span>
                            </div>

                        @csrf
                    <div class="row d-flex justify-content-between">
                            <div class="wrap-input100 validate-input m-b-23 col-md-12" >
                                <span class="label-input100">Pseudo</span>
                                <input id="nom" type="text" class="input100{{ $errors->has('nom') ? ' is-invalid' : '' }}" name="nom" value="{{ old('nom') }}" required autofocus>
                                <span class="focus-input100" data-symbol="&#xf206;"></span>
                                @if ($errors->has('nom'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('nom') }}</strong>
                                    </span>
                                @endif
                            </div>


                            <div class="wrap-input100 validate-input m-b-23 col-md-12" >
                                <span class="label-input100">Mail</span>
                                <input id="email" type="email" class="input100{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                                <span class="focus-input100" data-symbol="&#xf206;"></span>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>


                            <div class="wrap-input100 validate-input m-b-23 col-md-5" >
                                <span class="label-input100">Mot de Passe</span>
                                <input id="password" type="password" class="input100{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                <span class="focus-input100" data-symbol="&#xf190;"></span>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="wrap-input100 validate-input m-b-23 col-md-6" >
                                <span class="label-input100">Mot de Passe</span>
                                <input id="password-confirm" type="password" class="input100" name="password_confirmation" required required>
                                <span class="focus-input100" data-symbol="&#xf190;"></span>

                            </div>

                            <div class="wrap-input100 validate-input m-b-23 col-md-5" >
                                <span class="label-input100">Date Naissance</span>
                                <input id="dtn" type="text" class="input100{{ $errors->has('dtn') ? ' is-invalid' : '' }}" autocomplete="true" name="dtn" required>
                                <span class="focus-input100" data-symbol="&#128197;"></span>
                                @if ($errors->has('dtn'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('dtn') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="wrap-input100 validate-input m-b-23 col-md-6" >
                                <span class="label-input100">Num Tel</span>
                                <input id="tel" type="tel" class="input100{{ $errors->has('tel') ? ' is-invalid' : '' }}" name="tel" required>
                                <span class="focus-input100" data-symbol="&#9990;"></span>
                                @if ($errors->has('tel'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('tel') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="container-login100-form-btn mt-5 col-md-12">
                                <div class="wrap-login100-form-btn">
                                    <div class="login100-form-bgbtn"></div>
                                <button type="submit" class="login100-form-btn">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
</div>
<!-- /Modal2 -->
