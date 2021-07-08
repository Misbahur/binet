<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <link rel="shortcut icon" href="{{ url('/frontend/images/logo/tvrisumut.png') }}">

  <title>@yield('title') Portal TVRI Sumut</title>

  {{-- Datatables --}}
  <link rel="stylesheet" href="{{ url('/frontend/library/dataTables/datatables.min.css') }}">

  {{-- Summernote --}}
  <link rel="stylesheet" href="{{ url('/frontend/library/summernote/summernote-lite.min.css') }}">

  {{-- Gijgo --}}
  <link rel="stylesheet" href="{{ url('/frontend/library/gijgo/css/gijgo.min.css') }}">
  <style>
    .gj-datepicker .input-group-addon img {
      margin-left: -30px;
    }
  </style>

  {{-- Fancybox --}}
  <link rel="stylesheet" href="{{ url('/frontend/library/facancybox/jquery.fancybox.min.css') }}">

  <!-- Custom fonts for this template-->
  <link href="{{ url('frontend/library/sbadmin/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{ url('/frontend/library/sbadmin/css/sb-admin-2.min.css') }}" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    @include('includes.dashboard.admin.sidebar')
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        @include('includes.dashboard.admin.navbar')
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          @yield('content')

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      @include('includes.dashboard.admin.footer')
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  @include('includes.dashboard.admin.modal')

  <!-- Bootstrap core JavaScript-->
  <script src="{{ url('frontend/library/sbadmin/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ url('frontend/library/sbadmin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{ url('frontend/library/sbadmin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{ url('frontend/library/sbadmin/js/sb-admin-2.min.js') }}"></script>

  {{-- Datatables --}}
  <script src="{{ url('/frontend/library/dataTables/datatables.min.js') }}"></script>

  {{-- Summernote --}}
  <script src="{{ url('/frontend/library/summernote/summernote-lite.min.js') }}"></script>

  {{-- Gijgo --}}
  <script src="{{ url('/frontend/library/gijgo/js/gijgo.min.js') }}"></script>

  {{-- Fancybox --}}
  <script src="{{ url('/frontend/library/facancybox/jquery.fancybox.min.js') }}"></script>
  
  <script>
    //Datatables
    $(document).ready(function() {
      $('#example').DataTable();
    } );

    // Preview Image
    function previewImageThumbnail() {
      var oFReader = new FileReader();
      oFReader.readAsDataURL(document.getElementById("thumbnail").files[0]);
      oFReader.onload = function (oFREvent)
      {
          document.getElementById("previewThumbnail").src = oFREvent.target.result;
      };
    };

    function previewImageBanner() {
      var oFReader = new FileReader();
      oFReader.readAsDataURL(document.getElementById("banner").files[0]);
      oFReader.onload = function (oFREvent)
      {
          document.getElementById("previewBanner").src = oFREvent.target.result;
      };
    };

    function previewImageIklan() {
      var oFReader = new FileReader();
      oFReader.readAsDataURL(document.getElementById("iklan").files[0]);
      oFReader.onload = function (oFREvent)
      {
          document.getElementById("previewIklan").src = oFREvent.target.result;
      };
    };

    // Summernote
    $('#berita').summernote({
      placeholder: 'Ada berita apa hari ini??',
      tabsize: 2,
      height: 400,
      toolbar: [
        ['style', ['style']],
        ['font', ['bold', 'underline', 'clear']],
        ['color', ['color']],
        ['para', ['ul', 'ol', 'paragraph']],
        ['table', ['table']],
        ['insert', ['link', 'picture', 'video', 'videoAttributes', 'media']],
        ['view', ['fullscreen', 'codeview', 'help']]
      ]
    });

    // Date Picker
    $('#awalTampil').datepicker({
      format: 'yyyy-mm-dd',
      uiLibrary: 'bootstrap4'
    });
    
    $('#akhirTampil').datepicker({
      format: 'yyyy-mm-dd',
      uiLibrary: 'bootstrap4'
    });

    // Fancybox
    $(document).ready(function() {
      $("a#single_image").fancybox();
    });

  </script>

</body>

</html>