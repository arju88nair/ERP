@include('partials/header')

<section class="content">

    <div id="commodTax" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title" style="text-align: center">Commodity Tax
                    </h4>
                </div>
                <div class="modal-body">
                    <p id="recNum"></p>
                    <hr>
                    <p id="commodity_name"></p>
                    <hr>
                    <p id="state_id"></p>
                    <hr>
                    <p id="state_tax_rate"></p>
                    <hr>
                    <p id="centre_tax_rate"></p>
                    <hr>
                    <p id="service_tax_rate"></p>


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
                    <h3 class="box-title">Commodity Tax
                    </h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="respoTable" class="table table-striped table-bordered nowrap" cellspacing="0"
                           width="100%">
                        <thead>
                        <tr>
                            <th>Record No</th>
                            <th>Commodity Type</th>
                            <th>State Name	</th>
                            <th>State Tax Rate	</th>
                            <th>Centre Tax Rate	</th>
                            <th>Service Tax Rate	</th>
                            <th>View</th>
                            <th>Delete</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($data as $item)

                            <tr>
                                <th scope="row">{{ $item->commodity_tax_id }}</th>
                                <td>{{ $item->commodity_name }}</td>
                                <td>{{ $item->state_id }}</td>
                                <td>{{ $item->state_tax_rate }}</td>
                                <td>{{ $item->centre_tax_rate }}</td>
                                <td>{{ $item->service_tax_rate }}</td>

                                <td><a data-uid="{{ $item->commodity_tax_id }}" data-service_tax_rate="{{ $item->service_tax_rate }}"
                                       data-commodity_name="{{ $item->commodity_name }}"
                                       data-state_id="{{ $item->state_id }}"
                                       data-state_tax_rate="{{ $item->state_tax_rate }}"
                                       data-centre_tax_rate="{{ $item->centre_tax_rate }}"

                                       type="button" class="commodTax btn btn-warning" style="cursor: pointer"
                                    > View</a></td>

                                <td><a href="javascript:void(0)"
                                       type="button" class="btn btn-danger"
                                       onclick="DeleteUser({{ $item->commodity_tax_id }},'commodTax')"> Delete</a></td>
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