@php
    $html_tag_data = [];
    $title = 'Features';
    $description = 'Settings.';
    $breadcrumbs = ["/home"=>"Home", "/Features"=>"Features"]
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
                                             <h5>Features</h5>
                                          </div>
                                          
                                          <div class="card-block" style="text-transform: capitalize;">
                                             <form id="main" action="{{route('Feature.update',$data->id)}}" method="POST" enctype="multipart/form-data" >
                                                @method('PUT') 
                                                @csrf
                                                <div class="form-group row">
                                                   <label class="col-sm-2 col-form-label">Feature1:</label>
                                                   <div class="col-sm-10">
                                                      <input type="text" class="form-control" name="feature1" id="p_name" placeholder="Feature1" value="{{$data->feature1}}">
                                                      <span class="messages"></span>
                                                   </div>
                                                </div>
                                                <div class="form-group row">
                                                   <label class="col-sm-2 col-form-label">Icon:</label>
                                                   <div class="col-sm-10">
                                                      <input type="text" class="form-control" name="icon1" id="p_name" placeholder="Icon" value="{{$data->icon1}}">
                                                      <span class="messages"></span>
                                                   </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Description1:</label>
                                                    <div class="col-sm-10">
                                                      <textarea rows="5" cols="5" class="form-control" name="description1" placeholder="Enter Description">{{$data->description1}}</textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                   <label class="col-sm-2 col-form-label">Button1:</label>
                                                   <div class="col-sm-10">
                                                      <input type="text" class="form-control" name="btn1_name" id="p_name" placeholder="Name" value="{{$data->btn1_name}}">
                                                      <input type="text" class="form-control" name="btn1_link" id="p_name" placeholder="Link" value="{{$data->btn1_link}}">
                                                      <span class="messages"></span>
                                                   </div>
                                                </div>
                                                <div class="form-group row">
                                                   <label class="col-sm-2 col-form-label">Feature2:</label>
                                                   <div class="col-sm-10">
                                                      <input type="text" class="form-control" name="feature2" id="p_name" placeholder="feature2" value="{{$data->feature2}}">
                                                      <span class="messages"></span>
                                                   </div>
                                                </div>
                                                <div class="form-group row">
                                                   <label class="col-sm-2 col-form-label">Icon:</label>
                                                   <div class="col-sm-10">
                                                      <input type="text" class="form-control" name="icon2" id="p_name" placeholder="Icon" value="{{$data->icon2}}">
                                                      <span class="messages"></span>
                                                   </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Description:</label>
                                                    <div class="col-sm-10">
                                                      <textarea rows="5" cols="5" class="form-control" name="description2" placeholder="Enter Description">{{$data->description2}}</textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                   <label class="col-sm-2 col-form-label">Button2:</label>
                                                   <div class="col-sm-10">
                                                      <input type="text" class="form-control" name="btn2_name" id="p_name" placeholder="Name" value="{{$data->btn2_name}}">
                                                      <input type="text" class="form-control" name="btn2_link" id="p_name" placeholder="Link" value="{{$data->btn2_link}}">
                                                      <span class="messages"></span>
                                                   </div>
                                                </div>
                                                <div class="form-group row">
                                                   <label class="col-sm-2 col-form-label">Feature3:</label>
                                                   <div class="col-sm-10">
                                                      <input type="text" class="form-control" name="feature3" id="p_name" placeholder="feature3" value="{{$data->feature3}}">
                                                      <span class="messages"></span>
                                                   </div>
                                                </div>
                                                <div class="form-group row">
                                                   <label class="col-sm-2 col-form-label">Icon:</label>
                                                   <div class="col-sm-10">
                                                      <input type="text" class="form-control" name="icon3" id="p_name" placeholder="Icon" value="{{$data->icon3}}">
                                                      <span class="messages"></span>
                                                   </div>
                                                </div> 
                                                <div class="form-group row">
                                                   <label class="col-sm-2 col-form-label">Time1:</label>
                                                   <div class="col-sm-10">
                                                      <input type="text" class="form-control" name="time1" id="p_name" placeholder="Time" value="{{$data->time1}}">
                                                      <input type="text" class="form-control" name="day1" id="p_name" placeholder="Day" value="{{$data->day1}}">
                                                      <span class="messages"></span>
                                                   </div>
                                                </div>
                                                <div class="form-group row">
                                                   <label class="col-sm-2 col-form-label">Time2:</label>
                                                   <div class="col-sm-10">
                                                      <input type="text" class="form-control" name="time2" id="p_name" placeholder="Time" value="{{$data->time2}}">
                                                      <input type="text" class="form-control" name="day2" id="p_name" placeholder="Day" value="{{$data->day2}}">
                                                      <span class="messages"></span>
                                                   </div>
                                                </div>
                                                <div class="form-group row">
                                                   <label class="col-sm-2 col-form-label">Time3:</label>
                                                   <div class="col-sm-10">
                                                      <input type="text" class="form-control" name="time3" id="p_name" placeholder="Time" value="{{$data->time3}}">
                                                      <input type="text" class="form-control" name="day3" id="p_name" placeholder="Day" value="{{$data->day3}}">
                                                      <span class="messages"></span>
                                                   </div>
                                                </div>                                               
                                                <div class="form-group row">
                                                   <label class="col-sm-2 col-form-label">Feature4:</label>
                                                   <div class="col-sm-10">
                                                      <input type="text" class="form-control" name="feature4" id="p_name" placeholder="feature4" value="{{$data->feature4}}">
                                                      <span class="messages"></span>
                                                   </div>
                                                </div>
                                                <div class="form-group row">
                                                   <label class="col-sm-2 col-form-label">Icon:</label>
                                                   <div class="col-sm-10">
                                                      <input type="text" class="form-control" name="icon4" id="p_name" placeholder="Icon" value="{{$data->icon4}}">
                                                      <span class="messages"></span>
                                                   </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Description:</label>
                                                    <div class="col-sm-10">
                                                      <textarea rows="5" cols="5" class="form-control" name="description3" placeholder="Enter Description">{{$data->description3}}</textarea>
                                                    </div>
                                                </div>
                                                
                                                
                                               
                                               
                                                
                                                <div class="form-group row">
                                                   <label class="col-sm-2 col-form-label">Phone:</label>
                                                   <div class="col-sm-10">
                                                      <input type="text" class="form-control" name="phone" id="p_name" placeholder="Phone" value="{{$data->phone}}">
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
                     <script src="https://cdn.tiny.cloud/1/w5bi9dkry19hh0hu719ixcti8diunuytmt1udglc5itmtnaf/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
                        <script>
                        tinymce.init({
                          selector: 'textarea',
                          plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
                          toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
                        });
                      </script>
                     
@endsection



