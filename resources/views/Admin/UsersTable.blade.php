<div class="col-lg-6">
    <div class="card">
        <ul class="nav nav-tabs mu-restaurant-menu d-flex justify-content-around">
            <li class="active"><a href="#clients" data-toggle="tab">Clients</a></li>
            <li><a href="#admin" data-toggle="tab" >Administrateurs</a></li>
            <li><a href="#models" data-toggle="tab">Models</a></li>
          </ul>
        <div class="comment-widgets scrollable fade active" id="clients">
            <!-- Client Row -->
          @foreach($users as $user)
            <div class="d-flex flex-row comment-row">
                <div class="comment-text active w-100">
                    <h6 class="font-medium">{{$user->nom}}</h6>
                    <span class="m-b-15 d-block">{{$user->mail}} </span>
                    <div class="comment-footer ">
                        <span class="text-muted float-right">April 14, 2016</span>
                    </div>
                </div>
            </div>
            @endforeach
            <!-- Client Row -->
        </div>
        <div class="comment-widgets scrollable  fade" id="admin">
            <!-- Client Row -->
            @foreach($admin as $user)
            <div class="d-flex flex-row comment-row">
                <div class="comment-text active w-100">
                    <h6 class="font-medium">{{$user->nom}}</h6>
                    <span class="m-b-15 d-block">{{$user->mail}} </span>
                    <div class="comment-footer ">
                        <span class="text-muted float-right">April 14, 2016</span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
            <!-- Client Row -->
            <div class="comment-widgets scrollable fade" id="models">
                <!-- Client Row -->
            @foreach($mdl as $user)
                <div class="d-flex flex-row comment-row">
                    <div class="comment-text active w-100">
                        <h6 class="font-medium">{{$user->nom}}</h6>
                        <span class="m-b-15 d-block">{{$user->mail}} </span>
                        <div class="comment-footer ">
                            <span class="text-muted float-right">April 14, 2016</span>
                        </div>
                    </div>
                </div>
            @endforeach
                <!-- Client Row -->
        </div>
    </div>
</div>