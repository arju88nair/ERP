@include('partials/header')

<section class="content">

    {{--<div id="detailsDepreciation" class="modal fade" role="dialog">--}}
        {{--<div class="modal-dialog">--}}

            {{--<!-- Modal content-->--}}
            {{--<div class="modal-content">--}}
                {{--<div class="modal-header">--}}
                    {{--<button type="button" class="close" data-dismiss="modal">&times;</button>--}}
                    {{--<h4 class="modal-title" style="text-align: center">Depreciation Table</h4>--}}
                {{--</div>--}}
                {{--<div class="modal-body">--}}
                    {{--<p id="recNum"></p>--}}
                    {{--<hr>--}}
                    {{--<p id="classification"></p>--}}
                    {{--<hr>--}}
                    {{--<p id="govtdept"></p>--}}
                    {{--<hr>--}}
                    {{--<p id="percentage"></p>--}}
                    {{--<hr>--}}
                {{--</div>--}}
                {{--<div class="modal-footer">--}}
                    {{--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>--}}
                {{--</div>--}}
            {{--</div>--}}

        {{--</div>--}}
    {{--</div>--}}


    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Financial Year</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="FinancialYearMasterTable" class="table table-bordered table-hover" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>Record No</th>
                            <th>Financial Year</th>
                            <th>Date From</th>
                            <th>Date To</th>
                            <th>View</th>
                            <th>Delete</th>
                            <th>Edit</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($data as $item)

                            <tr>
                                <td scope="row">{{ $item->fin_financialyear_id }}</td>
                                <td>{{ $item->financial_year }}</td>
                                <td>{{ $item->date_from }}</td>
                                <td>{{ $item->date_to }}</td>
                                <td><a
                                    > View</a></td>
                                <td><a href="javascript:void(0)"
                                       type="button" class="btn btn-danger"  onclick="DeleteUser({{ $item->fin_financialyear_id }},'Asset')"> Delete</a></td>
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