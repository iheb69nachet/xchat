<div class="col-md-4">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Demandes en attentes</h4>
            <div class="feed-widget" style="height: 277px; overflow-y : scroll">
                <ul class="list-style-none feed-body m-0 p-b-20 ">
                    @foreach ($models as $row)
                    <li class="feed-item d-flex justify-content-around">
                        <div class="feed-icon bg-info"><i class="far fa-bell"></i></div>{{$row->nom}} 
                        <span class="font-12 text-muted row ">
                            <form action="/admin/deleteModels/{{ $row->id }}" method="POST" class="col-md-6">
                                {{csrf_field()}}
                                {{method_field('DELETE')}}
                                <button type="submit"><i class="fa fa-trash-o" aria-hidden="true" style="font-size : 20px;background-color:#f33;padding:5px;border-top-left-radius: 10px;border-bottom-left-radius:10px ; color: #fff"></i></button>
                            </form>
                            <form action="/admin/updateModels/{{ $row->id }}" method="POST">
                                {{csrf_field()}}
                                {{method_field('PUT')}}
                                <button type="submit"><i class="fa fa-check" aria-hidden="true" style="font-size : 20px;background-color:#33f;padding:5px;border-top-right-radius: 10px;border-bottom-right-radius:10px ; color: #fff"></i></button>
                            </form>
                        </span>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>