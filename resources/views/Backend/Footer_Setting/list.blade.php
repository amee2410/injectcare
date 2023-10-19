@php
$html_tag_data = [];
$title = 'Footer Setting';
$description = 'Settings.';
$breadcrumbs = ["/home"=>"Home", "/Footer_Setting"=>"Footer Setting"]
@endphp
@extends('Backend.layout.layout',[
'html_tag_data'=>$html_tag_data,
'title'=>$title,
'description'=>$description
])
@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('Backend/files/assets/icon/themify-icons/themify-icons.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('Backend/files/assets/icon/icofont/css/icofont.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('Backend/files/assets/css/pages.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('Backend/files/bower_components/switchery/css/switchery.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('Backend/files/bower_components/bootstrap-tagsinput/css/bootstrap-tagsinput.css') }}">
<link rel="stylesheet" href="{{ asset('Backend/files/bower_components/select2/css/select2.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('Backend/files/bower_components/bootstrap-multiselect/css/bootstrap-multiselect.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('Backend/files/bower_components/multiselect/css/multi-select.css') }}">
<link rel="stylesheet" type="text/css" href="../files/assets/pages/advance-elements/css/bootstrap-datetimepicker.css">

@endsection

@section('js_page')
<script type="text/javascript" src="{{ asset('Backend/files/bower_components/modernizr/js/modernizr.js') }}"></script>
<script type="text/javascript" src="{{ asset('Backend/files/bower_components/modernizr/js/css-scrollbars.js') }}"></script>
<script src="{{ asset('Backend/files/ajax/libs/underscore.js/1.8.3/underscore-min.js') }}"></script>
<script src="{{ asset('Backend/files/ajax/libs/moment.js/2.10.6/moment.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('Backend/files/assets/pages/advance-elements/swithces.js') }}"></script>
<script src="{{ asset('Backend/files/assets/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('Backend/files/bower_components/switchery/js/switchery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('Backend/files/bower_components/bootstrap-maxlength/js/bootstrap-maxlength.js') }}"></script>
<script type="text/javascript" src="{{ asset('Backend/files/bower_components/select2/js/select2.full.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('Backend/files/bower_components/bootstrap-multiselect/js/bootstrap-multiselect.js') }}"></script>
<script type="text/javascript" src="{{ asset('Backend/files/bower_components/multiselect/js/jquery.multi-select.js') }}"></script>
<script type="text/javascript" src="{{ asset('Backend/files/assets/js/jquery.quicksearch.js') }}"></script>
<script type="text/javascript" src="{{ asset('Backend/files/assets/pages/advance-elements/select2-custom.js') }}"></script>

<script>
   var $pc_id = $('#pc_id'),
      $psc_id = $('#psc_id'),
      $options = $psc_id.find('option');

   $pc_id.on('change', function() {
      $psc_id.html($options.filter('[data-cat="' + this.value + '"]'));
   }).trigger('change');
</script>
@endsection

@section('content')
<div class="pcoded-inner-content">
   <div class="main-body">
      <div class="page-wrapper">
         <div class="page-body">
            @include('Backend.layout.breadcrumb',['breadcrumbs'=>$breadcrumbs])
            <div class="row">
               <div class="col-sm-12">
                  <div class="card">
                     <div class="card-header">
                        <h5>Footer Setting</h5>
                     </div>

                     <div class="card-block" style="text-transform: capitalize;">
                        <form id="main" action="{{route('Footer_Setting.update',$data->id)}}" method="POST" enctype="multipart/form-data">
                           @method('PUT')
                           @csrf
                           <div class="form-group row">
                              <label class="col-sm-2 col-form-label">Footer Logo</label>
                              <div class="col-sm-10">
                                 <input type="file" class="form-control" name="footer_logo" id="image">
                                 <span class="messages"></span>
                              </div>
                           </div>
                           <div class="form-group row">
                              <label class="col-sm-2 col-form-label"></label>
                              <div class="col-sm-10">
                                 <img src="{{asset('Backend/images/footer_setting/'.$data->footer_logo)}}" alt="" name="footer_logo" style="width: 100px; height: 100px;">
                              </div>
                           </div>
                              <div class="form-group row">
                                 <label class="col-sm-2 col-form-label">Description</label>
                                    <div class="col-sm-10">
                                      <textarea rows="5" cols="5" class="form-control" name="desc" placeholder="Enter Description">{{$data->desc}}</textarea>
                                    </div>
                              </div>
                           <div class="form-group row">
                              <label class="col-sm-2 col-form-label">Instagram link</label>
                              <div class="col-sm-10">
                                 <input type="text" class="form-control" name="instagram_link" id="p_name" placeholder="Title" value="{{$data->instagram_link}}">
                                 <span class="messages"></span>
                              </div>
                           </div>
                           <div class="form-group row">
                              <label class="col-sm-2 col-form-label">Facebook link</label>
                              <div class="col-sm-10">
                                 <input type="text" class="form-control" name="facebook_link" id="p_name" placeholder="Title" value="{{$data->facebook_link}}">
                                 <span class="messages"></span>
                              </div>
                           </div>
                           <div class="form-group row">
                              <label class="col-sm-2 col-form-label">Twitter link</label>
                              <div class="col-sm-10">
                                 <input type="text" class="form-control" name="twitter_link" id="p_name" placeholder="Title" value="{{$data->twitter_link}}">
                                 <span class="messages"></span>
                              </div>
                           </div>
                           <div class="form-group row">
                              <label class="col-sm-2 col-form-label">YouTube link</label>
                              <div class="col-sm-10">
                                 <input type="text" class="form-control" name="youtube_link" id="p_name" placeholder="Title" value="{{$data->youtube_link}}">
                                 <span class="messages"></span>
                              </div>
                           </div>
                           <div class="form-group row">
                              <label class="col-sm-2 col-form-label">Linkedin link</label>
                              <div class="col-sm-10">
                                 <input type="text" class="form-control" name="linkedin_link" id="p_name" placeholder="Title" value="{{$data->linkedin_link}}">
                                 <span class="messages"></span>
                              </div>
                           </div>
                           <div class="form-group row">
                              <label class="col-sm-2"></label>
                              <div class="col-sm-10">
                                 <button type="submit" class="btn btn-primary m-b-0">Submit</button>
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection