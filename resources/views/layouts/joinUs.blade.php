<!-- Modal3 -->
<div class="wrap-modal3 js-modal3">
    <div class="overlay-modal3 js-hide-modal3"></div>

    <div class="container">
        <div class="limiter">
            <div class="container-login100" data-aos="fade-up" id="mdl2">
                <div class="wrap-login100 p-l-40 p-r-55 p-t-20 p-b-40">
                    <form class="login100-form validate-form" method="POST" action="{{action('ModelsController@store')}}">
                        {{csrf_field()}}
                        <i class="fa fa-times m2_close" aria-hidden="true"></i>
                        <div class="login100-form-title p-b-5 logo2">
                            <span>X.Chat</span>
                        </div>
                        <div class="row d-flex justify-content-between">
                            <div class="wrap-input100 validate-input m-b-20 col-md-12" data-validate="Username is reauired">
                                <span class="label-input100">Pseudo</span>
                                <input class="input100" type="text" name="nom" placeholder="Entrez Votre Pseudo">
                                <span class="focus-input100" data-symbol="&#xf206;"></span>
                            </div>
                            <div class="wrap-input100 validate-input m-b-20 col-md-12" data-validate="Username is reauired">
                                <span class="label-input100">Mail</span>
                                <input class="input100" type="text" name="email" placeholder="Entrez Votre Mail">
                                <span class="focus-input100" data-symbol="&#xf206;"></span>
                            </div>

                            <div class="wrap-input100 validate-input m-b-20 col-md-6" data-validate="Password is required">
                                <span class="label-input100">Mot de passe</span>
                                <input class="input100" style="font-size: 14px;" type="password" name="password" placeholder="Entrez Votre Mot de Pass">
                                <span class="focus-input100" data-symbol="&#xf190;"></span>
                            </div>
                            <div class="wrap-input100 validate-input m-b-20 col-md-5 float-md-right" data-validate="dtn is required">
                                <span class="label-input100">Date Naissance</span>
                                <input id="dtn" type="text" class="input100" autocomplete="true" name="dtn" required>
                                <span class="focus-input100" data-symbol="&#128197;"></span>
                            </div>
                            <div class="wrap-input100 validate-input m-b-20 col-md-12" data-validate="Username is reauired">
                                <span class="label-input100">Numero de Tel</span>
                                <input class="input100" type="tel" name="tel" id="tel" placeholder="Entrez Votre Tel">
                                <span class="focus-input100" data-symbol="&#9990;"></span>
                            </div>
                            <div class="container-login100-form-btn col-md-12 m-t-10">
                                <div class="flex-c-m flex-w">
                                    <a href="#" class="m-all-1">
                                        <img src="images/icons/icon-pay-01.png" alt="ICON-PAY">
                                    </a>

                                    <a href="#" class="m-all-1">
                                        <img src="images/icons/icon-pay-02.png" alt="ICON-PAY">
                                    </a>

                                    <a href="#" class="m-all-1">
                                        <img src="images/icons/icon-pay-03.png" alt="ICON-PAY">
                                    </a>

                                    <a href="#" class="m-all-1">
                                        <img src="images/icons/icon-pay-04.png" alt="ICON-PAY">
                                    </a>

                                    <a href="#" class="m-all-1">
                                        <img src="images/icons/icon-pay-05.png" alt="ICON-PAY">
                                    </a>
                                </div>
                                <div class="wrap-login100-form-btn">

                                    <div class="login100-form-bgbtn"></div>
                                    <button class="login100-form-btn">
                                    Devenir une Modele
                                </button>
                                </div>
                            </div>
                        </div>

                </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>

<!-- / Modal3 -->
