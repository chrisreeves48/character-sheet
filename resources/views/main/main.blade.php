@extends('layout')

@section('content')

    <div class="container">

        <div class="starter-template">
            <h1>Bootstrap starter template</h1>
            <p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text and a
                mostly barebones HTML document.</p>
        </div>

    </div><!-- /.container -->

    <!DOCTYPE html>
    <html>
    <body>
    <div id="app">
        <test></test>
    </div>
    <div id="skills">
        <skills></skills>
    </div>
    </body>
    </html>


@stop

@section('scripts')
@stop

@section('style')
    <style>

        .starter-template {
            padding: 40px 15px;
            text-align: center;
        }

    </style>
@stop
