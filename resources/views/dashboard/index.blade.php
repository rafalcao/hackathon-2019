@extends('layout.master')
@section('title', 'Index')
@section('parentPageTitle', 'Dashboard')

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
                            <th>Dono</th>
                            <th>Projeto</th>
                            <th>Competências</th>
                            <th>Progresso</th>
                            <th>Time</th>
                            <th>Status</th>
                            <th>Ação</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                <ul class="list-unstyled team-info">
                                    <li><img src="../assets/images/xs/avatar3.jpg" alt="Avatar"></li>
                                </ul>
                            </td>
                            <td class="project-title">
                                <h6><a href="#">Geração de NFA-e</a></h6>
                                <small>13/06/2019 a 27/06/2019 (2 sem.)</small>
                            </td>
                            <td>
                                <div class="btn btn-primary bg-blue-grey btn-sm">Gestão de projetos</div>
                            </td>
                            <td>
                                <div class="progress">
                                    <div class="progress-bar l-dark" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                                </div>
                                <small>Progresso: 100%</small>
                            </td>
                            <td>
                                <ul class="list-unstyled team-info">
                                    <li><img src="../assets/images/xs/avatar1.jpg" alt="Avatar"></li>
                                    <li><img src="../assets/images/xs/avatar2.jpg" alt="Avatar"></li>
                                    <li><img src="../assets/images/xs/avatar3.jpg" alt="Avatar"></li>
                                </ul>
                            </td>
                            <td>
                                <span class="badge badge-success">Concluído</span>
                            </td>
                            <td class="project-actions">
                                <button class="btn btn-primary btn-lg btn-info">Colaborar!</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <ul class="list-unstyled team-info">
                                    <li><img src="../assets/images/xs/avatar3.jpg" alt="Avatar"></li>
                                </ul>
                            </td>
                            <td class="project-title">
                                <h6><a href="#">iNext - One Page Responsive Template</a></h6>
                                <small>Created 14.Mar.2018</small>
                            </td>
                            <td>
                                <div class="btn btn-primary bg-blue-grey btn-sm">JavaScript</div>
                                <div class="btn btn-primary bg-blue-grey btn-sm">React</div>
                            </td>
                            <td>
                                <div class="progress">
                                    <div class="progress-bar l-dark" role="progressbar" aria-valuenow="29" aria-valuemin="0" aria-valuemax="100" style="width: 29%;"></div>
                                </div>
                                <small>Progresso: 29%</small>
                            </td>
                            <td>
                                <ul class="list-unstyled team-info">
                                    <li><img src="../assets/images/xs/avatar2.jpg" alt="Avatar"></li>
                                    <li><img src="../assets/images/xs/avatar3.jpg" alt="Avatar"></li>
                                </ul>
                            </td>
                            <td>
                                <span class="badge badge-default">InActive</span>
                            </td>
                            <td class="project-actions">
                                <button class="btn btn-primary btn-lg btn-info">Colaborar!</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <ul class="list-unstyled team-info">
                                    <li><img src="../assets/images/xs/avatar3.jpg" alt="Avatar"></li>
                                </ul>
                            </td>
                            <td class="project-title">
                                <h6><a href="#">InfiniO 4.1</a></h6>
                                <small>Created 14.Mar.2018</small>
                            </td>
                            <td>
                                <div class="btn btn-primary bg-blue-grey btn-sm">AWS</div>
                                <div class="btn btn-primary bg-blue-grey btn-sm">Load Balance</div>
                            </td>
                            <td>
                                <div class="progress">
                                    <div class="progress-bar l-dark" role="progressbar" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100" style="width: 48%;"></div>
                                </div>
                                <small>Progresso: 48%</small>
                            </td>
                            <td>
                                <ul class="list-unstyled team-info">
                                    <li><img src="../assets/images/xs/avatar1.jpg" alt="Avatar"></li>
                                    <li><img src="../assets/images/xs/avatar2.jpg" alt="Avatar"></li>
                                    <li><img src="../assets/images/xs/avatar3.jpg" alt="Avatar"></li>
                                </ul>
                            </td>
                            <td>
                                <span class="badge badge-warning">Pending</span>
                            </td>
                            <td class="project-actions">
                                <button class="btn btn-primary btn-lg btn-info">Colaborar!</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <ul class="list-unstyled team-info">
                                    <li><img src="../assets/images/xs/avatar3.jpg" alt="Avatar"></li>
                                </ul>
                            </td>
                            <td class="project-title">
                                <h6><a href="#">Massive Event - Conference and Event</a></h6>
                                <small>Created 18.Mar.2018</small>
                            </td>
                            <td>
                                <div class="btn btn-primary bg-blue-grey btn-sm">PHP 7</div>
                                <div class="btn btn-primary bg-blue-grey btn-sm">Magento</div>
                            </td>
                            <td>
                                <div class="progress">
                                    <div class="progress-bar l-dark" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                                </div>
                                <small>Progresso: 100%</small>
                            </td>
                            <td>
                                <ul class="list-unstyled team-info">
                                    <li><img src="../assets/images/xs/avatar10.jpg" alt="Avatar"></li>
                                    <li><img src="../assets/images/xs/avatar7.jpg" alt="Avatar"></li>
                                    <li><img src="../assets/images/xs/avatar2.jpg" alt="Avatar"></li>
                                    <li><img src="../assets/images/xs/avatar5.jpg" alt="Avatar"></li>
                                </ul>
                            </td>
                            <td>
                                <span class="badge badge-primary">Closed</span>
                            </td>
                            <td class="project-actions">
                                <button class="btn btn-primary btn-lg btn-info">Colaborar!</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <ul class="list-unstyled team-info">
                                    <li><img src="../assets/images/xs/avatar3.jpg" alt="Avatar"></li>
                                </ul>
                            </td>
                            <td class="project-title">
                                <h6><a href="#">Startup - OnePage Business Corporate Template</a></h6>
                                <small>Created 14.Mar.2018</small>
                            </td>
                            <td>
                                <div class="btn btn-primary bg-blue-grey btn-sm">PHP 7</div>
                                <div class="btn btn-primary bg-blue-grey btn-sm">Magento</div>
                            </td>
                            <td>
                                <div class="progress">
                                    <div class="progress-bar l-dark" role="progressbar" aria-valuenow="56" aria-valuemin="0" aria-valuemax="100" style="width: 56%;"></div>
                                </div>
                                <small>Progresso: 56%</small>
                            </td>
                            <td>
                                <ul class="list-unstyled team-info">
                                    <li><img src="../assets/images/xs/avatar3.jpg" alt="Avatar"></li>
                                    <li><img src="../assets/images/xs/avatar1.jpg" alt="Avatar"></li>
                                    <li><img src="../assets/images/xs/avatar5.jpg" alt="Avatar"></li>
                                    <li><img src="../assets/images/xs/avatar9.jpg" alt="Avatar"></li>
                                </ul>
                            </td>
                            <td>
                                <span class="badge badge-warning">Pending</span>
                            </td>
                            <td class="project-actions">
                                <button class="btn btn-primary btn-lg btn-info">Colaborar!</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <ul class="list-unstyled team-info">
                                    <li><img src="../assets/images/xs/avatar3.jpg" alt="Avatar"></li>
                                </ul>
                            </td>
                            <td class="project-title">
                                <h6><a href="#">Falcon - Bootstrap Admin Template + UI Kit</a></h6>
                                <small>Created 18.Mar.2018</small>
                            </td>
                            <td>
                                <div class="btn btn-primary bg-blue-grey btn-sm">PHP 7</div>
                                <div class="btn btn-primary bg-blue-grey btn-sm">Magento</div>
                            </td>
                            <td>
                                <div class="progress">
                                    <div class="progress-bar l-dark" role="progressbar" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100" style="width: 48%;"></div>
                                </div>
                                <small>Progresso: 48%</small>
                            </td>
                            <td>
                                <ul class="list-unstyled team-info">
                                    <li><img src="../assets/images/xs/avatar4.jpg" alt="Avatar"></li>
                                    <li><img src="../assets/images/xs/avatar1.jpg" alt="Avatar"></li>
                                </ul>
                            </td>
                            <td>
                                <span class="badge badge-success">Active</span>
                            </td>
                            <td class="project-actions">
                                <button class="btn btn-primary btn-lg btn-info">Colaborar!</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <ul class="list-unstyled team-info">
                                    <li><img src="../assets/images/xs/avatar3.jpg" alt="Avatar"></li>
                                </ul>
                            </td>
                            <td class="project-title">
                                <h6><a href="#">Oreo Admin Bootstrap 4</a></h6>
                                <small>Created 14.Mar.2018</small>
                            </td>
                            <td>
                                <div class="btn btn-primary bg-blue-grey btn-sm">PHP 7</div>
                                <div class="btn btn-primary bg-blue-grey btn-sm">Magento</div>
                            </td>
                            <td>
                                <div class="progress">
                                    <div class="progress-bar l-dark" role="progressbar" aria-valuenow="73" aria-valuemin="0" aria-valuemax="100" style="width: 73%;"></div>
                                </div>
                                <small>Progresso: 73%</small>
                            </td>
                            <td>
                                <ul class="list-unstyled team-info">
                                    <li><img src="../assets/images/xs/avatar5.jpg" alt="Avatar"></li>
                                    <li><img src="../assets/images/xs/avatar3.jpg" alt="Avatar"></li>
                                    <li><img src="../assets/images/xs/avatar8.jpg" alt="Avatar"></li>
                                    <li><img src="../assets/images/xs/avatar7.jpg" alt="Avatar"></li>
                                </ul>
                            </td>
                            <td>
                                <span class="badge badge-success">Active</span>
                            </td>
                            <td class="project-actions">
                                <button class="btn btn-primary btn-lg btn-info">Colaborar!</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <ul class="list-unstyled team-info">
                                    <li><img src="../assets/images/xs/avatar3.jpg" alt="Avatar"></li>
                                </ul>
                            </td>
                            <td class="project-title">
                                <h6><a href="#">Blazing Saddles Angular 5</a></h6>
                                <small>Created 18.Mar.2018</small>
                            </td>
                            <td>
                                <div class="btn btn-primary bg-blue-grey btn-sm">PHP 7</div>
                                <div class="btn btn-primary bg-blue-grey btn-sm">Magento</div>
                            </td>
                            <td>
                                <div class="progress">
                                    <div class="progress-bar l-dark" role="progressbar" aria-valuenow="23" aria-valuemin="0" aria-valuemax="100" style="width: 23%;"></div>
                                </div>
                                <small>Progresso: 23%</small>
                            </td>
                            <td>
                                <ul class="list-unstyled team-info">
                                    <li><img src="../assets/images/xs/avatar1.jpg" alt="Avatar"></li>
                                    <li><img src="../assets/images/xs/avatar5.jpg" alt="Avatar"></li>
                                </ul>
                            </td>
                            <td>
                                <span class="badge badge-success">Active</span>
                            </td>
                            <td class="project-actions">
                                <button class="btn btn-primary btn-lg btn-info">Colaborar!</button>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <button class="btn btn-primary btn-simple center-align" style="margin-left:47%">Ver todos</button>
            </div>
        </div>
    </div>
