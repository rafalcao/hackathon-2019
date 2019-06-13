@extends('layout.master')
@section('parentPageTitle', 'App')
@section('title', 'New Post')

@section('sub-header')
<div class="col-lg-6 col-md-4 col-12 text-right">
    <div class="inlineblock text-center m-r-15 m-l-15 hidden-sm">
        <div class="sparkline" data-type="bar" data-width="97%" data-height="28px" data-bar-Width="2" data-bar-Spacing="5" data-bar-Color="#706bd1">3,2,6,5,9,8,7,9,5,1,3,5,7,4,6</div>
        <small>Page Views</small>
    </div>
    <div class="inlineblock text-center m-r-15 m-l-15 hidden-sm">
        <div class="sparkline" data-type="bar" data-width="97%" data-height="28px" data-bar-Width="2" data-bar-Spacing="5" data-bar-Color="#2196f3">1,3,5,7,4,6,3,2,6,5,9,8,7,9,5</div>
        <small>Visitors</small>
    </div>
    <ul class="header-dropdown list-unstyled float-right mb-0">
        <li class="dropdown">
            <a href="javascript:void(0);" class="btn btn-primary btn-round dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
            <ul class="dropdown-menu dropdown-menu-right float-right">
                <li><a href="{{route('app.blogdashboard')}}" >Dashboard</a></li>
                <li><a href="{{route('app.blogpost')}}" >New Post</a></li>
                <li><a href="{{route('app.bloglist')}}" >Blog List</a></li>
                <li><a href="{{route('app.bloggrid')}}" >Blog Grid</a></li>
                <li><a href="{{route('app.blogdetails')}}">Blog Single</a></li>
            </ul>
        </li>
    </ul>
</div>
@stop

@section('content')
<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card">
            <div class="body">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Enter Blog title" />
                </div>
                <select class="form-control show-tick">
                    <option>Select Category</option>
                    <option>Web Design</option>
                    <option>Photography</option>
                    <option>Technology</option>
                    <option>Lifestyle</option>
                    <option>Sports</option>
                </select>
                <div class="form-group m-t-20 m-b-20">
                    <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
                    <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
                </div>
                <textarea id="ckeditor">
                    <h2>WYSIWYG Editor</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ullamcorper sapien non nisl facilisis bibendum in quis tellus. Duis in urna bibendum turpis pretium fringilla. Aenean neque velit, porta eget mattis ac, imperdiet quis nisi. Donec non dui et tortor vulputate luctus. Praesent consequat rhoncus velit, ut molestie arcu venenatis sodales.</p>
                    <h3>Lacinia</h3>
                    <ul>
                        <li>Suspendisse tincidunt urna ut velit ullamcorper fermentum.</li>
                        <li>Nullam mattis sodales lacus, in gravida sem auctor at.</li>
                        <li>Praesent non lacinia mi.</li>
                        <li>Mauris a ante neque.</li>
                        <li>Aenean ut magna lobortis nunc feugiat sagittis.</li>
                    </ul>
                    <h3>Pellentesque adipiscing</h3>
                    <p>Maecenas quis ante ante. Nunc adipiscing rhoncus rutrum. Pellentesque adipiscing urna mi, ut tempus lacus ultrices ac. Pellentesque sodales, libero et mollis interdum, dui odio vestibulum dolor, eu pellentesque nisl nibh quis nunc. Sed porttitor leo adipiscing venenatis vehicula. Aenean quis viverra enim. Praesent porttitor ut ipsum id ornare.</p>
                </textarea>
                <button type="button" class="btn btn-block btn-primary btn-round waves-effect m-t-20">Post</button>
            </div>
        </div>
    </div>            
</div>
@stop


@section('page-styles')
<link rel="stylesheet" href="{{ asset('assets/plugins/dropzone/dropzone.css') }}">
<link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap-select/css/bootstrap-select.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/blog.css') }}">
@stop

@section('page-script')
<script src="{{ asset('assets/plugins/dropzone/dropzone.js') }}"></script>
<script src="{{ asset('assets/plugins/ckeditor/ckeditor.js') }}"></script>

<script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>
<script src="{{ asset('assets/js/pages/forms/editors.js') }}"></script>
@stop