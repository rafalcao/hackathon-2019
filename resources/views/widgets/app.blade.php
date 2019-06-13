@extends('layout.master')
@section('parentPageTitle', 'Widgets')
@section('title', 'App Widgets')

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
    <div class="col-sm-12 col-md-12 col-lg-4">
        <div class="card member-card">
            <div class="header l-pink">
                <h4 class="m-t-10">Eliana Smith</h4>
            </div>
            <div class="member-img">
                <a href="profile.html" class="">
                    <img src="../assets/images/lg/avatar2.jpg" class="rounded-circle" alt="profile-image">
                </a>
            </div>
            <div class="body">
                <div class="col-12">
                    <ul class="social-links list-unstyled">
                        <li><a title="facebook" href="javascript:void(0);"><i class="zmdi zmdi-facebook"></i></a></li>
                        <li><a title="twitter" href="javascript:void(0);"><i class="zmdi zmdi-twitter"></i></a></li>
                        <li><a title="instagram" href="javascript:void(0);"><i class="zmdi zmdi-instagram"></i></a></li>
                    </ul>
                    <p class="text-muted">795 Folsom Ave, Suite 600 San Francisco, CADGE 94107</p>
                </div>
                <hr>
                <div class="row">
                    <div class="col-4">
                        <h5 class="m-b-0">18</h5>
                        <small>Files</small>
                    </div>
                    <div class="col-4">
                        <h5 class="m-b-0">2GB</h5>
                        <small>Used</small>
                    </div>
                    <div class="col-4">
                        <h5 class="m-b-0">65,6$</h5>
                        <small>Spent</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-md-6 col-lg-4">
        <div class="card">
            <div class="header">
                <h2><strong>New</strong> Friends <small>Add new friend in last month</small></h2>
            </div>
            <div class="body">
                <ul class="new_friend_list list-unstyled row">
                    <li class="col-lg-4 col-md-2 col-sm-6 col-4">
                        <a href="javascript:void(0);">
                            <img src="../assets/images/sm/avatar1.jpg" class="img-thumbnail" alt="User Image">
                            <h6 class="users_name">Jackson</h6>
                            <small class="join_date">Today</small>
                        </a>
                    </li>
                    <li class="col-lg-4 col-md-2 col-sm-6 col-4">
                        <a href="javascript:void(0);">
                            <img src="../assets/images/sm/avatar2.jpg" class="img-thumbnail" alt="User Image">
                            <h6 class="users_name">Aubrey</h6>
                            <small class="join_date">Yesterday</small>
                        </a>
                    </li>
                    <li class="col-lg-4 col-md-2 col-sm-6 col-4">
                        <a href="javascript:void(0);">
                            <img src="../assets/images/sm/avatar3.jpg" class="img-thumbnail" alt="User Image">
                            <h6 class="users_name">Oliver</h6>
                            <small class="join_date">08 Nov</small>
                        </a>
                    </li>
                    <li class="col-lg-4 col-md-2 col-sm-6 col-4">
                        <a href="javascript:void(0);">
                            <img src="../assets/images/sm/avatar4.jpg" class="img-thumbnail" alt="User Image">
                            <h6 class="users_name">Isabella</h6>
                            <small class="join_date">12 Dec</small>
                        </a>
                    </li>
                    <li class="col-lg-4 col-md-2 col-sm-6 col-4">
                        <a href="javascript:void(0);">
                            <img src="../assets/images/sm/avatar1.jpg" class="img-thumbnail" alt="User Image">
                            <h6 class="users_name">Jacob</h6>
                            <small class="join_date">12 Dec</small>
                        </a>
                    </li>
                    <li class="col-lg-4 col-md-2 col-sm-6 col-4">
                        <a href="javascript:void(0);">
                            <img src="../assets/images/sm/avatar5.jpg" class="img-thumbnail" alt="User Image">
                            <h6 class="users_name">Matthew</h6>
                            <small class="join_date">17 Dec</small>
                        </a>
                    </li>                            
                </ul>
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-md-6 col-lg-4">
        <div class="card">
            <div class="header">
                <h2><strong>Invoice</strong></h2>
                <ul class="header-dropdown">
                    <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                        <ul class="dropdown-menu dropdown-menu-right float-right">
                            <li><a href="javascript:void(0);">Edit</a></li>
                            <li><a href="javascript:void(0);">Delete</a></li>
                            <li><a href="javascript:void(0);">Report</a></li>
                        </ul>
                    </li>
                    <li class="remove">
                        <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                    </li>
                </ul>
            </div>
            <div class="body">
                <div class="row">
                    <div class="col-md-12">
                        <address>
                            <strong>ThemeMakker Inc.</strong> <small class="float-right">16/01/2018</small><br>
                            795 Folsom Ave, Suite 546<br>
                            San Francisco, CA 54656<br>
                            <abbr title="Phone">P:</abbr> (123) 456-34636
                        </address>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Item</th>
                                <th>Total</th>
                            </tr>
                        </thead>                       
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Simple Black Clock</td>
                                <td>$30</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Brone Candle</td>
                                <td>$25</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <td></td>
                            <td></td>
                            <td><strong>$55</strong></td>
                        </tfoot>
                    </table>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <button class="btn btn-warning btn-icon  btn-icon-mini btn-round"><i class="zmdi zmdi-print"></i></button>
                        <button class="btn btn-primary btn-round">Pay Now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row clearfix">
    <div class="col-lg-4 col-md-12">
        <div class="card project_widget">
            <div class="body">
                <div class="row pw_content">
                    <div class="col-12 pw_header">
                        <h6>Magazine Design</h6>
                        <small class="text-muted">InfiniO  |  Last Update: 12 Dec 2017</small>
                    </div>
                    <div class="col-8 pw_meta">
                        <span>4,870 USD</span>                                
                        <small class="text-danger">17 Days Remaining</small>
                    </div>
                    <div class="col-4">
                        <div class="sparkline m-t-10" data-type="bar" data-width="97%" data-height="26px" data-bar-Width="2" data-bar-Spacing="7" data-bar-Color="#7460ee">2,5,6,3,4,5,5,6,2,1</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-12">
        <div class="card project_widget">
            <div class="body">
                <div class="row pw_content">
                    <div class="col-12 pw_header">
                        <h6>New Dashboard</h6>
                        <small class="text-muted">InfiniO  |  Last Update: 17 Dec 2017</small>
                    </div>
                    <div class="col-8 pw_meta">
                        <span>4,210 USD</span>                                
                        <small class="text-success">Early Dec 2017</small>
                    </div>
                    <div class="col-4">
                        <div class="sparkline m-t-10" data-type="bar" data-width="97%" data-height="26px" data-bar-Width="2" data-bar-Spacing="7" data-bar-Color="#60bafd">2,5,6,3,4,5,5,6,2,1</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-12">
        <div class="card project_widget">
            <div class="body">
                <div class="row pw_content">
                    <div class="col-12 pw_header">
                        <h6>Mobile App</h6>
                        <small class="text-muted">InfiniO  |  Last Update: 21 Dec 2017</small>
                    </div>
                    <div class="col-8 pw_meta">
                        <span>1,870 USD</span>                                
                        <small class="text-danger">10 Days Remaining</small>
                    </div>
                    <div class="col-4">
                        <div class="sparkline m-t-10" data-type="bar" data-width="97%" data-height="26px" data-bar-Width="2" data-bar-Spacing="7" data-bar-Color="#dd4b39">2,3,6,5,4,5,8,7,6,3</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row clearfix">
    <div class="col-md-12 col-lg-7 col-xl-6">
        <div class="card">
            <div class="header">
                <h2><strong>Social</strong> Media</h2>
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
                <div class="table-responsive social_media_table">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Media</th>
                                <th>Name</th>
                                <th>Like</th>                                                                                
                                <th>Comments</th>
                                <th>Share</th>
                                <th>Members</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><span class="social_icon linkedin"><i class="zmdi zmdi-linkedin"></i></span>
                                </td>
                                <td><span class="list-name">Linked In</span>
                                    <span class="text-muted">Florida, United States</span>
                                </td>
                                <td>19K</td>
                                <td>14K</td>
                                <td>10K</td>
                                <td>
                                    <span class="badge badge-success">2341</span>
                                </td>
                            </tr>
                            <tr>
                                <td><span class="social_icon twitter-table"><i class="zmdi zmdi-twitter"></i></span>
                                </td>
                                <td><span class="list-name">Twitter</span>
                                    <span class="text-muted">Arkansas, United States</span>
                                </td>
                                <td>7K</td>
                                <td>11K</td>
                                <td>21K</td>
                                <td>
                                    <span class="badge badge-success">952</span>
                                </td>
                            </tr>
                            <tr>
                                <td><span class="social_icon facebook"><i class="zmdi zmdi-facebook"></i></span>
                                </td>
                                <td><span class="list-name">Facebook</span>
                                    <span class="text-muted">Illunois, United States</span>
                                </td>
                                <td>15K</td>
                                <td>18K</td>
                                <td>8K</td>
                                <td>
                                    <span class="badge badge-success">6127</span>
                                </td>
                            </tr>
                            <tr>
                                <td><span class="social_icon google"><i class="zmdi zmdi-google-plus"></i></span>
                                </td>
                                <td><span class="list-name">Google Plus</span>
                                    <span class="text-muted">Arizona, United States</span>
                                </td>
                                <td>15K</td>
                                <td>18K</td>
                                <td>154</td>
                                <td>
                                    <span class="badge badge-success">325</span>
                                </td>
                            </tr>
                            <tr>
                                <td><span class="social_icon youtube"><i class="zmdi zmdi-youtube-play"></i></span>
                                </td>
                                <td><span class="list-name">YouTube</span>
                                    <span class="text-muted">Alaska, United States</span>
                                </td>
                                <td>15K</td>
                                <td>18K</td>
                                <td>200</td>
                                <td>
                                    <span class="badge badge-success">160</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12 col-lg-5 col-xl-6">
        <div class="card">
            <div class="header">
                <h2><strong>Inbox</strong></h2>
                <ul class="header-dropdown m-r--5">
                    <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more-vert"></i> </a>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="javascript:void(0);" class=" waves-effect waves-block">Action</a></li>
                            <li><a href="javascript:void(0);" class=" waves-effect waves-block">Another action</a></li>
                            <li><a href="javascript:void(0);" class=" waves-effect waves-block">Something else here</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="body">
                <ul class="inbox-widget list-unstyled clearfix">
                    <li class="inbox-inner">
                        <a href="javascript:void(0)">
                            <div class="inbox-item">
                                <div class="inbox-img"> <img src="../assets/images/xs/avatar1.jpg" class="rounded" alt=""> </div>
                                <div class="inbox-item-info">
                                    <p class="author">Aaron	Enlightened</p>
                                    <p class="inbox-message">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
                                    <p class="inbox-date">13:34 PM</p>
                                    <div class="hover_action">
                                        <a href="javascript:void(0);" class="btn btn-neutral"><i class="zmdi zmdi-edit"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-neutral"><i class="zmdi zmdi-delete"></i></a>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="inbox-inner">
                        <a href="javascript:void(0)">
                            <div class="inbox-item">
                                <div class="inbox-img"> <img src="../assets/images/xs/avatar2.jpg" class="rounded" alt=""> </div>
                                <div class="inbox-item-info">
                                    <p class="author">Alvin Doe</p>
                                    <p class="inbox-message">Lorem Ipsum is simply dummy text oftting industry. Lorem Ipsum has been the industry's</p>
                                    <p class="inbox-date">18:34 PM</p>
                                    <div class="hover_action">
                                        <a href="javascript:void(0);" class="btn btn-neutral"><i class="zmdi zmdi-edit"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-neutral"><i class="zmdi zmdi-delete"></i></a>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="inbox-inner">
                        <a href="javascript:void(0)">
                            <div class="inbox-item">
                                <div class="inbox-img"> <img src="../assets/images/xs/avatar3.jpg" class="rounded" alt=""> </div>
                                <div class="inbox-item-info">
                                    <p class="author">Austin</p>
                                    <p class="inbox-message">text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
                                    <p class="inbox-date">1Day ago</p>
                                    <div class="hover_action">
                                        <a href="javascript:void(0);" class="btn btn-neutral"><i class="zmdi zmdi-edit"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-neutral"><i class="zmdi zmdi-delete"></i></a>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="inbox-inner">
                        <a href="javascript:void(0)">
                            <div class="inbox-item">
                                <div class="inbox-img"> <img src="../assets/images/xs/avatar5.jpg" class="rounded" alt=""> </div>
                                <div class="inbox-item-info">
                                    <p class="author">Broderick</p>
                                    <p class="inbox-message">text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
                                    <p class="inbox-date">Week ago</p>
                                    <div class="hover_action">
                                        <a href="javascript:void(0);" class="btn btn-neutral"><i class="zmdi zmdi-edit"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-neutral"><i class="zmdi zmdi-delete"></i></a>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="row clearfix">
    <div class="col-lg-4 col-md-12">
        <div class="card">
            <div class="carousel slide twitter feed" data-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <i class="zmdi zmdi-twitter zmdi-hc-2x"></i>
                        <p>23th Feb</p>
                        <h4>Now Get <span>Up to 70% Off</span><br>on buy</h4>
                        <div class="m-t-20"><i>- post form ThemeMakker</i></div>
                    </div>
                    <div class="carousel-item">
                        <i class="zmdi zmdi-twitter zmdi-hc-2x"></i>
                        <p>25th Jan</p>
                        <h4>Now Get <span>50% Off</span><br>on buy</h4>
                        <div class="m-t-20"><i>- post form WrapTheme</i></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-12">
        <div class="card">
            <div class="carousel slide google feed" data-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <i class="zmdi zmdi-google-plus zmdi-hc-2x"></i>
                        <p>18th Feb</p>
                        <h4>Now Get <span>Up to 70% Off</span><br>on buy</h4>
                        <div class="m-t-20"><i>- post form WrapTheme</i></div>
                    </div>
                    <div class="carousel-item">
                        <i class="zmdi zmdi-google-plus zmdi-hc-2x"></i>
                        <p>28th Mar</p>
                        <h4>Now Get <span>50% Off</span><br>on buy</h4>
                        <div class="m-t-20"><i>- post form ThemeMakker</i></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-12">
        <div class="card">
            <div class="carousel slide facebook feed" data-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <i class="zmdi zmdi-facebook zmdi-hc-2x"></i>
                        <p>20th Jan</p>
                        <h4>Now Get <span>50% Off</span><br>on buy</h4>
                        <div class="m-t-20"><i>- post form Theme</i></div>
                    </div>
                    <div class="carousel-item">
                        <i class="zmdi zmdi-facebook zmdi-hc-2x"></i>
                        <p>23th Feb</p>
                        <h4>Now Get <span>Up to 70% Off</span><br>on buy</h4>
                        <div class="m-t-20"><i>- post form Theme</i></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>        
