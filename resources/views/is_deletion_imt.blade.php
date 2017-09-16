@include('partials/header')
@include('partials/modal_detail')
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">{{ $title }}</h3>
            </div>
            <div class="box-body">
                <table id="MasterTable" class="table table-bordered table-hover" cellspacing="0"
                       width="100%">
                    <thead>
                    <tr>
                        <?php
                        if(sizeof($data)>0){
                            foreach ($data[0] as $col => $val) {
                                echo "<th>" . str_replace('_', ' ', $col) . "</th>";
                            }
                        }
                        ?>
                        <th>View</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $j = 0; ?>
                    @foreach($data as $item)

                        <tr>
                            <?php
                            //                                    echo json_encode($data[0]);die;
                            foreach ($data[$j] as $val) {
                                echo "<td>" . $val . "</td>";
                            }

                            ?>
                            <td><a <?php
                                   $i = 1;
                                   foreach ($data[$j] as $col => $val) {
                                       echo "data-data$i='$val' ";
                                       $i++;
                                   }
                                   $j++;
                                   ?>
                                   type="button" class="detailClickDelImt btn btn-warning"
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
        </div>
    </div>
</div>
</section>
</div>
</body>
<script>
    $(document).ready(function () {
        $("a#Management").addClass('active');
    });

</script>
</html>