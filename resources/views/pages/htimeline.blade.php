@extends('layout.master')
@section('parentPageTitle', 'Pages')
@section('title', 'Horizontal Timeline')

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
    <div class="col-lg-12">
        <div class="card">                   
            <div class="body">
                <div class="cd-horizontal-timeline">
                    <div class="timeline">
                        <div class="events-wrapper">
                            <div class="events">
                                <ol>
                                    <li><a href="#0" data-date="16/01/2017" class="selected">16 Jan</a></li>
                                    <li><a href="#0" data-date="28/02/2017">28 Feb</a></li>
                                    <li><a href="#0" data-date="20/04/2017">20 Mar</a></li>
                                    <li><a href="#0" data-date="20/05/2017">20 May</a></li>
                                    <li><a href="#0" data-date="09/07/2017">09 Jul</a></li>
                                    <li><a href="#0" data-date="30/08/2017">30 Aug</a></li>
                                    <li><a href="#0" data-date="15/09/2017">15 Sep</a></li>
                                    <li><a href="#0" data-date="01/11/2017">01 Nov</a></li>
                                    <li><a href="#0" data-date="10/12/2017">10 Dec</a></li>
                                    <li><a href="#0" data-date="19/01/2018">29 Jan</a></li>
                                    <li><a href="#0" data-date="03/03/2018">3 Mar</a></li>
                                </ol>
                                <span class="filling-line" aria-hidden="true"></span>
                            </div>
                            <!-- .events -->
                        </div>
                        <!-- .events-wrapper -->
                        <ul class="cd-timeline-navigation">
                            <li><a href="#0" class="prev inactive">Prev</a></li>
                            <li><a href="#0" class="next">Next</a></li>
                        </ul>
                        <!-- .cd-timeline-navigation -->
                    </div>
                    <!-- .timeline -->
                    <div class="events-content">
                        <ol>
                            <li class="selected" data-date="16/01/2017">
                                <h4>
                                    <img class="rounded float-left m-r-15" width="40" alt="user" src="../assets/images/sm/avatar1.jpg" alt="user"> Horizontal Timeline<br/>
                                    <small>January 16th, 2017</small>
                                </h4>
                                <hr>
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors infancy.
                                <br><button class="btn btn-primary btn-round">Read more</button>
                                </p>                                        
                            </li>
                            <li data-date="28/02/2017">
                                <h4>
                                    <img class="rounded float-left m-r-15" width="40" alt="user" src="../assets/images/sm/avatar2.jpg" alt="user"> Horizontal Timeline<br/>
                                    <small>Feb 28th, 2017</small>
                                </h4>
                                <hr>
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors infancy.
                                <br><button class="btn btn-primary btn-round">Read more</button>
                                </p>
                            </li>
                            <li data-date="20/04/2017">
                                <h4>
                                    <img class="rounded float-left m-r-15" width="40" alt="user" src="../assets/images/sm/avatar3.jpg" alt="user"> Horizontal Timeline<br/>
                                    <small>March 20th, 2017</small>
                                </h4>
                                <hr>
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors infancy.
                                <br><button class="btn btn-primary btn-round">Read more</button>
                                </p>
                            </li>
                            <li data-date="20/05/2017">
                                <h4>
                                    <img class="rounded float-left m-r-15" width="40" alt="user" src="../assets/images/sm/avatar4.jpg" alt="user"> Horizontal Timeline<br/>
                                    <small>May 20th, 2017</small>
                                </h2>
                                <hr>
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors infancy.
                                <br><button class="btn btn-primary btn-round">Read more</button>
                                </p>
                            </li>
                            <li data-date="09/07/2017">
                                <h4>
                                    <img class="rounded float-left m-r-15" width="40" alt="user" src="../assets/images/sm/avatar5.jpg" alt="user"> Horizontal Timeline<br/>
                                    <small>July 9th, 2017</small>
                                </h4>
                                <hr>
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors infancy.
                                <br><button class="btn btn-primary btn-round">Read more</button>
                                </p>
                            </li>
                            <li data-date="30/08/2017">
                                <h4>
                                    <img class="rounded float-left m-r-15" width="40" alt="user" src="../assets/images/sm/avatar6.jpg" alt="user"> Horizontal Timeline<br/>
                                    <small>August 30th, 2017</small>
                                </h4>
                                <hr>
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors infancy.
                                <br><button class="btn btn-primary btn-round">Read more</button>
                                </p>
                            </li>
                            <li data-date="15/09/2017">
                                <h4>
                                    <img class="rounded float-left m-r-15" width="40" alt="user" src="../assets/images/sm/avatar1.jpg" alt="user"> Horizontal Timeline<br/>
                                    <small>September 15th, 2017</small>
                                </h4>
                                <hr>
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors infancy.
                                <br><button class="btn btn-primary btn-round">Read more</button>
                                </p>
                            </li>
                            <li data-date="01/11/2017">
                                <h4>
                                    <img class="rounded float-left m-r-15" width="40" alt="user" src="../assets/images/sm/avatar4.jpg" alt="user"> Horizontal Timeline<br/>
                                    <small>November 01st, 2017</small>
                                </h4>
                                <hr>
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors infancy.
                                <br><button class="btn btn-primary btn-round">Read more</button>
                                </p>
                            </li>
                            <li data-date="10/12/2017">
                                <h4>
                                    <img class="rounded float-left m-r-15" width="40" alt="user" src="../assets/images/sm/avatar2.jpg" alt="user"> Horizontal Timeline<br/>
                                    <small>December 10th, 2017</small>
                                </h4>
                                <hr>
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors infancy.
                                <br><button class="btn btn-primary btn-round">Read more</button>
                                </p>
                            </li>
                            <li data-date="19/01/2018">
                                <h4>Event title here</h4>
                                <em>January 19th, 2018</em>
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors infancy.</p>
                            </li>
                            <li data-date="03/03/2018">
                                <h4>Event title here</h4>
                                <em>March 3rd, 2018</em>
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors infancy.</p>
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('page-styles')
<link rel="stylesheet" href="{{ asset('assets/plugins/horizontal-timeline/css/horizontal-timeline.css') }}">
@stop

@section('page-script')
<script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>
<script src="{{ asset('assets/plugins/horizontal-timeline/js/horizontal-timeline.js') }}"></script> <!-- JVectorMap Plugin Js -->
@stop