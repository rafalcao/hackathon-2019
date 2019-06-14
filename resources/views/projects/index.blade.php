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
                        <table id="project-table" class="table js-basic-example dataTable">
                            <thead>
                            <tr>
                                <th style="border-bottom: 0px solid #dee2e6; border-top: 0px;"><a href="{{ route('projects.create') }}" class="btn btn-primary btn-lg bg-light-blue" style="float: right; margin-right: 20px; margin-top: 0px; margin-bottom: 10px;">Criar Projeto</a>
                                </th>
                            </tr>
                            <tr>
                                <th>Gerente</th>
                                <th>Projeto</th>
                                <th>Competências</th>
                                <th>Progresso</th>
                                <th>Equipe</th>
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
                                    <a role="button" data-toggle="collapse" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample"
                                       class="waves-effect collapsed">
                                        <i class="material-icons" style="margin-left: 10px">keyboard_arrow_down</i>
                                    </a>
                                </td>

                            </tr>
                            <tr>
                                <td colspan="999" class="td-w">
                                    <div style="display: flex; white-space: normal;">
                                        <div class="collapse" id="collapseExample"  style="width: 37%; margin-right: 20px;">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                                        </div>
                                        <div class="collapse" id="collapseExample"  style="width: 60%">
                                            <div class="table-responsive m-t-20">
                                                <table class="table table-filter table-hover m-b-0">
                                                    <tbody>
                                                    <tr data-status="approved">
                                                        <td>1</td>
                                                        <td><div class="media-object"><img src="../assets/images/xs/avatar1.jpg" alt="" width="35px" class="rounded-circle"></div></td>
                                                        <td>Rafael Falcão</td>
                                                        <td>Desenvolvedor PHP</td>
                                                        <td width="250px">
                                                            <div class="progress-tempo">
                                                                01/07/2019 a 29/07/2019
                                                            </div>
                                                            <div class="progress progress-xs">
                                                                <div class="progress-bar l-green" role="progressbar" aria-valuenow="87" aria-valuemin="0" aria-valuemax="100" style="width: 87%;"></div>
                                                            </div>
                                                        </td>
                                                        <td><span class="badge badge-success">Dentro do prazo</span></td>
                                                    </tr>
                                                    <tr data-status="suspended">
                                                        <td>2</td>
                                                        <td><div class="media-object"><img src="../assets/images/xs/avatar2.jpg" alt="" width="35px" class="rounded-circle"></div></td>
                                                        <td>charlotte</td>
                                                        <td>a.charlotte@gnail.com</td>
                                                        <td>
                                                            <div class="progress-tempo">
                                                                01/07/2019 a 29/07/2019
                                                            </div>
                                                            <div class="progress progress-xs">
                                                                <div class="progress-bar l-amber" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%;"></div>
                                                            </div>
                                                        </td>
                                                        <td><span class="badge badge-warning">Atenção</span></td>
                                                    </tr>
                                                    <tr data-status="blocked">
                                                        <td>3</td>
                                                        <td><div class="media-object"><img src="../assets/images/xs/avatar3.jpg" alt="" width="35px" class="rounded-circle"></div></td>
                                                        <td>grayson</td>
                                                        <td>grayson@yahoo.com</td>
                                                        <td>
                                                            <div class="progress-tempo">
                                                                01/07/2019 a 29/07/2019
                                                            </div>
                                                            <div class="progress progress-xs">
                                                                <div class="progress-bar l-coral" role="progressbar" aria-valuenow="16" aria-valuemin="0" aria-valuemax="100" style="width: 16%;"></div>
                                                            </div>
                                                        </td>
                                                        <td><span class="badge badge-danger">Atrasado</span></td>
                                                    </tr>
                                                    <tr data-status="blocked">
                                                        <td>3</td>
                                                        <td><div class="material-icons" style="font-size: 35px;">account_circle</div></td>
                                                        <td>Pendente</td>
                                                        <td>Desenvolvedor React</td>
                                                        <td>
                                                            <div class="progress-tempo">
                                                                01/07/2019 a 29/07/2019
                                                            </div>
                                                            <div class="progress progress-xs">
                                                                <div class="progress-bar l-coral" role="progressbar" aria-valuenow="" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>
                                                            </div>
                                                        </td>
                                                        <td class="project-actions">
                                                            <a href="{{ route('projects.edit') }}" class="btn btn-primary btn-md btn-info">Colaborar!</a>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
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
    <style>
        .btn-sm {
            font-size: 12px !important;
            padding: 4px 5px !important;
        }

        .progress-tempo {
            font-size: 14px;
            font-family: Arial;
            margin-left: 35px;
        }

        .td-w {
            border-top: 0px !important;
        }

        .table-hover tbody tr:hover {
            background-color: transparent !important;
        }
    </style>

@stop

@section('page-styles')
    <link rel="stylesheet" href="{{ asset('assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/morrisjs/morris.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/jquery-datatable/dataTables.bootstrap4.min.css') }}">
@stop

@section('page-script')
    <script src="{{ asset('assets/bundles/datatablescripts.bundle.js') }}"></script>
    <script src="{{ asset('assets/bundles/morrisscripts.bundle.js') }}"></script>
    <script src="{{ asset('assets/bundles/jvectormap.bundle.js') }}"></script>

    <script src="{{ asset('assets/bundles/knob.bundle.js') }}"></script>

    <script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/pages/index.js') }}"></script>
    <script src="{{ asset('assets/js/pages/widgets/infobox/infobox-1.js') }}"></script>
    <script src="{{ asset('assets/js/pages/tables/jquery-datatable.js') }}"></script>

@stop