<div class="row clearfix">
    <div class="col-lg-4 col-md-6">
        <div class="card">
            <div class="body widget-user">
                <img class="rounded-circle" src="../assets/images/sm/avatar4.jpg" alt="">
                <div class="wid-u-info">
                    <h5>Fidel Tonn</h5>
                    <p class="text-muted m-b-0">123 6th St. Melbourne, <br>FL 32904</p>                            
                </div>
                <hr>
                <div class="row">
                    <div class="col-4">
                        <h5 class="m-b-0">27</h5>
                        <small>Files</small>
                    </div>
                    <div class="col-4">
                        <h5 class="m-b-0">3.1GB</h5>
                        <small>Used</small>
                    </div>
                    <div class="col-4">
                        <h5 class="m-b-0">$ 908</h5>
                        <small>Spent</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-6">
        <div class="card">
            <div class="body widget-user">
                <img class="rounded-circle" src="../assets/images/sm/avatar5.jpg" alt="">
                <div class="wid-u-info">
                    <h5>Gary Camara</h5>
                    <p class="text-muted m-b-0">70 Bowman St. South Windsor,<br> CT 06074</p>                            
                </div>
                <hr>
                <div class="row">
                    <div class="col-4">
                        <h5 class="m-b-0">22</h5>
                        <small>Files</small>
                    </div>
                    <div class="col-4">
                        <h5 class="m-b-0">2.3GB</h5>
                        <small>Used</small>
                    </div>
                    <div class="col-4">
                        <h5 class="m-b-0">$ 656</h5>
                        <small>Spent</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-6">
        <div class="card">
            <div class="body widget-user">
                <img class="rounded-circle" src="../assets/images/sm/avatar6.jpg" alt="">
                <div class="wid-u-info">
                    <h5>Tim Hank</h5>
                    <p class="text-muted m-b-0">795 Folsom Ave, Suite 600<br> San Francisco</p>                            
                </div>
                <hr>
                <div class="row">
                    <div class="col-4">
                        <h5 class="m-b-0">16</h5>
                        <small>Files</small>
                    </div>
                    <div class="col-4">
                        <h5 class="m-b-0">1.8GB</h5>
                        <small>Used</small>
                    </div>
                    <div class="col-4">
                        <h5 class="m-b-0">$ 215</h5>
                        <small>Spent</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row clearfix">
    <div class="col-md-12 col-lg-4">
        <div class="card">
            <div class="header">
                <h2><strong>Subscribe</strong></h2>
                <ul class="header-dropdown">
                    <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                        <ul class="dropdown-menu slideUp">
                            <li><a href="javascript:void(0);">Action</a></li>
                            <li><a href="javascript:void(0);">Another action</a></li>
                            <li><a href="javascript:void(0);">Something else</a></li>
                            <li><a href="javascript:void(0);" class="boxs-close">Deletee</a></li>
                        </ul>
                    </li>
                </ul>
            </div>                    
            <div class="body">
                <form>
                    <div class="form-group">
                        <input type="text" value="" placeholder="Enter Name" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="text" value="" placeholder="Enter Email" class="form-control">
                    </div>
                    <button class="btn btn-primary btn-round">Subscribe</button>
                </form>         
            </div>
        </div>
        <div class="card activities">
            <div class="header">
                <h2><strong>Activities</strong></h2>
            </div>
            <div class="body">
                <ul class="list-unstyled activity">
                    <li>
                        <a href="javascript:void(0)">
                            <i class="zmdi zmdi-cake bg-blue"></i>                    
                            <div class="info">
                                <h4>Admin Birthday</h4>                    
                                <small>Will be Dec 21th</small>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <i class="zmdi zmdi-file-text bg-red"></i>
                            <div class="info">
                                <h4>Code Change</h4>                    
                                <small>Will be Dec 22th</small>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <i class="zmdi zmdi-account-box-phone bg-green"></i>
                            <div class="info">
                                <h4>Add New Contact</h4>                    
                                <small>Will be Dec 23th</small>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <i class="zmdi zmdi-email bg-amber"></i>
                            <div class="info">
                                <h4>New Email</h4>
                                <small>Will be July 28th</small>
                            </div>
                        </a>
                    </li>                            
                </ul>
            </div>
        </div>
    </div>
    <div class="col-md-12 col-lg-8">
        <div class="card">
            <ul class="row profile_state list-unstyled">
                <li class="col-lg-3 col-md-3 col-6">
                    <div class="body">
                        <i class="zmdi zmdi-eye col-amber"></i>
                        <h4>2,365</h4>
                        <span>Post View</span>
                    </div>
                </li>
                <li class="col-lg-3 col-md-3 col-6">
                    <div class="body">
                        <i class="zmdi zmdi-thumb-up col-blue"></i>
                        <h4>365</h4>
                        <span>Likes</span>
                    </div>
                </li>
                <li class="col-lg-3 col-md-3 col-6">
                    <div class="body">
                        <i class="zmdi zmdi-comment-text col-red"></i>
                        <h4>65</h4>
                        <span>Comments</span>
                    </div>
                </li>
                <li class="col-lg-3 col-md-3 col-6">
                    <div class="body">
                        <i class="zmdi zmdi-account text-success"></i>
                        <h4>2,055</h4>
                        <span>Profile Views</span>
                    </div>
                </li>                      
            </ul>
        </div>
        <div class="card">
            <div class="body">
                <div id="demo2" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ul class="carousel-indicators">
                        <li data-target="#demo2" data-slide-to="0" class="active"></li>
                        <li data-target="#demo2" data-slide-to="1" class=""></li>
                        <li data-target="#demo2" data-slide-to="2" class=""></li>
                    </ul>            
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="../assets/images/image-gallery/5.jpg" class="img-fluid" alt="">
                            <div class="carousel-caption">
                                <h3>Chicago</h3>
                                <p>Thank you, Chicago!</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="../assets/images/image-gallery/6.jpg" class="img-fluid" alt="">
                            <div class="carousel-caption">
                                <h3>New York</h3>
                                <p>We love the Big Apple!</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="../assets/images/image-gallery/12.jpg" class="img-fluid" alt="">
                            <div class="carousel-caption">
                                <h3>Los Angeles</h3>
                                <p>We had such a great time in LA!</p>
                            </div>
                        </div>
                    </div>            
                    <!-- Controls -->
                    <!-- Left and right controls -->
                    <a class="carousel-control-prev" href="#demo2" data-slide="prev"><span class="carousel-control-prev-icon"></span></a>
                    <a class="carousel-control-next" href="#demo2" data-slide="next"><span class="carousel-control-next-icon"></span></a>
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
<script src="{{ asset('assets/js/pages/charts/sparkline.js') }}"></script>
@stop