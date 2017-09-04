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

    <div id="detailsAppcb" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title" style="text-align: center">Bank Master Details</h4>
                </div>
                <div class="modal-body">

                    <p id="cheque_book_id"></p>
                    <hr>
                    <p id="bank_account_no"></p>
                    <hr>
                    <p id="chequebook_no"></p>
                    <hr>
                    <p id="cheque_leaf_from"></p>
                    <hr>
                    <p id="cheque_leaf_to"></p>

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
                            <th>Record No</th>
                            <th>Bank Account No.</th>
                            <th>Cheque Book No</th>
                            <th>Cheque Leaf From</th>
                            <th>Cheque Leaf To</th>

                            <th>View</th>
                            <th>Delete</th>

                        </tr>
                        </thead>

                        <tbody>
                        @foreach($data as $item)

                            <tr>
                                <th scope="row">{{ $item->cheque_book_id }}</th>
                                <td>{{ $item->bank_account_no }}</td>
                                <td>{{ $item->chequebook_no }}</td>
                                <td>{{ $item->cheque_leaf_from }}</td>
                                <td>{{ $item->cheque_leaf_to }}</td>

                                <td><a data-uid="{{ $item->cheque_book_id }}" data-bank_account_no="{{ $item->bank_account_no }}"
                                       data-chequebook_no="{{ $item->chequebook_no }}"
                                       data-cheque_leaf_from="{{ $item->cheque_leaf_from }}"
                                       data-cheque_leaf_to="{{ $item->cheque_leaf_to }}"
                                       type="button" class="detailsAppcb btn btn-warning"  style="cursor: pointer"
                                    > View</a></td>
                                <td><a href="javascript:void(0)"
                                       type="button" class="btn btn-danger"  onclick="DeleteUser({{ $item->cheque_book_id }},'chequebook')"> Delete</a></td>


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
