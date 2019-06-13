@extends('layout.authentication')
@section('title', 'Login')

@section('content')
<div class="col-md-12 content-center">
    <div class="row clearfix">
        <div class="col-lg-6 col-md-12">
            <div class="company_detail">
            <h4 class="logo"><img src="../assets/images/logo.png" alt="Logo"> Colabora</h4>
                <h3>Bem Vindo ao Colabora</h3>
                <p>Desenvolvido para ajudar você.</p>
            </div>
        </div>                        
        <div class="col-lg-5 col-md-12 offset-lg-1">
            <div class="card-plain">
                <div class="header">
                    <h5>Log in</h5>
                </div>
                <form class="form">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="E-mail">
                        <span class="input-group-addon"><i class="zmdi zmdi-account-circle"></i></span>
                    </div>
                    <div class="input-group">
                        <input type="password" placeholder="Senha" class="form-control" />
                        <span class="input-group-addon"><i class="zmdi zmdi-lock"></i></span>
                    </div>                            
                </form>
                <div class="footer">
                    <a href="{{route('dashboard.index')}}" class="btn btn-primary btn-round btn-block">Entrar</a>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
