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

    <div id="detailsAppcl" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title" style="text-align: center">Cheques Leaves Details</h4>
                </div>
                <div class="modal-body">

                    <p id="cheque_leaf_id"></p>
                    <hr>
                    <p id="chequebook_id"></p>
                    <hr>
                    <p id="leafno"></p>
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
                    <h3 class="box-title">Cheque Leaves Table</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="userTable" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>Record No</th>
                            <th>Cheque Book ID</th>
                            <th>Leaf No</th>
                            <th>Status</th>

                            <th>View</th>
                            <th>Delete</th>

                        </tr>
                        </thead>

                        <tbody>
                        @foreach($data as $item)

                            <tr>
                                <th scope="row">{{ $item->cheque_leaf_id }}</th>
                                <td>{{ $item->chequebook_id }}</td>
                                <td>{{ $item->leafno }}</td>
                                <td>{{ $item->status }}</td>

                                <td><a data-uid="{{ $item->cheque_leaf_id }}" data-chequebook_id="{{ $item->chequebook_id }}"
                                       data-leafno="{{ $item->leafno }}"
                                       data-status="{{ $item->status }}"
                                       type="button" class="detailsAppcl btn btn-warning"  style="cursor: pointer"
                                    > View</a></td>
                                <td><a href="javascript:void(0)"
                                       type="button" class="btn btn-danger"  onclick="DeleteUser({{ $item->cheque_leaf_id }},'chequeleaf')"> Delete</a></td>


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
