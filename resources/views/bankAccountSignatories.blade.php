@include('partials/header')
<!-- Content Header (Page header) -->
{{--<section class="content-header">--}}
{{--<h1>--}}
{{--Data Tables--}}
{{--<small>advanced tables</small>--}}
{{--</h1>--}}
{{--<ol class="breadcrumb">--}}
{{--<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>--}}
{{--<li><a href="#">Tables</a></li>--}}
{{--<li class="active">Data tables</li>--}}
{{--</ol>--}}
{{--</section>--}}

<!-- Main content -->
<section class="content">

    {{--<div id="detailsApp" class="modal fade" role="dialog">--}}
    {{--<div class="modal-dialog">--}}

    {{--<!-- Modal content-->--}}
    {{--<div class="modal-content">--}}
    {{--<div class="modal-header">--}}
    {{--<button type="button" class="close" data-dismiss="modal">&times;</button>--}}
    {{--<h4 class="modal-title" style="text-align: center">Application  Configuration Details</h4>--}}
    {{--</div>--}}
    {{--<div class="modal-body">--}}
    {{--<p id="appConf"></p>--}}
    {{--<hr>--}}
    {{--<p id="functionality"></p>--}}
    {{--<hr>--}}
    {{--<p id="path"></p>--}}
    {{--<hr>--}}
    {{--<p id="mail_send"></p>--}}
    {{--<hr>--}}
    {{--<p id="sms_send"></p>--}}
    {{--<hr>--}}
    {{--<p id="func_code"></p>--}}




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
                    <h3 class="box-title">Users Data Table</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="bankaccmast" class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>Account ID</th>
                            <th>fb_bank_id</th>
                            <th>bank_address1</th>
                            <th>bank_address2</th>
                            <th>u_city_id</th>
                            <th>bank_contact_person1</th>
                            <th>bank_contact_person2</th>
                            <th>contact_person_phone_no1</th>
                            <th>contact_person_phone_no2</th>
                            <th>account_no</th>
                            <th>signetaries1</th>
                            <th>signetaries2</th>
                            <th>signetaries3</th>
                            <th>signetaries4</th>

                        </tr>
                        </thead>

                        <tbody>
                        @foreach($data as $item)

                            <tr>
                                <th scope="row">{{ $item->bank_account_id }}</th>
                                <td>{{ $item->fb_bank_id }}</td>
                                <td>{{ $item->bank_address1 }}</td>
                                <td>{{ $item->bank_address2 }}</td>
                                <td>{{ $item->u_city_id }}</td>
                                <td>{{ $item->bank_contact_person1 }}</td>
                                <td>{{ $item->bank_contact_person2 }}</td>
                                <td>{{ $item->contact_person_phone_no1 }}</td>
                                <td>{{ $item->contact_person_phone_no2 }}</td>
                                <td>{{ $item->account_no }}</td>
                                <td>{{ $item->signetaries1 }}</td>
                                <td>{{ $item->signetaries2 }}</td>
                                <td>{{ $item->signetaries3 }}</td>
                                <td>{{ $item->signetaries4 }}</td>



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
        $("li#appConfMen").addClass('active');
    });

</script>

</html>
