<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard - SB Admin</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('sbadmin/css/bootstrap.css') }}" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="{{ asset('sbadmin/css/sb-admin.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('sbadmin/font-awesome/css/font-awesome.min.css') }}">
    <!-- Page Specific CSS -->
    <link rel="stylesheet" href="{{ asset('http://cdn.oesmith.co.uk/morris-0.4.3.min.css') }}">
  </head>

  <body>

    <div id="wrapper">

      <!-- Sidebar -->
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        @include('partials.header')
        
        @include('partials.sidebar')
      </nav>

        @yield('content')
      

    </div><!-- /#wrapper -->

    <!-- JavaScript -->
    <script src="{{ asset('sbadmin/js/jquery-1.10.2.js') }}"></script>
    <script src="{{ asset('sbadmin/js/bootstrap.js') }}"></script>

    <!-- Page Specific Plugins -->
    <script src="{{ asset('http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js') }}"></script>
    <script src="{{ asset('http://cdn.oesmith.co.uk/morris-0.4.3.min.js') }}"></script>
    <script src="{{ asset('sbadmin/js/morris/chart-data-morris.js') }}"></script>
    <script src="{{ asset('sbadmin/js/tablesorter/jquery.tablesorter.js') }}"></script>
    <script src="{{ asset('sbadmin/js/tablesorter/tables.js') }}"></script>

  </body>
</html>
