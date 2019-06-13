@extends('layout.master')
@section('parentPageTitle', 'Forms')
@section('title', 'Summernote')


@section('content')
<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <h2>Summernote</h2>
            </div>
            <div class="body">
                <div class="summernote">
                    Hello there,
                    <br/>
                    <p>The toolbar can be customized and it also supports various callbacks such as <code>oninit</code>, <code>onfocus</code>, <code>onpaste</code> and many more.</p>
                    <p>Please try <b>paste some texts</b> here</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <h2>Inline Editor</h2>
            </div>
            <div class="body">
                <div class="inline-editor">
                    <p class="m-b-0">You can select content and edit inline</p>
                    <h5>Title Heading will be <b>apear here</b></h5>
                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English</p>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-hand-o-right text-success"></i> There are many variations of passages</li>
                        <li><i class="fa fa-hand-o-right text-success"></i> If you are going to use a passage of Ipsum</li>
                        <li><i class="fa fa-hand-o-right text-success"></i> Contrary to popular belief, Ipsum is not simply</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('page-styles')
<link rel="stylesheet" href="{{ asset('assets/plugins/summernote/dist/summernote.css') }}">
@stop

@section('page-script')
<script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>
<script src="{{ asset('assets/plugins/summernote/dist/summernote.js') }}"></script>
<script>
    jQuery(document).ready(function() {

        $('.summernote').summernote({
            height: 350, // set editor height
            minHeight: null, // set minimum height of editor
            maxHeight: null, // set maximum height of editor
            focus: false, // set focus to editable area after initializing summernote
            popover: { image: [], link: [], air: [] }
        });

        $('.inline-editor').summernote({
            airMode: true
        });

    });

    window.edit = function() {
            $(".click2edit").summernote()
        },
        window.save = function() {
            $(".click2edit").summernote('destroy');
        }
</script>
@stop