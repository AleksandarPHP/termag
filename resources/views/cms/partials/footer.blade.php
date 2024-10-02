  </div>
  <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © soft4tech.com {{ date('Y') }}</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Bootstrap core JavaScript-->
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
    <script type="text/javascript">
      if ($(".sortable")[0]){
        $('.sortable').sortable().bind('sortupdate', function() {
            var x = '';
            $('.sortable li').each(function() {
              if(x!='') x=x+'|';
              x = x+$(this).attr('alt');
            });
            $('#sortarray').val(x);
        });
      }
    </script>
    <script type="text/javascript">
      $(function () {
        if($('#datetime').length) $('#datetime').datetimepicker({
            format:'Y-m-d H:i:s'
        });
        if($('#datetime2').length) $('#datetime2').datetimepicker({
            format:'Y-m-d H:i:s'
        });
      });
    </script>
    @yield('scripts')
  </div>
  @include('partials.messages')

</body>

</html>