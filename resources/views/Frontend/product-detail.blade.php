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
            <h2 class="title text-white">{{$data->product_name}}</h2>
            <nav role="navigation" class="breadcrumb-trail breadcrumbs">
              <div class="breadcrumbs">
                <span class="trail-item trail-begin">
                  <a href="{{url('index')}}"><span>Home</span></a>
                </span>
                <span><i class="fa fa-angle-right"></i></span>
                <span class="trail-item trail-end">{{$data->product_name}}</span>
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
                  @php
                  $mul = explode("|",$data->mul_img);
                  @endphp
                  @foreach($mul as $img)
                  <div data-thumb="{{ asset('Backend/images/multiple/'.$img) }}">
                    <a class="lightgallery-trigger" data-exthumbimage="{{ asset('Backend/images/multiple/'.$img) }}" data-src="{{ asset('Backend/images/multiple/'.$img) }}" title="Product 1" href="{{ asset('Backend/images/multiple/'.$img) }}"><img class="img-fullwidth" src="{{ asset('Backend/images/multiple/'.$img) }}" alt="images"></a>
                  </div>
                 @endforeach
                </div>
                <ul class="tm-owl-thumbs" data-slider-id="1">
                @foreach($mul as $key => $image)
                  <li class="tm-owl-thumb-item">
                    <img src="{{ asset('Backend/images/multiple/'.$image) }}" alt="images">
                  </li>
                  @endforeach
                  
                </ul>
              </div>
            </div>
            <div class="col-md-6">
              <div class="product-summary">
                <h2 class="product-title mt-0">{{$data->product_name}}</h2>
                <p class="price"><span class="amount"><span class="currency-symbol"></span>Short line</span></p>
                <div class="short-description">
                  <p>{!!$data->description!!}</p>
                </div>
              </div>
            </div>
            <div class="col-md-12 mt-60">
              <div class="horizontal-tab product-tab">
                <ul class="nav nav-tabs" id="nav-tab" role="tablist">
                  <li class="nav-item">
                    <button class="nav-link active" id="desc-tab" data-bs-toggle="tab" data-bs-target="#desc-content" role="tab" aria-controls="desc-content" aria-selected="true"><strong>Description</strong></button>
                  </li>
                </ul>
                <div class="tab-content" id="nav-tabContent">
                  <div class="tab-pane fade show active p-20" id="desc-content" role="tabpanel" aria-labelledby="desc-tab">
                    <p>{!!$data->long_desc!!}</p>
                  </div>

                </div>
              </div>
            </div>
          </div>
          <div class="col-md-12 mt-60">
            <h4 class="mb-30">Related Products</h4>
            <div class="tm-sc-gallery tm-sc-gallery-grid mb-100" style="height: 300px;">
              <!-- Isotope Gallery Grid -->
              <div id="gallery-holder-618422" class="isotope-layout grid-4 gutter-15 clearfix lightgallery-lightbox">
                <div class="isotope-layout-inner">
                  <div class="owl-carousel owl-theme tm-owl-carousel-3col" data-dots="true" data-autoplay="true" data-loop="true" data-duration="6000" data-smartspeed="300" data-margin="30" data-stagepadding="0">
                    @foreach($product as $r)
                    <div class="tm-sc-staff staff-style-current-theme mb-lg-50">
                      <div class="tm-staff">
                        <div class="staff-inner">
                          <div class="thumb">
                            <img src="{{asset('Backend/images/products/'.$r->image)}}" alt="Image">
                          </div>
                        </div>
                        <div class="product-details">
                          <center>
                            <h5 class="name text-black-333"><a href="{{route('product.show',$r->slug)}}">{{$r->product_name}}</a></h5>
                          </center>
                        </div>
                      </div>
                    </div>
                    @endforeach
                  </div>
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