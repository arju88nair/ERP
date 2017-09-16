@include('partials/header')

<section class="content">
    <div id="detailsItSectionHeaderCap" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title" style="text-align: center">IT Section Header Cap</h4>
                </div>
                <div class="modal-body">
                    <table class="table table-bordered table-responsive">
                        <tr><th>Record Number</th><td id="id"></td></tr>
                        <tr><th>Financial Year</th><td id="year"></td></tr>
                        <tr><th>Assesee Type</th><td id="type"></td></tr>
                        <tr><th>IT Section Header</th><td id="head"></td></tr>
                        <tr><th>Deduction Percentage</th><td id="percentage"></td></tr>
                        <tr><th>Deducttion Cap</th><td id="cap"></td></tr>
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
                    <h3 class="box-title">IT Section Header Cap</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="ItSectionHeaderCapMasterTable" class="table table-bordered table-hover" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>Record No</th>
                            <th>Financial Year</th>
                            <th>Assesee Type</th>
                            <th>IT Section Header</th>
                            <th>Deduction Percentage</th>
                            <th>Deducttion Cap</th>
                            <th>View</th>
                            <th>Delete</th>
                            <th>Edit</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($data as $item)

                            <tr>
                                <td scope="row">{{ $item->it_sectionheader_cap_id }}</td>
                                <td>{{ $item->financial_year }}</td>
                                <td>{{ $item->assessee_type }}</td>
                                <td>{{ $item->it_head_for_deduction }}</td>
                                <td>{{ $item->deduction_percentage }}</td>
                                <td>{{ $item->deduction_cap }}</td>
                                <td><a data-uid="{{ $item->it_sectionheader_cap_id }}" data-name="{{ $item->financial_year }}"
                                       data-type="{{ $item->assessee_type }}" data-head="{{ $item->it_head_for_deduction }}"
                                       data-percentage="{{ $item->deduction_percentage }}" data-cap="{{ $item->deduction_cap }}"
                                       type="button" class="detailClickItSectionHeaderCap btn btn-warning"  style="cursor: pointer"
                                    > View</a></td>
                                <td><a href="javascript:void(0)"
                                       type="button" class="btn btn-danger"  onclick="DeleteUser({{ $item->it_sectionheader_cap_id }},'Asset')"> Delete</a></td>
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