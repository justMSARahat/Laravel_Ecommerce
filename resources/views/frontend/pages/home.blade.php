@extends ('frontend.layout.template')
@section('body')
<div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder">
    {{-- Home Main Slider --}}
    <div id="hero">
    <div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">
      @foreach( $slider as $slider )
      <div class="item" style="background-image: url({{ asset('Backend/img/slider/') }}/{{ $slider->image }});">
        <div class="container-fluid">
          <div class="caption bg-color vertical-center text-left">
            <div class="slider-header fadeInDown-1">{{ $slider->title }}</div>
            <div class="big-text fadeInDown-1">{{ $slider->top_text }}</div>
            <div class="excerpt fadeInDown-2 hidden-xs"> <span>{{ $slider->subtitle }}</span> </div>
            <div class="button-holder fadeInDown-3"> <a href="{{ $slider->button_text_url }}" class="btn-lg btn btn-uppercase btn-primary shop-now-button">{{ $slider->button_text }}</a> </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
{{-- Guarantee Box --}}
  <div class="info-boxes wow fadeInUp">
    <div class="info-boxes-inner">
      <div class="row">

        <div class="col-md-6 col-sm-4 col-lg-4">
          <div class="info-box">
            <div class="row">
              <div class="col-xs-12">
                <h4 class="info-box-heading green">money back</h4>
              </div>
            </div>
            <h6 class="text">30 Days Money Back Guarantee</h6>
          </div>
        </div>

        <div class="hidden-md col-sm-4 col-lg-4">
          <div class="info-box">
            <div class="row">
              <div class="col-xs-12">
                <h4 class="info-box-heading green">free shipping</h4>
              </div>
            </div>
            <h6 class="text">Shipping on orders over $99</h6>
          </div>
        </div>

        <div class="col-md-6 col-sm-4 col-lg-4">
          <div class="info-box">
            <div class="row">
              <div class="col-xs-12">
                <h4 class="info-box-heading green">Special Sale</h4>
              </div>
            </div>
            <h6 class="text">Extra $5 off on all items </h6>
          </div>
        </div>

      </div>
    </div>
  </div>


  <div id="product-tabs-slider" class="scroll-tabs outer-top-vs wow fadeInUp">
    <div class="more-info-tab clearfix ">
      <h3 class="new-product-title pull-left">New Products</h3>
      <ul class="nav nav-tabs nav-tab-line pull-right" id="new-products-1">
        <li class="active"><a data-transition-type="backSlide" href="#all" data-toggle="tab">All</a></li>
        @foreach( App\Models\Backend\category::orderBy('name','asc')->where('is_featured',1)->get() as $featured )
        <li><a data-transition-type="backSlide" href="#{{ $featured->slug }}" data-toggle="tab">{{ $featured->name }}</a></li>
        @endforeach
      </ul>
      <!-- /.nav-tabs -->
    </div>
    <div class="tab-content outer-top-xs">
      <!-- All Item -->
      <div class="tab-pane in active" id="all">
        <div class="product-slider">
          <div class="owl-carousel home-owl-carousel custom-carousel owl-theme" data-item="4">
            @foreach( $newarraivals as $value)
            <div class="item item-carousel">
              <div class="products">
                <div class="product">
                  <div class="product-image">
                    <div class="image">
                      <a href="{{ route('product.show', $value->slug ) }}">
                      @if( !is_null( $value->image ) )
                      <img  src="{{ asset('Backend/img/Product_Primary_image' ) }}/{{ $value->image }}" alt="">
                      @else
                      <img  src="{{ asset('Backend/img/Product_Primary_image/no_image.png' ) }}" alt="">
                      @endif
                      </a>
                    </div>
                    <!-- /.image -->
                    @if($value->is_featured == 0)
                    <div class="tag sale"><span>Sale</span></div>
                    @else
                    @if($value->product_type == 0)
                    <div class="tag new"><span>NEW</span></div>
                    @else($value->product_type == 1)
                    <div class="tag hot"><span>OLD</span></div>
                    @endif
                    @endif
                  </div>
                  <!-- /.product-image -->
                  <div class="product-info text-left">
                    <h3 class="name"><a href="{{ route('product.show', $value->slug ) }}">{{ $value->title }}</a></h3>
                    <div class="rating rateit-small"></div>
                    <div class="description"></div>
                    @if( !is_null($value->offer_price) )
                    <div class="product-price">
                      <span class="price">৳ {{ $value->reguler_price }} BDT</span>
                      <span class="price-before-discount">৳ {{ $value->offer_price }} BDT</span>
                    </div>
                    @else
                    <div class="product-price">
                      <span class="price">৳ {{ $value->reguler_price }} BDT</span>
                    </div>
                    @endif
                    <!-- /.product-price -->
                  </div>
                  <!-- /.product-info -->
                  <div class="cart clearfix animate-effect">
                    <div class="action">
                      <ul class="list-unstyled">
                        <li class="add-cart-button btn-group">
                          <form action="{{ route('cart.store') }}" method="POST">
                            @csrf
                            <input type="hidden" name="product_id" value="{{ $value->id }}">
                            <input type="hidden" name="product_quantity" value="1">
                            <button class="btn btn-primary icon" type="submit">  <i class="fa fa-shopping-cart"></i>
                            </button>
                            <!-- <button class="btn btn-primary cart-btn" type="button">Add to cart</button> -->
                          </form>
                        </li>
                        <li class="lnk wishlist">
                          <a class="add-to-cart" href="detail.html" title="Wishlist">
                          <i class="icon fa fa-heart"></i>
                          </a>
                        </li>
                        <li class="lnk">
                          <a class="add-to-cart" href="detail.html" title="Compare">
                          <i class="fa fa-signal" aria-hidden="true"></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <!-- /.cart -->
                </div>
                <!-- /.product -->
              </div>
              <!-- /.products -->
            </div>
            @endforeach
          </div>
          <!-- /.home-owl-carousel -->
        </div>
        <!-- /.product-slider -->
      </div>
      @foreach( App\Models\Backend\Category::orderBy('name','asc')->where('is_featured',1)->get() as $featured )
      <div class="tab-pane" id="{{ $featured->slug }}">
        <div class="product-slider">
          <div class="owl-carousel home-owl-carousel custom-carousel owl-theme">
              <div class="item item-carousel">
                  <div class="products">
                  @foreach( App\Models\Backend\Product::orderBy('title','asc')->where('cat_id', $featured->id )->get() as $value )
                <div class="product">
                  <div class="product-image">
                    <div class="image">
                      <a href="{{ route('product.show', $value->slug ) }}">
                      @if( !is_null( $value->image ) )
                      <img  src="{{ asset('Backend/img/Product_Primary_image' ) }}/{{ $value->image }}" alt="">
                      @else
                      <img  src="{{ asset('Backend/img/Product_Primary_image/no_image.png' ) }}" alt="">
                      @endif
                      </a>
                    </div>
                    <!-- /.image -->
                    @if($value->is_featured == 0)
                    <div class="tag sale"><span>Sale</span></div>
                    @else
                    @if($value->product_type == 0)
                    <div class="tag new"><span>NEW</span></div>
                    @else($value->product_type == 1)
                    <div class="tag hot"><span>OLD</span></div>
                    @endif
                    @endif
                  </div>
                  <!-- /.product-image -->
                  <div class="product-info text-left">
                    <h3 class="name"><a href="{{ route('product.show', $value->slug ) }}">{{ $value->title }}</a></h3>
                    <div class="rating rateit-small"></div>
                    <div class="description"></div>
                    @if( !is_null($value->offer_price) )
                    <div class="product-price">
                      <span class="price">৳ {{ $value->reguler_price }} BDT</span>
                      <span class="price-before-discount">৳ {{ $value->offer_price }} BDT</span>
                    </div>
                    @else
                    <div class="product-price">
                      <span class="price">৳ {{ $value->reguler_price }} BDT</span>
                    </div>
                    @endif
                    <!-- /.product-price -->
                  </div>
                  <!-- /.product-info -->
                  <div class="cart clearfix animate-effect">
                    <div class="action">
                      <ul class="list-unstyled">
                        <li class="add-cart-button btn-group">
                          <form action="{{ route('cart.store') }}" method="POST">
                            @csrf
                            <input type="hidden" name="product_id" value="{{ $value->id }}">
                            <input type="hidden" name="product_quantity" value="1">
                            <button class="btn btn-primary icon" type="submit">  <i class="fa fa-shopping-cart"></i>
                            </button>
                            <!-- <button class="btn btn-primary cart-btn" type="button">Add to cart</button> -->
                          </form>
                        </li>
                        <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                        <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                      </ul>
                    </div>
                  </div>
                  <!-- /.cart -->
                </div>
                @endforeach
                <!-- /.product -->
              </div>
              <!-- /.products -->
            </div>
          </div>
          <!-- /.home-owl-carousel -->
        </div>
        <!-- /.product-slider -->
      </div>
      @endforeach
    </div>
  </div>


  <div class="wide-banners wow fadeInUp outer-bottom-xs">
    <div class="row">
      @foreach( $home_slider as $slider )
      <div class="col-md-6 col-sm-6">
        <div class="wide-banner cnt-strip">
          <div class="image"> <img class="img-responsive" src="{{ asset('Backend/img/slider/') }}/{{ $slider->image }}" alt=""> </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>
  <!-- ============================================== WIDE PRODUCTS : END ============================================== -->
  <!-- ============================================== FEATURED PRODUCTS ============================================== -->
  <section class="section featured-product wow fadeInUp">
    <h3 class="section-title">Featured products</h3>
    <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">
      @foreach( $featureditems as $value)
      <div class="item item-carousel">
        <div class="products">
          <div class="product">
            <div class="product-image">
              <div class="image">
                <a href="{{ route('product.show', $value->slug ) }}">
                @if( !is_null( $value->image ) )
                <img  src="{{ asset('Backend/img/Product_Primary_image' ) }}/{{ $value->image }}" alt="">
                @else
                <img  src="{{ asset('Backend/img/Product_Primary_image/no_image.png' ) }}" alt="">
                @endif
                </a>
              </div>
              <!-- /.image -->
              @if($value->is_featured == 0)
              <div class="tag sale"><span>Sale</span></div>
              @else
              @if($value->product_type == 0)
              <div class="tag new"><span>NEW</span></div>
              @else($value->product_type == 1)
              <div class="tag hot"><span>OLD</span></div>
              @endif
              @endif
            </div>
            <!-- /.product-image -->
            <div class="product-info text-left">
              <h3 class="name"><a href="{{ route('product.show', $value->slug ) }}">{{ $value->title }}</a></h3>
              <div class="rating rateit-small"></div>
              <div class="description"></div>
              @if( !is_null($value->offer_price) )
              <div class="product-price">
                <span class="price">৳ {{ $value->reguler_price }} BDT</span>
                <span class="price-before-discount">৳ {{ $value->offer_price }} BDT</span>
              </div>
              @else
              <div class="product-price">
                <span class="price">৳ {{ $value->reguler_price }} BDT</span>
              </div>
              @endif
              <!-- /.product-price -->
            </div>
            <!-- /.product-info -->
            <div class="cart clearfix animate-effect">
              <div class="action">
                <ul class="list-unstyled">
                  <li class="add-cart-button btn-group">
                    <form action="{{ route('cart.store') }}" method="POST">
                      @csrf
                      <input type="hidden" name="product_id" value="{{ $value->id }}">
                      <input type="hidden" name="product_quantity" value="1">
                      <button class="btn btn-primary icon" type="submit">  <i class="fa fa-shopping-cart"></i>
                      </button>
                      <!-- <button class="btn btn-primary cart-btn" type="button">Add to cart</button> -->
                    </form>
                  </li>
                  <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                  <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                </ul>
              </div>
            </div>
            <!-- /.cart -->
          </div>
          <!-- /.product -->
        </div>
        <!-- /.products -->
      </div>
      @endforeach
    </div>
    <!-- /.home-owl-carousel -->
  </section>
  <!-- /.section -->
  <!-- ============================================== FEATURED PRODUCTS : END ============================================== -->
  <!-- ============================================== WIDE PRODUCTS ============================================== -->
  <div class="wide-banners wow fadeInUp outer-bottom-xs">
    <div class="row">
      {{-- @foreach( $slider as $slider )
      <div class="item" style="background-image: url({{ asset('Backend/img/slider/') }}/{{ $slider->image }});">
        <div class="container-fluid">
          <div class="caption bg-color vertical-center text-left">
            <div class="slider-header fadeInDown-1">{{ $slider->title }}</div>
            <div class="big-text fadeInDown-1">{{ $slider->top_text }}</div>
            <div class="excerpt fadeInDown-2 hidden-xs"> <span>{{ $slider->subtitle }}</span> </div>
            <div class="button-holder fadeInDown-3"> <a href="{{ $slider->button_text_url }}" class="btn-lg btn btn-uppercase btn-primary shop-now-button">{{ $slider->button_text }}</a> </div>
          </div>
        </div>
      </div>
      @endforeach --}}
      <div class="col-md-12">
        @foreach( $sub_slide as $slider )
        <div class="wide-banner cnt-strip">
          <div class="image"> <img class="img-responsive" src="{{ asset('Backend/img/slider/') }}/{{ $slider->image }}" alt=""> </div>
          <div class="strip strip-text">
            <div class="strip-inner">
              <h2 class="text-right">{{ $slider->title }}<br>
                <span class="shopping-needs">{{ $slider->subtitle }}</span>
              </h2>
            </div>
          </div>
        </div>
        @endforeach
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.wide-banners -->
  <!-- ============================================== WIDE PRODUCTS : END ============================================== -->
  <!-- ============================================== BEST SELLER ============================================== -->
  <div class="best-deal wow fadeInUp outer-bottom-xs">
    <h3 class="section-title">Best seller</h3>
    <div class="sidebar-widget-body outer-top-xs">
      <div class="owl-carousel best-seller custom-carousel owl-theme outer-top-xs">
        <div class="item">
          <div class="products best-product">
            <div class="product">
              <div class="product-micro">
                <div class="row product-micro-row">
                  <div class="col col-xs-5">
                    <div class="product-image">
                      <div class="image"> <a href="#"> <img src="{{ asset('Frontend/assets/images/products/p20.jpg') }}" alt=""> </a> </div>
                      <!-- /.image -->
                    </div>
                    <!-- /.product-image -->
                  </div>
                  <!-- /.col -->
                  <div class="col2 col-xs-7">
                    <div class="product-info">
                      <h3 class="name"><a href="#">Floral Print Buttoned</a></h3>
                      <div class="rating rateit-small"></div>
                      <div class="product-price"> <span class="price"> $450.99 </span> </div>
                      <!-- /.product-price -->
                    </div>
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.product-micro-row -->
              </div>
              <!-- /.product-micro -->
            </div>
            <div class="product">
              <div class="product-micro">
                <div class="row product-micro-row">
                  <div class="col col-xs-5">
                    <div class="product-image">
                      <div class="image"> <a href="#"> <img src="{{ asset('Frontend/assets/images/products/p21.jpg') }}" alt=""> </a> </div>
                      <!-- /.image -->
                    </div>
                    <!-- /.product-image -->
                  </div>
                  <!-- /.col -->
                  <div class="col2 col-xs-7">
                    <div class="product-info">
                      <h3 class="name"><a href="#">Floral Print Buttoned</a></h3>
                      <div class="rating rateit-small"></div>
                      <div class="product-price"> <span class="price"> $450.99 </span> </div>
                      <!-- /.product-price -->
                    </div>
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.product-micro-row -->
              </div>
              <!-- /.product-micro -->
            </div>
          </div>
        </div>
        <div class="item">
          <div class="products best-product">
            <div class="product">
              <div class="product-micro">
                <div class="row product-micro-row">
                  <div class="col col-xs-5">
                    <div class="product-image">
                      <div class="image"> <a href="#"> <img src="{{ asset('Frontend/assets/images/products/p22.jpg') }}" alt=""> </a> </div>
                      <!-- /.image -->
                    </div>
                    <!-- /.product-image -->
                  </div>
                  <!-- /.col -->
                  <div class="col2 col-xs-7">
                    <div class="product-info">
                      <h3 class="name"><a href="#">Floral Print Buttoned</a></h3>
                      <div class="rating rateit-small"></div>
                      <div class="product-price"> <span class="price"> $450.99 </span> </div>
                      <!-- /.product-price -->
                    </div>
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.product-micro-row -->
              </div>
              <!-- /.product-micro -->
            </div>
            <div class="product">
              <div class="product-micro">
                <div class="row product-micro-row">
                  <div class="col col-xs-5">
                    <div class="product-image">
                      <div class="image"> <a href="#"> <img src="{{ asset('Frontend/assets/images/products/p23.jpg') }}" alt=""> </a> </div>
                      <!-- /.image -->
                    </div>
                    <!-- /.product-image -->
                  </div>
                  <!-- /.col -->
                  <div class="col2 col-xs-7">
                    <div class="product-info">
                      <h3 class="name"><a href="#">Floral Print Buttoned</a></h3>
                      <div class="rating rateit-small"></div>
                      <div class="product-price"> <span class="price"> $450.99 </span> </div>
                      <!-- /.product-price -->
                    </div>
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.product-micro-row -->
              </div>
              <!-- /.product-micro -->
            </div>
          </div>
        </div>
        <div class="item">
          <div class="products best-product">
            <div class="product">
              <div class="product-micro">
                <div class="row product-micro-row">
                  <div class="col col-xs-5">
                    <div class="product-image">
                      <div class="image"> <a href="#"> <img src="{{ asset('Frontend/assets/images/products/p24.jpg') }}" alt=""> </a> </div>
                      <!-- /.image -->
                    </div>
                    <!-- /.product-image -->
                  </div>
                  <!-- /.col -->
                  <div class="col2 col-xs-7">
                    <div class="product-info">
                      <h3 class="name"><a href="#">Floral Print Buttoned</a></h3>
                      <div class="rating rateit-small"></div>
                      <div class="product-price"> <span class="price"> $450.99 </span> </div>
                      <!-- /.product-price -->
                    </div>
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.product-micro-row -->
              </div>
              <!-- /.product-micro -->
            </div>
            <div class="product">
              <div class="product-micro">
                <div class="row product-micro-row">
                  <div class="col col-xs-5">
                    <div class="product-image">
                      <div class="image"> <a href="#"> <img src="{{ asset('Frontend/assets/images/products/p25.jpg') }}" alt=""> </a> </div>
                      <!-- /.image -->
                    </div>
                    <!-- /.product-image -->
                  </div>
                  <!-- /.col -->
                  <div class="col2 col-xs-7">
                    <div class="product-info">
                      <h3 class="name"><a href="#">Floral Print Buttoned</a></h3>
                      <div class="rating rateit-small"></div>
                      <div class="product-price"> <span class="price"> $450.99 </span> </div>
                      <!-- /.product-price -->
                    </div>
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.product-micro-row -->
              </div>
              <!-- /.product-micro -->
            </div>
          </div>
        </div>
        <div class="item">
          <div class="products best-product">
            <div class="product">
              <div class="product-micro">
                <div class="row product-micro-row">
                  <div class="col col-xs-5">
                    <div class="product-image">
                      <div class="image"> <a href="#"> <img src="{{ asset('Frontend/assets/images/products/p26.jpg') }}" alt=""> </a> </div>
                      <!-- /.image -->
                    </div>
                    <!-- /.product-image -->
                  </div>
                  <!-- /.col -->
                  <div class="col2 col-xs-7">
                    <div class="product-info">
                      <h3 class="name"><a href="#">Floral Print Buttoned</a></h3>
                      <div class="rating rateit-small"></div>
                      <div class="product-price"> <span class="price"> $450.99 </span> </div>
                      <!-- /.product-price -->
                    </div>
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.product-micro-row -->
              </div>
              <!-- /.product-micro -->
            </div>
            <div class="product">
              <div class="product-micro">
                <div class="row product-micro-row">
                  <div class="col col-xs-5">
                    <div class="product-image">
                      <div class="image"> <a href="#"> <img src="{{ asset('Frontend/assets/images/products/p27.jpg') }}" alt=""> </a> </div>
                      <!-- /.image -->
                    </div>
                    <!-- /.product-image -->
                  </div>
                  <!-- /.col -->
                  <div class="col2 col-xs-7">
                    <div class="product-info">
                      <h3 class="name"><a href="#">Floral Print Buttoned</a></h3>
                      <div class="rating rateit-small"></div>
                      <div class="product-price"> <span class="price"> $450.99 </span> </div>
                      <!-- /.product-price -->
                    </div>
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.product-micro-row -->
              </div>
              <!-- /.product-micro -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /.sidebar-widget-body -->
  </div>
  <!-- /.sidebar-widget -->
  <!-- ============================================== BEST SELLER : END ============================================== -->
  <!-- ============================================== BLOG SLIDER ============================================== -->
  {{--
  <section class="section latest-blog outer-bottom-vs wow fadeInUp">
    <h3 class="section-title">latest form blog</h3>
    <div class="blog-slider-container outer-top-xs">
      <div class="owl-carousel blog-slider custom-carousel">
        <div class="item">
          <div class="blog-post">
            <div class="blog-post-image">
              <div class="image"> <a href="blog.html"><img src="{{ asset('Frontend/assets/images/blog-post/post1.jpg') }}" alt=""></a> </div>
            </div>
            <!-- /.blog-post-image -->
            <div class="blog-post-info text-left">
              <h3 class="name"><a href="#">Voluptatem accusantium doloremque laudantium</a></h3>
              <span class="info">By Jone Doe &nbsp;|&nbsp; 21 March 2016 </span>
              <p class="text">Sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
              <a href="#" class="lnk btn btn-primary">Read more</a>
            </div>
            <!-- /.blog-post-info -->
          </div>
          <!-- /.blog-post -->
        </div>
        <!-- /.item -->
        <div class="item">
          <div class="blog-post">
            <div class="blog-post-image">
              <div class="image"> <a href="blog.html"><img src="{{ asset('Frontend/assets/images/blog-post/post2.jpg') }}" alt=""></a> </div>
            </div>
            <!-- /.blog-post-image -->
            <div class="blog-post-info text-left">
              <h3 class="name"><a href="#">Dolorem eum fugiat quo voluptas nulla pariatur</a></h3>
              <span class="info">By Saraha Smith &nbsp;|&nbsp; 21 March 2016 </span>
              <p class="text">Sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
              <a href="#" class="lnk btn btn-primary">Read more</a>
            </div>
            <!-- /.blog-post-info -->
          </div>
          <!-- /.blog-post -->
        </div>
        <!-- /.item -->
        <!-- /.item -->
        <div class="item">
          <div class="blog-post">
            <div class="blog-post-image">
              <div class="image"> <a href="blog.html"><img src="{{ asset('Frontend/assets/images/blog-post/post1.jpg') }}" alt=""></a> </div>
            </div>
            <!-- /.blog-post-image -->
            <div class="blog-post-info text-left">
              <h3 class="name"><a href="#">Dolorem eum fugiat quo voluptas nulla pariatur</a></h3>
              <span class="info">By Saraha Smith &nbsp;|&nbsp; 21 March 2016 </span>
              <p class="text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium</p>
              <a href="#" class="lnk btn btn-primary">Read more</a>
            </div>
            <!-- /.blog-post-info -->
          </div>
          <!-- /.blog-post -->
        </div>
        <!-- /.item -->
        <div class="item">
          <div class="blog-post">
            <div class="blog-post-image">
              <div class="image"> <a href="blog.html"><img src="{{ asset('Frontend/assets/images/blog-post/post2.jpg') }}" alt=""></a> </div>
            </div>
            <!-- /.blog-post-image -->
            <div class="blog-post-info text-left">
              <h3 class="name"><a href="#">Dolorem eum fugiat quo voluptas nulla pariatur</a></h3>
              <span class="info">By Saraha Smith &nbsp;|&nbsp; 21 March 2016 </span>
              <p class="text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium</p>
              <a href="#" class="lnk btn btn-primary">Read more</a>
            </div>
            <!-- /.blog-post-info -->
          </div>
          <!-- /.blog-post -->
        </div>
        <!-- /.item -->
        <div class="item">
          <div class="blog-post">
            <div class="blog-post-image">
              <div class="image"> <a href="blog.html"><img src="{{ asset('Frontend/assets/images/blog-post/post1.jpg') }}" alt=""></a> </div>
            </div>
            <!-- /.blog-post-image -->
            <div class="blog-post-info text-left">
              <h3 class="name"><a href="#">Dolorem eum fugiat quo voluptas nulla pariatur</a></h3>
              <span class="info">By Saraha Smith &nbsp;|&nbsp; 21 March 2016 </span>
              <p class="text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium</p>
              <a href="#" class="lnk btn btn-primary">Read more</a>
            </div>
            <!-- /.blog-post-info -->
          </div>
          <!-- /.blog-post -->
        </div>
        <!-- /.item -->
      </div>
      <!-- /.owl-carousel -->
    </div>
    <!-- /.blog-slider-container -->
  </section>
  --}}
  <!-- /.section -->
  <!-- ============================================== BLOG SLIDER : END ============================================== -->
  <!-- ============================================== FEATURED PRODUCTS ============================================== -->
  <section class="section wow fadeInUp new-arriavls">
    <h3 class="section-title">New Arrivals</h3>
    <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs">
      @foreach( $newarraivals as $value)
      <div class="item item-carousel">
        <div class="products">
          <div class="product">
            <div class="product-image">
              <div class="image">
                <a href="{{ route('product.show', $value->slug ) }}">
                @if( !is_null( $value->image ) )
                <img  src="{{ asset('Backend/img/Product_Primary_image' ) }}/{{ $value->image }}" alt="">
                @else
                <img  src="{{ asset('Backend/img/Product_Primary_image/no_image.png' ) }}" alt="">
                @endif
                </a>
              </div>
              <!-- /.image -->
              @if($value->is_featured == 0)
              <div class="tag sale"><span>Sale</span></div>
              @else
              @if($value->product_type == 0)
              <div class="tag new"><span>NEW</span></div>
              @else($value->product_type == 1)
              <div class="tag hot"><span>OLD</span></div>
              @endif
              @endif
            </div>
            <!-- /.product-image -->
            <div class="product-info text-left">
              <h3 class="name"><a href="{{ route('product.show', $value->slug ) }}">{{ $value->title }}</a></h3>
              <div class="rating rateit-small"></div>
              <div class="description"></div>
              @if( !is_null($value->offer_price) )
              <div class="product-price">
                <span class="price">৳ {{ $value->reguler_price }} BDT</span>
                <span class="price-before-discount">৳ {{ $value->offer_price }} BDT</span>
              </div>
              @else
              <div class="product-price">
                <span class="price">৳ {{ $value->reguler_price }} BDT</span>
              </div>
              @endif
              <!-- /.product-price -->
            </div>
            <!-- /.product-info -->
            <div class="cart clearfix animate-effect">
              <div class="action">
                <ul class="list-unstyled">
                  <li class="add-cart-button btn-group">
                    <form action="{{ route('cart.store') }}" method="POST">
                      @csrf
                      <input type="hidden" name="product_id" value="{{ $value->id }}">
                      <input type="hidden" name="product_quantity" value="1">
                      <button class="btn btn-primary icon" type="submit">  <i class="fa fa-shopping-cart"></i>
                      </button>
                      <!-- <button class="btn btn-primary cart-btn" type="button">Add to cart</button> -->
                    </form>
                  </li>
                  <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                  <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal" aria-hidden="true"></i> </a> </li>
                </ul>
              </div>
            </div>
            <!-- /.cart -->
          </div>
          <!-- /.product -->
        </div>
        <!-- /.products -->
      </div>
      @endforeach
    </div>
    <!-- /.home-owl-carousel -->
  </section>
  <!-- /.section -->
  <!-- ============================================== FEATURED PRODUCTS : END ============================================== -->
</div>
@endsection
