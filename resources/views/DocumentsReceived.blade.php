@include('partials/header')

<section class="content">
    <div id="DocRec" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title" style="text-align: center">Documents Received</h4>
                </div>
                <div class="modal-body">
                    <table class="table table-bordered table-responsive">
                        <tr><th>Record Number</th><td id="recNum"></td></tr>
                        <tr><th>User Name</th><td id="user_name"></td></tr>
                        <tr><th>Document Type</th><td id="document_name"></td></tr>
                        <tr><th>Submitted Date</th><td id="submitted_on_date"></td></tr>
                        <tr><th>Amount Paid</th><td id="amount_paid"></td></tr>
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
                    <h3 class="box-title">Documents Received</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="GovtDeptMasterTable" class="table table-bordered table-hover" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>Record No</th>
                            <th>User Name</th>
                            <th>Document Type</th>
                            <th>Submitted Date</th>
                            <th>Amount Paid</th>
                            <th>View</th>
                            <th>Delete</th>
                            <th>Edit</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($data as $item)

                            <tr>
                                <td scope="row">{{ $item->documents_recieved_id }}</td>
                                <td>{{ $item->user_name }}</td>
                                <td>{{ $item->document_name }}</td>
                                <td>{{ $item->submitted_on_date }}</td>
                                <td>{{ $item->amount_paid }}</td>
                                <td><a data-uid="{{ $item->documents_recieved_id }}" data-user_name="{{ $item->user_name }}"
                                       data-document_name="{{ $item->document_name }}" data-submitted_on_date="{{ $item->submitted_on_date }}" data-amount_paid="{{ $item->amount_paid }}"
                                       type="button" class="DocRec btn btn-warning"  style="cursor: pointer"
                                    > View</a></td>
                                <td><a href="javascript:void(0)"
                                       type="button" class="btn btn-danger"  onclick="DeleteUser({{ $item->documents_recieved_id }},'DocRec')"> Delete</a></td>
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