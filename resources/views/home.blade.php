@extends('layouts.app')

@section('content')
{{--<div class="container">--}}
    {{--<div class="row">--}}
        {{--<div class="col-md-10 col-md-offset-1">--}}
            {{--<div class="panel panel-default">--}}
                {{--<div class="panel-heading">Dashboard</div>--}}
{{----}}
                {{--<div class="panel-body">--}}
                    {{--You are logged in!--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
<div class="off-canvas-wrapper">
    <div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
        {{--<div class="off-canvas position-left reveal-for-large" id="my-info" data-off-canvas data-position="left">--}}
            {{--<div class="row column">--}}
                {{--<br>--}}
                {{--<img class="thumbnail" src="http://placehold.it/550x350">--}}
                {{--<h5>Mike Mikerson</h5>--}}
                {{--<p>Duis aliquet egestas purus in blandit. Curabitur vulputate, ligula lacinia scelerisque tempor, lacus lacus ornare ante, ac egestas est urna sit amet arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Sed molestie augue sit amet leo.</p>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="off-canvas-content" data-off-canvas-content>--}}
            {{--<div class="title-bar hide-for-large">--}}
                {{--<div class="title-bar-left">--}}
                    {{--<button class="menu-icon" type="button" data-open="my-info"></button>--}}
                    {{--<span class="title-bar-title">Mike Mikerson</span>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="callout primary">--}}
                {{--<div class="row column">--}}
                    {{--<h1>Hello! This is the portfolio of a very witty person.</h1>--}}
                    {{--<p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus luctus urna sed urna ultricies ac tempor dui sagittis. In condimentum facilisis porta. Sed nec diam eu diam mattis viverra. Nulla fringilla.</p>--}}
                {{--</div>--}}
            {{--</div>--}}
        <div id="contactsSection" class="large-12 columns">
            <contacts :all-users="allUsers"></contacts>
        </div>
        <messanger :open-user="openUser"></messanger>


        <hr>
            {{--<div class="row">--}}
                {{--<div class="medium-6 columns">--}}
                    {{--<h3>Contact Me</h3>--}}
                    {{--<p>Vivamus hendrerit arcu sed erat molestie vehicula. Sed auctor neque eu tellus rhoncus ut eleifend nibh porttitor. Ut in nulla enim. Phasellus molestie magna non est bibendum non venenatis nisl tempor. Suspendisse dictum feugiat nisl ut dapibus. Mauris iaculis porttitor.</p>--}}
                    {{--<ul class="menu">--}}
                        {{--<li><a href="#">Dribbble</a></li>--}}
                        {{--<li><a href="#">Facebook</a></li>--}}
                        {{--<li><a href="#">Yo</a></li>--}}
                    {{--</ul>--}}
                {{--</div>--}}
                {{--<div class="medium-6 columns">--}}
                    {{--<label>Name--}}
                        {{--<input type="text" placeholder="Name">--}}
                    {{--</label>--}}
                    {{--<label>Email--}}
                        {{--<input type="text" placeholder="Email">--}}
                    {{--</label>--}}
                    {{--<label>--}}
                        {{--Message--}}
                        {{--<textarea placeholder="holla at a designerd"></textarea>--}}
                    {{--</label>--}}
                    {{--<input type="submit" class="button expanded" value="Submit">--}}
                {{--</div>--}}
            {{--</div>--}}
        </div>
    </div>
</div>
@endsection