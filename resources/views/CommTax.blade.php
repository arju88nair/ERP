@include('partials/header')

<section class="content">

    <div id="commTax" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title" style="text-align: center">Commercial Tax
                    </h4>
                </div>
                <div class="modal-body">
                    <p id="recNum"></p>
                    <hr>
                    <p id="tax_name"></p>
                    <hr>
                    <p id="state_id"></p>
                    <hr>
                    <p id="user_financial_year"></p>
                    <hr>
                    <p id="tax_rate"></p>
                    <hr>
                    <p id="draw_back_available"></p>


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
                    <h3 class="box-title">Commercial Tax
                    </h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="respoTable" class="table table-striped table-bordered nowrap" cellspacing="0"
                           width="100%">
                        <thead>
                        <tr>
                            <th>Record No</th>
                            <th>Tax Name	</th>
                            <th>State</th>
                            <th>Financial Year</th>
                            <th>Tax Rate</th>
                            <th>Draw Back Available</th>
                            <th>View</th>
                            <th>Delete</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($data as $item)

                            <tr>
                                <th scope="row">{{ $item->commercial_tax_id }}</th>
                                <td>{{ $item->tax_name }}</td>
                                <td>{{ $item->state_id }}</td>
                                <td>{{ $item->user_financial_year }}</td>
                                <td>{{ $item->tax_rate }}</td>
                                <td>{{ $item->draw_back_available }}</td>
                                <td><a data-uid="{{ $item->commercial_tax_id }}" data-tax_name="{{ $item->tax_name }}"
                                       data-state_id="{{ $item->state_id }}"
                                       data-user_financial_year="{{ $item->user_financial_year }}"
                                       data-tax_rate="{{ $item->tax_rate }}"
                                       data-draw_back_available="{{ $item->draw_back_available }}"

                                       type="button" class="commTax btn btn-warning" style="cursor: pointer"
                                    > View</a></td>

                                <td><a href="javascript:void(0)"
                                       type="button" class="btn btn-danger"
                                       onclick="DeleteUser({{ $item->tax_name }},'commTax')"> Delete</a></td>
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