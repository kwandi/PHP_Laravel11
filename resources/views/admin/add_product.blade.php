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
            margin-top: 60px;

        }

        h1
        {
            color: white;

        }

        label
        {
            display: inline-block;
            width: 250px;
            font-size: 20px!important;
            color: white; 
        }

        input[type='text']
        {
            width: 350px;
            height: 50px;
        }

        textarea
        {
            width: 350px;
            height: 80px;
        }

        .input_deg
        {
            padding: 15px;
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
          <h1>Add Product</h1>

            <div class="div_deg">

                <form action="{{url('upload_product')}}" method="Post" enctype="multipart/form-data">

                @csrf
                
                    <div class="input_deg">
                        <label for="">Product Title</label>
                        <input type="text" name="title" required>
                    </div>

                    <div class="input_deg">
                        <label for="">Description</label>
                        <textarea name="description" required></textarea>
                    </div>

                    <div class="input_deg">
                        <label for="">Price</label>
                        <input type="text" name="price">
                    </div>

                    <div class="input_deg">
                        <label for="">Quantity</label>
                        <input type="number" name="quantity">
                    </div>

                    <div class="input_deg">
                        <label for="">Product Category</label>
                        <select name="category" required>
                            <option value="">Select a Option</option>

                            @foreach($category as $category)

                            <option value="{{$category->category_name}}">{{$category->category_name}}</option>

                            @endforeach
                        </select>
                    </div>

                    <div class="input_deg">
                        <label for="">Product Image</label>
                        <input type="file" name="image">
                    </div>

                    <div class="input_deg">
                        <input class="btn btn-success" type="submit" value="Add">
                    </div>
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