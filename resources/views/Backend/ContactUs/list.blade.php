@php
    $html_tag_data = [];
    $title = 'Contact Us';
    $description = 'Settings.';
    $breadcrumbs = ["/home"=>"Home", "/ContactUs"=>"Contact Us"]
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
      <link rel="stylesheet" type="text/css" href="{{ asset('Backend/files/bower_components/bootstrap-tagsinput/css/bootstrap-tagsinput.css') }}" >
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
               $psc_id.html($options.filter('[data-cat="'+this.value+'"]'));
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
                                             <h5>Contact Us</h5>
                                          </div>
                                          
                                          <div class="card-block" style="text-transform: capitalize;">
                                             <form id="main" action="{{route('ContactUs.update',$data->id)}}" method="POST" enctype="multipart/form-data" >
                                                @method('PUT') 
                                                @csrf

                                                <div class="form-group row">
                                                   <label class="col-sm-2 col-form-label">Email 1</label>
                                                   <div class="col-sm-10">
                                                      <input type="text" class="form-control" name="email1" id="p_name" placeholder="Title" value="{{$data->email1}}">
                                                      <span class="messages"></span>
                                                   </div>
                                                </div>
                                               <div class="form-group row">
                                                   <label class="col-sm-2 col-form-label">Phone No 1</label>
                                                   <div class="col-sm-10">
                                                      <input type="text" class="form-control" name="phone_no_1" id="p_name" placeholder="Sub-Title 3" value="{{$data->phone_no_1}}">
                                                      <span class="messages"></span>
                                                   </div>
                                                </div>
                                               <div class="form-group row">
                                                   <label class="col-sm-2 col-form-label">Address 1</label>
                                                   <div class="col-sm-10">
                                                      <input type="text" class="form-control" name="address1" id="p_name" placeholder="Sub-Title 2" value="{{$data->address1}}">
                                                      <span class="messages"></span>
                                                   </div>
                                                </div>
                                                <div class="form-group row">
                                                   <label class="col-sm-2 col-form-label">Email 2</label>
                                                   <div class="col-sm-10">
                                                      <input type="text" class="form-control" name="email2" id="p_name" placeholder="Sub-Title 1" value="{{$data->email2}}">
                                                      <span class="messages"></span>
                                                   </div>
                                                </div>
                                               <div class="form-group row">
                                                   <label class="col-sm-2 col-form-label">Phone No 2</label>
                                                   <div class="col-sm-10">
                                                      <input type="text" class="form-control" name="phone_no_2" id="p_name" placeholder="Sub-Title 3" value="{{$data->phone_no_2}}">
                                                      <span class="messages"></span>
                                                   </div>
                                                </div>
                                               <div class="form-group row">
                                                   <label class="col-sm-2 col-form-label">Address 2</label>
                                                   <div class="col-sm-10">
                                                      <input type="text" class="form-control" name="address2" id="p_name" placeholder="Sub-Title 2" value="{{$data->address2}}">
                                                      <span class="messages"></span>
                                                   </div>
                                                </div>
                                                <div class="form-group row">
                                                   <label class="col-sm-2 col-form-label">Email 3</label>
                                                   <div class="col-sm-10">
                                                      <input type="text" class="form-control" name="email3" id="p_name" placeholder="Sub-Title 2" value="{{$data->email3}}">
                                                      <span class="messages"></span>
                                                   </div>
                                                </div>
                                                
                                                <div class="form-group row">
                                                   <label class="col-sm-2 col-form-label">Phone No 3</label>
                                                   <div class="col-sm-10">
                                                      <input type="text" class="form-control" name="phone_no_3" id="p_name" placeholder="Sub-Title 3" value="{{$data->phone_no_3}}">
                                                      <span class="messages"></span>
                                                   </div>
                                                </div>
                                                
                                                
                                                
                                                <div class="form-group row">
                                                   <label class="col-sm-2 col-form-label">Address 3</label>
                                                   <div class="col-sm-10">
                                                      <input type="text" class="form-control" name="address3" id="p_name" placeholder="Sub-Title 2" value="{{$data->address3}}">
                                                      <span class="messages"></span>
                                                   </div>
                                                </div>
                                                <div class="form-group row">
                                                   <label class="col-sm-2 col-form-label">Map Link</label>
                                                   <div class="col-sm-10">
                                                      <input type="text" class="form-control" name="map_link" id="p_name" placeholder="Map Link" value="{{$data->map_link}}">
                                                      <span class="messages"></span>
                                                   </div>
                                                </div>
                                                <!--<br><br>-->
                                                <!--<div class="form-group row">-->
                                                <!--    <label class="col-sm-2 col-form-label">Meta Title</label>-->
                                                <!--    <div class="col-sm-10">-->
                                                <!--       <input type="text" class="form-control" value="Enter Title" name="meta_title" value="">-->
                                                <!--    </div>-->
                                                <!--</div>-->
                                                <!--<div class="form-group row">-->
                                                <!--    <label class="col-sm-2 col-form-label">Meta Keywords</label>-->
                                                <!--    <div class="col-sm-10">-->
                                                <!--       <input type="text" class="form-control" value="Enter Keywords" name="meta_keywords" value="">-->
                                                <!--    </div>-->
                                                <!--</div>-->
                                                <!--<div class="form-group row">-->
                                                <!--    <label class="col-sm-2 col-form-label">Meta Description</label>-->
                                                <!--    <div class="col-sm-10">-->
                                                <!--       <input type="text" class="form-control" value="Enter Description" name="meta_description" value="">-->
                                                <!--    </div>-->
                                                <!--</div>-->
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



