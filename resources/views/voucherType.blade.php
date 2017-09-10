@include('partials/header')

<section class="content">

    <div id="voucherType" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title" style="text-align: center">Taxes
                    </h4>
                </div>
                <div class="modal-body">
                    <p id="recNum"></p>
                    <hr>
                    <p id="voucher_type"></p><hr>
                    <p id="vr_prefix"></p><hr>
                    <p id="finyear"></p>


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
                    <h3 class="box-title">Taxes
                    </h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="respoTable" class="table table-striped table-bordered nowrap" cellspacing="0"
                           width="100%">
                        <thead>
                        <tr>
                            <th>Record No</th>
                            <th>Voucher Type</th>
                            <th>Voucher Prefix</th>
                            <th>Financial Year</th>


                            <th>View</th>
                            <th>Delete</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($data as $item)

                            <tr>
                                <th scope="row">{{ $item->voucher_type_id }}</th>
                                <td>{{ $item->voucher_type }}</td>
                                <td>{{ $item->vr_prefix }}</td>
                                <td>{{ $item->finyear }}</td>



                                <td><a data-uid="{{ $item->voucher_type_id }}"
                                       data-voucher_type="{{ $item->voucher_type }}"
                                       data-vr_prefix="{{ $item->vr_prefix }}"
                                       data-finyear="{{ $item->finyear }}"


                                       type="button" class="voucherType btn btn-warning" style="cursor: pointer"
                                    > View</a></td>

                                <td><a href="javascript:void(0)"
                                       type="button" class="btn btn-danger"
                                       onclick="DeleteUser({{ $item->voucher_type_id }},'voucherType')"> Delete</a>
                                </td>
                                {{--<td><a hre="#" type="button" class="btn btn-primary">Edit</a></td>--}}


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
    $(document).ready(function () {
        $("li#AssetTable").addClass('active');
    });

</script>
</html>