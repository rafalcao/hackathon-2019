@extends('layout.master')
@section('parentPageTitle', 'Pages')
@section('title', 'Projects List')

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

@section('content')
<div class="row clearfix">
    <div class="col-lg-12 col-md-12">
        <div class="card">
            <div class="body project_report">
                <div class="table-responsive">
                    <table class="table m-b-0 table-hover">
                        <thead>
                            <tr>
                                <th>Status</th>
                                <th>Project</th>
                                <th>Prograss</th>
                                <th>Team</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <span class="badge badge-success">Active</span>
                                </td>
                                <td class="project-title">
                                    <h6><a href="#">InfiniO 4.1</a></h6>
                                    <small>Created 14.Mar.2018</small>
                                </td>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar l-dark" role="progressbar" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100" style="width: 48%;"></div>                                                
                                    </div>
                                    <small>Completion with: 48%</small>
                                </td>
                                <td>
                                    <ul class="list-unstyled team-info">
                                        <li><img src="../assets/images/xs/avatar1.jpg" alt="Avatar"></li>
                                        <li><img src="../assets/images/xs/avatar2.jpg" alt="Avatar"></li>
                                        <li><img src="../assets/images/xs/avatar3.jpg" alt="Avatar"></li>
                                    </ul>
                                </td>
                                <td class="project-actions">
                                    <a href="#" class="btn btn-neutral btn-sm"><i class="zmdi zmdi-eye"></i></a>
                                    <a href="#" class="btn btn-neutral btn-sm"><i class="zmdi zmdi-edit"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="badge badge-success">Active</span>
                                </td>
                                <td class="project-title">
                                    <h6><a href="#">Many desktop publishing packages and web</a></h6>
                                    <small>Created 18.Mar.2018</small>
                                </td>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar l-dark" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 78%;"></div>                                                
                                    </div>
                                    <small>Completion with: 78%</small>
                                </td>
                                <td>
                                    <ul class="list-unstyled team-info">
                                        <li><img src="../assets/images/xs/avatar10.jpg" alt="Avatar"></li>
                                        <li><img src="../assets/images/xs/avatar7.jpg" alt="Avatar"></li>
                                        <li><img src="../assets/images/xs/avatar2.jpg" alt="Avatar"></li>
                                        <li><img src="../assets/images/xs/avatar5.jpg" alt="Avatar"></li>
                                    </ul>
                                </td>
                                <td class="project-actions">
                                    <a href="#" class="btn btn-neutral btn-sm"><i class="zmdi zmdi-eye"></i></a>
                                    <a href="#" class="btn btn-neutral btn-sm"><i class="zmdi zmdi-edit"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="badge badge-default">InActive</span>
                                </td>
                                <td class="project-title">
                                    <h6><a href="#">iNext - One Page Responsive Template</a></h6>
                                    <small>Created 14.Mar.2018</small>
                                </td>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar l-dark" role="progressbar" aria-valuenow="29" aria-valuemin="0" aria-valuemax="100" style="width: 29%;"></div>                                                
                                    </div>
                                    <small>Completion with: 29%</small>
                                </td>
                                <td>
                                    <ul class="list-unstyled team-info">                                                
                                        <li><img src="../assets/images/xs/avatar2.jpg" alt="Avatar"></li>
                                        <li><img src="../assets/images/xs/avatar3.jpg" alt="Avatar"></li>
                                    </ul>
                                </td>
                                <td class="project-actions">
                                    <a href="#" class="btn btn-neutral btn-sm"><i class="zmdi zmdi-eye"></i></a>
                                    <a href="#" class="btn btn-neutral btn-sm"><i class="zmdi zmdi-edit"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="badge badge-success">Active</span>
                                </td>
                                <td class="project-title">
                                    <h6><a href="#">Oakleaf Admin - Bootstrap html5 with SASS</a></h6>
                                    <small>Created 18.Mar.2018</small>
                                </td>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar l-dark" role="progressbar" aria-valuenow="13" aria-valuemin="0" aria-valuemax="100" style="width: 13%;"></div>                                                
                                    </div>
                                    <small>Completion with: 13%</small>
                                </td>
                                <td>
                                    <ul class="list-unstyled team-info">                                                
                                        <li><img src="../assets/images/xs/avatar7.jpg" alt="Avatar"></li>
                                        <li><img src="../assets/images/xs/avatar1.jpg" alt="Avatar"></li>
                                        <li><img src="../assets/images/xs/avatar3.jpg" alt="Avatar"></li>
                                    </ul>
                                </td>
                                <td class="project-actions">
                                    <a href="#" class="btn btn-neutral btn-sm"><i class="zmdi zmdi-eye"></i></a>
                                    <a href="#" class="btn btn-neutral btn-sm"><i class="zmdi zmdi-edit"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="badge badge-success">Active</span>
                                </td>
                                <td class="project-title">
                                    <h6><a href="#">InfiniO 4.1</a></h6>
                                    <small>Created 14.Mar.2018</small>
                                </td>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar l-dark" role="progressbar" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100" style="width: 48%;"></div>                                                
                                    </div>
                                    <small>Completion with: 48%</small>
                                </td>
                                <td>
                                    <ul class="list-unstyled team-info">
                                        <li><img src="../assets/images/xs/avatar1.jpg" alt="Avatar"></li>
                                        <li><img src="../assets/images/xs/avatar2.jpg" alt="Avatar"></li>
                                        <li><img src="../assets/images/xs/avatar3.jpg" alt="Avatar"></li>
                                    </ul>
                                </td>
                                <td class="project-actions">
                                    <a href="#" class="btn btn-neutral btn-sm"><i class="zmdi zmdi-eye"></i></a>
                                    <a href="#" class="btn btn-neutral btn-sm"><i class="zmdi zmdi-edit"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="badge badge-success">Active</span>
                                </td>
                                <td class="project-title">
                                    <h6><a href="#">Many desktop publishing packages and web</a></h6>
                                    <small>Created 18.Mar.2018</small>
                                </td>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar l-dark" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 78%;"></div>                                                
                                    </div>
                                    <small>Completion with: 78%</small>
                                </td>
                                <td>
                                    <ul class="list-unstyled team-info">
                                        <li><img src="../assets/images/xs/avatar10.jpg" alt="Avatar"></li>
                                        <li><img src="../assets/images/xs/avatar7.jpg" alt="Avatar"></li>
                                        <li><img src="../assets/images/xs/avatar2.jpg" alt="Avatar"></li>
                                        <li><img src="../assets/images/xs/avatar5.jpg" alt="Avatar"></li>
                                    </ul>
                                </td>
                                <td class="project-actions">
                                    <a href="#" class="btn btn-neutral btn-sm"><i class="zmdi zmdi-eye"></i></a>
                                    <a href="#" class="btn btn-neutral btn-sm"><i class="zmdi zmdi-edit"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="badge badge-warning">Pending</span>
                                </td>
                                <td class="project-title">
                                    <h6><a href="#">InfiniO 4.1</a></h6>
                                    <small>Created 14.Mar.2018</small>
                                </td>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar l-dark" role="progressbar" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100" style="width: 48%;"></div>                                                
                                    </div>
                                    <small>Completion with: 48%</small>
                                </td>
                                <td>
                                    <ul class="list-unstyled team-info">
                                        <li><img src="../assets/images/xs/avatar1.jpg" alt="Avatar"></li>
                                        <li><img src="../assets/images/xs/avatar2.jpg" alt="Avatar"></li>
                                        <li><img src="../assets/images/xs/avatar3.jpg" alt="Avatar"></li>
                                    </ul>
                                </td>
                                <td class="project-actions">
                                    <a href="#" class="btn btn-neutral btn-sm"><i class="zmdi zmdi-eye"></i></a>
                                    <a href="#" class="btn btn-neutral btn-sm"><i class="zmdi zmdi-edit"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="badge badge-primary">Closed</span>
                                </td>
                                <td class="project-title">
                                    <h6><a href="#">Massive Event - Conference and Event</a></h6>
                                    <small>Created 18.Mar.2018</small>
                                </td>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar l-dark" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>                                                
                                    </div>
                                    <small>Completion with: 100%</small>
                                </td>
                                <td>
                                    <ul class="list-unstyled team-info">
                                        <li><img src="../assets/images/xs/avatar10.jpg" alt="Avatar"></li>
                                        <li><img src="../assets/images/xs/avatar7.jpg" alt="Avatar"></li>
                                        <li><img src="../assets/images/xs/avatar2.jpg" alt="Avatar"></li>
                                        <li><img src="../assets/images/xs/avatar5.jpg" alt="Avatar"></li>
                                    </ul>
                                </td>
                                <td class="project-actions">
                                    <a href="#" class="btn btn-neutral btn-sm"><i class="zmdi zmdi-eye"></i></a>
                                    <a href="#" class="btn btn-neutral btn-sm"><i class="zmdi zmdi-edit"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="badge badge-warning">Pending</span>
                                </td>
                                <td class="project-title">
                                    <h6><a href="#">Startup - OnePage Business Corporate Template</a></h6>
                                    <small>Created 14.Mar.2018</small>
                                </td>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar l-dark" role="progressbar" aria-valuenow="56" aria-valuemin="0" aria-valuemax="100" style="width: 56%;"></div>                                                
                                    </div>
                                    <small>Completion with: 56%</small>
                                </td>
                                <td>
                                    <ul class="list-unstyled team-info">
                                        <li><img src="../assets/images/xs/avatar3.jpg" alt="Avatar"></li>
                                        <li><img src="../assets/images/xs/avatar1.jpg" alt="Avatar"></li>
                                        <li><img src="../assets/images/xs/avatar5.jpg" alt="Avatar"></li>
                                        <li><img src="../assets/images/xs/avatar9.jpg" alt="Avatar"></li>
                                    </ul>
                                </td>
                                <td class="project-actions">
                                    <a href="#" class="btn btn-neutral btn-sm"><i class="zmdi zmdi-eye"></i></a>
                                    <a href="#" class="btn btn-neutral btn-sm"><i class="zmdi zmdi-edit"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="badge badge-success">Active</span>
                                </td>
                                <td class="project-title">
                                    <h6><a href="#">Falcon - Bootstrap Admin Template + UI Kit</a></h6>
                                    <small>Created 18.Mar.2018</small>
                                </td>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar l-dark" role="progressbar" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100" style="width: 48%;"></div>                                                
                                    </div>
                                    <small>Completion with: 48%</small>
                                </td>
                                <td>
                                    <ul class="list-unstyled team-info">
                                        <li><img src="../assets/images/xs/avatar4.jpg" alt="Avatar"></li>                                                
                                        <li><img src="../assets/images/xs/avatar1.jpg" alt="Avatar"></li>
                                    </ul>
                                </td>
                                <td class="project-actions">
                                    <a href="#" class="btn btn-neutral btn-sm"><i class="zmdi zmdi-eye"></i></a>
                                    <a href="#" class="btn btn-neutral btn-sm"><i class="zmdi zmdi-edit"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="badge badge-success">Active</span>
                                </td>
                                <td class="project-title">
                                    <h6><a href="#">Oreo Admin Bootstrap 4</a></h6>
                                    <small>Created 14.Mar.2018</small>
                                </td>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar l-dark" role="progressbar" aria-valuenow="73" aria-valuemin="0" aria-valuemax="100" style="width: 73%;"></div>                                                
                                    </div>
                                    <small>Completion with: 73%</small>
                                </td>
                                <td>
                                    <ul class="list-unstyled team-info">
                                        <li><img src="../assets/images/xs/avatar5.jpg" alt="Avatar"></li>
                                        <li><img src="../assets/images/xs/avatar3.jpg" alt="Avatar"></li>
                                        <li><img src="../assets/images/xs/avatar8.jpg" alt="Avatar"></li>
                                        <li><img src="../assets/images/xs/avatar7.jpg" alt="Avatar"></li>
                                    </ul>
                                </td>
                                <td class="project-actions">
                                    <a href="#" class="btn btn-neutral btn-sm"><i class="zmdi zmdi-eye"></i></a>
                                    <a href="#" class="btn btn-neutral btn-sm"><i class="zmdi zmdi-edit"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="badge badge-success">Active</span>
                                </td>
                                <td class="project-title">
                                    <h6><a href="#">Blazing Saddles Angular 5</a></h6>
                                    <small>Created 18.Mar.2018</small>
                                </td>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar l-dark" role="progressbar" aria-valuenow="23" aria-valuemin="0" aria-valuemax="100" style="width: 23%;"></div>                                                
                                    </div>
                                    <small>Completion with: 23%</small>
                                </td>
                                <td>
                                    <ul class="list-unstyled team-info">
                                        <li><img src="../assets/images/xs/avatar1.jpg" alt="Avatar"></li>
                                        <li><img src="../assets/images/xs/avatar5.jpg" alt="Avatar"></li>
                                    </ul>
                                </td>
                                <td class="project-actions">
                                    <a href="#" class="btn btn-neutral btn-sm"><i class="zmdi zmdi-eye"></i></a>
                                    <a href="#" class="btn btn-neutral btn-sm"><i class="zmdi zmdi-edit"></i></a>
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
@stop

@section('page-script')
<script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>
@stop