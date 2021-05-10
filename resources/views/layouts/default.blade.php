<!DOCTYPE html>
<html>

<head>
  @include('includes.head')
</head>

<body class="hold-transition sidebar-collapse layout-fixed layout-navbar-fixed layout-footer-fixed">

  <div class="wrapper">

    <header>
      @include('includes.header')
    </header>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      @yield('content')
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      @include('includes.footer')
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->


  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)

  </script>
  <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
