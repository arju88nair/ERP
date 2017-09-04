@include('partials/header')
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

    <div id="detailsApp" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title" style="text-align: center">Application  Configuration Details</h4>
                </div>
                <div class="modal-body">
                    <p id="appConf"></p>
                    <hr>
                    <p id="functionality"></p>
                    <hr>
                    <p id="path"></p>
                    <hr>
                    <p id="mail_send"></p>
                    <hr>
                    <p id="sms_send"></p>
                    <hr>
                    <p id="func_code"></p>




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
                            <th>SL No</th>
                            <th>Functionality</th>
                            <th>Function Code</th>
                            <th>Mail</th>
                            <th>SMS</th>
                            <th>Path</th>
                            <th>View</th>
                            <th>Delete</th>

                        </tr>
                        </thead>

                        <tbody>
                        @foreach($data as $item)

                            <tr>
                                <th scope="row">{{ $item->appconf_id }}</th>
                                <td>{{ $item->functionality }}</td>
                                <td>{{ $item->func_code }}</td>
                                <td>{{ $item->mail_send }}</td>
                                <td>{{ $item->sms_send }}</td>
                                <td>{{ $item->path }}</td>
                                <td><a data-uid="{{ $item->appconf_id }}" data-functionality="{{ $item->functionality }}"
                                       data-func_code="{{ $item->func_code }}"
                                       data-sms_send="{{ $item->sms_send }}" data-mail_send="{{ $item->mail_send }}"
                                       data-path="{{ $item->path }}"
                                       class="detailClickApp" style="cursor: pointer"
                                    ><span class="glyphicon glyphicon-th-large"></span> View</a></td>
                                <td><a href="javascript:void(0)"
                                       onclick="DeleteUser({{ $item->appconf_id }},'AppConf')"><span class="glyphicon glyphicon-trash"></span>  Delete</a></td>


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
<script>
    $(document).ready(function()
    {
$("li#appConfMen").addClass('active');
    });

</script>
</html>
