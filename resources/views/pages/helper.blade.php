@extends('layout.master')
@section('parentPageTitle', 'Pages')
@section('title', 'Helper Classes')

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
    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <h2><strong>Float</strong> Classes</h2>
                <ul class="header-dropdown">
                    <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li><a href="javascript:void(0);">Action</a></li>
                            <li><a href="javascript:void(0);">Another action</a></li>
                            <li><a href="javascript:void(0);">Something else</a></li>
                            <li><a href="javascript:void(0);" class="boxs-close">Delete</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="text-nowrap" width="150">Class</th>
                            <th>Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-nowrap"> <code>.float-left</code> </td>
                            <td>Element to the left (float:left).</td>
                        </tr>
                        <tr>
                            <td class="text-nowrap"> <code>.float-right</code> </td>
                            <td>Element to the right(float:right).</td>
                        </tr>
                        <tr>
                            <td class="text-nowrap"> <code>.clearfix</code> </td>
                            <td>To Clear floats.(clreafix)</td>
                        </tr>
                    </tbody>
                </table>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="text-nowrap" width="150">Class</th>
                            <th>Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-nowrap"> <code>.displayblock</code> </td>
                            <td>Element to Show (display: block)</td>
                        </tr>
                        <tr>
                            <td class="text-nowrap"> <code>.displaynone</code> </td>
                            <td>Element to hide (display: none)</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card">
            <div class="header">
                <h2><strong>Text</strong> Style <small>You can use classes which names are <code>.font-bold, .font-italic, .font-underline, .font-line-through, .font-overline</code></small> </h2>
                <ul class="header-dropdown">
                    <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li><a href="javascript:void(0);">Action</a></li>
                            <li><a href="javascript:void(0);">Another action</a></li>
                            <li><a href="javascript:void(0);">Something else</a></li>
                            <li><a href="javascript:void(0);" class="boxs-close">Delete</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="body">
                <div class="row clearfix">
                    <div class="col-md-4 col-sm-6">
                        <p> <b>Normal</b> </p>
                        <hr>
                        <p>Default text</p>
                        <p class="col-pink">Text pink color</p>
                        <p class="col-cyan">Text cyan color</p>
                        <p class="col-teal">Text teal color</p>
                        <p class="col-orange">Text orange color</p>
                        <p class="col-blue-grey">Text blue grey color</p>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <p> <b>Bold</b> </p>
                        <hr>
                        <p class="font-bold">Default text</p>
                        <p class="font-bold col-pink">Text pink color</p>
                        <p class="font-bold col-cyan">Text cyan color</p>
                        <p class="font-bold col-teal">Text teal color</p>
                        <p class="font-bold col-orange">Text orange color</p>
                        <p class="font-bold col-blue-grey">Text blue grey color</p>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <p> <b>Italic</b> </p>
                        <hr>
                        <p class="font-italic">Default text</p>
                        <p class="font-italic col-pink">Text pink color</p>
                        <p class="font-italic col-cyan">Text cyan color</p>
                        <p class="font-italic col-teal">Text teal color</p>
                        <p class="font-italic col-orange">Text orange color</p>
                        <p class="font-italic col-blue-grey">Text blue grey color</p>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <p> <b>Underline</b> </p>
                        <hr>
                        <p class="font-underline">Default text</p>
                        <p class="font-underline col-pink">Text pink color</p>
                        <p class="font-underline col-cyan">Text cyan color</p>
                        <p class="font-underline col-teal">Text teal color</p>
                        <p class="font-underline col-orange">Text orange color</p>
                        <p class="font-underline col-blue-grey">Text blue grey color</p>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <p> <b>Line Through</b> </p>
                        <hr>
                        <p class="font-line-through">Default text</p>
                        <p class="font-line-through col-pink">Text pink color</p>
                        <p class="font-line-through col-cyan">Text cyan color</p>
                        <p class="font-line-through col-teal">Text teal color</p>
                        <p class="font-line-through col-orange">Text orange color</p>
                        <p class="font-line-through col-blue-grey">Text blue grey color</p>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <p> <b>Overline</b> </p>
                        <hr>
                        <p class="font-overline">Default text</p>
                        <p class="font-overline col-pink">Text pink color</p>
                        <p class="font-overline col-cyan">Text cyan color</p>
                        <p class="font-overline col-teal">Text teal color</p>
                        <p class="font-overline col-orange">Text orange color</p>
                        <p class="font-overline col-blue-grey">Text blue grey color</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card">
            <div class="header">
                <h2> <strong>Text</strong> Align <small>You can use classes which names are <code>.align-left, .align-center, .align-right, .align-justify</code></small> </h2>
                <ul class="header-dropdown">
                    <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li><a href="javascript:void(0);">Action</a></li>
                            <li><a href="javascript:void(0);">Another action</a></li>
                            <li><a href="javascript:void(0);">Something else</a></li>
                            <li><a href="javascript:void(0);" class="boxs-close">Delete</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="body">
                <div class="row clearfix">
                    <div class="col-md-3">
                        <p class="align-left"> <b>Align Left</b> </p>
                        <div class="align-left"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </div>
                    </div>
                    <div class="col-md-3">
                        <p class="align-center"> <b>Align Center</b> </p>
                        <div class="align-center"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </div>
                    </div>
                    <div class="col-md-3">
                        <p class="align-right"> <b>Align Right</b> </p>
                        <div class="align-right"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </div>
                    </div>
                    <div class="col-md-3">
                        <p class="align-justify"> <b>Align Justify</b> </p>
                        <div class="align-justify"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card">
            <div class="header">
                <h2> <strong>Margin Padding</strong>>Spaces <small>You can use classes which names are <code>.m-t-10, .m-t--10, .m-r-5, .p-t-10, .p-b-5</code></small> </h2>
                <ul class="header-dropdown">
                    <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li><a href="javascript:void(0);">Action</a></li>
                            <li><a href="javascript:void(0);">Another action</a></li>
                            <li><a href="javascript:void(0);">Something else</a></li>
                            <li><a href="javascript:void(0);" class="boxs-close">Delete</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="body m-b-10">
                <p> <b>Margins</b> </p>
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6"> <span class="col-red font-bold">M</span>argin <span class="col-red font-bold">T</span>op <span class="col-red font-bold">10</span>px → <code>.m-t-10</code> </div>
                    <div class="col-lg-4 col-md-6"> <span class="col-red font-bold">M</span>argin <span class="col-red font-bold">T</span>op <span class="col-red font-bold">0</span>px → <code>.m-t-0</code> </div>
                    <div class="col-lg-4 col-md-6"> <span class="col-red font-bold">M</span>argin <span class="col-red font-bold">T</span>op <span class="col-red font-bold">-10</span>px → <code>.m-t--10</code> </div>
                    <div class="col-lg-4 col-md-6"> <span class="col-red font-bold">M</span>argin <span class="col-red font-bold">L</span>eft <span class="col-red font-bold">35</span>px → <code>.m-l-35</code> </div>
                    <div class="col-lg-4 col-md-6"> <span class="col-red font-bold">M</span>argin <span class="col-red font-bold">L</span>eft <span class="col-red font-bold">0</span>px → <code>.m-l-0</code> </div>
                    <div class="col-lg-4 col-md-6"> <span class="col-red font-bold">M</span>argin <span class="col-red font-bold">L</span>eft <span class="col-red font-bold">-35</span>px → <code>.m-l--35</code> </div>
                    <div class="col-lg-4 col-md-6"> <span class="col-red font-bold">M</span>argin <span class="col-red font-bold">B</span>ottom <span class="col-red font-bold">15</span>px → <code>.m-b-15</code> </div>
                    <div class="col-lg-4 col-md-6"> <span class="col-red font-bold">M</span>argin <span class="col-red font-bold">B</span>ottom <span class="col-red font-bold">0</span>px → <code>.m-b-0</code> </div>
                    <div class="col-lg-4 col-md-6"> <span class="col-red font-bold">M</span>argin <span class="col-red font-bold">B</span>ottom <span class="col-red font-bold">-20</span>px → <code>.m-b--20</code> </div>
                    <div class="col-lg-4 col-md-6"> <span class="col-red font-bold">M</span>argin <span class="col-red font-bold">R</span>ight <span class="col-red font-bold">30</span>px → <code>.m-r-30</code> </div>
                    <div class="col-lg-4 col-md-6"> <span class="col-red font-bold">M</span>argin <span class="col-red font-bold">R</span>ight <span class="col-red font-bold">0</span>px → <code>.m-r-0</code> </div>
                    <div class="col-lg-4 col-md-6"> <span class="col-red font-bold">M</span>argin <span class="col-red font-bold">R</span>ight <span class="col-red font-bold">-30</span>px → <code>.m-r--30</code> </div>
                    <div class="col-lg-4 col-md-6"> <span class="col-red font-bold">ALL M</span>argin <span class="col-red font-bold">0</span>px → <code>.margin-0</code> </div>
                </div>
            </div>
            <div class="body">
                <p class="m-t-25"> <b>Paddings</b> </p>
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6"> <span class="col-red font-bold">P</span>adding <span class="col-red font-bold">T</span>op <span class="col-red font-bold">10</span>px → <code>.p-t-10</code> </div>
                    <div class="col-lg-4 col-md-6"> <span class="col-red font-bold">P</span>adding <span class="col-red font-bold">T</span>op <span class="col-red font-bold">0</span>px → <code>.p-t-0</code> </div>
                    <div class="col-lg-4 col-md-6"> <span class="col-red font-bold">P</span>adding <span class="col-red font-bold">L</span>eft <span class="col-red font-bold">35</span>px → <code>.p-l-35</code> </div>
                    <div class="col-lg-4 col-md-6"> <span class="col-red font-bold">P</span>adding <span class="col-red font-bold">L</span>eft <span class="col-red font-bold">0</span>px → <code>.p-l-0</code> </div>
                    <div class="col-lg-4 col-md-6"> <span class="col-red font-bold">P</span>adding <span class="col-red font-bold">B</span>ottom <span class="col-red font-bold">15</span>px → <code>.p-b-15</code> </div>
                    <div class="col-lg-4 col-md-6"> <span class="col-red font-bold">P</span>adding <span class="col-red font-bold">B</span>ottom <span class="col-red font-bold">0</span>px → <code>.p-b-0</code> </div>
                    <div class="col-lg-4 col-md-6"> <span class="col-red font-bold">P</span>adding <span class="col-red font-bold">R</span>ight <span class="col-red font-bold">30</span>px → <code>.p-r-30</code> </div>
                    <div class="col-lg-4 col-md-6"> <span class="col-red font-bold">P</span>adding <span class="col-red font-bold">R</span>ight <span class="col-red font-bold">0</span>px → <code>.p-r-0</code> </div>
                    <div class="col-lg-4 col-md-6"> <span class="col-red font-bold">ALL P</span>adding <span class="col-red font-bold">0</span>px → <code>.padding-0</code> </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row clearfix">
    <div class="col-md-12">
        <div class="card">
            <div class="header">
                <h2> <strong>Grid</strong> options</h2>
                <ul class="header-dropdown">
                    <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li><a href="javascript:void(0);">Action</a></li>
                            <li><a href="javascript:void(0);">Another action</a></li>
                            <li><a href="javascript:void(0);">Something else</a></li>
                            <li><a href="javascript:void(0);" class="boxs-close">Delete</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                        <th></th>
                        <th class="text-center">
                            Extra small<br>
                            <small>&lt;576px</small>
                        </th>
                        <th class="text-center">
                            Small<br>
                            <small>≥576px</small>
                        </th>
                        <th class="text-center">
                            Medium<br>
                            <small>≥768px</small>
                        </th>
                        <th class="text-center">
                            Large<br>
                            <small>≥992px</small>
                        </th>
                        <th class="text-center">
                            Extra large<br>
                            <small>≥1200px</small>
                        </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th class="text-nowrap" scope="row">Max container width</th>
                        <td>None (auto)</td>
                        <td>540px</td>
                        <td>720px</td>
                        <td>960px</td>
                        <td>1140px</td>
                        </tr>
                        <tr>
                        <th class="text-nowrap" scope="row">Class prefix</th>
                        <td><code>.col-</code></td>
                        <td><code>.col-sm-</code></td>
                        <td><code>.col-md-</code></td>
                        <td><code>.col-lg-</code></td>
                        <td><code>.col-xl-</code></td>
                        </tr>
                        <tr>
                        <th class="text-nowrap" scope="row"># of columns</th>
                        <td colspan="5">12</td>
                        </tr>
                        <tr>
                        <th class="text-nowrap" scope="row">Gutter width</th>
                        <td colspan="5">30px (15px on each side of a column)</td>
                        </tr>
                        <tr>
                        <th class="text-nowrap" scope="row">Nestable</th>
                        <td colspan="5">Yes</td>
                        </tr>
                        <tr>
                        <th class="text-nowrap" scope="row">Column ordering</th>
                        <td colspan="5">Yes</td>
                        </tr>
                    </tbody>
                    </table>
            </div>
        </div>
    </div>
