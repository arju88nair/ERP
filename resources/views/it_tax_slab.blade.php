@include('partials/header')

<section class="content">
    <div id="detailsItTaxSlab" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title" style="text-align: center">IT Tax Slab</h4>
                </div>
                <div class="modal-body">
                    <table class="table table-bordered table-responsive">
                        <tr><th>Record Number</th><td id="id"></td></tr>
                        <tr><th>Assesee Type</th><td id="type"></td></tr>
                        <tr><th>Financial Year</th><td id="year"></td></tr>
                        <tr><th>Income From</th><td id="from"></td></tr>
                        <tr><th>Income To</th><td id="to"></td></tr>
                        <tr><th>Fixed Amount</th><td id="amount"></td></tr>
                        <tr><th>Percent Taxable Income</th><td id="income"></td></tr>
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
                    <h3 class="box-title">IT Tax Slab</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="ItTaxSlabMasterTable" class="table table-bordered table-hover" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>Record No</th>
                            <th>Assesee Type</th>
                            <th>Financial Year</th>
                            <th>Income From</th>
                            <th>Income To</th>
                            <th>Fixed Amount</th>
                            <th>Percent Taxable Income</th>
                            <th>View</th>
                            <th>Delete</th>
                            <th>Edit</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($data as $item)

                            <tr>
                                <td scope="row">{{ $item->hr_it_taxslab_id }}</td>
                                <td>{{ $item->assessee_type }}</td>
                                <td>{{ $item->financial_year }}</td>
                                <td>{{ $item->income_from }}</td>
                                <td>{{ $item->income_to }}</td>
                                <td>{{ $item->fixed_amount }}</td>
                                <td>{{ $item->percent_taxable_income }}</td>
                                <td><a data-uid="{{ $item->hr_it_taxslab_id }}" data-name="{{ $item->financial_year }}"
                                       data-type="{{ $item->assessee_type }}" data-to="{{ $item->income_to }}"
                                       data-from="{{ $item->income_from }}" data-amount="{{ $item->fixed_amount }}"
                                       data-income="{{ $item->percent_taxable_income }}"
                                       type="button" class="detailClickItTaxSlab btn btn-warning"  style="cursor: pointer"
                                    > View</a></td>
                                <td><a href="javascript:void(0)"
                                       type="button" class="btn btn-danger"  onclick="DeleteUser({{ $item->hr_it_taxslab_id }},'Asset')"> Delete</a></td>
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

</script>
</html>