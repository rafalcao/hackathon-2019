@extends('layout.authentication')
@section('title', 'Register')

@section('content')
<div class="col-md-12 content-center">
    <div class="row clearfix">
        <div class="col-lg-6 col-md-12">
            <div class="company_detail">
                <h4 class="logo"><img src="../assets/images/logo.png" alt="Logo"> Colabora</h4>
                <h3>Bem Vindo a Colabora</h3>
                <p>Desenvolvido para ajudar você.</p>
            </div>
        </div>                    
        <div class="col-lg-5 col-md-12 offset-lg-1">
            <div class="card-plain">
                <div class="header">
                    <h5>Sign Up</h5>
                    <span>Register a new membership</span>
                </div>
                <form method="POST" action="{{ route('register') }}">
                    @csrf                           
                    <div class="input-group">
                        <input type="text" name="name" class="form-control" placeholder="Enter User Name">
                        <span class="input-group-addon"><i class="zmdi zmdi-account-circle"></i></span>
                        @if ($errors->has('name'))
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $errors->first('name') }}</strong>  
                            </span>
                        @endif
                    </div>
                    <div class="input-group">
                        <input type="text" name="email" class="form-control" placeholder="Enter Email">
                        <span class="input-group-addon"><i class="zmdi zmdi-email"></i></span>
                        @if ($errors->has('email'))
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>  
                            </span>
                        @endif
                    </div>
                    <div class="input-group">
                        <input type="password" name="password" placeholder="Password" class="form-control" />
                        <span class="input-group-addon"><i class="zmdi zmdi-lock"></i></span>
                        @if ($errors->has('password'))
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>  
                            </span>
                        @endif
                    </div>
                    <div class="checkbox">
                        <input id="terms" type="checkbox">
                        <label for="terms">I read and Agree to the <a href="javascript:void(0);">Terms of Usage</a></label>
                    </div>  
                    <button type="submit" class="btn btn-primary">Registrar</button>
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