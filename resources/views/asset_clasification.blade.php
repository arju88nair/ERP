@include('partials/header')
<section class="content">

    <div id="detailAssetClass" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title" style="text-align: center">Asset Classification</h4>
                </div>
                <div class="modal-body">
                    <p id="recordNum"></p>
                    <hr>
                    <p id="AssetClassification"></p>
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
                    <h3 class="box-title">Asset Classification</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="AssetClassificationTable" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Asset Classification</th>
                            <th>View</th>
                            <th>Delete</th>
                            <th>Edit</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($data as $item)

                            <tr>
                                <th scope="row">{{ $item->asset_classification_id }}</th>
                                <td>{{ $item->asset_classification }}</td>
                                <td><a data-uid="{{ $item->asset_classification_id }}" data-uname="{{ $item->asset_classification }}"
                                       style="cursor: pointer"
                                       type="button" class="detailAssetClass btn btn-warning" >View</a></td>
                                <td><a href="javascript:void(0)"
                                       type="button" class="btn btn-danger" onclick="DeleteUser({{ $item->asset_classification_id }},'User')">Delete</a></td>
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
        $("#home").addClass('active');
    });

</script>
</html>