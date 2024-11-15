<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')

    <style type="text/css">

    input[type='text']
    {
        width: 400px;
        height: 45px;
    }

    .div_deg
    {
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 30px;
    }

    .table_deg{
      text-align: center;
      margin: auto;
      border: 2px solid grey;
      margin-top: 50px;
      width: 600px;
    }

    th{
      background-color: #CC6666;
      padding: 15px;
      font-size: 20px;
      font-weight: bold;
      color: white;
    }
    td{
      color: white;
      padding: 10px;
      border: 1px solid grey;
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
          <h1 style="color: white;">Add Category</h1>
          <div class="div_deg">

          <form action="{{url('add_category')}}" method="post">

          @csrf

                <div>
                    <input type="text" name="category">
                    <input class="btn btn-primary" type="submit" value="Add Category">
                </div>
            </form>
          </div>
            
          <div>
              <table class="table_deg">
                  <tr>
                      <th>Tên Sản Phẩm</th>

                      <th></th>
                  </tr>

                  @foreach($data as $data)

                  <tr>
                      <td>{{$data->category_name}}</td>
                      <td>
                        <a class="btn btn-danger" onclick="confirmation(event)" href="{{url('delete_category',$data->id)}}">Xoá</a>
                      </td>
                  </tr>
                  
                  @endforeach
              </table>
          </div>
          </div>
    <!-- JavaScript files-->
     <script type="text/javascript">
      
      function confirmation(ev)
      {
        ev.preventDefault();

        var urlToRedirect = ev.currentTarget.getAttribute('href');

        console.log(urlToRedirect);

        swal({
          title:"Bạn chắc chắn muốn xoá sản phẩm chứ?",
          text: "Sản phẩm sẽ bị xoá vĩnh viễn",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })

        .then((willCancel)=>{
          if(willCancel)
            {
              window.location.href = urlToRedirect;
            }
        })
      }

     </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

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