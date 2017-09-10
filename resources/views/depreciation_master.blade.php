@include('partials/header')

<section class="content">

    <div id="detailsDepreciation" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title" style="text-align: center">Depreciation Table</h4>
                </div>
                <div class="modal-body">
                    <p id="recNum"></p>
                    <hr>
                    <p id="classification"></p>
                    <hr>
                    <p id="govtdept"></p>
                    <hr>
                    <p id="percentage"></p>
                    <hr>
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
                    <h3 class="box-title">Depreciation Table</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="DepreciationMasterTable" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>Record No</th>
                            <th>Asset Classification</th>
                            <th>Govt Dept</th>
                            <th>Depreciation Percentage</th>
                            <th>View</th>
                            <th>Delete</th>
                            <th>Edit</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($data as $item)

                            <tr>
                                <th scope="row">{{ $item->depreciation_master_id }}</th>
                                <td>{{ $item->asset_classification }}</td>
                                <td>{{ $item->govt_depts_name }}</td>
                                <td>{{ $item->depreciation_percentage }}</td>
                                <td><a data-uid="{{ $item->depreciation_master_id }}" data-classification="{{ $item->asset_classification }}"
                                       data-govt_dept="{{ $item->govt_depts_name }}"
                                       data-percentage="{{ $item->depreciation_percentage }}"
                                       type="button" class="detailClickDepreciation btn btn-warning"  style="cursor: pointer"
                                    > View</a></td>
                                <td><a href="javascript:void(0)"
                                       type="button" class="btn btn-danger"  onclick="DeleteUser({{ $item->depreciation_master_id }},'Asset')"> Delete</a></td>
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
        $("li#AssetTable").addClass('active');
    });

</script>
</html>