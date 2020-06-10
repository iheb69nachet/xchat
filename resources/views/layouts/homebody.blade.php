<section class="bg0 p-t-23 p-b-140">
    <div class="uk-container uk-container-small">
        <div class="p-b-10 text-center">
            <h3 class="ltext-103 cl5 m-5">
                NOS MA97EBA
            </h3>
        </div>
        <div class="row isotope-grid">
            @guest

            @foreach($models as $user)
            <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
                <!-- Block2 -->

                <div class="block2">
                    <div class="block2-pic hov-img0">
                        <img src="{{$user->user_img}}" height="100%" alt="IMG-PRODUCT">
                        <a href="#"  class="block2-btn flex-c-m stext-103 cl2 size-102 modal1 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                        Chatter
                    </a>
                    </div>

                    <div class="block2-txt flex-w flex-t p-t-14">
                        <div class="block2-txt-child1 flex-col-l ">
                            <a href="#"  class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6 js-show-modal1">
                            {{$user->nom}}
                        </a>

                            <span class="stext-105 cl3 hov-cl2">
                            {{\Carbon\Carbon::parse($user->dtn)->diff(\Carbon\Carbon::now())->format('%y years')}}
                        </span>
                        </div>

                        <div class="block2-txt-child2 flex-r p-t-3">
                            <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                <img class="icon-heart1 dis-block trans-04" src="images/icons/icon-heart-02.png" alt="ICON">
                                <img class="fas fa-comments dis-block trans-04 ab-t-l" src="images/icons/icon-heart-01.png" alt="ICON">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

            @else
            @foreach($models as $mdls)
           
            <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
                <!-- Block2 -->
                <div class="block2">
                    <div class="block2-pic hov-img0">

                        <img src="images/users/{{\App\Photos::where('user_id',$mdls['id'])->pluck('user_imgs')->first()}}" height="100%" alt="IMG-PRODUCT">
                        <a href="" data-toggle="modal" data-target="#modalQuickView" data-nom="{{$mdls['nom']}}"
                            data-age="{{$mdls['dtn']}} ANS"
                            onclick="localStorage.setItem('photos',(JSON.parse(`{{ json_encode($phs =\App\Photos::where('user_id',$mdls['id'])->pluck('user_imgs')) }}`)))"
                            data-id="{{$mdls['id']}}"
                            data-kk="{{\App\Photos::where('user_id',$mdls['id'])->pluck('user_imgs')->first()}}"
                            class="block2-btn flex-c-m stext-103 cl2 size-102 modal1 bor2 hov-btn1 p-lr-15 trans-04 ">
                        Chatter
                    </a>
                    </div>

                    <div class="block2-txt flex-w flex-t p-t-14">
                        <div class="block2-txt-child1 flex-col-l ">

                            <a href=""   data-toggle="modal" data-target="#modalQuickView" 
                            data-nom="{{$mdls['nom']}}"
                            data-age="{{\Carbon\Carbon::parse($mdls['dtn'])->diff(\Carbon\Carbon::now())->format('%y ans')}}"
                            data-id="{{$mdls['id']}}"
                            data-kk="{{\App\Photos::where('user_id',$mdls['id'])->pluck('user_imgs')->first()}}"
                            onclick="localStorage.setItem('photos',(JSON.parse(`{{ json_encode($phs =\App\Photos::where('user_id',$mdls['id'])->pluck('user_imgs')) }}`)))"
                            class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                            {{$mdls['nom']}}
                        </a>

                            <span class="stext-105 cl3 hov-cl2">
                            {{\Carbon\Carbon::parse($mdls['dtn'])->diff(\Carbon\Carbon::now())->format('%y ans')}}
                        </span>
                        </div>

                        <div class="block2-txt-child2 flex-r p-t-3">
                            <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                <img class="icon-heart1 dis-block trans-04" src="images/icons/icon-heart-02.png" alt="ICON">
                                <img class="fas fa-comments dis-block trans-04 ab-t-l" src="images/icons/icon-heart-01.png" alt="ICON">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            @endguest
        </div>
    </div>
    </br>
    </br>
    </br>
    <!-- Pagination -->
    <div class="flex-l-m flex-w w-full mx-auto" style="width: 200px; ">

        <a href="#" class="flex-c-m how-pagination1 trans-04 m-all-7 active-pagination1 "> 1 </a>
        <a href="#" class="flex-c-m how-pagination1 trans-04 m-all-7"> 2 </a>
        <a href="#" class="flex-c-m how-pagination1 trans-04 m-all-7"> 3 </a>

    </div>
    </div>
</section>
