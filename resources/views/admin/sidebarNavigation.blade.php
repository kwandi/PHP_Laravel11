<nav id="sidebar">
        <!-- Sidebar Header-->
        <div class="sidebar-header d-flex align-items-center">
          <div class="avatar"><img src="{{asset('adminview/img/avatar-6.jpg')}}" alt="..." class="img-fluid rounded-circle"></div>
          <div class="title">
            <h1 class="h5">Minh Quan</h1>
            <p>Web Designer</p>
          </div>
        </div>
        <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
        <ul class="list-unstyled">
                <li class="">
                  <a href="{{url('admin/dashboard')}}"> 
                    <i class="icon-home">                      
                    </i>Home 
                  </a>
                </li>

                <li>
                    <a href="{{url('view_category')}}"> 
                      <i class="icon-grid">
                      </i>Category 
                    </a>
                  </li>
                <!-- <li><a href="charts.html"> <i class="fa fa-bar-chart"></i>Charts </a></li> -->
                <!-- <li><a href="forms.html"> <i class="icon-padnote"></i>Forms </a></li> -->

                <!-- Product -->
              <li><a href="#productDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Product</a>
                <ul id="productDropdown" class="collapse list-unstyled ">
                  <li><a href="{{url('add_product')}}">Add Product</a></li>
                  <li><a href="{{url('view_product')}}">View Product</a></li>
                </ul>
              </li>

                <!-- Order -->
              <li><a href="#orderDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Order Management</a>
                <ul id="orderDropdown" class="collapse list-unstyled ">
                  <li><a href="{{url('view_order')}}">View Oders</a></li>
                </ul>
              </li>

                <!-- <li><a href="login.html"> <i class="icon-logout"></i>Login page </a></li> -->
      </nav>