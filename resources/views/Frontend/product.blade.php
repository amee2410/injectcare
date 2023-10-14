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
            <h2 class="title text-white">Products</h2>
            <nav role="navigation" class="breadcrumb-trail breadcrumbs">
              <div class="breadcrumbs">
                <span class="trail-item trail-begin">
                  <a href="{{url('index')}}"><span>Home</span></a>
                </span>
                <span><i class="fa fa-angle-right"></i></span>
                <span class="trail-item trail-end">Products</span>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Section: home End -->

  <!-- Section: Shop -->
  <section class="">
    <div class="container">
      <div class="section-content">
        <div class="row">
          <div class="col-md-9">
            <!-- Isotope Filter -->
            <div class="isotope-layout-filter filter-style-4 text-left cat-filter-default text-center" data-link-with="gallery-holder-618422">
              <a href="#" class="active" data-filter="*">All</a>
              @foreach($data1 as $category)
              <a href="#" class="" data-filter=".cat{{ $category->id }}">{{ $category->name }}</a>
              @endforeach
            </div>

            <!-- End Isotope Filter -->

            <!-- Isotope Gallery Grid -->
            <div id="gallery-holder-618422" class="isotope-layout grid-3 gutter-15 clearfix lightgallery-lightbox">
              <div class="isotope-layout-inner">
                <!-- Isotope Item Start -->
                <div class="isotope-item cat1 cat3">
                  <div class="isotope-item-inner">
                    <div class="product">
                      <div class="product-header">
                        <span class="onsale">Sale!</span>
                        <div class="thumb image-swap">
                          <a href="shop-product-details.html"><img src="images/shop/product.jpg" class="product-main-image img-responsive img-fullwidth" width="300" height="300" alt="product"></a>
                          <a href="shop-product-details.html"><img src="images/shop/product2.jpg" class="product-hover-image img-responsive img-fullwidth" alt="product"></a>
                        </div>
                       </div>
                      <div class="product-details">
                        <span class="product-categories"><a href="#" rel="tag">Music</a></span>
                        <h5 class="product-title"><a href="shop-product-details.html">Product Title</a></h5>
                        
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
                <!-- Isotope Item Start -->
                <div class="isotope-item cat2">
                  <div class="isotope-item-inner">
                    <div class="product">
                      <div class="product-header">
                        <span class="onsale">Sale!</span>
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
                <div class="isotope-item cat1">
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
          <div class="col-md-3">
            <div class="sidebar sidebar-right mt-sm-30">
              <div class="widget">
                <h5 class="widget-title widget-title-line-bottom line-bottom-theme-colored1">Search box</h5>
                <div class="split-nav-menu clearfix widget widget_search">
                  <form role="search" method="get" class="search-form" action="#">
                    <input type="search" class="form-control search-field" placeholder="Search …" value="" name="s">
                    <button type="submit" class="search-submit"><i class="fa fa-search"></i></button>
                  </form>
                </div>
              </div>
              <div class="widget">
                <h4 class="widget-title widget-title-line-bottom line-bottom-theme-colored1">Latest Products</h4>
                <ul class="product_list_widget">
                  <li>
                    <div class="product-left">
                      <a href="shop-product-details.html">
                        <img width="100" height="100" src="images/shop/product.jpg" class="thumbnail" alt="images">
                      </a>
                    </div>
                    <div class="product-right">
                      <a class="product-title" href="shop-product-details.html">Beanie with Logo</a>
                      <span class="amount"><span class="currencySymbol">£</span>11.05</span>
                    </div>
                  </li>
                  <li>
                    <div class="product-left">
                      <a href="shop-product-details.html">
                        <img width="100" height="100" src="images/shop/product2.jpg" class="thumbnail" alt="images">
                      </a>
                    </div>
                    <div class="product-right">
                      <a class="product-title" href="shop-product-details.html">WordPress Pennant</a>
                      <del>
                        <span class="amount"><span class="currencySymbol">£</span>20.00</span>
                      </del>
                      <ins>
                        <span class="amount"><span class="currencySymbol">£</span>18.00</span>
                      </ins>
                  </li>
                  <li>
                    <div class="product-left">
                      <a href="shop-product-details.html">
                        <img width="100" height="100" src="images/shop/product.jpg" class="thumbnail" alt="images">
                      </a>
                    </div>
                    <div class="product-right">
                      <a class="product-title" href="shop-product-details.html">Hoodie with Zipper</a>
                      <span class="amount"><span class="currencySymbol">£</span>11.05</span>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="widget widget_categories">
                <h4 class="widget-title widget-title-line-bottom line-bottom-theme-colored1">Categories</h4>
                <ul>
                  <li class="cat-item"><a href="#">Anxiety</a> </li>
                  <li class="cat-item"><a href="#">Grief and loss</a> </li>
                  <li class="cat-item"><a href="#">Uncategorized</a> </li>
                </ul>
              </div>
              <div class="widget widget_tag_cloud">
                <h4 class="widget-title widget-title-line-bottom line-bottom-theme-colored1">Tags</h4>
                <div class="tagcloud">
                  <a href="#" class="tag-cloud-link">health</a>
                  <a href="#" class="tag-cloud-link">medical</a>
                  <a href="#" class="tag-cloud-link">news</a>
                  <a href="#" class="tag-cloud-link">latest</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<!-- end main-content -->
@endsection