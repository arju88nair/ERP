<section class="content">
    <div id="detailsModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title" style="text-align: center">{{ $title }}</h4>
                </div>
                <div class="modal-body">
                    <table class="table table-bordered table-responsive">
                        <?php
                        $i = 1;
                            if(sizeof($data)>0){
                                foreach ($data[0] as $col => $val) {
                                    echo "<tr><th>" . str_replace('_', ' ', $col) . "</th><td id=\"dataId$i\"></tr>";
                                    $i++;
                                }
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