<div class="modal fade m-t-60" id="modalQuickView" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
              <!--Slides-->
              <div id='taswira' class="carousel-inner" id="carousel" role="listbox">
                
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

            </div>
            <!--/.Carousel Wrapper-->
          </div>
          <div class="col-lg-7 m-t-10 text-center">
              <h1 class="model_nom">Binevenue chez :</h1>
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
                <a  class="btn btn-primary" id='msgs'>
                <i class="fa fa-credit-card m-r-2" aria-hidden="true" style="color: #fff; font-size: 20px;"></i>
                    Panier
                </a>
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
    $('#modalQuickView').on('show.bs.modal', function (event) {
        var photos =localStorage.getItem('photos');
        $( "#carousel" ).empty();
        // $("#carousel").html(`<div class="carousel-item active">
        //           <img class="d-block w-100"
        //             src='images/users/`+kk+`'
        //             alt="First slide">
        //         </div>`);

        var nom = $(event.relatedTarget).data('nom');
        var id = $(event.relatedTarget).data('id');
        var age = $(event.relatedTarget).data('age');
        var kk = $(event.relatedTarget).data('kk');
        $(this).find('#nom').text(nom);
        $(this).find('#age').text(age);
        $(this).find('#kk').text(kk);
        // var array_photos = photos.split(",");
        // for(var i=0;i<array_photos.length;i++){
        // document.getElementById('carousel').innerHTML +=
        // ` <div class="carousel-item second">
        //     <img class="d-block w-100" height='200px'  style="height: 453px;"
        //         src="images/users/`+array_photos[i]+`"
        //         alt="Second slide">
        //     </div>` ;
        // }
        var res= "/chatify/";
        var idu = id;
        $('#msgs').attr({'href':res+idu});
        localStorage.removeItem('photos');
        $('#taswira').html( ` <img class="d-block w-100"
                    src='images/users/`+kk+`'
                    alt="First slide">`)
    });


</script>

