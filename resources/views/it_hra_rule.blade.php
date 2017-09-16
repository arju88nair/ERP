@include('partials/header')

<section class="content">
    <div id="detailsHraRule" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title" style="text-align: center">IT HRA Rule</h4>
                </div>
                <div class="modal-body">
                    <table class="table table-bordered table-responsive">
                        <tr><th>Record Number</th><td id="id"></td></tr>
                        <tr><th>Assesse Residence City</th><td id="city"></td></tr>
                        <tr><th>IT Exemption Limit Percent</th><td id="lim_percentage"></td></tr>
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
                    <h3 class="box-title">IT HRA Rule</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="ItHraRuleMasterTable" class="table table-bordered table-hover" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>Record No</th>
                            <th>Assesse Residence City</th>
                            <th>IT Exemption Limit Percent</th>
                            <th>View</th>
                            <th>Delete</th>
                            <th>Edit</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($data as $item)

                            <tr>
                                <td scope="row">{{ $item->it_hra_rules_id }}</td>
                                <td>{{ $item->city_name }}</td>
                                <td>{{ $item->it_exemption_limit_percent }}</td>
                                <td><a data-uid="{{ $item->it_hra_rules_id }}" data-name="{{ $item->city_name }}"
                                       data-limit="{{ $item->it_exemption_limit_percent }}"
                                       type="button" class="detailClickHraRule btn btn-warning"  style="cursor: pointer"
                                    > View</a></td>
                                <td><a href="javascript:void(0)"
                                       type="button" class="btn btn-danger"  onclick="DeleteUser({{ $item->it_hra_rules_id }},'Asset')"> Delete</a></td>
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