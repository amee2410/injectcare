@extends('Frontend.layouts.app')
@section('content')
   <!-- Start main-content -->
   <div class="main-content-area">

    <!-- Section: home Start -->
    <section class="page-title divider layer-overlay overlay-theme-colored2-9 section-typo-light bg-img-center" data-tm-bg-img="images/bg/bg1.jpg">
      <div class="container pt-50 pb-50">
        <!-- Section Content -->
        <div class="section-content">
          <div class="row">
            <div class="col-md-12 text-center">
              <h2 class="title text-white">Prouct Details</h2>
              <nav role="navigation" class="breadcrumb-trail breadcrumbs">
                <div class="breadcrumbs">
                  <span class="trail-item trail-begin">
                    <a href="#"><span>Home</span></a>
                  </span>
                  <span><i class="fa fa-angle-right"></i></span>
                  <span class="trail-item"><a href="#"><span>Pages</span></a></span>
                  <span><i class="fa fa-angle-right"></i></span>
                  <span class="trail-item trail-end">Prouct Details</span>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Section: home End -->


    <!-- Section: Shop -->
    <section>
      <div class="container">
        <div class="section-content">
          <div class="product-single">
            <div class="row">
              <div class="col-md-6">
                <div class="product-image-slider lightgallery-lightbox">
                  <div class="tm-owl-thumb-carousel" data-nav="true" data-slider-id="1">
                    <div data-thumb="images/shop/product.jpg">
                      <a class="lightgallery-trigger" data-exthumbimage="images/shop/product.jpg" data-src="images/shop/product.jpg" title="Product 1" href="images/shop/product.jpg"><img class="img-fullwidth" src="images/shop/product.jpg" alt="images"></a>
                    </div>
                    <div data-thumb="images/shop/product2.jpg">
                      <a class="lightgallery-trigger" data-exthumbimage="images/shop/product2.jpg" data-src="images/shop/product2.jpg" title="Product 2" href="images/shop/product2.jpg"><img class="img-fullwidth" src="images/shop/product2.jpg" alt="images"></a>
                    </div>
                    <div data-thumb="images/shop/product.jpg">
                      <a class="lightgallery-trigger" data-exthumbimage="images/shop/product.jpg" data-src="images/shop/product.jpg" title="Product 3" href="images/shop/product.jpg"><img class="img-fullwidth" src="images/shop/product.jpg" alt="images"></a>
                    </div>
                  </div>
                  <ul class="tm-owl-thumbs" data-slider-id="1">
                    <li class="tm-owl-thumb-item"><img src="images/shop/product.jpg" alt="images"></li>
                    <li class="tm-owl-thumb-item"><img src="images/shop/product2.jpg" alt="images"></li>
                    <li class="tm-owl-thumb-item"><img src="images/shop/product.jpg" alt="images"></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-6">
                <div class="product-summary">
                  <h2 class="product-title mt-0">Cordless Multi Screwdriver</h2>
                  <div class="product-rating">
                    <div class="star-rating" role="img" aria-label="Rated 5.00 out of 5"><span style="width:100%">Rated <strong class="rating">5.00</strong> out of 5 based on <span class="rating">1</span> customer rating</span></div>
                    <a href="#reviews" class="review-link" rel="nofollow">(<span class="count">1</span> customer review)</a>
                  </div>
                  <p class="price"><span class="amount"><span class="currency-symbol">£</span>42.00</span> – <span class="amount"><span class="currency-symbol">£</span>45.00</span></p>
                  <div class="short-description">
                    <p>It’s difficult to find examples of lorem ipsum in use before Letraset made it popular as a dummy text in the 1960s, although McClintock says he remembers coming across</p>
                    <p><strong>Size &amp; Fit</strong><br>
                    The model (height 6′) is perfect for you</p>
                    <p><strong>Material &amp; Care</strong><br>
                    100% Genuine<br>
                    Machine-wash</p>
                  </div>
                  <div class="product_meta">
                    <span class="sku_wrapper">SKU: <span class="sku" data-o_content="woo-hoodie">woo-hoodie</span></span>
                    <span class="posted_in">Category: <a href="http://pc1/kodesolution/wp/lovimselemenrtor/product-category/hoodies/" rel="tag">Hoodies</a></span>
                  </div>
                  <div class="btn-add-to-cart">
                    <div class="quantity">
                      <input class="minus" type="button" value="-">
                      <input type="number" id="quantity_5f0c6f4cb0b78" class="input-text qty text" step="1" min="1" max="" name="quantity" value="1" title="Qty" size="4" placeholder="" inputmode="numeric">
                      <input class="plus" type="button" value="+">
                    </div>
                    <a href="shop-cart.html" class="btn btn-theme-colored1 ml-10">Add to cart</a>
                  </div>
                </div>
              </div>
              <div class="col-md-12 mt-60">
                <div class="horizontal-tab product-tab">
                  <ul class="nav nav-tabs" id="nav-tab" role="tablist">
                    <li class="nav-item">
                      <button class="nav-link active" id="desc-tab" data-bs-toggle="tab" data-bs-target="#desc-content" role="tab" aria-controls="desc-content" aria-selected="true"><strong>Description</strong></button>
                    </li>
                    <li class="nav-item">
                      <button class="nav-link" id="addinfo-tab" data-bs-toggle="tab" data-bs-target="#addinfo-content" role="tab" aria-controls="addinfo-content" aria-selected="true"><strong>Additional Information</strong></button>
                    </li>
                    <li class="nav-item">
                      <button class="nav-link" id="reviews-tab" data-bs-toggle="tab" data-bs-target="#reviews-content" role="tab" aria-controls="reviews-content" aria-selected="true"><strong>Reviews</strong></button>
                    </li>
                  </ul>
                  <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active p-20" id="desc-content" role="tabpanel" aria-labelledby="desc-tab">
                      <p>One Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, iste, architecto ullam tenetur quia nemo ratione tempora consectetur quos minus voluptates nisi hic alias libero explicabo reiciendis sint ut quo nulla ipsa aliquid neque molestias et qui sunt. Odit, molestiae. One Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, iste, architecto ullam tenetur quia nemo ratione tempora consectetur quos minus voluptates nisi hic alias libero explicabo reiciendis sint ut quo nulla ipsa aliquid neque molestias et qui sunt. Odit, molestiae.</p>
                      <p>One Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat, iste, architecto ullam tenetur quia nemo ratione tempora consectetur quos minus voluptates nisi hic alias libero explicabo reiciendis sint ut quo nulla ipsa aliquid neque molestias et qui sunt. Odit, molestiae.</p>
                    </div>
                    <div class="tab-pane fade p-20" id="addinfo-content" role="tabpanel" aria-labelledby="addinfo-tab">
                      <table class="table table-striped">
                        <tbody>
                          <tr>
                            <th>Brand</th>
                            <td><p>Envato</p></td>
                          </tr>
                          <tr>
                            <th>Color</th>
                            <td><p>Black</p></td>
                          </tr>
                          <tr>
                            <th>Size</th>
                            <td><p>Large, Medium</p></td>
                          </tr>
                          <tr>
                            <th>Weight</th>
                            <td>27 kg</td>
                          </tr>
                          <tr>
                            <th>Dimensions</th>
                            <td>16 x 22 x 123 cm</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="tab-pane fade p-20" id="reviews-content" role="tabpanel" aria-labelledby="reviews-tab">
                      <ol class="product-reviews">
                        <li class="review">
                          <div class="d-flex">
                            <div class="flex-shrink-0"><img class="thumb img-circle mr-3" alt="images" src="images/shop/author.jpg" width="75"></div>
                            <div class="flex-grow-1 ps-3">
                              <ul class="review-meta list-inline">
                                <li>
                                  <div class="star-rating" role="img" aria-label="Rated 5 out of 5"><span style="width:100%">Rated <strong class="rating">5</strong> out of 5</span></div>
                                </li>
                                <li>
                                  <h5 class="review-heading"><span class="author">Tom Joe</span> <small>– Mar 15, 2021</small></h5>
                                </li>
                              </ul>
                              Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                            </div>
                          </div>
                        </li>
                        <li class="review">
                          <div class="d-flex">
                            <div class="flex-shrink-0"><img class="thumb img-circle mr-3" alt="images" src="images/shop/author.jpg" width="75"></div>
                            <div class="flex-grow-1 ps-3">
                              <ul class="review-meta list-inline">
                                <li>
                                  <div class="star-rating" role="img" aria-label="Rated 5 out of 5"><span style="width:100%">Rated <strong class="rating">5</strong> out of 5</span></div>
                                </li>
                                <li>
                                  <h5 class="review-heading"><span class="author">Tom Joe</span> <small>– Mar 15, 2021</small></h5>
                                </li>
                              </ul>
                              Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                            </div>
                          </div>
                        </li>
                      </ol>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12 mt-60">
              <h4 class="mb-30">Related Products</h4>
              <div class="tm-sc-gallery tm-sc-gallery-grid">

                <!-- Isotope Gallery Grid -->
                <div id="gallery-holder-618422" class="isotope-layout grid-4 gutter-15 clearfix lightgallery-lightbox">
                  <div class="isotope-layout-inner">
                    <!-- Isotope Item Start -->
                    <div class="isotope-item cat1 cat3">
                      <div class="isotope-item-inner">
                        <div class="product">
                          <div class="product-header">
                            <div class="thumb image-swap">
                              <a href="shop-product-details.html"><img src="images/shop/product.jpg" class="product-main-image img-responsive img-fullwidth" width="300" height="300" alt="product"></a>
                              <a href="shop-product-details.html"><img src="images/shop/product2.jpg" class="product-hover-image img-responsive img-fullwidth" alt="product"></a>
                            </div>
                            <div class="product-button-holder">
                              <ul class="shop-icons">
                                <li class="item"><a href="#" class="button btn-quickview" title="Product quick view"></a></li>
                                <li class="item"><a href="shop-cart.html" class="button tm-btn-add-to-cart">Add to cart</a></li>
                              </ul>
                            </div>
                          </div>
                          <div class="product-details">
                            <span class="product-categories"><a href="#" rel="tag">Music</a></span>
                            <h5 class="product-title"><a href="shop-product-details.html">Product Title</a></h5>
                            <span class="price">
                              <del><span class="amount"><span class="currency-symbol">£</span>18.00</span></del>
                              <ins><span class="amount"><span class="currency-symbol">£</span>16.00</span></ins>
                            </span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Isotope Item End -->
                    <!-- Isotope Item Start -->
                    <div class="isotope-item cat3">
                      <div class="isotope-item-inner">
                        <div class="product">
                          <div class="product-header">
                            <div class="thumb image-swap">
                              <a href="shop-product-details.html"><img src="images/shop/product.jpg" class="product-main-image img-responsive img-fullwidth" width="300" height="300" alt="product"></a>
                              <a href="shop-product-details.html"><img src="images/shop/product2.jpg" class="product-hover-image img-responsive img-fullwidth" alt="product"></a>
                            </div>
                            <div class="product-button-holder">
                              <ul class="shop-icons">
                                <li class="item"><a href="#" class="button btn-quickview" title="Product quick view"></a></li>
                                <li class="item"><a href="shop-cart.html" class="button tm-btn-add-to-cart">Add to cart</a></li>
                              </ul>
                            </div>
                          </div>
                          <div class="product-details">
                            <span class="product-categories"><a href="#" rel="tag">Music</a></span>
                            <h5 class="product-title"><a href="shop-product-details.html">Product Title</a></h5>
                            <span class="price">
                              <del><span class="amount"><span class="currency-symbol">£</span>18.00</span></del>
                              <ins><span class="amount"><span class="currency-symbol">£</span>16.00</span></ins>
                            </span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Isotope Item End -->
                    <!-- Isotope Item Start -->
                    <div class="isotope-item cat3">
                      <div class="isotope-item-inner">
                        <div class="product">
                          <div class="product-header">
                            <div class="thumb image-swap">
                              <a href="shop-product-details.html"><img src="images/shop/product.jpg" class="product-main-image img-responsive img-fullwidth" width="300" height="300" alt="product"></a>
                              <a href="shop-product-details.html"><img src="images/shop/product2.jpg" class="product-hover-image img-responsive img-fullwidth" alt="product"></a>
                            </div>
                            <div class="product-button-holder">
                              <ul class="shop-icons">
                                <li class="item"><a href="#" class="button btn-quickview" title="Product quick view"></a></li>
                                <li class="item"><a href="shop-cart.html" class="button tm-btn-add-to-cart">Add to cart</a></li>
                              </ul>
                            </div>
                          </div>
                          <div class="product-details">
                            <span class="product-categories"><a href="#" rel="tag">Music</a></span>
                            <h5 class="product-title"><a href="shop-product-details.html">Product Title</a></h5>
                            <span class="price">
                              <del><span class="amount"><span class="currency-symbol">£</span>18.00</span></del>
                              <ins><span class="amount"><span class="currency-symbol">£</span>16.00</span></ins>
                            </span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Isotope Item End -->
                    <!-- Isotope Item Start -->
                    <div class="isotope-item cat2 cat3">
                      <div class="isotope-item-inner">
                        <div class="product">
                          <div class="product-header">
                            <div class="thumb image-swap">
                              <a href="shop-product-details.html"><img src="images/shop/product.jpg" class="product-main-image img-responsive img-fullwidth" width="300" height="300" alt="product"></a>
                              <a href="shop-product-details.html"><img src="images/shop/product2.jpg" class="product-hover-image img-responsive img-fullwidth" alt="product"></a>
                            </div>
                            <div class="product-button-holder">
                              <ul class="shop-icons">
                                <li class="item"><a href="#" class="button btn-quickview" title="Product quick view"></a></li>
                                <li class="item"><a href="shop-cart.html" class="button tm-btn-add-to-cart">Add to cart</a></li>
                              </ul>
                            </div>
                          </div>
                          <div class="product-details">
                            <span class="product-categories"><a href="#" rel="tag">Music</a></span>
                            <h5 class="product-title"><a href="shop-product-details.html">Product Title</a></h5>
                            <span class="price">
                              <del><span class="amount"><span class="currency-symbol">£</span>18.00</span></del>
                              <ins><span class="amount"><span class="currency-symbol">£</span>16.00</span></ins>
                            </span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- Isotope Item End -->

                  </div>
                </div>
                <!-- End Isotope Gallery Grid -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- end main-content -->
@endsection
