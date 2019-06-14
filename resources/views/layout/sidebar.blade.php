<aside id="leftsidebar" class="sidebar h_menu">
    <div class="container">
        <div class="row clearfix">
            <div class="col-12">
                <div class="menu">
                    <ul class="list">
                        <li class="header">MAIN</li>
                        <li class="{{ Request::segment(1) === 'dashboard' ? 'active open' : null }}"><a href="{{route('dashboard.index')}}"><i class="icon-speedometer"></i><span>Dashboard</span></a></li>
                        <li class="{{ Request::segment(1) === 'projects' ? 'active open' : null }}"><a href="{{route('projects.index')}}"><i class="icon-rocket"></i><span>Projetos</span></a></li>
                        <li class="{{ Request::segment(1) === 'app' ? 'active open' : null }}">
                            <a href="javascript:void(0);" class="menu-toggle"><i class="icon-grid"></i><span>App</span></a>
                            <ul class="ml-menu">
                                <li class="{{ Request::segment(2) === 'inbox' ? 'active' : null }}"><a href="{{route('app.inbox')}}">Inbox</a></li>
                                <li class="{{ Request::segment(2) === 'chat' ? 'active' : null }}"><a href="{{route('app.chat')}}">Chat</a></li>
                                <li class="{{ Request::segment(2) === 'events' ? 'active' : null }}"><a href="{{route('app.events')}}">Calendar</a></li>
                                <li class="{{ Request::segment(2) === 'filemanager' ? 'active' : null }}"><a href="{{route('app.filemanager')}}">File Manager</a></li>
                                <li class="{{ Request::segment(2) === 'contact' ? 'active' : null }}"><a href="{{route('app.contact')}}">Contact list</a></li>
                                <li class="{{ Request::segment(2) === 'blogdashboard' ? 'active' : null }}"><a href="{{route('app.blogdashboard')}}">Blog</a></li>
                                <li class="{{ Request::segment(2) === 'ticket' ? 'active' : null }}"><a href="{{route('app.ticket')}}">Support Ticket</a></li>
                                <li class="{{ Request::segment(2) === 'taskboard' ? 'active' : null }}"><a href="{{route('app.taskboard')}}">Taskboard</a></li>
                            </ul>
                        </li>
                        
                        <li class="{{ Request::segment(1) === 'ui' ? 'active open' : null }}">
                            <a href="javascript:void(0);" class="menu-toggle"><i class="icon-layers"></i><span>UI Elements</span></a>
                            <ul class="ml-menu">
                                <li class="{{ Request::segment(2) === 'kit' ? 'active' : null }}"><a href="{{route('ui.kit')}}">UI KIT</a></li>
                                <li class="{{ Request::segment(2) === 'alerts' ? 'active' : null }}"><a href="{{route('ui.alerts')}}">Alerts</a></li>
                                <li class="{{ Request::segment(2) === 'collapse' ? 'active' : null }}"><a href="{{route('ui.collapse')}}">Collapse</a></li>
                                <li class="{{ Request::segment(2) === 'colors' ? 'active' : null }}"><a href="{{route('ui.colors')}}">Colors</a></li>
                                <li class="{{ Request::segment(2) === 'dialogs' ? 'active' : null }}"><a href="{{route('ui.dialogs')}}">Dialogs</a></li>
                                <li class="{{ Request::segment(2) === 'icons' ? 'active' : null }}"><a href="{{route('ui.icons')}}">Icons</a></li>
                                <li class="{{ Request::segment(2) === 'listgroup' ? 'active' : null }}"><a href="{{route('ui.listgroup')}}">List Group</a></li>
                                <li class="{{ Request::segment(2) === 'mediaobject' ? 'active' : null }}"><a href="{{route('ui.mediaobject')}}">Media Object</a></li>
                                <li class="{{ Request::segment(2) === 'modals' ? 'active' : null }}"><a href="{{route('ui.modals')}}">Modals</a></li>
                                <li class="{{ Request::segment(2) === 'notifications' ? 'active' : null }}"><a href="{{route('ui.notifications')}}">Notifications</a></li>
                                <li class="{{ Request::segment(2) === 'progressbars' ? 'active' : null }}"><a href="{{route('ui.progressbars')}}">Progress Bars</a></li>
                                <li class="{{ Request::segment(2) === 'rangesliders' ? 'active' : null }}"><a href="{{route('ui.rangesliders')}}">Range Sliders</a></li>
                                <li class="{{ Request::segment(2) === 'sortablenestable' ? 'active' : null }}"><a href="{{route('ui.sortablenestable')}}">Sortable & Nestable</a></li>
                                <li class="{{ Request::segment(2) === 'tabs' ? 'active' : null }}"><a href="{{route('ui.tabs')}}">Tabs</a></li>
                                <li class="{{ Request::segment(2) === 'waves' ? 'active' : null }}"><a href="{{route('ui.waves')}}">Waves</a></li>
                            </ul>
                        </li>
                        <li class="header">FORMS, CHARTS, TABLES</li>
                        <li class="{{ Request::segment(1) === 'forms' ? 'active open' : null }}">
                            <a href="javascript:void(0);" class="menu-toggle"><i class="icon-doc"></i><span>Forms</span></a>
                            <ul class="ml-menu">
                                <li class="{{ Request::segment(2) === 'basic' ? 'active' : null }}"><a href="{{route('forms.basic')}}">Basic Elements</a></li>
                                <li class="{{ Request::segment(2) === 'advanced' ? 'active' : null }}"><a href="{{route('forms.advanced')}}">Advanced Elements</a></li>
                                <li class="{{ Request::segment(2) === 'examples' ? 'active' : null }}"><a href="{{route('forms.examples')}}">Form Examples</a></li>
                                <li class="{{ Request::segment(2) === 'validation' ? 'active' : null }}"><a href="{{route('forms.validation')}}">Form Validation</a></li>
                                <li class="{{ Request::segment(2) === 'wizard' ? 'active' : null }}"><a href="{{route('forms.wizard')}}">Form Wizard</a></li>
                                <li class="{{ Request::segment(2) === 'editors' ? 'active' : null }}"><a href="{{route('forms.editors')}}">Editors</a></li>
                                <li class="{{ Request::segment(2) === 'formupload' ? 'active' : null }}"><a href="{{route('forms.formupload')}}">File Upload</a></li>
                                <li class="{{ Request::segment(2) === 'imgcropper' ? 'active' : null }}"><a href="{{route('forms.imgcropper')}}">Image Cropper</a></li>
                                <li class="{{ Request::segment(2) === 'summernote' ? 'active' : null }}"><a href="{{route('forms.summernote')}}">Summernote</a></li>
                            </ul>
                        </li>
                        <li class="{{ Request::segment(1) === 'tables' ? 'active open' : null }}">
                            <a href="javascript:void(0);" class="menu-toggle"><i class="icon-tag"></i><span>Tables</span></a>
                            <ul class="ml-menu">
                                <li class="{{ Request::segment(2) === 'normal' ? 'active' : null }}"><a href="{{route('tables.normal')}}">Normal Tables</a></li>
                                <li class="{{ Request::segment(2) === 'jquerydatatable' ? 'active' : null }}"><a href="{{route('tables.jquerydatatable')}}">Jquery Datatables</a></li>
                                <li class="{{ Request::segment(2) === 'editable' ? 'active' : null }}"><a href="{{route('tables.editable')}}">Editable Tables</a></li>
                                <li class="{{ Request::segment(2) === 'color' ? 'active' : null }}"><a href="{{route('tables.color')}}">Tables Color</a></li>
                                <li class="{{ Request::segment(2) === 'filter' ? 'active' : null }}"><a href="{{route('tables.filter')}}">Tables Filter</a></li>
                            </ul>
                        </li>                        
                        <li class="{{ Request::segment(1) === 'charts' ? 'active open' : null }}">
                            <a href="javascript:void(0);" class="menu-toggle"><i class="icon-bar-chart"></i><span>Charts</span></a>
                            <ul class="ml-menu">
                                <li class="{{ Request::segment(2) === 'morris' ? 'active' : null }}"><a href="{{route('charts.morris')}}">Morris</a></li>
                                <li class="{{ Request::segment(2) === 'flot' ? 'active' : null }}"><a href="{{route('charts.flot')}}">Flot</a></li>
                                <li class="{{ Request::segment(2) === 'chartjs' ? 'active' : null }}"><a href="{{route('charts.chartjs')}}">ChartJS</a></li>
                                <li class="{{ Request::segment(2) === 'sparkline' ? 'active' : null }}"><a href="{{route('charts.sparkline')}}">Sparkline</a></li>
                                <li class="{{ Request::segment(2) === 'knob' ? 'active' : null }}"><a href="{{route('charts.knob')}}">Jquery Knob</a></li>
                            </ul>
                        </li>
                        <li class="header">EXTRA COMPONENTS</li>                    
                        <li class="{{ Request::segment(1) === 'widgets' ? 'active open' : null }}">
                            <a href="javascript:void(0);" class="menu-toggle"><i class="icon-puzzle"></i><span>Widgets</span></a>
                            <ul class="ml-menu">
                                <li class="{{ Request::segment(2) === 'app' ? 'active' : null }}"><a href="{{route('widgets.app')}}">Apps Widgetse</a></li>
                                <li class="{{ Request::segment(2) === 'data' ? 'active' : null }}"><a href="{{route('widgets.data')}}">Data Widgetse</a></li>
                                <li class="{{ Request::segment(2) === 'chart' ? 'active' : null }}"><a href="{{route('widgets.chart')}}">Chart Widgetse</a></li>
                            </ul>
                        </li>
                        <li class="{{ Request::segment(1) === 'authentication' ? 'active open' : null }}">
                            <a href="javascript:void(0);" class="menu-toggle"><i class="icon-lock"></i><span>Auth</span></a>
                            <ul class="ml-menu">
                                <li class="{{ Request::segment(2) === 'login' ? 'active' : null }}"><a href="{{route('authentication.login')}}">Sign In</a></li>
                                <li class="{{ Request::segment(2) === 'register' ? 'active' : null }}"><a href="{{route('authentication.register')}}">Sign Up</a></li>
                                <li class="{{ Request::segment(2) === 'forgot-password' ? 'active' : null }}"><a href="{{route('authentication.forgot-password')}}">Forgot Password</a></li>
                                <li class="{{ Request::segment(2) === 'page404' ? 'active' : null }}"><a href="{{route('authentication.page404')}}">Page 404</a></li>
                                <li class="{{ Request::segment(2) === 'page403' ? 'active' : null }}"><a href="{{route('authentication.page403')}}">Page 403</a></li>
                                <li class="{{ Request::segment(2) === 'page500' ? 'active' : null }}"><a href="{{route('authentication.page500')}}">Page 500</a></li>
                                <li class="{{ Request::segment(2) === 'page503' ? 'active' : null }}"><a href="{{route('authentication.page503')}}">Page 503</a></li>
                                <li class="{{ Request::segment(2) === 'offline' ? 'active' : null }}"><a href="{{route('authentication.offline')}}">Page Offline</a></li>
                                <li class="{{ Request::segment(2) === 'lockscreen' ? 'active' : null }}"><a href="{{route('authentication.lockscreen')}}">Locked Screen</a></li>
                            </ul>
                        </li>
                        <li class="{{ Request::segment(1) === 'pages' ? 'active open' : null }}">
                        <a href="javascript:void(0);" class="menu-toggle"><i class="icon-folder-alt"></i><span>Pages</span></a>
                            <ul class="ml-menu">
                                <li class="{{ Request::segment(2) === 'blank' ? 'active' : null }}"><a href="{{route('pages.blank')}}">Blank Page</a></li>
                                <li class="{{ Request::segment(2) === 'teamsboard' ? 'active' : null }}"><a href="{{route('pages.teamsboard')}}">Teams Board</a></li>
                                <li class="{{ Request::segment(2) === 'projects' ? 'active' : null }}"><a href="{{route('pages.projects')}}">Projects List</a></li>
                                <li class="{{ Request::segment(2) === 'gallery' ? 'active' : null }}"><a href="{{route('pages.gallery')}}">Image Gallery</a></li>
                                <li class="{{ Request::segment(2) === 'profile' ? 'active' : null }}"><a href="{{route('pages.profile')}}">Profile</a></li>
                                <li class="{{ Request::segment(2) === 'timeline' ? 'active' : null }}"><a href="{{route('pages.timeline')}}">Timeline</a></li>
                                <li class="{{ Request::segment(2) === 'htimeline' ? 'active' : null }}"><a href="{{route('pages.htimeline')}}">Horizontal Timeline</a></li>
                                <li class="{{ Request::segment(2) === 'pricing' ? 'active' : null }}"><a href="{{route('pages.pricing')}}">Pricing</a></li>
                                <li class="{{ Request::segment(2) === 'invoices' ? 'active' : null }}"><a href="{{route('pages.invoices')}}">Invoices</a></li>
                                <li class="{{ Request::segment(2) === 'faqs' ? 'active' : null }}"><a href="{{route('pages.faqs')}}">FAQs</a></li>
                                <li class="{{ Request::segment(2) === 'search' ? 'active' : null }}"><a href="{{route('pages.search')}}">Search Results</a></li>
                                <li class="{{ Request::segment(2) === 'helper' ? 'active' : null }}"><a href="{{route('pages.helper')}}">Helper Classes</a></li>
                            </ul>
                        </li>
                        <li class="{{ Request::segment(1) === 'maps' ? 'active open' : null }}">
                            <a href="javascript:void(0);" class="menu-toggle"><i class="icon-map"></i><span>Maps</span></a>
                            <ul class="ml-menu">
                                <li class="{{ Request::segment(2) === 'jvectormap' ? 'active' : null }}"><a href="{{route('maps.jvectormap')}}">jVectorMap</a></li>
                                <li class="{{ Request::segment(2) === 'yandex' ? 'active' : null }}"><a href="{{route('maps.yandex')}}">YandexMap</a></li>
                            </ul>
                        </li>                
                    </ul>
                </div>
            </div>
        </div>
    </div>
</aside>
