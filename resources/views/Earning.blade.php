@include('partials/header')

<section class="content">
    <div id="Earning" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title" style="text-align: center">Earning</h4>
                </div>
                <div class="modal-body">
                    <table class="table table-bordered table-responsive">
                        <tr><th>Record Number</th><td id="recNum"></td></tr>
                        <tr><th>Name</th><td id="user_name"></td></tr>
                        <tr><th>Salary Head</th><td id="sh_salary_head_id"></td></tr>
                        <tr><th>Amount Earned</th><td id="amount_earned"></td></tr>

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
                    <h3 class="box-title">Earning</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="GovtDeptMasterTable" class="table table-bordered table-hover" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>Record No</th>
                            <th>User Name</th>
                            <th>Salary Head</th>
                            <th>Amount Earned</th>
                            <th>View</th>
                            <th>Delete</th>
                            <th>Edit</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($data as $item)

                            <tr>
                                <td scope="row">{{ $item->salary_earning_id }}</td>
                                <td>{{ $item->user_name }}</td>
                                <td>{{ $item->sh_salary_head_id }}</td>
                                <td>{{ $item->amount_earned }}</td>
                                <td><a data-uid="{{ $item->salary_earning_id }}" data-user_name="{{ $item->user_name }}"
                                       data-sh_salary_head_id="{{ $item->sh_salary_head_id }}"  data-amount_earned="{{ $item->amount_earned }}"
                                       type="button" class="Earning btn btn-warning"  style="cursor: pointer"
                                    > View</a></td>
                                <td><a href="javascript:void(0)"
                                       type="button" class="btn btn-danger"  onclick="DeleteUser({{ $item->salary_earning_id }},'Earning')"> Delete</a></td>
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