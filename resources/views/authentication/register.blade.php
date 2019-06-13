@extends('layout.authentication')
@section('title', 'Register')

@section('content')
<div class="col-md-12 content-center">
    <div class="row clearfix">
        <div class="col-lg-6 col-md-12">
            <div class="company_detail">
                <h4 class="logo"><img src="../assets/images/logo.svg" alt="Logo"> InfiniO</h4>
                <h3>The ultimate <strong>Bootstrap 4</strong> Admin Dashboard</h3>
                <p>InfiniO is fully based on HTML5 + CSS3 Standards. Is fully responsive and clean on every device and every browser</p>                        
                <div class="footer">
                    <ul  class="social_link list-unstyled">
                        <li><a href="https://thememakker.com" title="ThemeMakker"><i class="zmdi zmdi-globe"></i></a></li>
                        <li><a href="https://themeforest.net/user/thememakker" title="Themeforest"><i class="zmdi zmdi-shield-check"></i></a></li>
                        <li><a href="https://www.linkedin.com/company/thememakker/" title="LinkedIn"><i class="zmdi zmdi-linkedin"></i></a></li>
                        <li><a href="https://www.facebook.com/thememakkerteam" title="Facebook"><i class="zmdi zmdi-facebook"></i></a></li>
                        <li><a href="http://twitter.com/thememakker" title="Twitter"><i class="zmdi zmdi-twitter"></i></a></li>
                        <li><a href="http://plus.google.com/+thememakker" title="Google plus"><i class="zmdi zmdi-google-plus"></i></a></li>
                        <li><a href="https://www.behance.net/thememakker" title="Behance"><i class="zmdi zmdi-behance"></i></a></li>
                    </ul>
                    <hr>
                    <ul class="list-unstyled">
                        <li><a href="http://thememakker.com/contact/" target="_blank">Contact Us</a></li>
                        <li><a href="http://thememakker.com/about/" target="_blank">About Us</a></li>
                        <li><a href="http://thememakker.com/services/" target="_blank">Services</a></li>
                        <li><a href="javascript:void(0);">FAQ</a></li>
                    </ul>
                </div>
            </div>
        </div>                        
        <div class="col-lg-5 col-md-12 offset-lg-1">
            <div class="card-plain">
                <div class="header">
                    <h5>Sign Up</h5>
                    <span>Register a new membership</span>
                </div>
                <form class="form">                            
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Enter User Name">
                        <span class="input-group-addon"><i class="zmdi zmdi-account-circle"></i></span>
                    </div>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Enter Email">
                        <span class="input-group-addon"><i class="zmdi zmdi-email"></i></span>
                    </div>
                    <div class="input-group">
                        <input type="password" placeholder="Password" class="form-control" />
                        <span class="input-group-addon"><i class="zmdi zmdi-lock"></i></span>
                    </div>
                    <div class="checkbox">
                        <input id="terms" type="checkbox">
                        <label for="terms">I read and Agree to the <a href="javascript:void(0);">Terms of Usage</a></label>
                    </div>                            
                </form>
                <div class="footer">
                    <a href="{{route('dashboard.index')}}" class="btn btn-primary btn-round btn-block">SIGN UP</a>
                </div>
                <a class="link" href="{{route('authentication.login')}}">You already have a membership?</a>
            </div>
        </div>
    </div>
</div>
@stop