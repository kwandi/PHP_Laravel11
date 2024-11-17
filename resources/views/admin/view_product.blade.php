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

    .table_deg
    {
        border: 2px solid grey;
    }

    th
    {
        background-color: #CC6666;
        color: white;
        font-size: 18px;
        font-weight: bold;
        padding: 40px;
        border: 1px solid white;
    }

    td
    {
        border: 1px solid grey;
        text-align: center;

    }

    input[type='search']
    {
      width: 500px;
      height: 50px;
      margin-left: 50px;
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
            <h1>View Product</h1>

            <form action="{{url('product_search')}}" method="get">
              @csrf
              <input type="search" name="search">
              <input type="submit" class="btn btn-second" value="Search">
            </form>

          <div class="div_deg">

            <table class="table_deg">
                <tr>
                    <th>Product Title</th>

                    <th>Description</th>

                    <th>Category</th>

                    <th>Price</th>

                    <th>Quantity</th>

                    <th>Image</th>

                    <th></th>

                    <th></th>
                </tr>

                @foreach($product as $products)
                <tr>

                <td>{{$products->title}}</td>

                <td>{!!Str::words($products->description,50)!!}</td>

                <td>{{$products->category}}</td>

                <td>{{$products->price}}</td>

                <td>{{$products->quantity}}</td>

                <td>

                    <img height="200" width="" src="products/{{$products->image}}" alt="">

                </td>

                <td>
                  <a class="btn btn-success" href="{{url('update_product', $products->id)}}">Update</a>
                </td>

                <td>
                    <a class="btn btn-danger" onclick="confirmation(event)" href="{{url('delete_product',$products->id)}}">Delete</a>
                </td>
                </tr>

                @endforeach
            </table>

          </div>

          <div class="div_deg">

              {{$product->onEachSide(1)->links()}}

          </div>

          </div>
    <!-- JavaScript files-->
    @include('admin.javascript')
  </body>
</html>