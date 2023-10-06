@php
    $html_tag_data = [];
    $title = 'About Us';
    $description = 'Settings.';
    $breadcrumbs = ["/home"=>"Home", "/product"=>"About Us"]
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
                                             <h5>About Us</h5>
                                          </div>
                                          
                                          <div class="card-block" style="text-transform: capitalize;">
                                             <form id="main" action="{{route('About.update',$data->id)}}" method="POST" enctype="multipart/form-data" >
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
                                                   <label class="col-sm-2 col-form-label">Sub-Title 2:</label>
                                                   <div class="col-sm-10">
                                                      <input type="text" class="form-control" name="subtitle1" id="p_name" placeholder="Sub-Title 1" value="{{$data->subtitle1}}">
                                                      <span class="messages"></span>
                                                   </div>
                                                </div>
                                                <div class="form-group row">
                                                   <label class="col-sm-2 col-form-label">Sub-Title 3:</label>
                                                   <div class="col-sm-10">
                                                      <input type="text" class="form-control" name="subtitle2" id="p_name" placeholder="Sub-Title 1" value="{{$data->subtitle2}}">
                                                      <span class="messages"></span>
                                                   </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Description:</label>
                                                    <div class="col-sm-10">
                                                      <textarea rows="5" cols="5" class="form-control" name="description" placeholder="Enter Description">{{$data->description}}</textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                   <label class="col-sm-2 col-form-label">Point 1:</label>
                                                   <div class="col-sm-10">
                                                      <input type="text" class="form-control" name="point1" id="p_name" placeholder="Title" value="{{$data->point1}}">
                                                      <span class="messages"></span>
                                                   </div>
                                                </div>
                                                <div class="form-group row">
                                                   <label class="col-sm-2 col-form-label">Point 2:</label>
                                                   <div class="col-sm-10">
                                                      <input type="text" class="form-control" name="point2" id="p_name" placeholder="Title" value="{{$data->point2}}">
                                                      <span class="messages"></span>
                                                   </div>
                                                </div>
                                                <div class="form-group row">
                                                   <label class="col-sm-2 col-form-label">Point 3:</label>
                                                   <div class="col-sm-10">
                                                      <input type="text" class="form-control" name="point3" id="p_name" placeholder="Title" value="{{$data->point3}}">
                                                      <span class="messages"></span>
                                                   </div>
                                                </div>
                                                <div class="form-group row">
                                                   <label class="col-sm-2 col-form-label">Point 4:</label>
                                                   <div class="col-sm-10">
                                                      <input type="text" class="form-control" name="point4" id="p_name" placeholder="Title" value="{{$data->point4}}">
                                                      <span class="messages"></span>
                                                   </div>
                                                </div>
                                                <div class="form-group row">
                                                   <label class="col-sm-2 col-form-label">Point 5:</label>
                                                   <div class="col-sm-10">
                                                      <input type="text" class="form-control" name="point5" id="p_name" placeholder="Title" value="{{$data->point5}}">
                                                      <span class="messages"></span>
                                                   </div>
                                                </div>
                                                <div class="form-group row">
                                                   <label class="col-sm-2 col-form-label">Point 6:</label>
                                                   <div class="col-sm-10">
                                                      <input type="text" class="form-control" name="point6" id="p_name" placeholder="Title" value="{{$data->point6}}">
                                                      <span class="messages"></span>
                                                   </div>
                                                </div>
                                                <div class="form-group row">
                                                   <label class="col-sm-2 col-form-label">Icon Title:</label>
                                                   <div class="col-sm-10">
                                                      <input type="text" class="form-control" name="icon2_title" id="p_name" placeholder="Title" value="{{$data->icon2_title}}">
                                                      <span class="messages"></span>
                                                   </div>
                                                </div>
                                                <div class="form-group row">
                                                   <label class="col-sm-2 col-form-label">Icon 1 <h6 style="font-size: 14px; color: red;">Size: (64 X 64px)</h6></label>
                                                   <div class="col-sm-10">
                                                      <input type="file" class="form-control" name="icon1" id="p_img">
                                                      <span class="messages"></span>
                                                   </div>
                                                </div>
                                               <div class="form-group row">
                                                   <label class="col-sm-2 col-form-label"></label>
                                                   <div class="col-sm-10">
                                                      <img class="img-fluid card-img-top" style="height: 100px; width: 100px;" src="{{ asset('Backend/images/about/icon1/'.$data->icon1)}}" alt="Card image cap"><br><br>
                                                 </div>
                                               </div>
                                               <div class="form-group row">
                                                   <label class="col-sm-2 col-form-label">Icon 2 <h6 style="font-size: 14px; color: red;">Size: (64 X 64px)</h6></label>
                                                   <div class="col-sm-10">
                                                      <input type="file" class="form-control" name="icon2" id="p_img">
                                                      <span class="messages"></span>
                                                   </div>
                                                </div>
                                               <div class="form-group row">
                                                   <label class="col-sm-2 col-form-label"></label>
                                                   <div class="col-sm-10">
                                                      <img class="img-fluid card-img-top" style="height: 100px; width: 100px;" src="{{ asset('Backend/images/about/icon2/'.$data->icon2)}}" alt="Card image cap"><br><br>
                                                 </div>
                                               </div>
                                               <div class="form-group row">
                                                   <label class="col-sm-2 col-form-label">Signature <h6 style="font-size: 14px; color: red;">Size: (229 X 44px)</h6></label>
                                                   <div class="col-sm-10">
                                                      <input type="file" class="form-control" name="signature" id="p_img">
                                                      <span class="messages"></span>
                                                   </div>
                                                </div>
                                               <div class="form-group row">
                                                   <label class="col-sm-2 col-form-label"></label>
                                                   <div class="col-sm-10">
                                                      <img class="img-fluid card-img-top" style="height: 600px; width: 500px;" src="{{ asset('Backend/images/about/signature/'.$data->signature)}}" alt="Card image cap"><br><br>
                                                 </div>
                                               </div>
                                               <div class="form-group row">
                                                   <label class="col-sm-2 col-form-label">Name:</label>
                                                   <div class="col-sm-10">
                                                      <input type="text" class="form-control" name="name" id="p_name" placeholder="Title" value="{{$data->name}}">
                                                      <span class="messages"></span>
                                                   </div>
                                                </div>
                                                <div class="form-group row">
                                                   <label class="col-sm-2 col-form-label">Designation:</label>
                                                   <div class="col-sm-10">
                                                      <input type="text" class="form-control" name="designation" id="p_name" placeholder="Title" value="{{$data->designation}}">
                                                      <span class="messages"></span>
                                                   </div>
                                                </div>
                                                <div class="form-group row">
                                                   <label class="col-sm-2 col-form-label">Years:</label>
                                                   <div class="col-sm-10">
                                                      <input type="text" class="form-control" name="years" id="p_name" placeholder="Title" value="{{$data->years}}">
                                                      <span class="messages"></span>
                                                   </div>
                                                </div>
                                                <div class="form-group row">
                                                   <label class="col-sm-2 col-form-label">Years Title:</label>
                                                   <div class="col-sm-10">
                                                      <input type="text" class="form-control" name="years_title" id="p_name" placeholder="Title" value="{{$data->years_title}}">
                                                      <span class="messages"></span>
                                                   </div>
                                                </div>
                                                <div class="form-group row">
                                                   <label class="col-sm-2 col-form-label">Image <h6 style="font-size: 14px; color: red;">Size: (370 X 564px)</h6></label>
                                                   <div class="col-sm-10">
                                                      <input type="file" class="form-control" name="image" id="p_img">
                                                      <span class="messages"></span>
                                                   </div>
                                                </div>
                                               <div class="form-group row">
                                                   <label class="col-sm-2 col-form-label"></label>
                                                   <div class="col-sm-10">
                                                      <img class="img-fluid card-img-top" style="height: 400px; width: 300px;" src="{{ asset('Backend/images/about/image/'.$data->image)}}" alt="Card image cap"><br><br>
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