</div>
<div class="row clearfix">
    <div class="col-md-12">
        <div class="card">
            <div class="header">
                <h2> <strong>Image</strong> Radious</h2>
                <ul class="header-dropdown">
                    <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li><a href="javascript:void(0);">Action</a></li>
                            <li><a href="javascript:void(0);">Another action</a></li>
                            <li><a href="javascript:void(0);">Something else</a></li>
                            <li><a href="javascript:void(0);" class="boxs-close">Delete</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="body">
                <div class="bd-example bd-example-images">
                    <img class="rounded" alt="75x75" src="http://via.placeholder.com/75x75">
                    <img class="rounded-top" alt="75x75" src="http://via.placeholder.com/75x75">
                    <img class="rounded-right" alt="75x75" src="http://via.placeholder.com/75x75">
                    <img class="rounded-bottom" alt="75x75" src="http://via.placeholder.com/75x75">
                    <img class="rounded-left" alt="75x75" src="http://via.placeholder.com/75x75">
                    <img class="rounded-circle" alt="75x75" src="http://via.placeholder.com/75x75">
                    <img class="rounded-0" alt="75x75" src="http://via.placeholder.com/75x75">
                </div>
                <figure class="highlight"><pre><code class="language-html" data-lang="html">
<span class="nt">&lt;img</span> <span class="na">src=</span><span class="s">"..."</span> <span class="na">alt=</span><span class="s">"..."</span> <span class="na">class=</span><span class="s">"rounded"</span><span class="nt">&gt;</span>
<span class="nt">&lt;img</span> <span class="na">src=</span><span class="s">"..."</span> <span class="na">alt=</span><span class="s">"..."</span> <span class="na">class=</span><span class="s">"rounded-top"</span><span class="nt">&gt;</span>
<span class="nt">&lt;img</span> <span class="na">src=</span><span class="s">"..."</span> <span class="na">alt=</span><span class="s">"..."</span> <span class="na">class=</span><span class="s">"rounded-right"</span><span class="nt">&gt;</span>
<span class="nt">&lt;img</span> <span class="na">src=</span><span class="s">"..."</span> <span class="na">alt=</span><span class="s">"..."</span> <span class="na">class=</span><span class="s">"rounded-bottom"</span><span class="nt">&gt;</span>
<span class="nt">&lt;img</span> <span class="na">src=</span><span class="s">"..."</span> <span class="na">alt=</span><span class="s">"..."</span> <span class="na">class=</span><span class="s">"rounded-left"</span><span class="nt">&gt;</span>
<span class="nt">&lt;img</span> <span class="na">src=</span><span class="s">"..."</span> <span class="na">alt=</span><span class="s">"..."</span> <span class="na">class=</span><span class="s">"rounded-circle"</span><span class="nt">&gt;</span>
<span class="nt">&lt;img</span> <span class="na">src=</span><span class="s">"..."</span> <span class="na">alt=</span><span class="s">"..."</span> <span class="na">class=</span><span class="s">"rounded-0"</span><span class="nt">&gt;</span></code></pre>
                </figure>
            </div>
        </div>
    </div>
