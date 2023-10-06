@php
    $html_tag_data = [];
    $title = 'Menu';
    $description = 'Settings.';
    $breadcrumbs = ["/home"=>"Home", "/Menu"=>"Menu"]
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
                                             <h5>Update Menu</h5>
                                          </div>
                                          
                                          <div class="card-block" style="text-transform: capitalize;">
                                             <form id="main" action="{{route('Menu.update',$data->id)}}" method="POST" enctype="multipart/form-data" >
                                                @method('PUT') 
                                                @csrf

                                                <div class="form-group row">
                                                   <label class="col-sm-2 col-form-label">Page Name</label>
                                                   <div class="col-sm-10">
                                                      <input type="text" class="form-control" name="page_name" id="name" placeholder="Title" value="{{$data->page_name}}">
                                                      <span class="messages"></span>
                                                   </div>
                                                </div>
                                                <div class="form-group row" hidden="hidden">
                                                   <label class="col-sm-2 col-form-label">Slug</label>
                                                   <div class="col-sm-10">
                                                      <input type="text" class="form-control" name="slug" id="slug" placeholder="Sub-Title" value="{{$data->slug}}">
                                                      <span class="messages"></span>
                                                   </div>
                                                </div>
                                                <div class="form-group row">
                                                   <label class="col-sm-2 col-form-label">Banner Image <h6 style="font-size: 14px; color: red;">Size: (1920 X 722px)</h6></label>
                                                   <div class="col-sm-10">
                                                      <input type="file" class="form-control" name="banner_image" id="p_img">
                                                      <span class="messages"></span>
                                                   </div>
                                                </div>
                                                <center><img class="img-fluid card-img-top" style="height: 400px; width: 1200px;" src="{{ asset('Backend/images/menu/'.$data->banner_image) }}" alt="Card image cap"></center><br><br>

                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Meta Title</label>
                                                    <div class="col-sm-10">
                                                       <input type="text" class="form-control" value="Enter Title" name="meta_title" value="{{$data->meta_title}}">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Meta Keywords</label>
                                                    <div class="col-sm-10">
                                                       <input type="text" class="form-control" value="Enter Keywords" name="meta_keywords" value="{{$data->meta_keywords}}">
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label class="col-sm-2 col-form-label">Meta Description</label>
                                                    <div class="col-sm-10">
                                                       <input type="text" class="form-control" value="Enter Description" name="meta_description" value="{{$data->meta_description}}">
                                                    </div>
                                                </div>
                                                
                                                      <button type="submit" class="btn btn-primary m-b-0">Submit</button>
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
                          selector: '.textarea',
                          plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
                          toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
                        });
                      </script>
                      
                        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
                        <script>
                        $(document).ready(function(){
                            $("#name").on("input", function(){
                                // Print entered value in a div box
                                    $("#slug").val($(this).val().split(' ').join('_').toLowerCase());
                
                            });
                        });
                
                        </script>
@endsection



