@extends('layout.master')
@section('parentPageTitle', 'Forms')
@section('title', 'Image Cropping')


@section('content')
<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <h2><strong>Image </strong> Cropper</h2>
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
                <div class="row clearfix">
                    <div class="col-lg-8 col-md-12">
                        <div class="img-container"><img id="image" src="../assets/images/image1.jpg" class="img-responsive" alt="Picture"></div>
                    </div>
                    <div class="col-lg-4 col-md-12">
                        <div class="docs-preview clearfix">
                            <div class="img-preview preview-lg"></div>
                            <div class="img-preview preview-md"></div>
                            <div class="img-preview preview-sm"></div>
                            <div class="img-preview preview-xs"></div>
                        </div>                                
                        <div class="docs-data">
                            <div class="input-group">
                                <span class="input-group-addon" for="dataX">X</span>
                                <input type="text" class="form-control" id="dataX" placeholder="x">
                                <span class="input-group-addon text-right">px</span>
                            </div>

                            <div class="input-group">
                                <span class="input-group-addon" for="dataY">Y</span>
                                <input type="text" class="form-control" id="dataY" placeholder="y">
                                <span class="input-group-addon text-right">px</span>
                            </div>

                            <div class="input-group">
                                <span class="input-group-addon" for="dataWidth">Width</span>
                                <input type="text" class="form-control" id="dataWidth" placeholder="width">
                                <span class="input-group-addon text-right">px</span>
                            </div>

                            <div class="input-group">
                                <span class="input-group-addon" for="dataHeight">Height</span>
                                <input type="text" class="form-control" id="dataHeight" placeholder="height">
                                <span class="input-group-addon text-right">px</span>
                            </div>

                            <div class="input-group">
                                <span class="input-group-addon" for="dataRotate">Rotate</span>
                                <input type="text" class="form-control" id="dataRotate" placeholder="rotate">
                                <span class="input-group-addon text-right">deg</span>
                            </div>

                            <div class="input-group">
                                <span class="input-group-addon" for="dataScaleX">ScaleX</span>
                                <input type="text" class="form-control" id="dataScaleX" placeholder="scaleX">
                            </div>
                            <div class="input-group">
                                <span class="input-group-addon" for="dataScaleY">ScaleY</span>
                                <input type="text" class="form-control" id="dataScaleY" placeholder="scaleY">
                            </div>
                            <!-- /.pixels of image -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="body">
                <div class="row clearfix">
                    <div class="col-lg-8 col-md-12 docs-buttons">
                        <!-- .btn groups -->
                        <button type="button" class="btn btn-sm btn-info" data-method="setDragMode" data-option="move" title="Move"> <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;setDragMode&quot;, &quot;move&quot;)"> <span class="zmdi zmdi-arrows"></span> </span></button>
                        <button type="button" class="btn btn-sm btn-info" data-method="setDragMode" data-option="crop" title="Crop"> <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;setDragMode&quot;, &quot;crop&quot;)"> <span class="zmdi zmdi-crop"></span> </span></button>

                        <button type="button" class="btn btn-sm btn-success" data-method="zoom" data-option="0.1" title="Zoom In"> <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;zoom&quot;, 0.1)"> <span class="zmdi zmdi-plus-circle"></span> </span></button>
                        <button type="button" class="btn btn-sm btn-success" data-method="zoom" data-option="-0.1" title="Zoom Out"> <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;zoom&quot;, -0.1)"> <span class="zmdi zmdi-minus-circle"></span> </span></button>
                        
                        <button type="button" class="btn btn-sm btn-secondary btn-simple" data-method="move" data-option="-10" data-second-option="0" title="Move Left"> <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;move&quot;, -10, 0)"> <span class="zmdi zmdi-caret-left-circle"></span> </span></button>
                        <button type="button" class="btn btn-sm btn-secondary btn-simple" data-method="move" data-option="10" data-second-option="0" title="Move Right"> <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;move&quot;, 10, 0)"> <span class="zmdi zmdi-caret-right-circle"></span> </span></button>
                        <button type="button" class="btn btn-sm btn-secondary btn-simple" data-method="move" data-option="0" data-second-option="-10" title="Move Up"> <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;move&quot;, 0, -10)"> <span class="zmdi zmdi-caret-up-circle"></span> </span></button>
                        <button type="button" class="btn btn-sm btn-secondary btn-simple" data-method="move" data-option="0" data-second-option="10" title="Move Down"> <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;move&quot;, 0, 10)"> <span class="zmdi zmdi-caret-down-circle"></span> </span></button>                                
                        
                        <button type="button" class="btn btn-sm btn-secondary btn-simple" data-method="rotate" data-option="-45" title="Rotate Left"> <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;rotate&quot;, -45)"> <span class="zmdi zmdi-rotate-ccw"></span> </span></button>
                        <button type="button" class="btn btn-sm btn-secondary btn-simple" data-method="rotate" data-option="45" title="Rotate Right"> <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;rotate&quot;, 45)"> <span class="zmdi zmdi-rotate-cw"></span> </span></button>
                                                        
                        <button type="button" class="btn btn-sm btn-secondary btn-simple" data-method="scaleX" data-option="-1" title="Flip Horizontal"> <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;scaleX&quot;, -1)"> <span class="zmdi zmdi-swap"></span> </span></button>
                        <button type="button" class="btn btn-sm btn-secondary btn-simple" data-method="scaleY" data-option="-1" title="Flip Vertical"> <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;scaleY&quot;, -1)"> <span class="zmdi zmdi-swap-vertical"></span> </span></button>
                        
                        <button type="button" class="btn btn-sm btn-secondary btn-simple" data-method="crop" title="Crop"> <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;crop&quot;)"> <span class="zmdi zmdi-check"></span> </span></button>
                        <button type="button" class="btn btn-sm btn-secondary btn-simple" data-method="clear" title="Clear"> <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;clear&quot;)"> <span class="zmdi zmdi-delete"></span> </span></button>
                        
                        <button type="button" class="btn btn-sm btn-secondary btn-simple" data-method="disable" title="Disable"> <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;disable&quot;)"> <span class="zmdi zmdi-lock"></span> </span></button>
                        <button type="button" class="btn btn-sm btn-secondary btn-simple" data-method="enable" title="Enable"> <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;enable&quot;)"> <span class="zmdi zmdi-lock-open"></span> </span></button>
                        
                        <button type="button" class="btn btn-sm btn-secondary btn-simple" data-method="reset" title="Reset"> <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;reset&quot;)"> <span class="zmdi zmdi-refresh"></span> </span></button>
                        <label class="btn btn-sm btn-secondary btn-simple btn-upload" for="inputImage" title="Upload image file">
                            <input type="file" class="sr-only" id="inputImage" name="file" accept="image/*">
                            <span class="docs-tooltip" data-toggle="tooltip" title="Import image with Blob URLs"> <span class="zmdi zmdi-upload"></span> </span>
                        </label>
                        <button type="button" class="btn btn-sm  btn-secondary btn-simple" data-method="destroy" title="Destroy"> <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;destroy&quot;)"> <span class="zmdi zmdi-power"></span> </span></button>
                        
                        <button type="button" class="btn btn-sm btn-danger" data-method="getCroppedCanvas"> <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;getCroppedCanvas&quot;)"> Get Cropped Canvas </span> </button>
                        <button type="button" class="btn btn-sm btn-danger" data-method="getCroppedCanvas" data-option="{ &quot;width&quot;: 160, &quot;height&quot;: 90 }"> <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;getCroppedCanvas&quot;, { width: 160, height: 90 })"> 160&times;90 </span> </button>
                        <button type="button" class="btn btn-sm btn-danger" data-method="getCroppedCanvas" data-option="{ &quot;width&quot;: 320, &quot;height&quot;: 180 }"> <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;getCroppedCanvas&quot;, { width: 320, height: 180 })"> 320&times;180 </span> </button>
                        
                        <button type="button" class="btn btn-secondary btn-round btn-simple" data-method="getData" data-option data-target="#putData"> <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;getData&quot;)"> Get Data </span> </button>
                        <button type="button" class="btn btn-secondary btn-round btn-simple" data-method="setData" data-target="#putData"> <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;setData&quot;, data)"> Set Data </span> </button>
                        <button type="button" class="btn btn-secondary btn-round btn-simple" data-method="getContainerData" data-option data-target="#putData"> <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;getContainerData&quot;)"> Get Container Data </span> </button>
                        <button type="button" class="btn btn-secondary btn-round btn-simple" data-method="getImageData" data-option data-target="#putData"> <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;getImageData&quot;)"> Get Image Data </span> </button>
                        <button type="button" class="btn btn-secondary btn-round btn-simple" data-method="getCanvasData" data-option data-target="#putData"> <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;getCanvasData&quot;)"> Get Canvas Data </span> </button>
                        <button type="button" class="btn btn-secondary btn-round btn-simple" data-method="setCanvasData" data-target="#putData"> <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;setCanvasData&quot;, data)"> Set Canvas Data </span> </button>
                        <button type="button" class="btn btn-secondary btn-round btn-simple" data-method="getCropBoxData" data-option data-target="#putData"> <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;getCropBoxData&quot;)"> Get Crop Box Data </span> </button>
                        <button type="button" class="btn btn-secondary btn-round btn-simple" data-method="setCropBoxData" data-target="#putData"> <span class="docs-tooltip" data-toggle="tooltip" title="$().cropper(&quot;setCropBoxData&quot;, data)"> Set Crop Box Data </span> </button>
                        <button type="button" class="btn btn-secondary btn-round btn-simple" data-method="moveTo" data-option="0"> <span class="docs-tooltip" data-toggle="tooltip" title="cropper.moveTo(0)"> 0,0 </span> </button>
                        <button type="button" class="btn btn-secondary btn-round btn-simple" data-method="zoomTo" data-option="1"> <span class="docs-tooltip" data-toggle="tooltip" title="cropper.zoomTo(1)"> 100% </span> </button>
                        <button type="button" class="btn btn-secondary btn-round btn-simple" data-method="rotateTo" data-option="180"> <span class="docs-tooltip" data-toggle="tooltip" title="cropper.rotateTo(180)"> 180° </span> </button>
                        <input type="text" class="form-control" id="putData" placeholder="Get data to here or set data with this value">
                    </div>
                    <div class="col-lg-4 col-md-12 docs-toggles">
                        <!-- .btn groups -->
                        <div class="btn-group btn-group-justified" data-toggle="buttons">
                            <label class="btn btn-secondary btn-simple active">
                                <input type="radio" class="sr-only" id="aspectRatio0" name="aspectRatio" value="1.7777777777777777">
                                <span class="docs-tooltip" data-toggle="tooltip" title="aspectRatio: 16 / 9"> 16:9 </span> </label>
                            <label class="btn btn-secondary btn-simple">
                                <input type="radio" class="sr-only" id="aspectRatio1" name="aspectRatio" value="1.3333333333333333">
                                <span class="docs-tooltip" data-toggle="tooltip" title="aspectRatio: 4 / 3"> 4:3 </span> </label>
                            <label class="btn btn-secondary btn-simple">
                                <input type="radio" class="sr-only" id="aspectRatio2" name="aspectRatio" value="1">
                                <span class="docs-tooltip" data-toggle="tooltip" title="aspectRatio: 1 / 1"> 1:1 </span> </label>
                            <label class="btn btn-secondary btn-simple">
                                <input type="radio" class="sr-only" id="aspectRatio3" name="aspectRatio" value="0.6666666666666666">
                                <span class="docs-tooltip" data-toggle="tooltip" title="aspectRatio: 2 / 3"> 2:3 </span> </label>
                            <label class="btn btn-secondary btn-simple">
                                <input type="radio" class="sr-only" id="aspectRatio4" name="aspectRatio" value="NaN">
                                <span class="docs-tooltip" data-toggle="tooltip" title="aspectRatio: NaN"> Free </span> </label>
                        </div>
                        <div class="btn-group btn-group-justified" data-toggle="buttons">
                            <label class="btn btn-secondary btn-simple active">
                                <input type="radio" class="sr-only" id="viewMode0" name="viewMode" value="0" checked>
                                <span class="docs-tooltip" data-toggle="tooltip" title="View Mode 0"> VM0 </span> </label>
                            <label class="btn btn-secondary btn-simple">
                                <input type="radio" info="sr-only" id="viewMode1" name="viewMode" value="1">
                                <span class="docs-tooltip" data-toggle="tooltip" title="View Mode 1"> VM1 </span> </label>
                            <label class="btn btn-secondary btn-simple">
                                <input type="radio" class="sr-only" id="viewMode2" name="viewMode" value="2">
                                <span class="docs-tooltip" data-toggle="tooltip" title="View Mode 2"> VM2 </span> </label>
                            <label class="btn btn-secondary btn-simple">
                                <input type="radio" class="sr-only" id="viewMode3" name="viewMode" value="3">
                                <span class="docs-tooltip" data-toggle="tooltip" title="View Mode 3"> VM3 </span> </label>
                        </div>
                        <div class="dropdown dropup docs-options">
                            <button type="button" class="btn btn-success btn-block btn-round dropdown-toggle" id="toggleOptions" data-toggle="dropdown" aria-expanded="true"> Toggle Options <span class="caret"></span> </button>
                            
                            <ul class="dropdown-menu" aria-labelledby="toggleOptions" role="menu">
                                <li role="presentation">
                                    <label class="checkbox-inline">
                                        <input type="checkbox" name="responsive" checked> responsive </label>
                                </li>
                                <li role="presentation">
                                    <label class="checkbox-inline">
                                        <input type="checkbox" name="restore" checked> restore </label>
                                </li>
                                <li role="presentation">
                                    <label class="checkbox-inline">
                                        <input type="checkbox" name="checkCrossOrigin" checked> checkCrossOrigin </label>
                                </li>
                                <li role="presentation">
                                    <label class="checkbox-inline">
                                        <input type="checkbox" name="checkOrientation" checked> checkOrientation </label>
                                </li>
                                <li role="presentation">
                                    <label class="checkbox-inline">
                                        <input type="checkbox" name="modal" checked> modal </label>
                                </li>
                                <li role="presentation">
                                    <label class="checkbox-inline">
                                        <input type="checkbox" name="guides" checked> guides </label>
                                </li>
                                <li role="presentation">
                                    <label class="checkbox-inline">
                                        <input type="checkbox" name="center" checked> center </label>
                                </li>
                                <li role="presentation">
                                    <label class="checkbox-inline">
                                        <input type="checkbox" name="highlight" checked> highlight </label>
                                </li>
                                <li role="presentation">
                                    <label class="checkbox-inline">
                                        <input type="checkbox" name="background" checked> background </label>
                                </li>
                                <li role="presentation">
                                    <label class="checkbox-inline">
                                        <input type="checkbox" name="autoCrop" checked> autoCrop </label>
                                </li>
                                <li role="presentation">
                                    <label class="checkbox-inline">
                                        <input type="checkbox" name="movable" checked> movable </label>
                                </li>
                                <li role="presentation">
                                    <label class="checkbox-inline">
                                        <input type="checkbox" name="rotatable" checked> rotatable </label>
                                </li>
                                <li role="presentation">
                                    <label class="checkbox-inline">
                                        <input type="checkbox" name="scalable" checked> scalable </label>
                                </li>
                                <li role="presentation">
                                    <label class="checkbox-inline">
                                        <input type="checkbox" name="zoomable" checked> zoomable </label>
                                </li>
                                <li role="presentation">
                                    <label class="checkbox-inline">
                                        <input type="checkbox" name="zoomOnTouch" checked> zoomOnTouch </label>
                                </li>
                                <li role="presentation">
                                    <label class="checkbox-inline">
                                        <input type="checkbox" name="zoomOnWheel" checked> zoomOnWheel </label>
                                </li>
                                <li role="presentation">
                                    <label class="checkbox-inline">
                                        <input type="checkbox" name="cropBoxMovable" checked> cropBoxMovable </label>
                                </li>
                                <li role="presentation">
                                    <label class="checkbox-inline">
                                        <input type="checkbox" name="cropBoxResizable" checked> cropBoxResizable </label>
                                </li>
                                <li role="presentation">
                                    <label class="checkbox-inline">
                                        <input type="checkbox" name="toggleDragModeOnDblclick" checked> toggleDragModeOnDblclick </label>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('page-popup')
<!-- Show the cropped image in modal -->
<div class="modal docs-cropped" id="getCroppedCanvasModal" aria-hidden="true" aria-labelledby="getCroppedCanvasTitle" role="dialog" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title m-t-0" id="getCroppedCanvasTitle">Cropped</h4>
            </div>
            <div class="modal-body"></div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <a class="btn btn-primary" id="download" href="javascript:void(0);" download="cropped.jpg">Download</a> </div>
        </div>
    </div>
</div>
<!-- /.modal -->
@stop

@section('page-styles')
<link rel="stylesheet" href="{{ asset('assets/plugins/cropper/cropper.min.css') }}">
@stop

@section('page-script')
<script src="{{ asset('assets/plugins/cropper/cropper.min.js') }}"></script>
<script src="{{ asset('assets/plugins/cropper/cropper-init.js') }}"></script>

<script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>
@stop