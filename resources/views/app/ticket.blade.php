@extends('layout.master')
@section('parentPageTitle', 'App')
@section('title', 'New Post')

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
    <button type="button" class="btn btn-primary btn-round btn-simple float-right hidden-xs m-l-10">Add New</button>
</div>
@stop

@section('content')
<div class="row clearfix">
    <div class="col-lg-3 col-md-6">
        <div class="card">
            <div class="body text-center">
                <input type="text" class="knob" value="86" data-width="70" data-height="70" data-thickness="0.1" data-fgColor="#ff598f">
                <h3 class="m-b-0 m-t-10 number count-to" data-from="0" data-to="2078" data-speed="2000" data-fresh-interval="700">2078</h3>
                <span >Total Tickets</span>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="card">
            <div class="body text-center">
                <input type="text" class="knob" value="45" data-width="70" data-height="70" data-thickness="0.1" data-fgColor="#400191">
                <h3 class="m-b-0 m-t-10 number count-to" data-from="0" data-to="1278" data-speed="2000" data-fresh-interval="700">1278</h3>
                <span>Resolve</span>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="card">
            <div class="body text-center">
                <input type="text" class="knob" value="35" data-width="70" data-height="70" data-thickness="0.1" data-fgColor="#f78c40">
                <h3 class="m-b-0 m-t-10 number count-to" data-from="0" data-to="521" data-speed="2000" data-fresh-interval="700">521</h3>
                <span>Pending</span>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="card">
            <div class="body text-center">
                <input type="text" class="knob" value="15" data-width="70" data-height="70" data-thickness="0.1" data-fgColor="#4875b4">
                <h3 class="m-b-0 m-t-10 number count-to" data-from="0" data-to="978" data-speed="2000" data-fresh-interval="700">978</h3>
                <span>Responded</span>
            </div>
        </div>
    </div>
