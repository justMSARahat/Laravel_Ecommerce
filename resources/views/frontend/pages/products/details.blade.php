@extends('frontend.layout.template-details')
@section('body')
<div class="col-md-9">
  <div class="detail-block">
    <div class="row  wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
      <div class="col-xs-12 col-sm-6 col-md-5 gallery-holder">
        <div class="product-item-holder size-big single-product-gallery small-gallery">
          <div id="owl-single-product" class="owl-carousel owl-theme" style="opacity: 1; display: block;">
            <div class="owl-wrapper-outer">
              <div class="owl-wrapper" style="width: 5742px; left: 0px; display: block; transition: all 0ms ease 0s; transform: translate3d(0px, 0px, 0px);">

                <!-- Product Multiple Image -->
                <div class="owl-item" style="width: 319px;">

                  <div class="single-product-gallery-item" id="slide1">
                    @if( !is_null( $value->image ) )
                    <a data-lightbox="image-1" data-title="Gallery" href="assets/images/products/p8.jpg">
                      <img class="img-responsive" alt="Product Image" src="{{ asset('Backend/img/Product_Primary_image') }}/{{ $value->image }}">
                    </a>
                    @else
                      <a data-lightbox="image-1" data-title="Gallery" href="assets/images/products/p8.jpg">
                      <img class="img-responsive" alt="Product Image" src="{{ asset('Backend/img/Product_Primary_image/no_image.png') }}">
                    </a>
                    @endif
                  </div>

                </div>
              </div>
            </div>
            <!-- /.single-product-gallery-item -->
            <!-- /.single-product-gallery-item -->
            <!-- /.single-product-gallery-item -->
            <!-- /.single-product-gallery-item -->
            <!-- /.single-product-gallery-item -->
            <!-- /.single-product-gallery-item -->
            <!-- /.single-product-gallery-item -->
            <!-- /.single-product-gallery-item -->
            <!-- /.single-product-gallery-item -->
            <div class="owl-controls clickable">
              <div class="owl-pagination">
                <div class="owl-page active"><span class=""></span></div>
                <div class="owl-page"><span class=""></span></div>
                <div class="owl-page"><span class=""></span></div>
                <div class="owl-page"><span class=""></span></div>
                <div class="owl-page"><span class=""></span></div>
                <div class="owl-page"><span class=""></span></div>
                <div class="owl-page"><span class=""></span></div>
                <div class="owl-page"><span class=""></span></div>
                <div class="owl-page"><span class=""></span></div>
              </div>
            </div>
          </div>

          <!-- /.single-product-slider -->
          <div class="single-product-gallery-thumbs gallery-thumbs">
            <div id="owl-single-product-thumbnails" class="owl-carousel owl-theme" style="opacity: 1; display: block;">
              <div class="owl-wrapper-outer">
                <div class="owl-wrapper" style="width: 1440px; left: 0px; display: block; transition: all 0ms ease 0s; transform: translate3d(0px, 0px, 0px);">
                  <div class="owl-item" style="width: 80px;">
                    <div class="item">
                      <a class="horizontal-thumb active" data-target="#owl-single-product" data-slide="1" href="#slide1">
                      <img class="img-responsive" width="85" alt="" src="assets/images/products/p17.jpg">
                      </a>
                    </div>
                  </div>
                  <div class="owl-item" style="width: 80px;">
                    <div class="item">
                      <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="2" href="#slide2">
                      <img class="img-responsive" width="85" alt="" src="{{ asset('Frontend/assets/images/products/p18.jpg') }}">
                      </a>
                    </div>
                  </div>
                  <div class="owl-item" style="width: 80px;">
                    <div class="item">
                      <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="3" href="#slide3">
                      <img class="img-responsive" width="85" alt="" src="{{ asset('Frontend/assets/images/products/p19.jpg') }}">
                      </a>
                    </div>
                  </div>
                  <div class="owl-item" style="width: 80px;">
                    <div class="item">
                      <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="4" href="#slide4">
                      <img class="img-responsive" width="85" alt="" src="{{ asset('Frontend/assets/images/products/p20.jpg') }}">
                      </a>
                    </div>
                  </div>
                  <div class="owl-item" style="width: 80px;">
                    <div class="item">
                      <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="5" href="#slide5">
                      <img class="img-responsive" width="85" alt="" src="{{ asset('Frontend/assets/images/products/p21.jpg') }}">
                      </a>
                    </div>
                  </div>
                  <div class="owl-item" style="width: 80px;">
                    <div class="item">
                      <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="6" href="#slide6">
                      <img class="img-responsive" width="85" alt="" src="{{ asset('Frontend/assets/images/products/p22.jpg') }}">
                      </a>
                    </div>
                  </div>
                  <div class="owl-item" style="width: 80px;">
                    <div class="item">
                      <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="7" href="#slide7">
                      <img class="img-responsive" width="85" alt="" src="{{ asset('Frontend/assets/images/products/p23.jpg') }}">
                      </a>
                    </div>
                  </div>
                  <div class="owl-item" style="width: 80px;">
                    <div class="item">
                      <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="8" href="#slide8">
                      <img class="img-responsive" width="85" alt="" src="{{ asset('Frontend/assets/images/products/p24.jpg') }}">
                      </a>
                    </div>
                  </div>
                  <div class="owl-item" style="width: 80px;">
                    <div class="item">
                      <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="9" href="#slide9">
                      <img class="img-responsive" width="85" alt="" src="{{ asset('Frontend/assets/images/products/p25.jpg') }}">
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="owl-controls clickable">
                <div class="owl-pagination">
                  <div class="owl-page active"><span class=""></span></div>
                  <div class="owl-page"><span class=""></span></div>
                  <div class="owl-page"><span class=""></span></div>
                </div>
              </div>
            </div>
            <!-- /#owl-single-product-thumbnails -->
          </div>
          <!-- /.gallery-thumbs -->
        </div>
        <!-- /.single-product-gallery -->
      </div>

      <!-- /.gallery-holder -->
      <div class="col-sm-6 col-md-7 product-info-block">
        <div class="product-info">
          <h1 class="name">{{ $value->title }}</h1>
          <div class="rating-reviews m-t-20">
            <div class="row">
              <div class="col-sm-3">
                <div class="rating rateit-small rateit">
                  <button id="rateit-reset-5" data-role="none" class="rateit-reset" aria-label="reset rating" aria-controls="rateit-range-5" style="display: none;"></button>
                  <div id="rateit-range-5" class="rateit-range" tabindex="0" role="slider" aria-label="rating" aria-owns="rateit-reset-5" aria-valuemin="0" aria-valuemax="5" aria-valuenow="4" aria-readonly="true" style="width: 70px; height: 14px;">
                    <div class="rateit-selected" style="height: 14px; width: 56px;"></div>
                    <div class="rateit-hover" style="height:14px"></div>
                  </div>
                </div>
              </div>
              <div class="col-sm-8">
                <div class="reviews">
                  <a href="#" class="lnk">(13 Reviews)</a>
                </div>
              </div>
            </div>
            <!-- /.row -->
          </div>
          <!-- /.rating-reviews -->
          <div class="stock-container info-container m-t-10">
            <div class="row">
              <div class="col-sm-2">
                <div class="stock-box">
                  <span class="label">Availability :</span>
                </div>
              </div>
              <div class="col-sm-9">
                <div class="stock-box">
                  @if( $value->quantity != 0 )
                    <span class="value">{{ $value->quantity }} PC's In Stock</span>
                  @else
                    <span class="value">Out of Stock</span>
                  @endif
                </div>
              </div>
            </div>
            <!-- /.row -->
          </div>
          <!-- /.stock-container -->
          <div class="description-container m-t-20">
            <html>
                    <body>

                        {{ $value->short_desc }}
                    </body>

            </html>

          </div>
          <!-- /.description-container -->
          <div class="price-container info-container m-t-20">
            <div class="row">
              <div class="col-sm-6">
                @if( !is_null( $value->offer_price ) )
                  <div class="price-box">
                    <span class="price">৳ {{ $value->offer_price }} BDT</span>
                    <span class="price-strike">৳ {{ $value->reguler_price }} BDT</span>
                  </div>
                @else
                  <div class="price-box">
                    <span class="price">৳ {{ $value->reguler_price }} BDT</span>
                  </div>
                @endif
              </div>
              <div class="col-sm-6">
                <div class="favorite-button m-t-10">
                  <a class="btn btn-primary" data-toggle="tooltip" data-placement="right" title="" href="#" data-original-title="Wishlist">
                  <i class="fa fa-heart"></i>
                  </a>
                  <a class="btn btn-primary" data-toggle="tooltip" data-placement="right" title="" href="#" data-original-title="Add to Compare">
                  <i class="fa fa-signal"></i>
                  </a>
                  <a class="btn btn-primary" data-toggle="tooltip" data-placement="right" title="" href="#" data-original-title="E-mail">
                  <i class="fa fa-envelope"></i>
                  </a>
                </div>
              </div>
            </div>
            <!-- /.row -->
          </div>
          <!-- /.price-container -->
          <div class="quantity-container info-container">
            <div class="row">
              <div class="col-sm-2">
                <span class="label">Qty :</span>
              </div>

            <form action="{{ route('cart.store') }}" method="POST">
              @csrf
              <div class="col-sm-2">
                <div class="cart-quantity">
                  <div class="quant-input">
                    <input type="number" value="1" class="form-control" name="product_quantity">
                  </div>
                </div>
              </div>
              <div class="col-sm-7">
                <input type="hidden" name="product_id" value="{{ $value->id }}">
                <!-- <input type="hidden" name="product_quantity" value="1"> -->
                <button type="submit" class="btn btn-primary"><i class="fa fa-shopping-cart inner-right-vs"></i> ADD TO CART</button>
              </div>
            </form>

            </div>
            <!-- /.row -->
          </div>
          <!-- /.quantity-container -->
        </div>
        <!-- /.product-info -->
      </div>
      <!-- /.col-sm-7 -->
    </div>
    <!-- /.row -->
  </div>
  <div class="product-tabs inner-bottom-xs  wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
    <div class="row">
      <div class="col-sm-3">
        <ul id="product-tabs" class="nav nav-tabs nav-tab-cell">
          <li class=""><a data-toggle="tab" href="#description">DESCRIPTION</a></li>
          <li class=""><a data-toggle="tab" href="#review">REVIEW</a></li>
          <li class="active"><a data-toggle="tab" href="#tags">TAGS</a></li>
        </ul>
        <!-- /.nav-tabs #product-tabs -->
      </div>
      <div class="col-sm-9">
        <div class="tab-content">
          <div id="description" class="tab-pane">
            <div class="product-tab">
              <p class="text">{{ $value->desc }}</p>
            </div>
          </div>
          <!-- /.tab-pane -->
          <div id="review" class="tab-pane">
            <div class="product-tab">
              <div class="product-reviews">
                <h4 class="title">Customer Reviews</h4>
                <div class="reviews">
                  <div class="review">
                    <div class="review-title"><span class="summary">We love this product</span><span class="date"><i class="fa fa-calendar"></i><span>1 days ago</span></span></div>
                    <div class="text">"Lorem ipsum dolor sit amet, consectetur adipiscing elit.Aliquam suscipit."</div>
                  </div>
                </div>
                <!-- /.reviews -->
              </div>
              <!-- /.product-reviews -->
              <div class="product-add-review">
                <h4 class="title">Write your own review</h4>
                <div class="review-table">
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th class="cell-label">&nbsp;</th>
                          <th>1 star</th>
                          <th>2 stars</th>
                          <th>3 stars</th>
                          <th>4 stars</th>
                          <th>5 stars</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="cell-label">Quality</td>
                          <td><input type="radio" name="quality" class="radio" value="1"></td>
                          <td><input type="radio" name="quality" class="radio" value="2"></td>
                          <td><input type="radio" name="quality" class="radio" value="3"></td>
                          <td><input type="radio" name="quality" class="radio" value="4"></td>
                          <td><input type="radio" name="quality" class="radio" value="5"></td>
                        </tr>
                        <tr>
                          <td class="cell-label">Price</td>
                          <td><input type="radio" name="quality" class="radio" value="1"></td>
                          <td><input type="radio" name="quality" class="radio" value="2"></td>
                          <td><input type="radio" name="quality" class="radio" value="3"></td>
                          <td><input type="radio" name="quality" class="radio" value="4"></td>
                          <td><input type="radio" name="quality" class="radio" value="5"></td>
                        </tr>
                        <tr>
                          <td class="cell-label">Value</td>
                          <td><input type="radio" name="quality" class="radio" value="1"></td>
                          <td><input type="radio" name="quality" class="radio" value="2"></td>
                          <td><input type="radio" name="quality" class="radio" value="3"></td>
                          <td><input type="radio" name="quality" class="radio" value="4"></td>
                          <td><input type="radio" name="quality" class="radio" value="5"></td>
                        </tr>
                      </tbody>
                    </table>
                    <!-- /.table .table-bordered -->
                  </div>
                  <!-- /.table-responsive -->
                </div>
                <!-- /.review-table -->
                <div class="review-form">
                  <div class="form-container">
                    <form role="form" class="cnt-form">
                      <div class="row">
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label for="exampleInputName">Your Name <span class="astk">*</span></label>
                            <input type="text" class="form-control txt" id="exampleInputName" placeholder="">
                          </div>
                          <!-- /.form-group -->
                          <div class="form-group">
                            <label for="exampleInputSummary">Summary <span class="astk">*</span></label>
                            <input type="text" class="form-control txt" id="exampleInputSummary" placeholder="">
                          </div>
                          <!-- /.form-group -->
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="exampleInputReview">Review <span class="astk">*</span></label>
                            <textarea class="form-control txt txt-review" id="exampleInputReview" rows="4" placeholder=""></textarea>
                          </div>
                          <!-- /.form-group -->
                        </div>
                      </div>
                      <!-- /.row -->
                      <div class="action text-right">
                        <button class="btn btn-primary btn-upper">SUBMIT REVIEW</button>
                      </div>
                      <!-- /.action -->
                    </form>
                    <!-- /.cnt-form -->
                  </div>
                  <!-- /.form-container -->
                </div>
                <!-- /.review-form -->
              </div>
              <!-- /.product-add-review -->
            </div>
            <!-- /.product-tab -->
          </div>
          <!-- /.tab-pane -->
          <div id="tags" class="tab-pane active">
            <div class="product-tag">
              <h4 class="title">Product Tags</h4>
              <form role="form" class="form-inline form-cnt">
                <div class="form-container">
                  <div class="form-group">
                    <label for="exampleInputTag">Add Your Tags: </label>
                    <input type="email" id="exampleInputTag" class="form-control txt">
                  </div>
                  <button class="btn btn-upper btn-primary" type="submit">ADD TAGS</button>
                </div>
                <!-- /.form-container -->
              </form>
              <!-- /.form-cnt -->
              <form role="form" class="form-inline form-cnt">
                <div class="form-group">
                  <label>&nbsp;</label>
                  <span class="text col-md-offset-3">Use spaces to separate tags. Use single quotes (') for phrases.</span>
                </div>
              </form>
              <!-- /.form-cnt -->
            </div>
            <!-- /.product-tab -->
          </div>
          <!-- /.tab-pane -->
        </div>
        <!-- /.tab-content -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.product-tabs -->
  <!-- ============================================== UPSELL PRODUCTS ============================================== -->




  <section class="section wow fadeInUp new-arriavls">
    <h3 class="section-title">More For You</h3>
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
  <!-- ============================================== UPSELL PRODUCTS : END ============================================== -->
</div>
@endsection
