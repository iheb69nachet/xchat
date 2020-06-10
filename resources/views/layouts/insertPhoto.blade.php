<div class="modal fade m-t-60" id="insertPhoto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">

  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <form  method="POST" action="/user/addphoto/" enctype="multipart/form-data">
            @csrf
        <div class="row" style="text-align: center;">
          <div class="col-lg-12 m-t-20">
                <h1 class="text-center">Ajouter Votre Image</h1>
          </div>
          <div class="col-lg-12 m-t-50 d-flex justify-content-center">
            <input type="file" class="input"  name="img">
          </div>
          <div class="col-lg-12 m-t-50 text-center">
              <button class="btn btn-danger">Annuler</button>
              <input type="submit"  class="btn btn-success" value="Enregistrez">
          </div>
        </div>
      </form>
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
