<div class="modal fade m-t-60" id="edit_profile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">

  {{ csrf_field() }}
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="row">
          <div class="col-lg-5">
            <!--Carousel Wrapper-->
            <div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails"
              data-ride="carousel">
              <a href="" data-toggle="modal" data-target="#insertPhoto" ><i class="fa fa-plus-circle" aria-hidden="true" style="position: fixed;font-size: 25px;z-index: 5;margin-left: 275px;margin-top: 5px;color: ivory;"></i></a>

              <!--Slides-->
              <div class="carousel-inner" id="carousell" role="listbox">
                <div class="carousel-item active">
                  <img class="d-block w-100"
                    src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/img%20(23).jpg"
                    alt="First slide">
                </div>
              </div>
              <!--/.Slides-->
              <!--Controls-->
              <a class="carousel-control-prev" href="#carousel-thumb" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carousel-thumb" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
              <!--/.Controls-->
              
            </div>
            <!--/.Carousel Wrapper-->
          </div>
            <div class="col-lg-7 m-t-10 text-center">
                <h1 class="model_nom">Votre Profile  :</h1>
                <div class="d-flex justify-content-around m-t-30">
            <h2 class="h2-responsive product-name">
                <label for="abnmnt"><strong  id="nom" class="model_nom"></strong></label>
            </h2>
            <h4 class="h4-responsive m-t-10 ">
                <span class="green-text" >
                <strong id="age" class="model_nom"></strong>
                </span>
            </h4>
        </div>



            <!-- Add to Cart -->
            <div class="card-body m-t-20">
                <div class="row">
                  <div class="col-md-6">
                      <label for="abnmnt"> Abonnement</label>
                    <select class="form-control" id="abnmnt">
                      <option value="" disabled selected>Abonnement</option>
                      <option value="1">Golden</option>
                      <option value="2">Silver</option>
                      <option value="3">Bronze</option>
                    </select>
                    
  
                  </div>
                  <div class="col-md-6">
                    <label for="option">Select size</label>
                    <select class="form-control" id="option">
                      <option value="" disabled selected>Choose your option</option>
                      <option value="1">XS</option>
                      <option value="2">S</option>
                      <option value="3">L</option>
                    </select>
  
                  </div>
                </div>
                <div class="text-center m-t-70">
                  <button type="button"  class="btn btn-secondary" data-dismiss="modal">Annuller</button>
                  <button class="btn btn-primary">
                  <i class="fa fa-credit-card m-r-2" aria-hidden="true" style="color: #fff; font-size: 20px;"></i>
                      Panier
                  </button>
                </div>
              </div>
            <!-- /.Add to Cart -->
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
    // Material Select Initialization
$(document).ready(function() {
$('.mdb-select').materialSelect();
});
</script>

<script>
    $('#edit_profile').on('show.bs.modal', function (event) {
        var nom = $(event.relatedTarget).data('nom');
        var age = $(event.relatedTarget).data('age');
        $(this).find('#nom').text(nom);
        $(this).find('#age').text(age);
    });
</script>
<script>
    $('#edit_profile').on('show.bs.modal', function (event) {
        var photos =localStorage.getItem('photos');
        $( "#carousell" ).empty();
        $("#carousell").html(`<div class="carousel-item active">
                  <img class="d-block w-100"
                    src="https://mdbootstrap.com/img/Photos/Horizontal/E-commerce/Vertical/img%20(23).jpg"
                    alt="First slide">
                </div>`);

        var nom = $(event.relatedTarget).data('nom');
        var age = $(event.relatedTarget).data('age');
        $(this).find('#nom').text(nom);
        $(this).find('#age').text(age);
        var array_photos = photos.split(",");
        for(var i=0;i<array_photos.length;i++){
        document.getElementById('carousell').innerHTML +=
        ` <div class="carousel-item second">
            <form action="/user/img/`+array_photos[i]+`" method="POST" style="height:0px" >
                {{csrf_field()}}
                {{method_field('DELETE')}}
            <button type="submit"><i class="fa fa-trash-o" aria-hidden="true" style="position: fixed;font-size: 25px;z-index: 5;margin-left: 240px;margin-top: -11px;color: ivory;"></i></button>
            </form>
            <img class="d-block w-100" height='200px'  style="height: 453px;"
                src="images/users/`+array_photos[i]+`"
                alt="Second slide">
            </div>
            ` ;
        }
        localStorage.removeItem('photos');
    });


</script>