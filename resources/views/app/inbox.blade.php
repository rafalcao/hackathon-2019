@extends('layout.master')
@section('parentPageTitle', 'Inbox')
@section('title', 'Inbox List')

@section('sub-header')
<div class="col-lg-6 col-md-4 col-sm-12 text-right">
    <div class="inlineblock text-center m-r-15 m-l-15 hidden-sm">
        <h5 class="m-b-0"><i class="zmdi zmdi-inbox m-r-10"></i>125</h5>
        <small>Primary</small>
    </div>
    <div class="inlineblock text-center m-r-15 m-l-15 hidden-sm">
        <h5 class="m-b-0"><i class="zmdi zmdi-alert-circle m-r-10"></i>348</h5>
        <small>Updates</small>
    </div>
    <a href="{{route('app.compose')}}" class="btn btn-primary btn-round btn-simple float-right hidden-xs m-l-10">Compose</a>
</div>
@stop

@section('sub-action-bar')
<hr>
<div class="inbox">
    <div class="row clearfix action_bar">
        <div class="col-lg-1 col-md-1 col-3">
            <div class="checkbox inlineblock delete_all">
                <input id="deleteall" type="checkbox">
                <label for="deleteall">All</label>
            </div>                                
        </div>
        <div class="col-lg-5 col-md-5 col-6">
            <div class="input-group search">
                <input type="text" class="form-control" placeholder="Search...">
                <span class="input-group-addon"><i class="zmdi zmdi-search"></i></span>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-3 text-right">
            <div class="btn-group hidden-sm">
                <button type="button" class="btn btn-neutral dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">More<span class="caret"></span> </button>
                <ul class="dropdown-menu dropdown-menu-right">
                    <li><a href="javascript:void(0);">Unread</a></li>
                    <li><a href="javascript:void(0);">Unimportant</a></li>
                    <li><a href="javascript:void(0);">Add star</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="javascript:void(0);">Mute</a></li>
                </ul>
            </div>
            <div class="btn-group hidden-md-down hidden-sm">
                <div class="btn-group">
                    <button type="button" class="btn btn-neutral dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="zmdi zmdi-label"></i>
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <li>
                            <a href="javascript:void(0);">Family</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">Work</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">Google</a>
                        </li>
                        <li role="separator" class="divider"></li>
                        <li>
                            <a href="javascript:void(0);">Create a Label</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="btn-group hidden-md-down hidden-sm">
                <button type="button" class="btn btn-neutral dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-folder"></i> <span class="caret"></span> </button>
                <ul class="dropdown-menu dropdown-menu-right">
                    <li><a href="javascript:void(0);">Important</a></li>
                    <li><a href="javascript:void(0);">Social</a></li>
                    <li><a href="javascript:void(0);">Bank Statements</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="javascript:void(0);">Create a folder</a></li>
                </ul>
            </div>                                
            <button type="button" class="btn btn-neutral hidden-sm">
                <i class="zmdi zmdi-plus-circle"></i>
            </button>
            <button type="button" class="btn btn-neutral hidden-sm">
                <i class="zmdi zmdi-archive"></i>
            </button>
            <button type="button" class="btn btn-neutral btn-danger">
                <i class="zmdi zmdi-delete"></i>
            </button>
        </div>
    </div>
</div>
@stop

