@extends('layout.master')
@section('parentPageTitle', 'Ui')
@section('title', 'List groups')

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
            <!-- Basic Examples -->
            <div class="col-lg-6 col-md-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>Basic</strong> Examples <small>The most basic list group is simply an unordered list with list items, and the proper classes.</small> </h2>
                        <ul class="header-dropdown">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else</a></li>
                                </ul>
                            </li>
                            <li class="remove">
                                <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <ul class="list-group">
                            <li class="list-group-item">Cras justo odio</li>
                            <li class="list-group-item">Dapibus ac facilisis in</li>
                            <li class="list-group-item">Morbi leo risus</li>
                            <li class="list-group-item">Porta ac consectetur ac</li>
                            <li class="list-group-item">Vestibulum at eros</li>
                        </ul>
                    </div>
                </div>
                <div class="card">
                    <div class="header">
                        <h2><strong>Button</strong> Items <small>List group items may be buttons instead of list items (that also means a parent <code>&lt;div&gt;</code> instead of an <code>&lt;ul&gt;</code>). No need for individual parents around each element. Don't use the standard <code>.btn</code> classes here.</small> </h2>
                        <ul class="header-dropdown">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else</a></li>
                                </ul>
                            </li>
                            <li class="remove">
                                <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="list-group">
                            <button type="button" class="list-group-item">Cras justo odio</button>
                            <button type="button" class="list-group-item">Dapibus ac facilisis in</button>
                            <button type="button" class="list-group-item">Morbi leo risus</button>
                            <button type="button" class="list-group-item">Porta ac consectetur ac</button>
                            <button type="button" class="list-group-item">Vestibulum at eros</button>
                        </div>
                    </div>
                </div>
            </div>            
            <!-- Badges -->
            <div class="col-lg-6 col-md-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>Badges</strong> <small>Add the badges component to any list group item and it will automatically be positioned on the right.</small> </h2>
                        <ul class="header-dropdown">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else</a></li>
                                </ul>
                            </li>
                            <li class="remove">
                                <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <ul class="list-group">
                            <li class="list-group-item">Cras justo odio <span class="badge badge-primary">14 new</span></li>
                            <li class="list-group-item">Dapibus ac facilisis in <span class="badge badge-success">99 read</span></li>
                            <li class="list-group-item">Morbi leo risus <span class="badge badge-danger">99+</span></li>
                            <li class="list-group-item">Porta ac consectetur ac <span class="badge badge-warning">21</span></li>
                            <li class="list-group-item">Vestibulum at eros <span class="badge badge-info">18</span></li>
                        </ul>
                    </div>
                </div>
                <div class="card">
                    <div class="header">
                        <h2> <strong>Linked</strong> Items <small>Linkify list group items by using anchor tags instead of list items (that also means a parent <code>&lt;div&gt;</code> instead of an <code>&lt;ul&gt;</code>). No need for individual parents around each element.</small> </h2>
                        <ul class="header-dropdown">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else</a></li>
                                </ul>
                            </li>
                            <li class="remove">
                                <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="list-group"> <a href="javascript:void(0);" class="list-group-item active"> Cras justo odio </a> <a href="javascript:void(0);" class="list-group-item">Dapibus ac facilisis in</a> <a href="javascript:void(0);" class="list-group-item">Morbi leo risus</a> <a href="javascript:void(0);" class="list-group-item">Porta ac consectetur ac</a> <a href="javascript:void(0);" class="list-group-item">Vestibulum at eros</a> </div>
                    </div>
                </div>
            </div>            
        </div>        
        <!-- Disabled Items -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2> <strong>Disabled</strong> Items <small>Add <code>.disabled</code> to a <code>.list-group-item</code> to gray it out to appear disabled.</small> </h2>
                        <ul class="header-dropdown">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else</a></li>
                                </ul>
                            </li>
                            <li class="remove">
                                <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="list-group"> <a href="javascript:void(0);" class="list-group-item disabled"> Cras justo odio </a> <a href="javascript:void(0);" class="list-group-item">Dapibus ac facilisis in</a> <a href="javascript:void(0);" class="list-group-item">Morbi leo risus</a> <a href="javascript:void(0);" class="list-group-item">Porta ac consectetur ac</a> <a href="javascript:void(0);" class="list-group-item">Vestibulum at eros</a> </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Disabled Items -->
        
        <div class="row clearfix"> 
            <!-- Contextal Classes -->
            <div class="col-lg-6 col-md-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>Contextal</strong> Classes <small>Use contextual classes to style list items, default or linked. Also includes <code>.active</code> state.</small> </h2>
                        <ul class="header-dropdown">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else</a></li>
                                </ul>
                            </li>
                            <li class="remove">
                                <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <ul class="list-group">
                            <li class="list-group-item list-group-item-success">Dapibus ac facilisis in</li>
                            <li class="list-group-item list-group-item-info">Cras sit amet nibh libero</li>
                            <li class="list-group-item list-group-item-warning">Porta ac consectetur ac</li>
                            <li class="list-group-item list-group-item-danger">Vestibulum at eros</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #END# Contextal Classes --> 
            <!-- Contextual Classes With Linked Items -->
            <div class="col-lg-6 col-md-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>Contextual</strong> Classes With Linked Items <small>Use contextual classes to style list items, default or linked. Also includes <code>.active</code> state.</small> </h2>
                        <ul class="header-dropdown">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else</a></li>
                                </ul>
                            </li>
                            <li class="remove">
                                <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="list-group"> <a href="javascript:void(0);" class="list-group-item list-group-item-success">Dapibus ac facilisis in</a> <a href="javascript:void(0);" class="list-group-item list-group-item-info">Cras sit amet nibh libero</a> <a href="javascript:void(0);" class="list-group-item list-group-item-warning">Porta ac consectetur ac</a> <a href="javascript:void(0);" class="list-group-item list-group-item-danger">Vestibulum at eros</a> </div>
                    </div>
                </div>
            </div>
            <!-- #END# Contextual Classes With Linked Items --> 
        </div>

        <div class="row clearfix"> 
            <!-- Colorful Items With Material Design Colors -->
            <div class="col-lg-6 col-md-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>Colorful</strong> Items With Material Design Colors <small>You can use material design colors which examples are <code>.list-group-bg-pink, .list-group-bg-cyan</code> class</small> </h2>
                        <ul class="header-dropdown">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else</a></li>
                                </ul>
                            </li>
                            <li class="remove">
                                <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <ul class="list-group">
                            <li class="list-group-item l-turquoise">Dapibus ac facilisis in</li>
                            <li class="list-group-item l-blue">Cras sit amet nibh libero</li>
                            <li class="list-group-item l-blush">Porta ac consectetur ac</li>
                            <li class="list-group-item l-amber">Vestibulum at eros</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #END# Colorful Items With Material Design Colors --> 
            <!-- Custom Content -->
            <div class="col-lg-6 col-md-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>Custom</strong> Content <small>Add nearly any HTML within, even for linked list groups like the one below.</small> </h2>
                        <ul class="header-dropdown">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else</a></li>
                                </ul>
                            </li>
                            <li class="remove">
                                <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="list-group"> <a href="javascript:void(0);" class="list-group-item list-group-bg-pink">Dapibus ac facilisis in</a> <a href="javascript:void(0);" class="list-group-item list-group-bg-cyan">Cras sit amet nibh libero</a> <a href="javascript:void(0);" class="list-group-item list-group-bg-teal">Porta ac consectetur ac</a> <a href="javascript:void(0);" class="list-group-item list-group-bg-orange">Vestibulum at eros</a> </div>
                    </div>
                </div>
            </div>
            <!-- #END# Custom Content --> 
        </div>
        
        <!-- Contextual Classes With Linked Items -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>Contextual</strong> Classes With Linked Items <small>Use contextual classes to style list items, default or linked. Also includes <code>.active</code> state.</small> </h2>
                        <ul class="header-dropdown">
                            <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="javascript:void(0);">Action</a></li>
                                    <li><a href="javascript:void(0);">Another action</a></li>
                                    <li><a href="javascript:void(0);">Something else</a></li>
                                </ul>
                            </li>
                            <li class="remove">
                                <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="body">
                        <div class="list-group"> <a href="javascript:void(0);" class="list-group-item active">
                            <h4 class="list-group-item-heading">List group item heading</h4>
                            <p class="list-group-item-text"> Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit mediocritatem an. Pri ut tation electram moderatius.
                                Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent aliquid
                                pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere gubergren
                                sadipscing mel. </p>
                            </a> <a href="javascript:void(0);" class="list-group-item">
                            <h4 class="list-group-item-heading">List group item heading</h4>
                            <p class="list-group-item-text"> Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit mediocritatem an. Pri ut tation electram moderatius.
                                Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent aliquid
                                pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere gubergren
                                sadipscing mel. </p>
                            </a> <a href="javascript:void(0);" class="list-group-item">
                            <h4 class="list-group-item-heading">List group item heading</h4>
                            <p class="list-group-item-text"> Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit mediocritatem an. Pri ut tation electram moderatius.
                                Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent aliquid
                                pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere gubergren
                                sadipscing mel. </p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Contextual Classes With Linked Items -->
@stop


@section('page-popup')

@stop

@section('page-styles')

@stop

@section('page-script')
<script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>
@stop