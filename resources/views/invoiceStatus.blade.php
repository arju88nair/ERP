@include('partials/header')

<section class="content">

    <div id="invoiceStatus" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title" style="text-align: center">Invoice Status
                    </h4>
                </div>
                <div class="modal-body">
                    <p id="recNum"></p>
                    <hr>
                    <p id="invoice_status"></p>

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
                    <h3 class="box-title">Invoice Prefix
                    </h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="respoTable" class="table table-striped table-bordered nowrap" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>Record No</th>
                            <th>Invoice Status</th>
                            <th>View</th>
                            <th>Delete</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($data as $item)

                            <tr>
                                <th scope="row">{{ $item->invoice_status_id }}</th>
                                <td>{{ $item->invoice_status }}</td>
                                <td><a data-uid="{{ $item->invoice_status_id }}" data-invoice_status="{{ $item->invoice_status }}"

                                       type="button" class="invoiceStatus btn btn-warning"  style="cursor: pointer"
                                    > View</a></td>

                                <td><a href="javascript:void(0)"
                                       type="button" class="btn btn-danger"  onclick="DeleteUser({{ $item->invoice_status_id }},'invStat')"> Delete</a></td>
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
    $(document).ready(function()
    {
        $("li#AssetTable").addClass('active');
    });

</script>
</html>