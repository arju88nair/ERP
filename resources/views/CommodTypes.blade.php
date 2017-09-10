@include('partials/header')

<section class="content">

    <div id="commodType" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title" style="text-align: center">Commodity Types
                    </h4>
                </div>
                <div class="modal-body">
                    <p id="recNum"></p>
                    <hr>
                    <p id="commodity_name"></p>



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
                    <h3 class="box-title">Commodity Types
                    </h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="respoTable" class="table table-striped table-bordered nowrap" cellspacing="0"
                           width="100%">
                        <thead>
                        <tr>
                            <th>Record No</th>
                            <th>Commodity name</th>

                            <th>View</th>
                            <th>Delete</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($data as $item)

                            <tr>
                                <th scope="row">{{ $item->commodity_type_id }}</th>
                                <td>{{ $item->commodity_name }}</td>


                                <td><a data-uid="{{ $item->commodity_type_id }}" data-commodity_name="{{ $item->commodity_name }}"

                                       type="button" class="commodType btn btn-warning" style="cursor: pointer"
                                    > View</a></td>

                                <td><a href="javascript:void(0)"
                                       type="button" class="btn btn-danger"
                                       onclick="DeleteUser({{ $item->commodity_type_id }},'commodType')"> Delete</a></td>
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