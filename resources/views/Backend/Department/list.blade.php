@php
$html_tag_data = [];
$title = 'Department';
$description = 'Settings.';
$breadcrumbs = ["/home"=>"Home", "/Department"=>"Department"]
@endphp
@extends('Backend.layout.layout',[
'html_tag_data'=>$html_tag_data,
'title'=>$title,
'description'=>$description
])
@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('Backend/files/assets/css/pages.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('Backend/files/assets/icon/themify-icons/themify-icons.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('Backend/files/assets/icon/icofont/css/icofont.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('Backend/files/bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('Backend/files/assets/pages/data-table/css/buttons.dataTables.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('Backend/files/bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}">
@endsection

@section('js_page')
<script type="text/javascript" src="{{ asset('Backend/files/bower_components/modernizr/js/modernizr.js') }}"></script>
<script type="text/javascript" src="{{ asset('Backend/files/bower_components/modernizr/js/css-scrollbars.js') }}"></script>
<script src="{{ asset('Backend/files/assets/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
<script src="{{ asset('Backend/files/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('Backend/files/bower_components/datatables.net- buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('Backend/files/assets/pages/data-table/js/jszip.min.js') }}"></script>
<script src="{{ asset('Backend/files/assets/pages/data-table/js/pdfmake.min.js') }}"></script>
<script src="{{ asset('Backend/files/assets/pages/data-table/js/vfs_fonts.js') }}"></script>
<script src="{{ asset('Backend/files/assets/pages/data-table/extensions/buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('Backend/files/assets/pages/data-table/extensions/buttons/js/buttons.flash.min.js') }}"></script>
<script src="{{ asset('Backend/files/assets/pages/data-table/extensions/buttons/js/jszip.min.js') }}"></script>
<script src="{{ asset('Backend/files/assets/pages/data-table/extensions/buttons/js/vfs_fonts.js') }}"></script>
<script src="{{ asset('Backend/files/assets/pages/data-table/extensions/buttons/js/buttons.colVis.min.js') }}"></script>
<script src="{{ asset('Backend/files/bower_components/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('Backend/files/bower_components/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('Backend/files/bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('Backend/files/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('Backend/files/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('Backend/files/assets/pages/data-table/extensions/buttons/js/extension-btns-custom.js') }}"></script>
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
                                <a href="{{route('Department.create')}}" class="btn btn-out waves-effect waves-light btn-inverse btn-square">Create</a>
                                <!-- <h5>Column Selectors</h5>
                                                <span class="m-b-20">All of the data export buttons have a exportOptions option which can be used to specify information about what data should be exported and how. The options given for this parameter are passed directly to the buttons.exportData() method to obtain the required data.</span>
                                                <span>One of the most commonly used is the columns option which defines the columns that should be used as part of the export. This is given as a column-selector, making it simple to tell it if you want only visible columns, or a mix of the columns available.</span> -->
                            </div>
                            <div class="card-block">
                                <div class="dt-responsive table-responsive">
                                    <table id="cbtn-selectors" class="table table-striped table-bordered nowrap">
                                        <thead>
                                            <tr style="text-transform: capitalize;">
                                                <th>Id</th>
                                                <th>Title</th>
                                                <th>Image</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                @foreach($data as $d)
                                                <td>{{$d->id}}</td>
                                                <td>{{$d->title}}</td>

                                                <td><img src="{{ asset('/Backend/images/department/'.$d->image) }}" alt="Image" title="Image" width="100px" height="100px"></td>
                                                <td>
                                                    <form action="{{route('Department.destroy',$d->id)}}" method="Post">
                                                        <a class="btn btn-primary" href="{{route('Department.edit',$d->id)}}">Edit</a>
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection