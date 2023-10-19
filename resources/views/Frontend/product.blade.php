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
              <a href="#" class="" data-filter=".cat{{ $category->id }}">{{ $category->category_name }}</a>
              @endforeach
            </div>
            <!-- End Isotope Filter -->

            <!-- Isotope Gallery Grid -->
            <div id="gallery-holder-618422" class="isotope-layout grid-3 gutter-15 clearfix lightgallery-lightbox">
              <div class="isotope-layout-inner">
                <!-- Isotope Item Start -->
                @foreach($products as $p)
                <div class="isotope-item cat{{ $p->category_name }}">
                  <div class="isotope-item-inner">
                    <div class="product">
                      <div class="product-header">
                        <div class="thumb image-swap">
                          <a href="#"><img src="{{asset('Backend/images/products/'.$p->image)}}" class="product-main-image img-responsive img-fullwidth" width="300" height="300" alt="product"></a>
                          <a href="#"><img src="{{asset('Backend/images/products/'.$p->image)}}" class="product-hover-image img-responsive img-fullwidth" alt="product"></a>
                        </div>
                      </div>
                      <div class="product-details">
                        <span class="product-categories"><a href="{{url('product')}}" rel="tag">{{$p->category_name}}</a></span>
                        <h5 class="product-title"><a href="{{route('product.show',$p->slug)}}">{{$p->product_name}}</a></h5>

                      </div>
                    </div>
                  </div>
                </div>
                @endforeach
                <!-- Isotope Item End -->

              </div>
            </div>
            <!-- End Isotope Gallery Grid -->
          </div>
          <div class="col-md-3">
            <div class="sidebar sidebar-right mt-sm-30">
              <div class="widget">
                <h4 class="widget-title widget-title-line-bottom line-bottom-theme-colored1">Latest Products</h4>
                <ul class="product_list_widget">
                  @foreach($products as $latest)
                  <li>
                    <div class="product-left">
                      <a href="{{ route('product.show', $latest->slug) }}">
                        <img width="100" height="100" src="{{ asset('Backend/images/products/' . $latest->image) }}" class="thumbnail" alt="images">
                      </a>
                    </div>
                    <div class="product-right">
                      <a class="product-title" href="{{ route('product.show', $latest->slug) }}">{{ $latest->product_name }}</a>
                    </div>
                  </li>
                  @endforeach
                </ul>
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