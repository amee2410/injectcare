@php
    $html_tag_data = [];
    $title = 'About DMIT';
    $description = 'Settings.';
    $breadcrumbs = ["/home"=>"Home", "/DMIT"=>"DMIT"]
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
                                             <h5>About DMIT</h5>
                                          </div>
                                          <div class="card-block" style="text-transform: capitalize;">
                                             <form id="main" action="{{route('DMIT.update',$data->id)}}" method="POST" enctype="multipart/form-data" >
                                                @method('PUT') 
                                                @csrf
                                                <div class="form-group row">
                                                   <label class="col-sm-2 col-form-label">Title:</label>
                                                   <div class="col-sm-10">
                                                      <input type="text" class="form-control" name="title" id="p_name" placeholder="Title" value="{{$data->title}}">
                                                      <span class="messages"></span>
                                                   </div>
                                                </div>
                                                <div class="form-group row">
                                                   <label class="col-sm-2 col-form-label">Sub-Title:</label>
                                                   <div class="col-sm-10">
                                                      <input type="text" class="form-control" name="subtitle" id="p_name" placeholder="Sub-Title 1" value="{{$data->subtitle}}">
                                                      <span class="messages"></span>
                                                   </div>
                                                </div>
                                                <div class="form-group row">
                                                   <label class="col-sm-2 col-form-label">Sub-Title 1:</label>
                                                   <div class="col-sm-10">
                                                      <input type="text" class="form-control" name="subtitle1" id="p_name" placeholder="Sub-Title 1" value="{{$data->subtitle1}}">
                                                      <span class="messages"></span>
                                                   </div>
                                                </div>
                                                <div class="form-group row">
                                                   <label class="col-sm-2 col-form-label">Sub-Title 2:</label>
                                                   <div class="col-sm-10">
                                                      <input type="text" class="form-control" name="subtitle2" id="p_name" placeholder="Sub-Title 2" value="{{$data->subtitle2}}">
                                                      <span class="messages"></span>
                                                   </div>
                                                </div>
                                                <div class="form-group row">
                                                   <label class="col-sm-2 col-form-label">Video Link:</label>
                                                   <div class="col-sm-10">
                                                      <input type="text" class="form-control" name="video_link" id="p_name" placeholder="Sub-Title 2" value="{{$data->video_link}}">
                                                      <span class="messages"></span>
                                                   </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Description 1:</label>
                                                    <div class="col-sm-10">
                                                      <textarea rows="3" cols="3" class="form-control" name="description1" placeholder="Enter Description">{{$data->description1}}</textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Description 2:</label>
                                                    <div class="col-sm-10">
                                                      <textarea rows="3" cols="3" class="form-control" name="description2" placeholder="Enter Description">{{$data->description2}}</textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                   <label class="col-sm-2 col-form-label">Image 1:<h6 style="font-size: 14px; color: red;">Size: (300 X 317px)</h6></label>
                                                   <div class="col-sm-10">
                                                      <input type="file" class="form-control" name="image1" id="p_img">
                                                      <span class="messages"></span>
                                                   </div>
                                                </div>
                                               <div class="form-group row">
                                                   <label class="col-sm-2 col-form-label"></label>
                                                   <div class="col-sm-10">
                                                      <img class="img-fluid card-img-top" style="height: 300px; width: 317px;" src="{{ asset('Backend/images/DMIT/'.$data->image1)}}" alt="Card image cap"><br><br>
                                                 </div>
                                               </div>
                                                
                                               <div class="form-group row">
                                                   <label class="col-sm-2 col-form-label">Image 2:<h6 style="font-size: 14px; color: red;">Size: (300 X 317px)</h6></label>
                                                   <div class="col-sm-10">
                                                      <input type="file" class="form-control" name="image2" id="p_img">
                                                      <span class="messages"></span>
                                                   </div>
                                                </div>
                                               <div class="form-group row">
                                                   <label class="col-sm-2 col-form-label"></label>
                                                   <div class="col-sm-10">
                                                      <img class="img-fluid card-img-top" style="height: 300px; width: 317px;" src="{{ asset('Backend/images/DMIT/'.$data->image2)}}" alt="Card image cap"><br><br>
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



