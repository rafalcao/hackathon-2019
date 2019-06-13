@extends('layout.master')
@section('parentPageTitle', 'Pages')
@section('title', 'Timeline')

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
            <div class="body">
                <div class="timeline-item green" date-is='20-04-2018 - Today'>
                    <h5>Hello, 'Im a single div responsive timeline without media Queries!</h5>
                    <small><a href="#" title="">Elisse Joson</a> San Francisco, CA</small>
                    <div class="msg">
                        <p>I'm speaking with myself, number one, because I have a very good brain and I've said a lot of things. I write the best placeholder text, and I'm the biggest developer on the web card she has is the Lorem card.</p>
                    </div>
                    <span><a href="#" class="m-r-20">Like</a><a href="#">Comment</a> </span>
                </div>
                <div class="timeline-item blue" date-is='19-04-2018 - Yesterday'>
                    <h5>Oeehhh, that's awesome.. Me too!</h5>
                    <small><a href="#" title="">Katherine Lumaad</a> Oakland, CA</small>
                    <div class="msg">
                        <p>I'm speaking with myself, number one, because I have a very good brain and I've said a lot of things. on the web by far... While that's mock-ups and this is politics, are they really so different? I think the only card she has is the Lorem card.</p>
                        <img class="w-25" src="../assets/images/blog/blog-page-4.jpg" alt="Awesome Image">
                        <img class="w-25" src="../assets/images/blog/blog-page-2.jpg" alt="Awesome Image">
                    </div>
                    <span><a href="#" class="m-r-20">Like</a><a href="#">Comment</a> </span>
                </div>
                <div class="timeline-item warning" date-is='21-02-2018'>
                    <h5>An Engineer Explains Why You Should Always Order the Larger Pizza</h5>
                    <small><a href="#" title="">Gary Camara</a> San Francisco, CA</small>
                    <div class="msg">
                        <p>I'm speaking with myself, number one, because I have a very good brain and I've said a lot of things. I write the best placeholder text, and I'm the biggest developer on the web by far... While that's mock-ups and this is politics, is the Lorem card.</p>
                    </div>
                    <span><a href="#" class="m-r-20">Like</a><a href="#">Comment</a> </span>
                </div>
            </div>
        </div>
    </div>
</div>
@stop

@section('page-styles')
<link rel="stylesheet" href="{{ asset('assets/css/timeline.css') }}">
@stop

@section('page-script')
<script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script>
@stop