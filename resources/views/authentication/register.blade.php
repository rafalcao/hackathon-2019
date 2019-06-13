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
                    <h5>Cadastro</h5>
                </div>
                <form method="POST" action="{{ route('register') }}">
                    @csrf                           
                    <div class="input-group">
                        <input type="text" name="name" class="form-control" placeholder="Nome">
                        <span class="input-group-addon"><i class="zmdi zmdi-account-circle"></i></span>
                        @if ($errors->has('name'))
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $errors->first('name') }}</strong>  
                            </span>
                        @endif
                    </div>
                    <div class="input-group">
                        <input type="text" name="email" class="form-control" placeholder="E-mail">
                        <span class="input-group-addon"><i class="zmdi zmdi-email"></i></span>
                        @if ($errors->has('email'))
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $errors->first('email') }}</strong>  
                            </span>
                        @endif
                    </div>
                    <div class="input-group">
                        <input type="password" name="password" placeholder="Senha" class="form-control" />
                        <span class="input-group-addon"><i class="zmdi zmdi-lock"></i></span>
                        @if ($errors->has('password'))
                            <span class="invalid-feedback d-block" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>  
                            </span>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                </form>
                <br>
                <a class="link" href="{{route('authentication.login')}}">Já possui cadastro?</a>
            </div>
        </div>
    </div>
</div>
@stop
