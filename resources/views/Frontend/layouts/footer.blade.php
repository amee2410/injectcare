<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<a href="https://api.whatsapp.com/send?phone=+91&text=Hello ! Thank you for contacting Us. My team will contact you soon." class="float" target="_blank">
<i class="fa fa-whatsapp my-float"></i>
</a>
<style>
    .float{
    margin-left: 14px;
	position:fixed;
	width:60px;
	height:60px;
	bottom:14px;
	/*right:40px;*/
	background-color:#25d366;
	color:#FFF;
	border-radius:50px;
	text-align:center;
    font-size:30px;
	box-shadow: 2px 2px 3px #999;
    z-index:100;
}

.my-float{
	margin-top:16px;
}
</style>
<!-- Footer -->
<footer id="footer" class="footer layer-overlay overlay-theme-colored2-5" data-tm-bg-img="{{asset('assets/images/footer-bg.png')}}">
  <div class="footer-widget-area">
    <div class="container pt-100 pb-70">
      <div class="row">
      <?php $footer = DB::table('footer_settings')->select('*')->first(); ?>
        <div class="col-md-6 col-lg-6 col-xl-3">
          <div class="widget widget-contact-info clearfix mb-20">
            <div class="tm-widget tm-widget-contact-info">
              <h4 class="widget-title mb-40">About</h4>
              <div class="description mb-30">{!!$footer->desc!!}</div>
              <a class="btn btn-flat btn-theme-colored1 text-white" href="{{url('about-us')}}">Read More</a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-6 col-xl-3">
          <div class="widget widget-blog-list clearfix">
            <h4 class="widget-title mb-40">Latest Blogs</h4>
            <div class="tm-widget tm-widget-blog-list ">
              <!-- the loop -->
              <?php
              $blogs=DB::table('blogs')->orderBy('id','DESC')->limit(3)->get();
              ?>
              @foreach($blogs as $blog)
              <article class="post clearfix mb-30"> <a class="post-thumb" href="{{route('blogs.show',$blog->slug)}}">
                <img style="height: 70px; width: 100px;" src="{{asset('Backend/images/blogs/'.$blog->image)}}" class="" alt="" /></a>
                <div class="post-right">
                  <div class="post-date">
                    <span class="entry-date text-theme-colored1">{{ date('d', strtotime($blog->created_at)) }} {{ date('F', strtotime($blog->created_at)) }}, {{ date('Y', strtotime($blog->created_at)) }}</span>
                  </div>
                  <h6 class="post-title mt-10">
                    <a href="{{route('blogs.show',$blog->slug)}}" class="text-white">{{$blog->title}} </a>
                  </h6>
                </div>
              </article>
              @endforeach
              <!-- end of the loop -->
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-6 col-xl-3">
          <div class="widget widget_nav_menu split-nav-menu clearfix">
            <h5 class="widget-title mb-40">Quick Links</h5>
            <ul class="menu">
            <?php $menuItems = DB::table('menus')->select('*')->get(); ?>
            @foreach($menuItems as $menuItem)
              <li><a href="{{ url($menuItem->slug) }}">{{ $menuItem->page_name }}</a></li>
              @endforeach
                      
            </ul>
          </div>
        </div>
        <div class="col-md-6 col-lg-6 col-xl-3">
          <div class="widget widget-newsletter">
          <?php $data1 = DB::table('contacts')->select('*')->first(); ?>
            <h4 class="widget-title mb-40">Contact Us</h4>
            <h6 class="post-title mt-10 text-white">Address: <br> {{$data1->address}}</h6>
            <h6 class="post-title mt-10 text-white">Email :<br> {{$data1->email}}</h6>
            <h6 class="post-title mt-10 text-white">Phone Number:<br> {{$data1->phone1}}</h6>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom bg-theme-colored2">
      <div class="container">
        <div class="row pt-20 pb-20">
          <div class="col-sm-6">
            <div class="footer-paragraph text-center text-xl-start text-lg-start text-md-start mb-sm-15">
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> Inject Care. All Rights Reserved.
            </div>
          </div>
          <div class="col-sm-6">
            <div class="footer-paragraph text-center text-xl-end text-lg-end text-md-end">
             Designed & Developed <a href="https://www.rndtechnosoft.com/" target="_blank">RnD Technosoft</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
