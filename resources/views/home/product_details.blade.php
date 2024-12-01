<!DOCTYPE html>
<html>

<head>
  @include('home.css')

  <style type="text/css">
    .div_center {
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 30px;
    }

    .product-row {
        display: flex;
        align-items: center;
    }

    .col-md-6 {
        padding: 10px;
    }

    .col-md-6 h6 {
        margin-bottom: 10px;
    }

    .price {
        color: red;
    }

    .description {
        overflow: hidden;
        display: -webkit-box;
        -webkit-line-clamp: 3; /* Số dòng tối đa trước khi cắt */
        -webkit-box-orient: vertical;
        max-width: 100%;
        cursor: pointer;
    }

    .description.expanded {
        -webkit-line-clamp: none;
        white-space: normal;
    }
  </style>
</head>

<body>
  <div class="hero_area">

    <!-- header section starts -->
    @include('home.header')
    <!-- end header section -->

  </div>

  <!-- Product details start -->

  <!-- shop section -->

<section class="shop_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
        PRODUCT DETAILS
        </h2>
      </div>

      <div class="row product-row">
        <div class="col-md-6">
          <div class="box product-card">
            <div class="div_center">
              <img width="35%" src="/products/{{$data->image}}" alt="">
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <h3>{{$data->title}}</h3>
          <h6>
            <span class="price">${{$data->price}}</span>
          </h6>
          <h6>Category : {{$data->category}}</h6>
          <h6>Available Quantity : {{$data->quantity}}</h6>
          <p class="description" onclick="toggleDescription()">{{$data->description}}</p>
        </div>
      </div>

      <div class="btn-box">
        <!-- <a href="">
          View All Products
        </a> -->
      </div>
    </div>
  </section>

  <!-- end shop section -->

  <!-- Product details end -->

  <!-- info section -->

  <section class="info_section layout_padding2-top">
    <div class="social_container">
      <div class="social_box">
        <a href="">
          <i class="fa fa-facebook" aria-hidden="true"></i>
        </a>
        <a href="">
          <i class="fa fa-twitter" aria-hidden="true"></i>
        </a>
        <a href="">
          <i class="fa fa-instagram" aria-hidden="true"></i>
        </a>
        <a href="">
          <i class="fa fa-youtube" aria-hidden="true"></i>
        </a>
      </div>
    </div>
    <div class="info_container">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-3">
            <h6>
              ABOUT US
            </h6>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet,
            </p>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="info_form">
              <h5>
                Newsletter
              </h5>
              <form action="#">
                <input type="email" placeholder="Enter your email">
                <button>
                  Subscribe
                </button>
              </form>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <h6>
              NEED HELP
            </h6>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet,
            </p>
          </div>
          <div class="col-md-6 col-lg-3">
            <h6>
              CONTACT US
            </h6>
            <div class="info_link-box">
              <a href="">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span> 713 Ta Quang Buu. District 8 </span>
              </a>
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>+84 68686868</span>
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span> qtbookstore@gmail.com</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- footer section -->
    <footer class=" footer_section">
      <div class="container">
        <p>
          &copy; <span id="displayYear"></span> All Rights Reserved By
          <a href="https://html.design/">QT BOOKSTORE</a>
        </p>
      </div>
    </footer>
    <!-- footer section -->

  </section>

  <!-- end info section -->

  <script>
    function toggleDescription() {
      var desc = document.querySelector('.description');
      desc.classList.toggle('expanded');
    }
  </script>

  <script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
  <script src="{{asset('js/bootstrap.js')}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
  <script src="{{asset('js/custom.js')}}"></script>

</body>

</html>
