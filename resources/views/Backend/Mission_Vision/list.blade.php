@php
$html_tag_data = [];
$title = 'Mission & Vision';
$description = 'Settings.';
$breadcrumbs = ["/home"=>"Home", "/Mission_Vision"=>"Mission & Vision"]
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
                        <h5>Mission & Vision</h5>
                     </div>
                     <div class="card-block" style="text-transform: capitalize;">
                        <form id="main" action="{{route('Mission_Vision.update',$data->id)}}" method="POST" enctype="multipart/form-data">
                           @method('PUT')
                           @csrf
                           <div class="form-group row">
                              <label class="col-sm-2 col-form-label">Mission Title:</label>
                              <div class="col-sm-10">
                                 <input type="text" class="form-control" name="mission_title" id="p_name" placeholder="Title" value="{{$data->mission_title}}">
                                 <span class="messages"></span>
                              </div>
                           </div>
                           <div class="form-group row">
                              <label class="col-sm-2 col-form-label">Image <h6 style="font-size: 14px; color: red;">Size: (45 X 45px)</h6></label>
                              <div class="col-sm-10">
                                 <input type="file" class="form-control" name="mission_image" id="p_img">
                                 <span class="messages"></span>
                              </div>
                           </div>
                           <div class="form-group row">
                              <label class="col-sm-2 col-form-label"></label>
                              <div class="col-sm-10">
                                 <img class="img-fluid card-img-top" style="height: 100px; width:100px;" src="{{ asset('Backend/images/mission/'.$data->mission_image)}}" alt="Card image cap"><br><br>
                              </div>
                           </div>
                           <div class="form-group row">
                              <label class="col-sm-2 col-form-label">Mission Description:</label>
                              <div class="col-sm-10">
                                 <textarea rows="5" cols="5" class="form-control" name="mission_description" placeholder="Enter Description">{{$data->mission_description}}</textarea>
                                 <span class="messages"></span>
                              </div>
                           </div>

                           <div class="form-group row">
                              <label class="col-sm-2 col-form-label">Vision Title:</label>
                              <div class="col-sm-10">
                                 <input type="text" class="form-control" name="vision_title" id="p_name" placeholder="Title" value="{{$data->vision_title}}">
                                 <span class="messages"></span>
                              </div>
                           </div>
                           <div class="form-group row">
                              <label class="col-sm-2 col-form-label">Image <h6 style="font-size: 14px; color: red;">Size: (45 X 45px)</h6></label>
                              <div class="col-sm-10">
                                 <input type="file" class="form-control" name="vision_image" id="p_img">
                                 <span class="messages"></span>
                              </div>
                           </div>
                           <div class="form-group row">
                              <label class="col-sm-2 col-form-label"></label>
                              <div class="col-sm-10">
                                 <img class="img-fluid card-img-top" style="height: 100px; width: 100px;" src="{{ asset('Backend/images/vision/'.$data->vision_image)}}" alt="Card image cap"><br><br>
                              </div>
                           </div>
                           <div class="form-group row">
                              <label class="col-sm-2 col-form-label">Vision Description:</label>
                              <div class="col-sm-10">
                                 <textarea rows="5" cols="5" class="form-control" name="vision_description" placeholder="Enter Description">{{$data->vision_description}}</textarea>
                                 <span class="messages"></span>
                              </div>
                           </div>

                           <div class="form-group row">
                              <label class="col-sm-2 col-form-label">Core Title:</label>
                              <div class="col-sm-10">
                                 <input type="text" class="form-control" name="core_title" id="p_name" placeholder="Title" value="{{$data->core_title}}">
                                 <span class="messages"></span>
                              </div>
                           </div>
                           <div class="form-group row">
                              <label class="col-sm-2 col-form-label">Image <h6 style="font-size: 14px; color: red;">Size: (45 X 45px)</h6></label>
                              <div class="col-sm-10">
                                 <input type="file" class="form-control" name="core_image" id="p_img">
                                 <span class="messages"></span>
                              </div>
                           </div>
                           <div class="form-group row">
                              <label class="col-sm-2 col-form-label"></label>
                              <div class="col-sm-10">

                                 <img class="img-fluid card-img-top" style="height: 100px; width: 100px;" src="{{ asset('Backend/images/core/'.$data->core_image)}}" alt="Card image cap"><br><br>
                              </div>
                           </div>
                           <div class="form-group row">
                              <label class="col-sm-2 col-form-label">Core Description:</label>
                              <div class="col-sm-10">
                                 <textarea rows="5" cols="5" class="form-control" name="core_description" placeholder="Enter Description">{{$data->core_description}}</textarea>
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