</div>
<div class="row clearfix">
    <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="card info-box-2">
            <div class="body">
                <div class="icon">
                    <div class="chart chart-pie">30, 35, 25, 8</div>
                </div>
                <div class="content">
                    <div class="text">USAGE</div>
                    <div class="number"><span class="number count-to" data-from="0" data-to="9" data-speed="2000" data-fresh-interval="700">9</span>%</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="card info-box-2">
            <div class="body">
                <div class="icon">
                    <div class="chart chart-bar">6,4,8,6,8,10,5,6,7,9,5</div>
                </div>
                <div class="content">
                    <div class="text">IMPRESSIONS</div>
                    <div class="number count-to" data-from="0" data-to="457512" data-speed="2000" data-fresh-interval="700">457512</div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="card info-box-2">
            <div class="body">
                <div class="icon">
                    <span class="chart chart-line">9,4,6,5,6,4,7,3</span>
                </div>
                <div class="content">
                    <div class="text">TOTAL SALES</div>
                    <div class="number">$<span class="number count-to" data-from="0" data-to="125543" data-speed="2000" data-fresh-interval="700">125543</span></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-12">
        <div class="card info-box-2">
            <div class="body">
                <div class="icon">
                    <div class="chart chart-bar">4,6,-3,-1,2,-2,4,3,6,7,-2,3</div>
                </div>
                <div class="content">
                    <div class="text">CURRENCY</div>
                    <div class="number">$<span class="number count-to" data-from="0" data-to="1063" data-speed="2000" data-fresh-interval="700">1063</span></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row clearfix">
    <div class="col-lg-12 col-md-12">
        <div class="card user-account">
            <div class="header">
                <h2><strong>Ranking</strong> de Colaboração</h2>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table m-b-0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Perfil</th>
                                <th>Nome</th>
                                <th style="text-align: center">Áreas</th>
                                <th style="text-align: center">Semanas</th>
                                <th style="text-align: center">Projetos</th>
                                <th style="text-align: center">Ação</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td><img src="../assets/images/xs/avatar6.jpg" alt="" class="rounded"></td>
                                <td>Evandro Gomes</td>
                                <td style="text-align: center">
                                    <h4 class="number count-to" data-from="0" data-to="53" data-speed="2500" data-fresh-interval="700">53</h4>
                                    <span>Áreas</span>
                                </td>
                                <td style="text-align: center">
                                    <h4 class="number count-to" data-from="0" data-to="53" data-speed="2500" data-fresh-interval="700">53</h4>
                                    <span>Semanas</span>
                                </td>
                                <td style="text-align: center">
                                    <h4 class="number count-to" data-from="0" data-to="53" data-speed="2500" data-fresh-interval="700">53</h4>
                                    <span>Projetos</span>
                                </td>
                                <td >
                                    <button class="btn btn-primary btn-simple" style="margin-left: 32%">Ver Perfil</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td><img src="../assets/images/xs/avatar6.jpg" alt="" class="rounded"></td>
                                <td>Evandro Gomes</td>
                                <td style="text-align: center">
                                    <h4 class="number count-to" data-from="0" data-to="53" data-speed="2500" data-fresh-interval="700">53</h4>
                                    <span>Áreas</span>
                                </td>
                                <td style="text-align: center">
                                    <h4 class="number count-to" data-from="0" data-to="53" data-speed="2500" data-fresh-interval="700">53</h4>
                                    <span>Semanas</span>
                                </td>
                                <td style="text-align: center">
                                    <h4 class="number count-to" data-from="0" data-to="53" data-speed="2500" data-fresh-interval="700">53</h4>
                                    <span>Projetos</span>
                                </td>
                                <td >
                                    <button class="btn btn-primary btn-simple" style="margin-left: 32%">Ver Perfil</button>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td><img src="../assets/images/xs/avatar6.jpg" alt="" class="rounded"></td>
                                <td>Evandro Gomes</td>
                                <td style="text-align: center">
                                    <h4 class="number count-to" data-from="0" data-to="53" data-speed="2500" data-fresh-interval="700">53</h4>
                                    <span>Áreas</span>
                                </td>
                                <td style="text-align: center">
                                    <h4 class="number count-to" data-from="0" data-to="53" data-speed="2500" data-fresh-interval="700">53</h4>
                                    <span>Semanas</span>
                                </td>
                                <td style="text-align: center">
                                    <h4 class="number count-to" data-from="0" data-to="53" data-speed="2500" data-fresh-interval="700">53</h4>
                                    <span>Projetos</span>
                                </td>
                                <td >
                                    <button class="btn btn-primary btn-simple" style="margin-left: 32%">Ver Perfil</button>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td><img src="../assets/images/xs/avatar6.jpg" alt="" class="rounded"></td>
                                <td>Evandro Gomes</td>
                                <td style="text-align: center">
                                    <h4 class="number count-to" data-from="0" data-to="53" data-speed="2500" data-fresh-interval="700">53</h4>
                                    <span>Áreas</span>
                                </td>
                                <td style="text-align: center">
                                    <h4 class="number count-to" data-from="0" data-to="53" data-speed="2500" data-fresh-interval="700">53</h4>
                                    <span>Semanas</span>
                                </td>
                                <td style="text-align: center">
                                    <h4 class="number count-to" data-from="0" data-to="53" data-speed="2500" data-fresh-interval="700">53</h4>
                                    <span>Projetos</span>
                                </td>
                                <td >
                                    <button class="btn btn-primary btn-simple" style="margin-left: 32%">Ver Perfil</button>
                                </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td><img src="../assets/images/xs/avatar6.jpg" alt="" class="rounded"></td>
                                <td>Evandro Gomes</td>
                                <td style="text-align: center">
                                    <h4 class="number count-to" data-from="0" data-to="53" data-speed="2500" data-fresh-interval="700">53</h4>
                                    <span>Áreas</span>
                                </td>
                                <td style="text-align: center">
                                    <h4 class="number count-to" data-from="0" data-to="53" data-speed="2500" data-fresh-interval="700">53</h4>
                                    <span>Semanas</span>
                                </td>
                                <td style="text-align: center">
                                    <h4 class="number count-to" data-from="0" data-to="53" data-speed="2500" data-fresh-interval="700">53</h4>
                                    <span>Projetos</span>
                                </td>
                                <td >
                                    <button class="btn btn-primary btn-simple" style="margin-left: 32%">Ver Perfil</button>
                                </td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td><img src="../assets/images/xs/avatar6.jpg" alt="" class="rounded"></td>
                                <td>Evandro Gomes</td>
                                <td style="text-align: center">
                                    <h4 class="number count-to" data-from="0" data-to="53" data-speed="2500" data-fresh-interval="700">53</h4>
                                    <span>Áreas</span>
                                </td>
                                <td style="text-align: center">
                                    <h4 class="number count-to" data-from="0" data-to="53" data-speed="2500" data-fresh-interval="700">53</h4>
                                    <span>Semanas</span>
                                </td>
                                <td style="text-align: center">
                                    <h4 class="number count-to" data-from="0" data-to="53" data-speed="2500" data-fresh-interval="700">53</h4>
                                    <span>Projetos</span>
                                </td>
                                <td >
                                    <button class="btn btn-primary btn-simple" style="margin-left: 32%">Ver Perfil</button>
                                </td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td><img src="../assets/images/xs/avatar6.jpg" alt="" class="rounded"></td>
                                <td>Evandro Gomes</td>
                                <td style="text-align: center">
                                    <h4 class="number count-to" data-from="0" data-to="53" data-speed="2500" data-fresh-interval="700">53</h4>
                                    <span>Áreas</span>
                                </td>
                                <td style="text-align: center">
                                    <h4 class="number count-to" data-from="0" data-to="53" data-speed="2500" data-fresh-interval="700">53</h4>
                                    <span>Semanas</span>
                                </td>
                                <td style="text-align: center">
                                    <h4 class="number count-to" data-from="0" data-to="53" data-speed="2500" data-fresh-interval="700">53</h4>
                                    <span>Projetos</span>
                                </td>
                                <td >
                                    <button class="btn btn-primary btn-simple" style="margin-left: 32%">Ver Perfil</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row clearfix">
    <div class="col-md-12 col-lg-12">
        <div class="card active-bg">
            <div class="body">
                <p class="copyright m-b-0 text-white">Hackathon 2019 © Colabora!</p>
            </div>
        </div>
    </div>
</div>
@stop

@section('page-styles')
<link rel="stylesheet" href="{{ asset('assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/plugins/morrisjs/morris.min.css') }}">
@stop

@section('page-script')
<script src="{{ asset('assets/bundles/morrisscripts.bundle.js') }}"></script>
<script src="{{ asset('assets/bundles/jvectormap.bundle.js') }}"></script>
<script src="{{ asset('assets/bundles/knob.bundle.js') }}"></script>

<script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>
<script src="{{ asset('assets/js/pages/index.js') }}"></script>
<script src="{{ asset('assets/js/pages/widgets/infobox/infobox-1.js') }}"></script>
@stop
