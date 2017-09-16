@include('partials/header')

<section class="content">

    <div id="corpIncTaxSlab" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title" style="text-align: center">Corp Income TaxSlab
                    </h4>
                </div>
                <div class="modal-body">
                    <p id="recNum"></p>
                    <hr>
                    <p id="description"></p> <hr>
                    <p id="finyear"></p> <hr>
                    <p id="income_from"></p> <hr>
                    <p id="income_to"></p> <hr>
                    <p id="tax_rate_percent"></p>


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
                    <h3 class="box-title">Corp Income TaxSlab
                    </h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="respoTable" class="table table-striped table-bordered nowrap" cellspacing="0"
                           width="100%">
                        <thead>
                        <tr>
                            <th>Record No</th>
                            <th>Corporate Structure</th>
                            <th>Financial Year	</th>
                            <th>Income From	</th>
                            <th>Income To	</th>
                            <th>Tax rate percent</th>

                            <th>View</th>
                            <th>Delete</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($data as $item)

                            <tr>
                                <th scope="row">{{ $item->corp_income_tax_slab_id }}</th>
                                <td>{{ $item->description }}</td>
                                <td>{{ $item->finyear }}</td>
                                <td>{{ $item->income_from }}</td>
                                <td>{{ $item->income_to }}</td>
                                <td>{{ $item->tax_rate_percent }}</td>


                                <td><a data-uid="{{ $item->corp_income_tax_slab_id }}"
                                       data-tax_rate_percent="{{ $item->tax_rate_percent }}"
                                       data-income_to="{{ $item->income_to }}"
                                       data-income_from="{{ $item->income_from }}"
                                       data-finyear="{{ $item->finyear }}"
                                       data-description="{{ $item->description }}"

                                       type="button" class="corpIncTaxSlab btn btn-warning" style="cursor: pointer"
                                    > View</a></td>

                                <td><a href="javascript:void(0)"
                                       type="button" class="btn btn-danger"
                                       onclick="DeleteUser({{ $item->corp_income_tax_slab_id }},'corpIncTaxSlab')"> Delete</a>
                                </td>
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