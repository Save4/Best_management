<!DOCTYPE html>
<html lang="en">
  <!-- head -->
  @include('hnsfs.head')
  <!-- end head -->

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col menu_fixed">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-btc"></i> <span>Best management</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
          
            <!-- /menu profile quick info -->

            <br />

           <!-- sidebar -->
           @include('hnsfs.sidebar')

           <!-- end sidebar -->




        <!-- navbar -->
@include('hnsfs.navbar')
        <!-- end navbar -->


        <div class="right_col" role="main">

          <!-- page content -->
@yield('content')
           <!-- /page content -->

        </div>


        <!-- footer content -->
        @include('hnsfs.footer')

        <!-- /footer content -->
      </div>
    </div>
       <!-- script -->
       @include('hnsfs.script')

   <!-- end script -->

  </body>
</html>
