@extends('layout.master')
@section('parentPageTitle', 'Tables')
@section('title', 'Tables Color')

@section('sub-header')
<div class="col-lg-6 col-md-4 col-sm-12 text-right">
    <div class="inlineblock text-center m-r-15 m-l-15 hidden-sm">
        <div class="sparkline" data-type="bar" data-width="97%" data-height="28px" data-bar-Width="2" data-bar-Spacing="5" data-bar-Color="#706bd1">3,2,6,5,9,8,7,9,5,1,3,5,7,4,6</div>
        <small>Page Views</small>
    </div>
    <div class="inlineblock text-center m-r-15 m-l-15 hidden-sm">
        <div class="sparkline" data-type="bar" data-width="97%" data-height="28px" data-bar-Width="2" data-bar-Spacing="5" data-bar-Color="#2196f3">1,3,5,7,4,6,3,2,6,5,9,8,7,9,5</div>
        <small>Visitors</small>
    </div>
    <button class="btn btn-primary btn-round btn-simple float-right hidden-xs m-l-10">Create New</button>
</div>
@stop

@section('sub-action-bar')

@stop


@section('content')
<div class="row clearfix">
    <div class="col-md-12">
        <div class="card">
            <div class="header">
                <h2><strong>Table</strong> Dark<small>Add Class <code>.table-dark .table-striped</code></small></h2>
                <ul class="header-dropdown">
                    <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li><a href="javascript:void(0);">Action</a></li>
                            <li><a href="javascript:void(0);">Another action</a></li>
                            <li><a href="javascript:void(0);">Something else</a></li>
                            <li><a href="javascript:void(0);" class="boxs-close">Delete</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="body table-responsive">
                <table class="table m-b-0 table-striped table-dark">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>@twitter</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-12 col-sm-12">
        <div class="card">
            <div class="header">
                <h2><strong>Table head</strong> Dark<small>Add Class <code>.thead-dark</code></small></h2>
                <ul class="header-dropdown">
                    <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li><a href="javascript:void(0);">Action</a></li>
                            <li><a href="javascript:void(0);">Another action</a></li>
                            <li><a href="javascript:void(0);">Something else</a></li>
                            <li><a href="javascript:void(0);" class="boxs-close">Delete</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="body table-responsive">
                <table class="table m-b-0">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        </tr>
                        <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                        </tr>
                        <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                        </tr>
                    </tbody>
                    </table>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-12 col-sm-12">
        <div class="card">
            <div class="header">
                <h2><strong>Table head</strong> Light<small>Add Class <code>.thead-light</code></small></h2>
                <ul class="header-dropdown">
                    <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li><a href="javascript:void(0);">Action</a></li>
                            <li><a href="javascript:void(0);">Another action</a></li>
                            <li><a href="javascript:void(0);">Something else</a></li>
                            <li><a href="javascript:void(0);" class="boxs-close">Delete</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="body table-responsive">
                <table class="table m-b-0">
                    <thead class="thead-light">
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        </tr>
                        <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                        </tr>
                        <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                        </tr>
                    </tbody>
                    </table>
            </div>
        </div>
    </div>            
