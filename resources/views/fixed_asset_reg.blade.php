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
                    {{--<table id="FinancialYearMasterTable" class="table table-bordered table-hover" cellspacing="0" width="100%">--}}
                        {{--<thead>--}}
                        {{--<tr>--}}
                            {{--@foreach($data[0] as $col=>$val)--}}
                                {{--<th>{{$val}}</th>--}}
                            {{--<th>Record No</th>--}}
                            {{--<th>Financial Year</th>--}}
                            {{--<th>Date From</th>--}}
                            {{--<th>Date To</th>--}}
                            {{--@endforeach--}}

                                {{--<th>View</th>--}}
                                {{--<th>Delete</th>--}}
                                {{--<th>Edit</th>--}}
                        {{--</tr>--}}
                        {{--</thead>--}}

                        {{--<tbody>--}}

                        {{--@foreach($data as $item)--}}

                            {{--<tr>--}}
                                {{--<td scope="row">{{ $item->asset_classification }}</td>--}}
                                {{--<td>{{ $item->asset_name }}</td>--}}
                                {{--<td>{{ $item->asset_unique_id }}</td>--}}
                                {{--<td>{{ $item->amount_paid }}</td>--}}
                                {{--<td>{{ $item->payment_cheque_no }}</td>--}}
                                {{--<td>{{ $item->payment_date }}</td>--}}
                                {{--<td>{{$item->installation_date}}</td>--}}
                                {{--<td><a href="javascript:void(0)"--}}
                                       {{--type="button" class="btn btn-danger"  onclick="showDetails()">--}}
                                        {{--View</a></td>--}}
                                {{--<td><a href="javascript:void(0)"--}}
                                       {{--type="button" class="btn btn-danger"  onclick="DeleteUser({{ $item->asset_unique_id }},'Asset')"> Delete</a></td>--}}
                                {{--<td><a hre="#" type="button" class="btn btn-primary">Edit</a></td>--}}


                            {{--</tr>--}}
                        {{--@endforeach--}}


                        {{--</tbody>--}}
                    {{--</table>--}}
                    <table id="example" class="table table-bordered table-striped" cellspacing="0" width="100%">
                        <thead>
                        <tr>

                            @foreach($data[0] as $col=>$val)
                            <th>{{$col}}</th>
                            @endforeach

                            <th>View</th>
                            <th>Delete</th>
                            <th>Edit</th>
                            {{--<th class="none"></th>--}}
                        </tr>
                        </thead>


                        <tbody>

                        @foreach($data as $item)

                            <tr>
                                <td scope="row">{{ $item->asset_classification }}</td>
                                <td>{{ $item->asset_name }}</td>
                                <td>{{ $item->asset_unique_id }}</td>
                                <td>{{ $item->amount_paid }}</td>
                                <td>{{ $item->payment_cheque_no }}</td>
                                <td>{{ $item->payment_date }}</td>
                                <td>{{$item->installation_date}}</td>
                                <td><a href="javascript:void(0)"
                                       type="button" class="btn btn-danger"  onclick="showDetails()">
                                        View</a></td>
                                <td><a href="javascript:void(0)"
                                       type="button" class="btn btn-danger"  onclick="DeleteUser({{ $item->asset_unique_id }},'Asset')"> Delete</a></td>
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
    $(document).ready(function (){
        var table = $('#example').DataTable({
//            ajax: 'https://api.myjson.com/bins/qgcu',
            responsive: {
                details: {
                    display: $.fn.dataTable.Responsive.display.modal({
                        header: function (row) {
                            var data = row.data();
                            return 'Details for ' + data[0] + ' ' + data[1];
                        }
                    }),
                    renderer: $.fn.dataTable.Responsive.renderer.tableAll({
                        tableClass: 'table'
                    })
                }
            },
            columnDefs: [{
                "searchable": false,
                "orderable": false,
                "targets": 0
            },{
                "data": null,
                "defaultContent": "",
                "targets": 6
            }],
        });


//        table.on('order.dt search.dt', function () {
//            table.column(0, { search: 'applied', order: 'applied' }).nodes().each(function (cell, i) {
//                cell.innerHTML = i + 1;
//            });
//        }).draw();

    });

    function showDetails(e){

    }

</script>
</html>