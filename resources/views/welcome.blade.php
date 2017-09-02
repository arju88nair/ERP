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

<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Empower ERP Portal</a>
        </div>
        {{--<ul class="nav navbar-nav">--}}
        {{--<li class="active"><a href="#">Home</a></li>--}}
        {{--<li><a href="#">Page 1</a></li>--}}
        {{--<li><a href="#">Page 2</a></li>--}}
        {{--<li><a href="#">Page 3</a></li>--}}
        {{--</ul>--}}
    </div>
</nav>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
{{--<section class="content-header">--}}
{{--<h1>--}}
{{--Data Tables--}}
{{--<small>advanced tables</small>--}}
{{--</h1>--}}
{{--<ol class="breadcrumb">--}}
{{--<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>--}}
{{--<li><a href="#">Tables</a></li>--}}
{{--<li class="active">Data tables</li>--}}
{{--</ol>--}}
{{--</section>--}}

<!-- Main content -->
    <section class="content">

        <div id="detailsM" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title" style="text-align: center">User Details</h4>
                    </div>
                    <div class="modal-body">
                        <p id="userID"></p>
                        <hr>
                        <p id="userName"></p>
                        <hr>
                        <p id="fName"></p>
                        <hr>
                        <p id="lName"></p>
                        <hr>
                        <p id="Group"></p>
                        <hr>
                        <p id="created"></p>
                        <hr>
                        <p id="modified"></p>
                        <hr>
                        <p id="status"></p>



                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>


        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Users Data Table</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="userTable" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>UserName</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Group</th>
                                <th>Created At</th>
                                <th>Status</th>
                                <th>View</th>
                                <th>Delete</th>

                            </tr>
                            </thead>

                            <tbody>
                            @foreach($data as $item)

                                <tr>
                                    <th scope="row">{{ $item->user_id }}</th>
                                    <td>{{ $item->user_name }}</td>
                                    <td>{{ $item->user_firstname }}</td>
                                    <td>{{ $item->user_lastname }}</td>
                                    <td>{{ $item->group_name }}</td>
                                    <td>{{ $item->user_created }}</td>
                                    <td id="{{ $item->user_id }}_status">{{ $item->user_status }}</td>
                                    <td><a data-uid="{{ $item->user_id }}" data-uname="{{ $item->user_name }}"
                                           data-fname="{{ $item->user_firstname }}"
                                           data-lname="{{ $item->user_lastname }}" data-group="{{ $item->group_name }}"
                                           data-created="{{ $item->user_created }}"
                                           data-modified="{{ $item->user_modified }}"
                                           data-status="{{ $item->user_status }}" class="detailClick" style="cursor: pointer"
                                           >View</a></td>
                                    <td><a href="javascript:void(0)"
                                           onclick="DeleteUser({{ $item->user_id }})">Delete</a></td>


                                </tr>
                            @endforeach


                            </tbody>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->

                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
</body>
</html>