</div>
<div class="row clearfix">
    <div class="col-lg-6 col-md-12 col-sm-12">
        <div class="card">
            <div class="header">
                <h2><strong>Solid Color</strong> background <small>Add Class <code>.bg-pink</code></small> </h2>
                <ul class="header-dropdown">
                    <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li><a href="javascript:void(0);">Action</a></li>
                            <li><a href="javascript:void(0);">Another action</a></li>
                            <li><a href="javascript:void(0);">Something else</a></li>
                            <li><a href="javascript:void(0);" class="boxs-close">Delete</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="body table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Class name</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="bg-blue">
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>.bg-blue</td>
                        </tr>
                        <tr class="bg-cyan">
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>.bg-cyan</td>
                        </tr>
                        <tr class="bg-amber">
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>.bg-amber</td>
                        </tr>
                        <tr class="bg-blush">
                            <th scope="row">4</th>
                            <td>Larry</td>
                            <td>Jellybean</td>
                            <td>.bg-blush</td>
                        </tr>
                        <tr class="bg-purple">
                            <th scope="row">5</th>
                            <td>Larry</td>
                            <td>Kikat</td>
                            <td>.bg-purple</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-12 col-sm-12">
        <div class="card">
            <div class="header">
                <h2><strong>Gradient Color</strong> background <small>Add Class <code>.l-pink</code></small> </h2>
                <ul class="header-dropdown">
                    <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li><a href="javascript:void(0);">Action</a></li>
                            <li><a href="javascript:void(0);">Another action</a></li>
                            <li><a href="javascript:void(0);">Something else</a></li>
                            <li><a href="javascript:void(0);" class="boxs-close">Delete</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="body table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Class name</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="l-pink">
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>.l-pink</td>
                        </tr>
                        <tr class="l-turquoise">
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>.l-turquoise</td>
                        </tr>
                        <tr class="l-parpl">
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>.l-parpl</td>
                        </tr>
                        <tr class="l-blue">
                            <th scope="row">4</th>
                            <td>Larry</td>
                            <td>Jellybean</td>
                            <td>.l-blue</td>
                        </tr>
                        <tr class="l-blush">
                            <th scope="row">5</th>
                            <td>Larry</td>
                            <td>Kikat</td>
                            <td>.l-blush</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card">
            <div class="header">
                <h2><strong>Light Color</strong> background <small>Add Class <code>.xl-pink</code></small> </h2>
                <ul class="header-dropdown">
                    <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li><a href="javascript:void(0);">Action</a></li>
                            <li><a href="javascript:void(0);">Another action</a></li>
                            <li><a href="javascript:void(0);">Something else</a></li>
                            <li><a href="javascript:void(0);" class="boxs-close">Delete</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="body table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Class name</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="xl-pink">
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>.xl-pink</td>
                        </tr>
                        <tr class="xl-turquoise">
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>.xl-turquoise</td>
                        </tr>
                        <tr class="xl-parpl">
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>the Bird</td>
                            <td>.xl-parpl</td>
                        </tr>
                        <tr class="xl-blue">
                            <th scope="row">4</th>
                            <td>Larry</td>
                            <td>Jellybean</td>
                            <td>.xl-blue</td>
                        </tr>
                        <tr class="xl-khaki">
                            <th scope="row">5</th>
                            <td>Larry</td>
                            <td>Kikat</td>
                            <td>.xl-khaki</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card">
            <div class="header">
                <h2><strong>Bootstrap 4 Table</strong> background <small>The contextual classes that can be used are:</small> </h2>
                <ul class="header-dropdown">
                    <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li><a href="javascript:void(0);">Action</a></li>
                            <li><a href="javascript:void(0);">Another action</a></li>
                            <li><a href="javascript:void(0);">Something else</a></li>
                            <li><a href="javascript:void(0);" class="boxs-close">Delete</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="body table-responsive">
                <table class="table table-striped table-bordered">
                    <thead>
                    <tr>
                        <th>Class</th>
                        <th>Description</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><code class="w3-codespan">.table-primary</code></td>
                        <td>Blue: Indicates an important action</td>
                    </tr>
                    <tr>
                        <td><code class="w3-codespan">.table-success</code></td>
                        <td>Green: Indicates a successful or positive action</td>
                    </tr>
                    <tr>
                        <td><code class="w3-codespan">.table-danger</code></td>
                        <td>Red: Indicates a dangerous or potentially negative action</td>
                    </tr>
                    <tr>
                        <td><code class="w3-codespan">.table-info</code></td>
                        <td>Light blue: Indicates a neutral informative change or action</td>
                    </tr>
                    <tr>
                        <td><code class="w3-codespan">.table-warning</code></td>
                        <td>Orange: Indicates a warning that might need attention</td>
                    </tr>
                    <tr>
                        <td><code class="w3-codespan">.table-active</code></td>
                        <td>Grey: Applies the hover color to the table row or table cell</td>
                    </tr>
                    <tr>
                        <td><code class="w3-codespan">.table-secondary</code></td>
                        <td>Grey: Indicates a slightly less important action</td>
                    </tr>
                    <tr>
                        <td><code class="w3-codespan">.table-light</code></td>
                        <td>Light grey table or table row background</td>
                    </tr>
                    <tr>
                        <td><code class="w3-codespan">.table-dark</code></td>
                        <td>Dark grey table or table row background</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@stop

@section('page-popup')

@stop

@section('page-styles')

@stop

@section('page-script')
<script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>
@stop