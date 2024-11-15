<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')
  </head>
  <body>
    
    @include('admin.headermenu')
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      @include('admin.sidebarNavigation')
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">

          @include('admin.body')

          </div>
    <!-- JavaScript files-->
    <script src="{{asset('adminview/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('adminview/vendor/popper.js/umd/popper.min.js')}}"> </script>
    <script src="{{asset('adminview/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('adminview/vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
    <script src="{{asset('adminview/vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('adminview/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('adminview/js/charts-home.js')}}"></script>
    <script src="{{asset('adminview/js/front.js')}}"></script>
  </body>
</html>