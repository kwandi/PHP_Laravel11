<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')

    <style type="text/css">
        .div_deg
        {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 30px;
        }

        input[type='text']
        {
            width: 400px;
            height: 45px;
        }
    </style>
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

          <div class="container-fluid">

                <h1 style="color: white;">Update Category</h1>

            <div class="div_deg">

          <form action="{{url('update_category',$data->id)}}" method="post">

          @csrf


          <input type="text" name="category" value="{{$data->category_name}}">

          <input class="btn btn-primary" type="submit" value="Update">

            </form>
          </div>

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