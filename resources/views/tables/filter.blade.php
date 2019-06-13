@extends('layout.master')
@section('parentPageTitle', 'Tables')
@section('title', 'Tables Filter')

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
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card">                    
            <div class="body">
                <button type="button" class="btn btn-round btn-simple btn-sm btn-default btn-filter" data-target="all">Todos</button>
                <button type="button" class="btn btn-round btn-simple btn-sm btn-success btn-filter" data-target="approved">Approved</button>
                <button type="button" class="btn btn-round btn-simple btn-sm btn-warning btn-filter" data-target="suspended">Suspended</button>
                <button type="button" class="btn btn-round btn-simple btn-sm btn-info btn-filter" data-target="pending">Pending</button>
                <button type="button" class="btn btn-round btn-simple btn-sm btn-danger btn-filter" data-target="blocked">Blocked</button>                        
            </div>
            <div class="header">
                <h2><strong>User</strong> Accounts</h2>                        
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-filter table-hover m-b-0">                                
                        <tbody>
                            <tr data-status="approved">
                                <td>1</td>
                                <td><div class="media-object"><img src="../assets/images/xs/avatar1.jpg" alt="" width="35px" class="rounded-circle"></div></td>
                                <td>jacob</td>
                                <td>jacob@gnail.com</td>
                                <td width="250px">
                                    <div class="progress">
                                        <div class="progress-bar l-green" role="progressbar" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100" style="width: 87%;"></div>
                                    </div>
                                </td>
                                <td><span class="badge badge-success">Approved</span></td>
                            </tr>
                            <tr data-status="suspended">
                                <td>2</td>
                                <td><div class="media-object"><img src="../assets/images/xs/avatar2.jpg" alt="" width="35px" class="rounded-circle"></div></td>
                                <td>charlotte</td>
                                <td>a.charlotte@gnail.com</td>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar l-amber" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%;"></div>
                                    </div>
                                </td>
                                <td><span class="badge badge-warning">Suspended</span></td>
                            </tr>
                            <tr data-status="blocked">
                                <td>3</td>
                                <td><div class="media-object"><img src="../assets/images/xs/avatar3.jpg" alt="" width="35px" class="rounded-circle"></div></td>
                                <td>grayson</td>
                                <td>grayson@yahoo.com</td>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar l-coral" role="progressbar" aria-valuenow="16" aria-valuemin="0" aria-valuemax="100" style="width: 16%;"></div>
                                    </div>
                                </td>
                                <td><span class="badge badge-danger">Blocked</span></td>
                            </tr>
                            <tr data-status="approved">
                                <td>4</td>
                                <td><div class="media-object"><img src="../assets/images/xs/avatar4.jpg" alt="" width="35px" class="rounded-circle"></div></td>
                                <td>jacob</td>
                                <td>jacob@gnail.com</td>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar l-green" role="progressbar" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100" style="width: 67%;"></div>
                                    </div>
                                </td>
                                <td><span class="badge badge-success">Approved</span></td>
                            </tr>
                            <tr data-status="approved">
                                <td>5</td>
                                <td><div class="media-object"><img src="../assets/images/xs/avatar5.jpg" alt="" width="35px" class="rounded-circle"></div></td>
                                <td>amelia</td>
                                <td>amelia@gnail.com</td>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar l-green" role="progressbar" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100" style="width: 72%;"></div>
                                    </div>
                                </td>
                                <td><span class="badge badge-success">Approved</span></td>
                            </tr>
                            <tr data-status="pending">
                                <td>6</td>
                                <td><div class="media-object"><img src="../assets/images/xs/avatar6.jpg" alt="" width="35px" class="rounded-circle"></div></td>
                                <td>michael</td>
                                <td>michael@gmail.com</td>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar l-blue" role="progressbar" aria-valuenow="32" aria-valuemin="0" aria-valuemax="100" style="width:32%;"></div>
                                    </div>
                                </td>
                                <td><span class="badge badge-info">Pending</span></td>
                            </tr>
                            <tr data-status="pending">
                                <td>7</td>
                                <td><div class="media-object "><img src="../assets/images/xs/avatar7.jpg" alt="" width="35px" class="rounded-circle"></div></td>
                                <td>michael</td>
                                <td>michael@gmail.com</td>
                                <td>
                                    <div class="progress">
                                        <div class="progress-bar l-blue" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100" style="width: 68%;"></div>
                                    </div>
                                </td>
                                <td><span class="badge badge-info">Pending</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
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
<script>
    $(document).ready(function () {
        $('.star').on('click', function () {
            $(this).toggleClass('star-checked');
        });

        $('.ckbox label').on('click', function () {
            $(this).parents('tr').toggleClass('selected');
        });

        $('.btn-filter').on('click', function () {
            var $target = $(this).data('target');
            if ($target != 'all') {
                $('.table tr').css('display', 'none');
                $('.table tr[data-status="' + $target + '"]').fadeIn('slow');
            } else {
                $('.table tr').css('display', 'none').fadeIn('slow');
            }
        });
    });
</script>
@stop