@section('content')
<div class="inbox">
    <div class="row clearfix">
        <div class="col-lg-12">
            <div class="card overflowhidden">
                <ul class="mail_list list-group list-unstyled">
                    <li class="list-group-item">
                        <div class="media">
                            <div>
                                <div class="controls">
                                    <div class="checkbox">
                                        <input type="checkbox" id="basic_checkbox_1">
                                        <label for="basic_checkbox_1"></label>
                                    </div>
                                    <a href="javascript:void(0);" class="favourite text-muted hidden-sm"><i class="zmdi zmdi-star-outline"></i></a>
                                </div>
                                <div class="thumb hidden-sm m-r-20"> <img src="../assets/images/xs/avatar1.jpg" class="rounded-circle" alt=""> </div>
                            </div>
                            <div class="media-body">
                                <div class="media-heading">
                                    <a href="{{route('app.details')}}" class="m-r-10">John Smith </a>
                                    <span class="badge badge-info">Family</span>
                                    <small class="text-muted hidden-sm time">11:35 AM</small>
                                </div>
                                <p class="msg"><span class="m-r-10">[ThemeForest]</span>Lorem Ipsum is simply dumm dummy text of the printing and typesetting industry. </p>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item unread">
                        <div class="media">
                            <div>
                                <div class="controls">
                                    <div class="checkbox">
                                        <input type="checkbox" id="basic_checkbox_2">
                                        <label for="basic_checkbox_2"></label>
                                    </div>
                                    <a href="javascript:void(0);" class="favourite col-amber hidden-sm"><i class="zmdi zmdi-star"></i></a>
                                </div>
                                <div class="thumb hidden-sm m-r-20"> <img src="../assets/images/xs/avatar2.jpg" class="rounded-circle" alt=""> </div>
                            </div>
                            <div class="media-body">
                                <div class="media-heading">
                                    <a href="{{route('app.details')}}" class="m-r-10">Maryam Amiri</a>
                                    <span class="badge badge-warning">Shop</span>
                                    <small class="text-muted hidden-sm time">11:45 AM</small>
                                </div>
                                <p class="msg"><span class="m-r-10">[Google]</span>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>                                
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="media">
                            <div>
                                <div class="controls">
                                    <div class="checkbox">
                                        <input type="checkbox" id="basic_checkbox_3">
                                        <label for="basic_checkbox_3"></label>
                                    </div>
                                    <a href="javascript:void(0);" class="favourite text-muted hidden-sm"><i class="zmdi zmdi-star-outline"></i></a>
                                </div>
                                <div class="thumb hidden-sm m-r-20"> <img src="../assets/images/xs/avatar3.jpg" class="rounded-circle" alt=""> </div>
                            </div>
                            <div class="media-body">
                                <div class="media-heading">
                                    <a href="{{route('app.details')}}" class="m-r-10">Fidel Tonn</a>
                                    <span class="badge badge-primary">Google</span>
                                    <small class="text-muted hidden-sm time">12:35 PM</small>
                                </div>
                                <p class="msg"><span class="m-r-10">[ThemeForest]</span>If you are going to use a passage of Lorem Ipsum, you need to be sure</p>                                
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item unread">
                        <div class="media">
                            <div>
                                <div class="controls">
                                    <div class="checkbox">
                                        <input type="checkbox" id="basic_checkbox_4">
                                        <label for="basic_checkbox_4"></label>
                                    </div>
                                    <a href="javascript:void(0);" class="favourite text-muted hidden-sm"><i class="zmdi zmdi-star-outline"></i></a>
                                </div>
                                <div class="thumb hidden-sm m-r-20"> <img src="../assets/images/xs/avatar4.jpg" class="rounded-circle" alt=""> </div>
                            </div>
                            <div class="media-body">
                                <div class="media-heading">
                                    <a href="{{route('app.details')}}" class="m-r-10">Gary Camara</a>
                                    <span class="badge badge-danger">Themeforest</span>
                                    <small class="text-muted hidden-sm time">5 Apr</small>
                                </div>
                                <p class="msg"><span class="m-r-10">[Support]</span>There are many variations of passages of Lorem Ipsum available, but the majority </p>                                
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="media">
                            <div>
                                <div class="controls">
                                    <div class="checkbox">
                                        <input type="checkbox" id="basic_checkbox_5">
                                        <label for="basic_checkbox_5"></label>
                                    </div>
                                    <a href="javascript:void(0);" class="favourite text-muted hidden-sm"><i class="zmdi zmdi-star-outline"></i></a>
                                </div>
                                <div class="thumb hidden-sm m-r-20"> <img src="../assets/images/xs/avatar5.jpg" class="rounded-circle" alt=""> </div>
                            </div>
                            <div class="media-body">
                                <div class="media-heading">
                                    <a href="{{route('app.details')}}" class="m-r-10">Frank Camly</a>
                                    <span class="badge badge-success">Work</span>
                                    <small class="text-muted hidden-sm time">12 Apr</small>
                                </div>
                                <p class="msg"><span class="m-r-10">[ThemeForest]</span>LAll the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary</p>                                
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="media">
                            <div>
                                <div class="controls">
                                    <div class="checkbox">
                                        <input type="checkbox" id="basic_checkbox_6">
                                        <label for="basic_checkbox_6"></label>
                                    </div>
                                    <a href="javascript:void(0);" class="favourite col-amber hidden-sm"><i class="zmdi zmdi-star"></i></a>
                                </div>
                                <div class="thumb hidden-sm m-r-20"> <img src="../assets/images/xs/avatar6.jpg" class="rounded-circle" alt=""> </div>
                            </div>
                            <div class="media-body">
                                <div class="media-heading">
                                    <a href="{{route('app.details')}}" class="m-r-10">Hossein Shams</a>
                                    <span class="badge badge-danger">Themeforest</span>
                                    <small class="text-muted hidden-sm time">15 Apr</small>
                                </div>
                                <p class="msg"><span class="m-r-10">[Support]</span>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical</p>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="media">
                            <div>
                                <div class="controls">
                                    <div class="checkbox">
                                        <input type="checkbox" id="basic_checkbox_7">
                                        <label for="basic_checkbox_7"></label>
                                    </div>
                                    <a href="javascript:void(0);" class="favourite col-amber hidden-sm"><i class="zmdi zmdi-star"></i></a>
                                </div>
                                <div class="thumb hidden-sm m-r-20"> <img src="../assets/images/xs/avatar7.jpg" class="rounded-circle" alt=""> </div>
                            </div>
                            <div class="media-body">
                                <div class="media-heading">
                                    <a href="{{route('app.details')}}" class="m-r-10">John Smith</a>
                                    <span class="badge badge-success">Work</span>
                                    <small class="text-muted hidden-sm time">22 Apr</small>
                                </div>
                                <p class="msg"><span class="m-r-10">[Support]</span>Lorem Ipsum is simply dumm dummy text of the printing and typesetting industry. </p>                                
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="media">
                            <div>
                                <div class="controls">
                                    <div class="checkbox">
                                        <input type="checkbox" id="basic_checkbox_8" checked>
                                        <label for="basic_checkbox_8"></label>
                                    </div>
                                    <a href="javascript:void(0);" class="favourite col-amber hidden-sm"><i class="zmdi zmdi-star"></i></a>
                                </div>
                                <div class="thumb hidden-sm m-r-20"> <img src="../assets/images/xs/avatar8.jpg" class="rounded-circle" alt=""> </div>
                            </div>
                            <div class="media-body">
                                <div class="media-heading">
                                    <a href="{{route('app.details')}}" class="m-r-10">Gary Camara</a>
                                    <span class="badge badge-danger">Themeforest</span>
                                    <small class="text-muted hidden-sm time">22 Apr</small>
                                </div>
                                <p class="msg"><span class="m-r-10">[CSS]</span>There are many variations of passages of Lorem Ipsum available, but the majority </p>                                
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="media">
                            <div>
                                <div class="controls">
                                    <div class="checkbox">
                                        <input type="checkbox" id="basic_checkbox_9">
                                        <label for="basic_checkbox_9"></label>
                                    </div>
                                    <a href="javascript:void(0);" class="favourite text-muted hidden-sm"><i class="zmdi zmdi-star-outline"></i></a>
                                </div>
                                <div class="thumb hidden-sm m-r-20"> <img src="../assets/images/xs/avatar9.jpg" class="rounded-circle" alt=""> </div>
                            </div>
                            <div class="media-body">
                                <div class="media-heading">
                                    <a href="{{route('app.details')}}" class="m-r-10">Tim Hank</a>
                                    <span class="badge badge-success">Work</span>
                                    <small class="text-muted hidden-sm time">23 Apr</small>
                                </div>
                                <p class="msg"><span class="m-r-10">[Awwwards]</span>LAll the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary</p>                                
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="media">
                            <div>
                                <div class="controls">
                                    <div class="checkbox">
                                        <input type="checkbox" id="basic_checkbox_10">
                                        <label for="basic_checkbox_10"></label>
                                    </div>
                                    <a href="javascript:void(0);" class="favourite text-muted hidden-sm"><i class="zmdi zmdi-star-outline"></i></a>
                                </div>
                                <div class="thumb hidden-sm m-r-20"> <img src="../assets/images/xs/avatar10.jpg" class="rounded-circle" alt=""> </div>
                            </div>
                            <div class="media-body">
                                <div class="media-heading">
                                    <a href="{{route('app.details')}}" class="m-r-10">Frank Camly</a>
                                    <span class="badge badge-info">Family</span>
                                    <small class="text-muted hidden-sm time">23 Apr</small>
                                </div>
                                <p class="msg"><span class="m-r-10">[WrapTheme]</span>Lorem Ipsum is simply dumm dummy text of the printing and typesetting industry. </p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>           
    </div>
    <div class="row clearfix">
        <div class="col-md-12 col-lg-12">
            <div class="card">
                <div class="body">
                    <p class="copyright m-b-0">Copyright 2018 © All Rights Reserved. InfiniO Dashboard Template</p>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('page-styles')
<link rel="stylesheet" href="{{ asset('assets/css/inbox.css') }}">
@stop

@section('page-script')
<script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>
@stop