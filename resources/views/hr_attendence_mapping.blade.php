@include('partials/header')

<section class="content">
    <div id="detailsHrAttendence" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title" style="text-align: center">HR Attendence Mapping</h4>
                </div>
                <div class="modal-body">
                    <table class="table table-bordered table-responsive">
                        <?php
                        $i = 1;
                        foreach ($data[0] as $col => $val) {
                            echo "<tr><th>" . str_replace('_', ' ', $col) . "</th><td id=\"dataId$i\"></tr>";
                            $i++;
                        }
                        ?>
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
                    <h3 class="box-title">HR Attendence Mapping</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="HrAttendenceMasterTable" class="table table-bordered table-hover" cellspacing="0"
                           width="100%">
                        <thead>
                        <tr>
                            <?php
                            foreach ($data[0] as $col => $val) {
                                echo "<th>" . str_replace('_', ' ', $col) . "</th>";
                            }
                            ?>
                            <th>View</th>
                            <th>Delete</th>
                            <th>Edit</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($data as $item)

                            <tr>
                                <?php
                                foreach ($data[0] as $col => $val) {
                                    echo "<td>" . $val . "</td>";
                                }
                                ?>
                                <td><a <?php
                                       $i = 1;
                                       foreach ($data[0] as $col => $val) {
                                           echo "data-data$i=$val ";
                                           $i++;
                                       }
                                       ?>
                                       type="button" class="detailClickHrAttendence btn btn-warning"
                                       style="cursor: pointer"
                                    > View</a></td>
                                <td><a href="javascript:void(0)"
                                       type="button" class="btn btn-danger" onclick="DeleteUser('','Asset')"> Delete</a>
                                </td>
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
    $(document).ready(function () {
        $("a#Management").addClass('active');
    });

</script>
</html>