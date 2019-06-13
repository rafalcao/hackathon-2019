@extends('layout.master')
@section('parentPageTitle', 'App')
@section('title', 'Taskboard')

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
    <a href="javascript:void(0);" data-toggle="modal" data-target="#addcontact" class="btn btn-primary btn-round btn-simple float-right hidden-xs m-l-10">Create New</a>
</div>
@stop

@section('content')
<div class="row clearfix">

    <div class="col-lg-4 col-md-12">
        <div class="card taskboard">
            <div class="header">
                <h2>Planned</h2>
            </div>
            <div class="body planned_task">
                <div class="dd" data-plugin="nestable">
                    <ol class="dd-list">
                        <li class="dd-item" data-id="1">
                            <div class="dd-handle">#L1008</div>
                            <div class="dd-content p-15">
                                <h5>Job title</h5>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                <ul class="list-unstyled team-info m-t-20 m-b-20">
                                    <li class="m-r-15"><small class="text-muted">Team</small></li>
                                    <li><img src="../assets/images/xs/avatar1.jpg" title="Avatar" alt="Avatar"></li>
                                    <li><img src="../assets/images/xs/avatar2.jpg" title="Avatar" alt="Avatar"></li>
                                    <li><img src="../assets/images/xs/avatar5.jpg" title="Avatar" alt="Avatar"></li>
                                </ul>
                                <hr>
                                <div class="action">
                                    <button type="button" class="btn btn-sm btn-primary btn-simple" title="Edit"><i class="icon-note"></i></button>
                                    <button type="button" class="btn btn-sm btn-primary btn-simple" title="Time"><i class="icon-clock"></i></button>
                                    <button type="button" class="btn btn-sm btn-primary btn-simple" title="Comment"><i class="icon-bubbles"></i></button>
                                    <button type="button" class="btn btn-sm btn-primary btn-simple" title="Delete"><i class="icon-trash"></i></button>
                                </div>
                            </div>
                        </li>                                    
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-4 col-md-12">
        <div class="card taskboard">
            <div class="header">
                <h2>In progress</h2>
            </div>
            <div class="body progress_task">
                <div class="dd" data-plugin="nestable">
                    <ol class="dd-list">
                        <li class="dd-item" data-id="1">
                            <div class="dd-handle">#L1010</div>
                            <div class="dd-content p-15">
                                <h5>Job title</h5>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                <hr>
                                <div class="action">
                                    <button type="button" class="btn btn-sm btn-primary btn-simple" title="Edit"><i class="icon-note"></i></button>
                                    <button type="button" class="btn btn-sm btn-primary btn-simple" title="Time"><i class="icon-clock"></i></button>
                                    <button type="button" class="btn btn-sm btn-primary btn-simple" title="Comment"><i class="icon-bubbles"></i></button>
                                    <button type="button" class="btn btn-sm btn-primary btn-simple" title="Delete"><i class="icon-trash"></i></button>
                                </div>
                            </div>
                        </li>
                        <li class="dd-item" data-id="1">
                            <div class="dd-handle">#L1011</div>
                            <div class="dd-content p-15">
                                <h5>Job title</h5>
                                <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero</p>
                                <ul class="list-unstyled team-info m-t-20 m-b-20">
                                    <li class="m-r-15"><small class="text-muted">Team</small></li>
                                    <li><img src="../assets/images/xs/avatar7.jpg" title="Avatar" alt="Avatar"></li>
                                    <li><img src="../assets/images/xs/avatar9.jpg" title="Avatar" alt="Avatar"></li>
                                </ul>
                                <hr>
                                <div class="action">
                                    <button type="button" class="btn btn-sm btn-primary btn-simple" title="Edit"><i class="icon-note"></i></button>
                                    <button type="button" class="btn btn-sm btn-primary btn-simple" title="Time"><i class="icon-clock"></i></button>
                                    <button type="button" class="btn btn-sm btn-primary btn-simple" title="Comment"><i class="icon-bubbles"></i></button>
                                    <button type="button" class="btn btn-sm btn-primary btn-simple" title="Delete"><i class="icon-trash"></i></button>
                                </div>
                            </div>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-4 col-md-12">
        <div class="card taskboard">
            <div class="header">
                <h2>Completed</h2>
            </div>
            <div class="body completed_task">
                <div class="dd" data-plugin="nestable">
                    <ol class="dd-list">                                   
                        <li class="dd-item" data-id="1">
                            <div class="dd-handle">#L1005</div>
                            <div class="dd-content p-15">
                                <h5>Job title</h5>
                                <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                                <ul class="list-unstyled team-info m-t-20 m-b-20">
                                    <li class="m-r-15"><small class="text-muted">Team</small></li>
                                    <li><img src="../assets/images/xs/avatar4.jpg" title="Avatar" alt="Avatar"></li>
                                    <li><img src="../assets/images/xs/avatar5.jpg" title="Avatar" alt="Avatar"></li>
                                    <li><img src="../assets/images/xs/avatar6.jpg" title="Avatar" alt="Avatar"></li>
                                    <li><img src="../assets/images/xs/avatar8.jpg" title="Avatar" alt="Avatar"></li>
                                </ul>
                                <hr>
                                <div class="action">
                                    <button type="button" class="btn btn-sm btn-primary btn-simple" title="Edit"><i class="icon-note"></i></button>
                                    <button type="button" class="btn btn-sm btn-primary btn-simple" title="Time"><i class="icon-clock"></i></button>
                                    <button type="button" class="btn btn-sm btn-primary btn-simple" title="Comment"><i class="icon-bubbles"></i></button>
                                    <button type="button" class="btn btn-sm btn-primary btn-simple" title="Delete"><i class="icon-trash"></i></button>
                                </div>
                            </div>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

</div>
@stop

@section('page-popup')
<!-- Add New Task -->
<div class="modal fade" id="addcontact" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="title" id="defaultModalLabel">Add New Task</h6>
            </div>
            <div class="modal-body">
                <div class="row clearfix">
                    <div class="col-12">
                        <div class="form-group">                                    
                            <input type="text" class="form-control" placeholder="Task no.">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">                                   
                            <input type="text" class="form-control" placeholder="Job title">
                        </div>
                    </div>
                    <div class="col-12">
                        <select class="form-control show-tick m-b-30">
                            <option>Select Team</option>
                            <option>John Smith</option>
                            <option>Hossein Shams</option>
                            <option>Maryam Amiri</option>
                            <option>Tim Hank</option>
                            <option>Gary Camara</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <textarea class="form-control" placeholder="Description"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-round btn-primary">Add</button>
                <button type="button" class="btn btn-round btn-secondary" data-dismiss="modal">CLOSE</button>
            </div>
        </div>
    </div>
</div>
@stop
@section('page-styles')
<link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap-select/css/bootstrap-select.css') }}">
<link rel="stylesheet" href="{{ asset('assets/plugins/nestable/jquery-nestable.css') }}">
@stop

@section('page-script')
<script src="{{ asset('assets/plugins/nestable/jquery.nestable.js') }}"></script>

<script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>
<script src="{{ asset('assets/js/pages/ui/sortable-nestable.js') }}"></script>
@stop