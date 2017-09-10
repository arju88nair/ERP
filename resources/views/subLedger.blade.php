@include('partials/header')

<section class="content">

    <div id="subLedger" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title" style="text-align: center">Sub Ledger Code
                    </h4>
                </div>
                <div class="modal-body">
                    <p id="recNum"></p>
                    <hr>
                    <p id="gl_name"></p>
                    <hr>
                    <p id="nature_of_account"></p>
                    <hr>
                    <p id="account_head"></p>
                    <hr>
                    <p id="account_no"></p>


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
                    <h3 class="box-title">Sub Ledger Code
                    </h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="respoTable" class="table table-striped table-bordered nowrap" cellspacing="0"
                           width="100%">
                        <thead>
                        <tr>
                            <th>Record No</th>
                            <th>General Ledger</th>
                            <th>Account Head</th>
                            <th>Account No.</th>
                            <th>Nature of Account</th>
                            <th>View</th>
                            <th>Delete</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($data as $item)

                            <tr>
                                <th scope="row">{{ $item->sub_ledger_code_id }}</th>
                                <td>{{ $item->gl_name }}</td>
                                <td>{{ $item->account_head }}</td>
                                <td>{{ $item->account_no }}</td>
                                <td>{{ $item->gl_name }}</td>
                                <td><a data-uid="{{ $item->sub_ledger_code_id }}" data-gl_name="{{ $item->gl_name }}"
                                       data-account_head="{{ $item->account_head }}"
                                       data-account_no="{{ $item->account_no }}"
                                       data-nature_of_account="{{ $item->nature_of_account }}"

                                       type="button" class="subLedger btn btn-warning" style="cursor: pointer"
                                    > View</a></td>

                                <td><a href="javascript:void(0)"
                                       type="button" class="btn btn-danger"
                                       onclick="DeleteUser({{ $item->sub_ledger_code_id }},'invType')"> Delete</a></td>
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