</div>
<div class="row clearfix">
    <div class="col-lg-12 col-md-12">
        <div class="card">
            <div class="header">
                <h2><strong>Support</strong> & Ticket List</h2>
                <ul class="header-dropdown">                            
                    <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                        <ul class="dropdown-menu dropdown-menu-right float-right">
                            <li><a href="javascript:void(0);">Action</a></li>
                            <li><a href="javascript:void(0);">Another action</a></li>
                            <li><a href="javascript:void(0);">Something else</a></li>
                            <li><a href="javascript:void(0);" class="boxs-close">Delete</a></li>
                        </ul>
                    </li>                            
                </ul>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Assign By</th>
                                <th>Assign to</th>
                                <th>Email</th>
                                <th>Sbuject</th>
                                <th>Status</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>                                
                        <tbody>
                            <tr>
                                <td>231</td>
                                <td>Airi Satou</td>
                                <td>Angelica Ramos</td>
                                <td>airi@example.com</td>
                                <td>New Code Update</td>
                                <td><span class="badge badge-default">Pending</span></td>
                                <td>24-04-2018</td>
                                <td>
                                    <button class="btn btn-sm btn-icon btn-neutral btn-icon-mini margin-0"><i class="zmdi zmdi-edit"></i></button>
                                    <button class="btn btn-sm btn-icon btn-neutral btn-icon-mini margin-0"><i class="zmdi zmdi-delete"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>235</td>
                                <td>Brenden Wagner</td>
                                <td>Ashton Cox</td>
                                <td>airi@example.com</td>
                                <td>New Code Update</td>
                                <td><span class="badge badge-success">Complete</span></td>
                                <td>24-04-2018</td>
                                <td>
                                    <button class="btn btn-sm btn-icon btn-neutral btn-icon-mini margin-0"><i class="zmdi zmdi-edit"></i></button>
                                    <button class="btn btn-sm btn-icon btn-neutral btn-icon-mini margin-0"><i class="zmdi zmdi-delete"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>236</td>
                                <td>Bradley Greer</td>
                                <td>Cara Stevens</td>
                                <td>airi@example.com</td>
                                <td>New Code Update</td>
                                <td><span class="badge badge-success">Complete</span></td>
                                <td>24-04-2018</td>
                                <td>
                                    <button class="btn btn-sm btn-icon btn-neutral btn-icon-mini margin-0"><i class="zmdi zmdi-edit"></i></button>
                                    <button class="btn btn-sm btn-icon btn-neutral btn-icon-mini margin-0"><i class="zmdi zmdi-delete"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>245</td>
                                <td>Cara Stevens</td>
                                <td>Airi Satou</td>
                                <td>airi@example.com</td>
                                <td>New Code Update</td>
                                <td><span class="badge badge-default">Pending</span></td>
                                <td>24-04-2018</td>
                                <td>
                                    <button class="btn btn-sm btn-icon btn-neutral btn-icon-mini margin-0"><i class="zmdi zmdi-edit"></i></button>
                                    <button class="btn btn-sm btn-icon btn-neutral btn-icon-mini margin-0"><i class="zmdi zmdi-delete"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>248</td>
                                <td>Airi Satou</td>
                                <td>Angelica Ramos</td>
                                <td>airi@example.com</td>
                                <td>New Code Update</td>
                                <td><span class="badge badge-success">Complete</span></td>
                                <td>24-04-2018</td>
                                <td>
                                    <button class="btn btn-sm btn-icon btn-neutral btn-icon-mini margin-0"><i class="zmdi zmdi-edit"></i></button>
                                    <button class="btn btn-sm btn-icon btn-neutral btn-icon-mini margin-0"><i class="zmdi zmdi-delete"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>250</td>
                                <td>Jenette Caldwell</td>
                                <td>Hermione Butler</td>
                                <td>airi@example.com</td>
                                <td>New Code Update</td>
                                <td><span class="badge badge-warning">New</span></td>
                                <td>24-04-2018</td>
                                <td>
                                    <button class="btn btn-sm btn-icon btn-neutral btn-icon-mini margin-0"><i class="zmdi zmdi-edit"></i></button>
                                    <button class="btn btn-sm btn-icon btn-neutral btn-icon-mini margin-0"><i class="zmdi zmdi-delete"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>260</td>
                                <td>Paul Byrd</td>
                                <td>Michael Bruce</td>
                                <td>airi@example.com</td>
                                <td>New Code Update</td>
                                <td><span class="badge badge-warning">New</span></td>
                                <td>24-04-2018</td>
                                <td>
                                    <button class="btn btn-sm btn-icon btn-neutral btn-icon-mini margin-0"><i class="zmdi zmdi-edit"></i></button>
                                    <button class="btn btn-sm btn-icon btn-neutral btn-icon-mini margin-0"><i class="zmdi zmdi-delete"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>261</td>
                                <td>Lael Greer</td>
                                <td>Martena Mccray</td>
                                <td>airi@example.com</td>
                                <td>New Code Update</td>
                                <td><span class="badge badge-warning">New</span></td>
                                <td>24-04-2018</td>
                                <td>
                                    <button class="btn btn-sm btn-icon btn-neutral btn-icon-mini margin-0"><i class="zmdi zmdi-edit"></i></button>
                                    <button class="btn btn-sm btn-icon btn-neutral btn-icon-mini margin-0"><i class="zmdi zmdi-delete"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>262</td>
                                <td>Airi Satou</td>
                                <td>Angelica Ramos</td>
                                <td>airi@example.com</td>
                                <td>New Code Update</td>
                                <td><span class="badge badge-warning">New</span></td>
                                <td>24-04-2018</td>
                                <td>
                                    <button class="btn btn-sm btn-icon btn-neutral btn-icon-mini margin-0"><i class="zmdi zmdi-edit"></i></button>
                                    <button class="btn btn-sm btn-icon btn-neutral btn-icon-mini margin-0"><i class="zmdi zmdi-delete"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>278</td>
                                <td>Airi Satou</td>
                                <td>Angelica Ramos</td>
                                <td>airi@example.com</td>
                                <td>New Code Update</td>
                                <td><span class="badge badge-default">Pending</span></td>
                                <td>24-04-2018</td>
                                <td>
                                    <button class="btn btn-sm btn-icon btn-neutral btn-icon-mini margin-0"><i class="zmdi zmdi-edit"></i></button>
                                    <button class="btn btn-sm btn-icon btn-neutral btn-icon-mini margin-0"><i class="zmdi zmdi-delete"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>278</td>
                                <td>Airi Satou</td>
                                <td>Angelica Ramos</td>
                                <td>airi@example.com</td>
                                <td>New Code Update</td>
                                <td><span class="badge badge-default">Pending</span></td>
                                <td>24-04-2018</td>
                                <td>
                                    <button class="btn btn-sm btn-icon btn-neutral btn-icon-mini margin-0"><i class="zmdi zmdi-edit"></i></button>
                                    <button class="btn btn-sm btn-icon btn-neutral btn-icon-mini margin-0"><i class="zmdi zmdi-delete"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@stop


@section('page-styles')
<link rel="stylesheet" href="{{ asset('assets/plugins/jquery-datatable/dataTables.bootstrap4.min.css') }}">
@stop

@section('page-script')
<script src="{{ asset('assets/bundles/datatablescripts.bundle.js') }}"></script>
<script src="{{ asset('assets/plugins/jquery-knob/jquery.knob.min.js') }}"></script>

<script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>
<script src="{{ asset('assets/js/pages/tables/jquery-datatable.js') }}"></script>
<script src="{{ asset('assets/js/pages/charts/jquery-knob.js') }}"></script>
@stop