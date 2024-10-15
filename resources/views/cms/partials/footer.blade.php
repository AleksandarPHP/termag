  @yield('modals')
  <div class="modal default_modal fade" id="client_modal" style="z-index: 100001">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title"><b><i class="fas fa-user-plus"></i> Novi pacijent</b></h5>
          <button type="button" class="close" data-dismiss="modal">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="{{ url('pacijenti') }}" method="post" id="addNewClient">
            <div id="FormError" style="display:none;">
              <div class="alert alert-danger">
                <strong>Greška!</strong><br>
                <div class="message"></div>
              </div>
            </div>
            <div id="FormSuccess" style="display:none;">
              <div class="alert alert-success">
                <strong>Uspjeh!</strong><br>
                <div class="message"></div>
              </div>
            </div>
            @csrf
            <div class="row">
              <div class="col-md-6">
                <h5 class="field_title">Ime *</h5>
                <input type="text" class="default_input" required name="first_name">
              </div>
              <div class="col-md-6">
                <h5 class="field_title">Prezime *</h5>
                <input type="text" class="default_input" required name="last_name">
              </div>
              <div class="col-12">
                <h5 class="field_title">Broj telefona *</h5>
                <input type="text" class="default_input" required name="phone">
              </div>
            </div>
            <button type="submit" class="button">Sačuvaj</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- javascripts -->
  <script type="text/javascript">
    var home = "{{ url('/') }}";
    document.addEventListener("DOMContentLoaded", function() {
    const loader = document.getElementById('loader');

    // Proverite da li je loaderHidden postavljen u sesiji
    const loaderHidden = {{ session('loaderHidden', 'false') ? 'true' : 'false' }};

    if (loaderHidden) {
        loader.style.display = 'none'; // Sakrij loader
    }
});
  </script>
  @yield('variables')
  <script src="{{ asset('cmsfiles/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('cmsfiles/vendor/popper/popper.min.js') }}"></script>
  <script src="{{ asset('cmsfiles/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
  <!-- Core plugin JavaScript-->
  <script src="{{ asset('cmsfiles/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
  <!-- Page level plugin JavaScript-->
  <script src="{{ asset('cmsfiles/vendor/datatables/jquery.dataTables.js') }}"></script>
  <script src="{{ asset('cmsfiles/vendor/datatables/dataTables.bootstrap4.js') }}"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.25/jquery.fancybox.min.js"></script>
  <!-- Custom scripts for all pages-->
  <script src="{{ asset('cmsfiles/js/sb-admin.js?v=2') }}"></script>
  <!-- Custom scripts for this page-->
  <script src="{{ asset('cmsfiles/js/sb-admin-datatables.js') }}"></script>
  <script src="{{ asset('cmsfiles/js/ckeditor/ckeditor.js') }}"></script>
  <script src="{{ asset('cmsfiles/js/tinymce/tinymce.min.js') }}"></script>
  <script src="{{ asset('cmsfiles/js/jquery.sortable.min.js') }}"></script>
  <script src="{{ asset('cmsfiles/js/jquery.datetimepicker.full.min.js') }}"></script>
  <script src="{{ asset('cmsfiles/js/jquery.multi-select.js') }}"></script>
  <script src="{{ asset('cmsfiles/vendor/select2-4.0.13/js/select2.min.js') }}"></script>
  <script src="{{ asset('cmsfiles/vendor/select2-4.0.13/js/i18n/sr.js') }}"></script>
  <script src="{{ asset('cmsfiles/vendor/tagEditor/jquery.caret.min.js') }}"></script>
  <script src="{{ asset('cmsfiles/vendor/tagEditor/jquery.tag-editor.min.js') }}"></script>
  @yield('scripts')
</body>

</html>