</div>
<div class="row clearfix">
    <div class="col-md-12">
        <div class="card">
            <div class="header">
                <h2> <strong>Border</strong> Color</h2>
                <ul class="header-dropdown">
                    <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li><a href="javascript:void(0);">Action</a></li>
                            <li><a href="javascript:void(0);">Another action</a></li>
                            <li><a href="javascript:void(0);">Something else</a></li>
                            <li><a href="javascript:void(0);" class="boxs-close">Delete</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="body">
                <div class="bd-example">
                    <img class="border border-primary" alt="75x75" src="http://via.placeholder.com/75x75">
                    <img class="border border-secondary" alt="75x75" src="http://via.placeholder.com/75x75">
                    <img class="border border-success" alt="75x75" src="http://via.placeholder.com/75x75">
                    <img class="border border-danger" alt="75x75" src="http://via.placeholder.com/75x75">
                    <img class="border border-warning" alt="75x75" src="http://via.placeholder.com/75x75">
                    <img class="border border-info" alt="75x75" src="http://via.placeholder.com/75x75">
                    <img class="border border-dark" alt="75x75" src="http://via.placeholder.com/75x75">
                </div>
                <pre>
<code class="language-html" data-lang="html">
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"border border-primary"</span><span class="nt">&gt;&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"border border-secondary"</span><span class="nt">&gt;&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"border border-success"</span><span class="nt">&gt;&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"border border-danger"</span><span class="nt">&gt;&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"border border-warning"</span><span class="nt">&gt;&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"border border-info"</span><span class="nt">&gt;&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"border border-light"</span><span class="nt">&gt;&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"border border-dark"</span><span class="nt">&gt;&lt;/span&gt;</span>
<span class="nt">&lt;span</span> <span class="na">class=</span><span class="s">"border border-white"</span><span class="nt">&gt;&lt;/span&gt;</span>
</code></pre>
            </div>
        </div>
    </div>
</div>
@stop

@section('page-styles')
@stop

@section('page-script')
<script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>
@stop