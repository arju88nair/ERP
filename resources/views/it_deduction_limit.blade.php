@include('partials/header')

<section class="content">
    <div id="detailsItDeduction" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title" style="text-align: center">IT Deduction limit</h4>
                </div>
                <div class="modal-body">
                    <table class="table table-bordered table-responsive">
                        <tr><th>Record Number</th><td id="id"></td></tr>
                        <tr><th>Head for Deduction</th><td id="city"></td></tr>
                        <tr><th>Financial Year</th><td id="year"></td></tr>
                        <tr><th>Assesee Type</th><td id="assesee"></td></tr>
                        <tr><th>Deduction Percentage Allowed</th><td id="per_allowed"></td></tr>
                        <tr><th>Deduction Amount Allowed</th><td id="amnt_allowed"></td></tr>
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
                    <h3 class="box-title">IT Deduction limit</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="ItDeductionLimitMasterTable" class="table table-bordered table-hover" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>Record No</th>
                            <th>Head for Deduction</th>
                            <th>Financial Year</th>
                            <th>Assesee Type</th>
                            <th>Deduction Percentage Allowed</th>
                            <th>Deduction Amount Allowed</th>
                            <th>View</th>
                            <th>Delete</th>
                            <th>Edit</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($data as $item)

                            <tr>
                                <td scope="row">{{ $item->it_deduction_limit_id }}</td>
                                <td>{{ $item->it_deduction_header_name }}</td>
                                <td>{{ $item->financial_year }}</td>
                                <td>{{ $item->assessee_type }}</td>
                                <td>{{ $item->deduction_percent_allowed }}</td>
                                <td>{{ $item->deduction_amount_allowed }}</td>
                                <td><a data-uid="{{ $item->it_deduction_limit_id }}" data-name="{{ $item->it_deduction_header_name }}"
                                       data-year="{{ $item->financial_year }}" data-type="{{ $item->assessee_type }}"
                                       data-percentage="{{ $item->deduction_percent_allowed }}"
                                        data-amount="{{ $item->deduction_amount_allowed }}"
                                       type="button" class="detailClickItDeductionLimit btn btn-warning"  style="cursor: pointer"
                                    > View</a></td>
                                <td><a href="javascript:void(0)"
                                       type="button" class="btn btn-danger"  onclick="DeleteUser({{ $item->it_deduction_limit_id }},'Asset')"> Delete</a></td>
                                <td><a href="#" type="button" class="btn btn-primary">Edit</a></td>


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