<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="{!! asset('css/datatableBoot.css') !!}">
    <link rel="stylesheet" href="{!! asset('css/style.css') !!}">
    {{--<link rel="stylesheet" href="{!! asset('css/style.css') !!}">--}}
    <link rel="stylesheet" href="{!! asset('css/AdminLTE.min.css') !!}">
    <script src="{!! asset('js/jquery.3.2.2.js') !!}"></script>
    <script src="{!! asset('js/bootstrap.js') !!}"></script>
    <script src="{!! asset('js/datatable.min.js') !!}"></script>
    <script src="{!! asset('js/dattable.bootstrap.js') !!}"></script>
    <script src="{!! asset('js/script.js') !!}"></script>

</head>
<body style="background-color: #ecf0f5 !important;">

{{--<nav class="navbar navbar-default">--}}
    {{--<div class="container-fluid">--}}
        {{--<div class="navbar-header">--}}
            {{--<a class="navbar-brand" href="#"></a>--}}
        {{--</div>--}}
        {{--<ul class="nav navbar-nav">--}}
            {{--<li  id="home"><a href="/">Users</a></li>--}}
            {{--<li class="dropdown" id="appConfMen">--}}
                {{--<a class="dropdown-toggle" data-toggle="dropdown" href="#" >Application configuration--}}

                    {{--<span class="caret"></span></a>--}}
                {{--<ul class="dropdown-menu">--}}
                    {{--<li><a href="/Application-Configuration">Application configuration--}}
                        {{--</a></li>--}}

                {{--</ul>--}}
            {{--</li>--}}
            {{--<li><a href="#">Page 2</a></li>--}}
            {{--<li><a href="#">Page 3</a></li>--}}
        {{--</ul>--}}
    {{--</div>--}}
{{--</nav>--}}
<nav class="navbar navbar-default" style="margin-bottom: 0px;!important;">
    <!--nav header Div-->
    <div class="container-fluid">
        <div class="col-sm-12"><a class="navbar-head" style="text-align:center; text-decoration:none; color:white;" href="#"><h1>Empower ERP Portal</h1></a>
        </div>
    </div>
</nav>

<nav class="navbar navbar-inverse ">
    <div class="container-fluid">


        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li  id="home"><a href="/">Users</a></li>
                <li class="dropdown" id="appConfMen">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" >Application configuration

                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/Application-Configuration">Application configuration
                            </a></li>

                    </ul>
                </li>
                {{--<li><a href="#">Page 2</a></li>--}}
                {{--<li><a href="#">Page 3</a></li>--}}
            </ul>
        </div>
    </div>
</nav>

<div class="content-wrapper">