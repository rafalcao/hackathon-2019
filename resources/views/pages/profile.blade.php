@extends('layout.master')
@section('parentPageTitle', 'Pages')
@section('title', 'Profile')

@section('sub-header')
<div class="col-lg-6 col-md-12 col-sm-12">
    <ul class="nav nav-tabs">
        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#overview">Overview</a></li>
        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#schedule">Schedule</a></li>
        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#usersettings">Settings</a></li>
    </ul>
</div>
@stop

@section('content')
<form method="POST" action="{{ route('profile.save') }}">
    @csrf
    <div class="row clearfix profile-page">
        <div class="col-lg-12 col-md-12">
            <div class="card active-bg text-white">
                <div class="body profile-header">
                    <img src="../assets/images/profile_av.jpg" class="user_pic rounded img-raised" alt="User">
                    <div class="detail">
                        <div class="u_name">
                            <h4><strong>{{$dados->name}}</strong></h4>
                            <span>{{$dados->role}}</span>
                        </div>
                        <div style="height: 190px;"></div>
                    </div>
                </div>
            </div>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="usersettings">
                    <div class="row clearfix text-center">
                        <div class="col-lg-3 col-md-6 col-6">
                            <div class="card">
                                <div class="body">
                                    <input type="text" class="knob" value="22" data-width="70" data-height="70" data-thickness="0.1" data-fgColor="#49c5b6">
                                    <h6>Events</h6>
                                    <span>12 of this month</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-6">
                            <div class="card">
                                <div class="body">
                                    <input type="text" class="knob" value="78" data-width="70" data-height="70" data-thickness="0.1" data-fgColor="#2196f3">
                                    <h6>Birthday</h6>
                                    <span>4 of this month</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-6">
                            <div class="card">
                                <div class="body">
                                    <input type="text" class="knob" value="66" data-width="70" data-height="70" data-thickness="0.1" data-fgColor="#f44336">
                                    <h6>Conferences</h6>
                                    <span>8 of this month</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-6">
                            <div class="card">
                                <div class="body">
                                    <input type="text" class="knob" value="50" data-width="70" data-height="70" data-thickness="0.1" data-fgColor="#4caf50">
                                    <h6>Seminars</h6>
                                    <span>2 of this month</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="header">
                            <h2>Configuração de <strong>Segurança</strong></h2>
                        </div>
                        <div class="body">
                            <div class="form-group">
                                <input type="text" value="{{$dados->email}}" class="form-control" name="email" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input type="password" value="" class="form-control" name="password" placeholder="Nova Senha">
                            </div>                               
                        </div>
                    </div>
                    <div class="card">
                        <div class="header">
                            <h2>Configuração de <strong>Conta</strong></h2>
                        </div>
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <input value="{{$dados->name}}" type="text" class="form-control" name="name" placeholder="Nome">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <input value="{{$dados->telephone}}" type="text" class="form-control" name="telephone" placeholder="Telefone">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <input value="{{$dados->skills}}" type="text" class="form-control" name="skills" placeholder="Habilidade">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="form-group">
                                        <input value="{{$dados->role}}" type="text" class="form-control" name="role" placeholder="Cargo">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <div class="form-group">
                                        <input value="{{$dados->department}}" type="text" class="form-control" name="department" placeholder="Departamento">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <div class="form-group">
                                        <input value="{{$dados->organization}}" type="text" class="form-control" name="organization" placeholder="Organização">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <div class="form-group">
                                        <input value="{{$dados->location}}" type="text" class="form-control" name="location" placeholder="Localização">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <button type="submit" class="btn btn-primary btn-round">Salvar Alterações</button>
    </div>
</form>
@stop

@section('page-styles')
<link rel="stylesheet" href="{{ asset('assets/plugins/fullcalendar/fullcalendar.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/plugins/morrisjs/morris.css') }}">
@stop

@section('page-script')
<script src="{{ asset('assets/bundles/knob.bundle.js') }}"></script>
<script src="{{ asset('assets/bundles/morrisscripts.bundle.js') }}"></script>
<script src="{{ asset('assets/bundles/fullcalendarscripts.bundle.js') }}"></script>

<script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>
<script src="{{ asset('assets/js/pages/charts/jquery-knob.js') }}"></script>
<script src="{{ asset('assets/js/pages/calendar/calendar.js') }}"></script>
<script src="{{ asset('assets/js/pages/profile.js') }}"></script>
@stop