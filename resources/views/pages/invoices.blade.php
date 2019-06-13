@extends('layout.master')
@section('parentPageTitle', 'Pages')
@section('title', 'Invoice')

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
                <h2><strong>Single</strong> Invoice</h2>
                <ul class="header-dropdown">
                    <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i> </a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li><a href="javascript:void(0);">Print Invoices</a></li>
                            <li role="presentation" class="divider"></li>
                            <li><a href="javascript:void(0);">Export to XLS</a></li>
                            <li><a href="javascript:void(0);">Export to CSV</a></li>
                            <li><a href="javascript:void(0);">Export to XML</a></li>
                        </ul>
                    </li>
                    <li class="remove">
                        <a role="button" class="boxs-close"><i class="zmdi zmdi-close"></i></a>
                    </li>
                </ul>
            </div>
            <div class="body">
                <h3 class="m-b-0">Invoice Details : <strong class="text-primary">#A0089</strong></h3>
            </div>
        </div>
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane in active" id="details" aria-expanded="true">
                <div class="card" id="details">
                    <div class="body">
                        <div class="row clearfix">
                            <div class="col-md-6 col-sm-6">
                                <address>
                                    <strong>ThemeMakker Inc.</strong><br>
                                    795 Folsom Ave, Suite 546<br>
                                    San Francisco, CA 54656<br>
                                    <abbr title="Phone">P:</abbr> (123) 456-34636
                                </address>
                            </div>
                            <div class="col-md-6 col-sm-6 text-right">
                                <p class="m-b-0"><strong>Order Date: </strong> Jun 15, 2018</p>
                                <p class="m-b-0"><strong>Order Status: </strong> <span class="badge badge-warning m-b-0">Pending</span></p>
                                <p><strong>Order ID: </strong> #123456</p>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>#</th>                                                        
                                                <th>Item</th>
                                                <th class="hidden-sm-down">Description</th>
                                                <th>Quantity</th>
                                                <th class="hidden-sm-down">Unit Cost</th>
                                                <th>Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Simple Black Clock</td>
                                                <td class="hidden-sm-down">Lorem ipsum dolor sit amet.</td>
                                                <td>1</td>
                                                <td class="hidden-sm-down">$380</td>
                                                <td>$380</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Brone Candle</td>
                                                <td class="hidden-sm-down">There are many variations of passages of Lorem Ipsum</td>
                                                <td>5</td>
                                                <td class="hidden-sm-down">$50</td>
                                                <td>$250</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Wood Simple Clock</td>
                                                <td class="hidden-sm-down">Lorem ipsum dolor sit amet.</td>
                                                <td>2</td>
                                                <td class="hidden-sm-down">$500</td>
                                                <td>$1000</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Unero Small Bag</td>
                                                <td class="hidden-sm-down">Contrary to popular belief, not simply random text</td>
                                                <td>3</td>
                                                <td class="hidden-sm-down">$300</td>
                                                <td>$900</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row clearfix">
                            <div class="col-md-6">
                                <h5>Note</h5>
                                <p>Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem plugg dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra.</p>
                            </div>
                            <div class="col-md-6 text-right">
                                <p class="m-b-0"><b>Sub-total:</b> 2930.00</p>
                                <p class="m-b-0">Discout: 12.9%</p>
                                <p class="m-b-0">VAT: 12.9%</p>                                        
                                <h3 class="m-b-0 m-t-10">USD 2930.00</h3>
                            </div>                                    
                            <div class="hidden-print col-md-12 text-right">
                                <hr>
                                <button class="btn btn-warning btn-icon  btn-icon-mini btn-round"><i class="zmdi zmdi-print"></i></button>
                                <button class="btn btn-primary btn-round">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane" id="notes" aria-expanded="false">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-12">
                        <div class="card">
                            <div class="header">
                                <h2><strong>ID:</strong> 25822</h2>
                                <small>Created at: 8 Jan, 2018</small>
                            </div>
                            <div class="body">
                                <h6>This is Note</h6>
                                <p class="m-b-0">Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit mediocritatem an. Pri ut tation electram moderatius.
                                    Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent aliquid
                                    pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere gubergren
                                    sadipscing mel.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="card">
                            <div class="header">
                                <h2><strong>ID:</strong> 25823</h2>
                                <small>Created at: 19 Dec, 2017</small>
                            </div>
                            <div class="body">
                                <h6>This is Note</h6>
                                <p class="m-b-0">Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit mediocritatem an. Pri ut tation electram moderatius.
                                    Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent aliquid
                                    pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere gubergren
                                    sadipscing mel.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="card">
                            <div class="header">
                                <h2><strong>ID:</strong> 25824</h2>
                                <small>Created at: 18 Dec, 2017</small>
                            </div>
                            <div class="body">
                                <h6>This is Note</h6>
                                <p class="m-b-0">Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit mediocritatem an. Pri ut tation electram moderatius.
                                    Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent aliquid
                                    pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere gubergren
                                    sadipscing mel.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="card">
                            <div class="header">
                                <h2><strong>ID:</strong> 25825</h2>
                                <small>Created at: 19 Dec, 2017</small>
                            </div>
                            <div class="body">
                                <h6>This is Note</h6>
                                <p class="m-b-0">Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit mediocritatem an. Pri ut tation electram moderatius.
                                    Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent aliquid
                                    pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere gubergren
                                    sadipscing mel.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <button class="btn btn-primary btn-round">Add Note</button>
                    </div>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane" id="history" aria-expanded="false">
                <div class="card" id="details">
                    <div class="body">                                
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <address>
                                    <strong>ThemeMakker Inc.</strong><br>
                                    795 Folsom Ave, Suite 546<br>
                                    San Francisco, CA 54656<br>
                                    <abbr title="Phone">P:</abbr> (123) 456-34636
                                </address>
                            </div>
                            <div class="col-md-6 col-sm-6 text-right">
                                <p class="m-b-0"><strong>Order Date: </strong> Jun 15, 2018</p>
                                <p class="m-b-0"><strong>Order Status: </strong> <span class="badge bg-orange">Pending</span></p>
                                <p><strong>Order ID: </strong> #123456</p>
                            </div>
                        </div>
                        <div class="mt-40"></div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Description</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Invoice Created</td>
                                                <td>18 Dec, 2017</td>
                                                <td><span class="badge badge-default">Panding</span></td>
                                            </tr>
                                                <tr>
                                                <td>1</td>
                                                <td>Invoice Sent</td>
                                                <td>19 Dec, 2017</td>
                                                <td><span class="badge badge-default">Panding</span></td>
                                            </tr>
                                                <tr>
                                                <td>1</td>
                                                <td>Invoice Paid</td>
                                                <td>20 Dec, 2017</td>
                                                <td><span class="badge badge-success">Success</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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