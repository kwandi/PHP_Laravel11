<!-- shop section -->

<section class="shop_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          NEW PRODUCT
        </h2>
      </div>

      <div class="row">

      @foreach($product as $products)

        <div class="col-sm-6 col-md-4 col-lg-3">
          <div class="box product-card">

              <div class="img-box">
                <img src="products/{{$products->image}}" alt="">
              </div>
              <div>
              <h6 style="text-align: center; margin-top: 15px;">{!!Str::words($products->title,5)!!}</h6>
              </div>
              <div class="detail-box">
                <h6>
                  <span>${{$products->price}}</span>
                </h6>
              </div>

              <div style="padding: 5px;">
                <a class="btn btn-link" href="{{url('product_details', $products->id)}}">Details</a>

                <a class="btn btn-warning" href="{{url('add_cart',$products->id)}}">Add to Cart</a>
              </div>

          </div>
        </div>

      @endforeach

      </div>

      {{$product->links()}}
      
      <div>

      </div>

      <div class="btn-box">
        <!-- <a href="">
          View All Products
        </a> -->
      </div>
    </div>
  </section>

  <!-- end shop section -->