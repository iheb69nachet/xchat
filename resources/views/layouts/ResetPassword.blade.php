<!-- Modal4 -->
<div class="wrap-modal4 js-modal4">
    <div class="overlay-modal4 js-hide-modal4"></div>

    <div class="container">
        <div class="limiter">
            <div class="container-login100" data-aos="fade-up" id="mdl1">
                <div class="wrap-login100 p-l-40 p-r-55 p-t-25 p-b-50">
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <i class="fa fa-times" aria-hidden="true"></i>
                        <div class="login100-form-title p-b-49 logo2">
                            <span>X.Chat</span>
                        </div>
                        
                            <div class="wrap-input100 validate-input m-b-23" >
                                <span class="label-input100">Pseudo Utilisateur</span>
                                <input id="email" type="email" class="input100{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                                <span class="focus-input100" data-symbol="&#xf206;"></span>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>

                        <div class="container-login100-form-btn mt-5 mb-3">
                            <div class="wrap-login100-form-btn">
                                <div class="login100-form-bgbtn"></div>
                                <button type="submit"class="login100-form-btn">
                                    {{ __('Envoyer un Mail') }}
                                </button>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
         </div>
    </div>
</div>

<!-- / Modal4 -->