@include('partials/header')

<section class="content">
    <div id="MyItDeclaration" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title" style="text-align: center">My It Declaration</h4>
                </div>
                <div class="modal-body">
                    <table class="table table-bordered table-responsive">
                        <tr><th>Record Number</th><td id="recNum"></td></tr>
                        <tr><th>Deduction Header</th><td id="it_deduction_header_name"></td></tr>
                        <tr><th>Amount Declared	</th><td id="amount_declared"></td></tr>
                        <tr><th>Date Declared	</th><td id="date_declared"></td></tr>
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
                    <h3 class="box-title">My It Declaration</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="GovtDeptMasterTable" class="table table-bordered table-hover" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>Record No</th>
                            <th>Deduction Header	</th>
                            <th>Amount Declared	</th>
                            <th>Date Declared	</th>
                            <th>View</th>
                            <th>Delete</th>
                            <th>Edit</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($data as $item)

                            <tr>
                                <td scope="row">{{ $item->it_employee_declaration_id }}</td>
                                <td>{{ $item->it_deduction_header_name }}</td>
                                <td>{{ $item->amount_declared }}</td>
                                <td>{{ $item->date_declared }}</td>
                                <td><a data-uid="{{ $item->it_employee_declaration_id }}" data-it_deduction_header_name="{{ $item->it_deduction_header_name }}"
                                       data-amount_declared="{{ $item->amount_declared }}" data-date_declared="{{ $item->date_declared }}"
                                       type="button" class="MyItDeclaration btn btn-warning"  style="cursor: pointer"
                                    > View</a></td>
                                <td><a href="javascript:void(0)"
                                       type="button" class="btn btn-danger"  onclick="DeleteUser({{ $item->it_employee_declaration_id }},'itDec')"> Delete</a></td>
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