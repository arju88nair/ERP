@include('partials/header')

<section class="content">
    <div id="detailsMonthlyPay" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title" style="text-align: center">Monthly Payment Master</h4>
                </div>
                <div class="modal-body">
                    <table class="table table-bordered table-responsive">
                        <tr><th>Record Number</th><td id="id"></td></tr>
                        <tr><th>Voucher Type</th><td id="voucher"></td></tr>
                        <tr><th>Payee Name</th><td id="name"></td></tr>
                        <tr><th>Account Head</th><td id="head"></td></tr>
                        <tr><th>Amount</th><td id="amount"></td></tr>
                        <tr><th>Due Date</th><td id="due"></td></tr>
                        <tr><th>Narration</th><td id="narration"></td></tr>
                    </table>
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
                    <h3 class="box-title">Monthly Payment Master</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="MonthlyPayMasterTable" class="table table-bordered table-hover" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>Record No</th>
                            <th>Voucher Type</th>
                            <th>Name of Payee</th>
                            <th>Sub Ledger Code</th>
                            <th>Amount Payable</th>
                            <th>Due Date</th>
                            <th>Narration</th>
                            <th>View</th>
                            <th>Delete</th>
                            <th>Edit</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($data as $item)

                            <tr>
                                <td scope="row">{{ $item->monthly_payment_master_id }}</td>
                                <td>{{ $item->voucher_type }}</td>
                                <td>{{ $item->user_name }}</td>
                                <td>{{ $item->account_head }}</td>
                                <td>{{ $item->amount_payable }}</td>
                                <td>{{ $item->due_date }}</td>
                                <td>{{ $item->narration }}</td>
                                <td><a data-uid="{{ $item->monthly_payment_master_id }}" data-voucher="{{ $item->voucher_type }}"
                                       data-name="{{ $item->user_name }}" data-head="{{ $item->account_head }}"
                                       data-amount="{{ $item->amount_payable }}" data-due="{{ $item->due_date }}" data-narration="{{ $item->narration }}"
                                       type="button" class="detailClickMonthlyPay btn btn-warning"  style="cursor: pointer"
                                    > View</a></td>
                                <td><a href="javascript:void(0)"
                                       type="button" class="btn btn-danger"  onclick="DeleteUser({{ $item->monthly_payment_master_id }},'Asset')"> Delete</a></td>
                                <td><a hre="#" type="button" class="btn btn-primary">Edit</a></td>


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
        $("li#Finance").addClass('active');
    });

</script>
</html>