<!DOCTYPE html>
<html>

<head>
  @include('home.css')
  <style type="text/css">
    .div_deg {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        margin: 60px;
        flex-wrap: wrap;
    }

    table {
        border: 2px solid black;
        text-align: center;
        width: 800px;
    }

    th {
        border: 2px solid black;
        text-align: center;
        color: white;
        font-size: 20px;
        font-weight: bold;
        background-color: black;
    }

    td {
        border: 1px solid black;
    }

    .cart_value {
        text-align: center;
        margin-bottom: 70px;
        padding: 18px;
    }

    .order_deg {
        padding: 20px;
        margin: 20px;
        border: 1px solid #ccc;
        border-radius: 8px;
        background-color: #f9f9f9;
        width: 400px;
    }

    .order_deg form div {
        margin-bottom: 15px;
    }

    .order_deg form label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
    }

    .order_deg form input[type="text"],
    .order_deg form textarea {
        width: 100%;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    .order_deg form input[type="submit"] {
        width: 100%;
        padding: 10px;
        background-color: #4CAF50;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    .order_deg form input[type="submit"]:hover {
        background-color: #45a049;
    }
  </style>
</head>

<body>
  <div class="hero_area">

    <!-- header section strats -->
    @include('home.header')
    <!-- end header section -->

    <div class="div_deg">
        <div class="order_deg">
            <form action="{{url('confirm_order')}}" method="post">

            @csrf

              <div>
                <label for="">Receiver Name</label>
                <input type="text" name="name" value="{{Auth::user()->name}}">
              </div>
              <div>
                <label for="">Receiver Address</label>
                <textarea name="address" id="">{{Auth::user()->address}}</textarea>
              </div>
              <div>
                <label for="">Receiver Phone</label>
                <input type="text" name="phone" value="{{Auth::user()->phone}}">
              </div>
              <div>
                <input class="btn btn-primary" type="submit" value="Place Order">
              </div>
            </form>
        </div>

        <table>
            <tr>
                <th>Product Title</th>
                <th>Product Price</th>
                <th>Product Image</th>
            </tr>

            <?php $value = 0; ?>

            @foreach($cart as $cart)
            <tr>
                <td>{{$cart->product->title}}</td>
                <td>{{$cart->product->price}}</td>
                <td>
                    <img width="150px" src="/products/{{$cart->product->image}}" alt="">
                </td>
            </tr>

            <?php $value += $cart->product->price; ?>

            @endforeach
        </table>
    </div>

    <div class="cart_value">
        <h3>Total: {{$value}} VND</h3>
    </div>

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
      <div class="info_container ">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-lg-3">
              <h6>ABOUT US</h6>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet.</p>
            </div>
            <div class="col-md-6 col-lg-3">
              <div class="info_form ">
                <h5>Newsletter</h5>
                <form action="#">
                  <input type="email" placeholder="Enter your email">
                  <button>Subscribe</button>
                </form>
              </div>
            </div>
            <div class="col-md-6 col-lg-3">
              <h6>NEED HELP</h6>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet, consectetur adipiscing elit, sed doLorem ipsum dolor sit amet.</p>
            </div>
            <div class="col-md-6 col-lg-3">
              <h6>CONTACT US</h6>
              <div class="info_link-box">
                <a href="">
                  <i class="fa fa-map-marker" aria-hidden="true"></i>
                  <span>713 Ta Quang Buu, District 8</span>
                </a>
                <a href="">
                  <i class="fa fa-phone" aria-hidden="true"></i>
                  <span>+84 68686868</span>
                </a>
                <a href="">
                  <i class="fa fa-envelope" aria-hidden="true"></i>
                  <span>qtbookstore@gmail.com</span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- footer section -->
      <footer class="footer_section">
        <div class="container">
          <p>&copy; <span id="displayYear"></span> All Rights Reserved By <a href="https://html.design/">QT BOOKSTORE</a></p>
        </div>
      </footer>
      <!-- footer section -->
    </section>
    <!-- end info section -->

    <script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="{{asset('js/custom.js')}}"></script>

</body>
</html>
