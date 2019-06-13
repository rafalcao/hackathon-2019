<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['middleware' => ['auth']], function(){
    /* Dashboard */
    Route::get('/', function () { return redirect('dashboard/index'); });
    Route::get('dashboard', function ()       { return redirect('dashboard/index'); });
    Route::get('dashboard/index',             'DashboardController@index')->name('dashboard.index');

    /* App */
    Route::get('app', function ()       { return redirect('app/inbox'); });
    Route::get('app/inbox',                   'AppController@inbox')->name('app.inbox');
    Route::get('app/compose',                 'AppController@compose')->name('app.compose');
    Route::get('app/details',                 'AppController@details')->name('app.details');

    Route::get('app/chat',                    'AppController@chat')->name('app.chat');
    Route::get('app/events',                  'AppController@events')->name('app.events');
    Route::get('app/filemanager',             'AppController@filemanager')->name('app.filemanager');
    Route::get('app/contact',                 'AppController@contact')->name('app.contact');

    Route::get('app/blogdashboard',           'AppController@blogdashboard')->name('app.blogdashboard');
    Route::get('app/blogpost',                'AppController@blogpost')->name('app.blogpost');
    Route::get('app/bloglist',                'AppController@bloglist')->name('app.bloglist');
    Route::get('app/bloggrid',                'AppController@bloggrid')->name('app.bloggrid');
    Route::get('app/blogdetails',             'AppController@blogdetails')->name('app.blogdetails');

    Route::get('app/ticket',                  'AppController@ticket')->name('app.ticket');
    Route::get('app/taskboard',               'AppController@taskboard')->name('app.taskboard');

    /* Ecommerce */
    Route::get('ecommerce', function ()       { return redirect('ecommerce/dashboard'); });
    Route::get('ecommerce/dashboard',         'EcommerceController@dashboard')->name('ecommerce.dashboard');
    Route::get('ecommerce/product',           'EcommerceController@product')->name('ecommerce.product');
    Route::get('ecommerce/productdetail',     'EcommerceController@productdetail')->name('ecommerce.productdetail');
    Route::get('ecommerce/productlist',       'EcommerceController@productlist')->name('ecommerce.productlist');
    Route::get('ecommerce/productorder',      'EcommerceController@productorder')->name('ecommerce.productorder');
    Route::get('ecommerce/productcart',       'EcommerceController@productcart')->name('ecommerce.productcart');
    Route::get('ecommerce/checkout',          'EcommerceController@checkout')->name('ecommerce.checkout');

    /* UI Elements */
    Route::get('ui', function ()       { return redirect('ui/kit'); });
    Route::get('ui/kit',                      'UiController@kit')->name('ui.kit');
    Route::get('ui/alerts',                   'UiController@alerts')->name('ui.alerts');
    Route::get('ui/collapse',                 'UiController@collapse')->name('ui.collapse');
    Route::get('ui/colors',                   'UiController@colors')->name('ui.colors');
    Route::get('ui/dialogs',                  'UiController@dialogs')->name('ui.dialogs');
    Route::get('ui/icons',                    'UiController@icons')->name('ui.icons');
    Route::get('ui/listgroup',                'UiController@listgroup')->name('ui.listgroup');
    Route::get('ui/mediaobject',              'UiController@mediaobject')->name('ui.mediaobject');
    Route::get('ui/modals',                   'UiController@modals')->name('ui.modals');
    Route::get('ui/notifications',            'UiController@notifications')->name('ui.notifications');
    Route::get('ui/progressbars',             'UiController@progressbars')->name('ui.progressbars');
    Route::get('ui/rangesliders',             'UiController@rangesliders')->name('ui.rangesliders');
    Route::get('ui/sortablenestable',         'UiController@sortablenestable')->name('ui.sortablenestable');
    Route::get('ui/tabs',                     'UiController@tabs')->name('ui.tabs');
    Route::get('ui/waves',                    'UiController@waves')->name('ui.waves');

    /* Forms  */
    Route::get('forms', function ()       { return redirect('forms/basic'); });
    Route::get('forms/basic',                 'FormsController@basic')->name('forms.basic');
    Route::get('forms/advanced',              'FormsController@advanced')->name('forms.advanced');
    Route::get('forms/examples',              'FormsController@examples')->name('forms.examples');
    Route::get('forms/validation',            'FormsController@validation')->name('forms.validation');
    Route::get('forms/wizard',                'FormsController@wizard')->name('forms.wizard');
    Route::get('forms/editors',               'FormsController@editors')->name('forms.editors');
    Route::get('forms/formupload',            'FormsController@formupload')->name('forms.formupload');
    Route::get('forms/imgcropper',            'FormsController@imgcropper')->name('forms.imgcropper');
    Route::get('forms/summernote',            'FormsController@summernote')->name('forms.summernote');


    /* UI table */
    Route::get('tables', function ()       { return redirect('tables/normal'); });
    Route::get('tables/normal',               'TablesController@normal')->name('tables.normal');
    Route::get('tables/jquerydatatable',      'TablesController@jquerydatatable')->name('tables.jquerydatatable');
    Route::get('tables/editable',             'TablesController@editable')->name('tables.editable');
    Route::get('tables/color',                'TablesController@color')->name('tables.color');
    Route::get('tables/filter',               'TablesController@filter')->name('tables.filter');

    /* Widgets */
    Route::get('widgets', function ()       { return redirect('widgets/app'); });
    Route::get('widgets/app',                 'WidgetsController@app')->name('widgets.app');
    Route::get('widgets/data',                'WidgetsController@data')->name('widgets.data');
    Route::get('widgets/chart',               'WidgetsController@chart')->name('widgets.chart');

    /* Charts */
    Route::get('charts', function ()       { return redirect('charts/morris'); });
    Route::get('charts/morris',               'ChartsController@morris')->name('charts.morris');
    Route::get('charts/flot',                 'ChartsController@flot')->name('charts.flot');
    Route::get('charts/chartjs',              'ChartsController@chartjs')->name('charts.chartjs');
    Route::get('charts/sparkline',            'ChartsController@sparkline')->name('charts.sparkline');
    Route::get('charts/knob',                 'ChartsController@knob')->name('charts.knob');

    /* Maps */
    Route::get('maps', function ()       { return redirect('maps/jvectormap'); });
    Route::get('maps/jvectormap',             'MapsController@jvectormap')->name('maps.jvectormap');
    Route::get('maps/yandex',                 'MapsController@yandex')->name('maps.yandex');

    /* Pages */
    Route::get('pages', function ()       { return redirect('pages/blank'); });
    Route::get('pages/blank',                 'PagesController@blank')->name('pages.blank');
    Route::get('pages/teamsboard',            'PagesController@teamsboard')->name('pages.teamsboard');
    Route::get('pages/projects',              'PagesController@projects')->name('pages.projects');
    Route::get('pages/gallery',               'PagesController@gallery')->name('pages.gallery');
    Route::get('pages/timeline',              'PagesController@timeline')->name('pages.timeline');
    Route::get('pages/htimeline',             'PagesController@htimeline')->name('pages.htimeline');
    Route::get('pages/pricing',               'PagesController@pricing')->name('pages.pricing');
    Route::get('pages/invoices',              'PagesController@invoices')->name('pages.invoices');
    Route::get('pages/faqs',                  'PagesController@faqs')->name('pages.faqs');
    Route::get('pages/search',                'PagesController@search')->name('pages.search');
    Route::get('pages/helper',                'PagesController@helper')->name('pages.helper');

    Route::get('pages/profile',               'ProfileController@edit')->name('pages.profile');
    Route::post('profile/save',               'ProfileController@save')->name('profile.save');
});

/* authentication */
Route::get('authentication', function ()       { return redirect('authentication/login'); });
Route::get('authentication/login',              'AuthenticationController@login')->name('authentication.login');
Route::get('authentication/register',           'AuthenticationController@register')->name('authentication.register');
Route::get('authentication/forgot-password',    'AuthenticationController@forgotPassword')->name('authentication.forgot-password');
Route::get('authentication/page404',            'AuthenticationController@page404')->name('authentication.page404');
Route::get('authentication/page403',            'AuthenticationController@page403')->name('authentication.page403');
Route::get('authentication/page500',            'AuthenticationController@page500')->name('authentication.page500');
Route::get('authentication/page503',            'AuthenticationController@page503')->name('authentication.page503');
Route::get('authentication/offline',            'AuthenticationController@offline')->name('authentication.offline');
Route::get('authentication/lockscreen',         'AuthenticationController@lockscreen')->name('authentication.lockscreen');
Route::post('/register', 'Auth\RegisterController@register')->name('register');

Route::get('/logout', 'AuthenticationController@logout')->name('logout');
