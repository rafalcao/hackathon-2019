<nav class="top_navbar">
    <div class="container">
        <div class="row clearfix">
            <div class="col-12">
                <div class="navbar-logo">
                    <a href="javascript:void(0);" class="bars"></a>
                    <a class="navbar-brand" href="{{route('dashboard.index')}}"><img src="../assets/images/logo.png" width="30" alt="InfiniO"><span class="m-l-10">Colabora!</span></a>
                </div>
                <ul class="nav navbar-nav">
                    <li class="dropdown notifications">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button"><i class="icon-bell"></i><span class="label-count">5</span></a>
                        <ul class="dropdown-menu">
                            <li class="header">Notificações</li>
                            <li class="body">
                                <ul class="menu list-unstyled">
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="media">
                                                <img class="media-object" src="../assets/images/xs/avatar5.jpg" alt="">
                                                <div class="media-body">
                                                    <span class="name">Alexander <span class="time">13min ago</span></span>
                                                    <span class="message">Meeting with Shawn at Stark Tower by 8 o'clock.</span>                                        
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="media">
                                                <img class="media-object" src="../assets/images/xs/avatar6.jpg" alt="">
                                                <div class="media-body">
                                                    <span class="name">Grayson <span class="time">22min ago</span></span>
                                                    <span class="message">You have 5 unread emails in your inbox.</span>                                        
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="media">
                                                <img class="media-object" src="../assets/images/xs/avatar3.jpg" alt="">
                                                <div class="media-body">
                                                    <span class="name">Sophia <span class="time">31min ago</span></span>
                                                    <span class="message">OrderPlaced: You received a new oder from Tina.</span>                                        
                                                </div>
                                            </div>
                                        </a>
                                    </li>                
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="media">
                                                <img class="media-object" src="../assets/images/xs/avatar4.jpg" alt="">
                                                <div class="media-body">
                                                    <span class="name">Isabella <span class="time">35min ago</span></span>
                                                    <span class="message">Lara added a comment in Blazing Saddles.</span>                                        
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="media">
                                                <img class="media-object" src="../assets/images/xs/avatar8.jpg" alt="">
                                                <div class="media-body">
                                                    <span class="name">Sophia <span class="time">48min ago</span></span>
                                                    <span class="message">OrderPlaced: You received a new oder from Tina.</span>                                        
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer"> <a href="javascript:void(0);">Ver todos</a> </li>
                        </ul>
                    </li>
                    <li class="dropdown task hidden-sm"><a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button"><i class="icon-flag"></i>
                        <span class="label-count">5</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">Projetos</li>
                            <li class="body">
                                <ul class="menu tasks list-unstyled">
                                    <li>
                                        <a href="javascript:void(0);">
                                            <span class="text-muted">Clockwork Orange <span class="float-right">29%</span></span>
                                            <div class="progress">
                                                <div class="progress-bar l-turquoise" role="progressbar" aria-valuenow="29" aria-valuemin="0" aria-valuemax="100" style="width: 29%;"></div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <span class="text-muted">Blazing Saddles <span class="float-right">78%</span></span>
                                            <div class="progress">
                                                <div class="progress-bar l-slategray" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 78%;"></div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <span class="text-muted">Project Archimedes <span class="float-right">45%</span></span>
                                            <div class="progress">
                                                <div class="progress-bar l-parpl" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%;"></div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <span class="text-muted">Eisenhower X <span class="float-right">68%</span></span>
                                            <div class="progress">
                                                <div class="progress-bar l-coral" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100" style="width: 68%;"></div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <span class="text-muted">Oreo Admin Templates <span class="float-right">21%</span></span>
                                            <div class="progress">
                                                <div class="progress-bar l-amber" role="progressbar" aria-valuenow="21" aria-valuemin="0" aria-valuemax="100" style="width: 21%;"></div>
                                            </div>
                                        </a>
                                    </li>                        
                                </ul>
                            </li>
                            <li class="footer"><a href="javascript:void(0);">Ver todos</a></li>
                        </ul>
                    </li>
                    <!--li class="dropdown app_menu hidden-sm"><a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button"><i class="icon-grid"></i></a>
                        <ul class="dropdown-menu">
                            <li>
								<ul>
									<li><a href="{{route('app.inbox')}}"><i class="icon-envelope"></i><span>Mail</span></a></li>
									<li><a href="{{route('app.contact')}}"><i class="icon-list"></i><span>Contacts</span></a></li>
									<li><a href="{{route('pages.teamsboard')}}"><i class="icon-users"></i><span>Teams</span></a></li>
									<li><a href="{{route('pages.projects')}}"><i class="icon-notebook"></i><span>Projects</span></a></li>
									<li><a href="{{route('app.events')}}"><i class="icon-calendar"></i><span>Calendar</span></a></li>
								</ul>
							</li>
                        </ul>
                    </-->
                    <li class="dropdown profile">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <img class="rounded-circle" src="../assets/images/profile_av.jpg" alt="User">
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="user-info">
                                    <h6 class="user-name m-b-0">Claudio Barbosa</h6>
                                    <hr>
                                </div>
                            </li>                            
                            <li><a href="{{route('pages.profile')}}"><i class="icon-user m-r-10"></i> <span>Meus dados</span> <span class="badge badge-success float-right">80%</span></a></li>
                            <!--li><a href="javascript:void(0);"><i class="icon-notebook m-r-10"></i><span>Taskboard</span> <span class="badge badge-info float-right">New</span></a></li-->
                            <!--li><a href="{{route('authentication.lockscreen')}}"><i class="icon-lock m-r-10"></i><span>Locked</span></a></li-->
                            <li><a href="{{route('authentication.login')}}"><i class="icon-power m-r-10"></i><span>Sair</span></a></li>
                        </ul>
                    </li>
                    <!--li><a href="javascript:void(0);" class="js-right-sidebar"><i class="icon-equalizer"></i></a></li-->
                </ul>
            </div>
        </div>        
    </div>
</nav>
