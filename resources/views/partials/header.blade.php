<!DOCTYPE html>
<html lang="en">
<head>
    <title>Empower Solutions</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="{!! asset('css/datatableBoot.css') !!}">
    <link rel="stylesheet" href="{!! asset('css/style.css') !!}">
    <link rel="stylesheet" href="{!! asset('css/responsive.bootstrap.min.css') !!}">
    {{--<link rel="stylesheet" href="{!! asset('css/style.css') !!}">--}}
    <link rel="stylesheet" href="{!! asset('css/AdminLTE.min.css') !!}">
    <script src="{!! asset('js/jquery.3.2.2.js') !!}"></script>
    <script src="{!! asset('js/bootstrap.js') !!}"></script>
    <script src="{!! asset('js/jquery.dataTables.min.js') !!}"></script>
    <script src="{!! asset('js/datatable.min.js') !!}"></script>
    <script src="{!! asset('js/dattable.bootstrap.js') !!}"></script>
    <script src="{!! asset('js/script.js') !!}"></script>
    <script src="{!! asset('js/dataTables.responsive.min.js') !!}"></script>
    <script src="{!! asset('js/responsive.bootstrap.min.js') !!}"></script>
    {{--<script src="{!! asset('js/dataTables.responsive.min.js')!!}}"></script>--}}
    {{--<script src="{!! asset('js/responsive.bootstrap.min.js')!!}}"></script>--}}

</head>
<body style="background-color: #ecf0f5 !important;">

{{--<nav class="navbar navbar-default">--}}
    {{--<div class="container-fluid">--}}
        {{--<div class="navbar-header">--}}
            {{--<a class="navbar-brand" href="#"></a>--}}
        {{--</div>--}}
        {{--<ul class="nav navbar-nav">--}}
            {{--<li  id="home"><a href="/">Users</a></li>--}}
            {{--<li class="dropdown" id="appConfMen">--}}
                {{--<a class="dropdown-toggle" data-toggle="dropdown" href="#" >Application configuration--}}

                    {{--<span class="caret"></span></a>--}}
                {{--<ul class="dropdown-menu">--}}
                    {{--<li><a href="/Application-Configuration">Application configuration--}}
                        {{--</a></li>--}}

                {{--</ul>--}}
            {{--</li>--}}
            {{--<li><a href="#">Page 2</a></li>--}}
            {{--<li><a href="#">Page 3</a></li>--}}
        {{--</ul>--}}
    {{--</div>--}}
{{--</nav>--}}
<nav class="navbar navbar-default navbar-fixed-top" style="margin-bottom: 0px;!important;border-radius: 0px;">
    <!--nav header Div-->
    <div class="container-fluid">
        <div class="col-sm-12"><a class="navbar-head" style="text-align:left; text-decoration:none; color:white;" href="#"><h1>Empower ERP Portal</h1></a>
        </div>
    </div>
</nav>

<nav class="navbar navbar-inverse  navbar-fixed-top" style="border-radius: 0px; top: 69px">
    <div class="container-fluid">


        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li  id="home"><a href="/">Users</a></li>
                <li class="dropdown" id="appConfMen">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" >Application configuration

                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/Application-Configuration">Application configuration
                            </a></li>

                    </ul>

                </li>


                <li class="dropdown">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle">Finance <b class="caret"></b></a>
                    <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
                        <li class="dropdown-submenu">
                            <a tabindex="-1" href="#">Bank</a>
                            <ul class="dropdown-menu">
                                <li><a href="/bankAccountMaster">Bank Account Master</a></li>
                                <li><a href="/bankAccountSignatories">
                                Bank Account Signatories</a></li>
                                <li><a href="/bankMasters">Bank Masters</a></li>
                                <li><a href="/chequeBook">Cheque Book</a></li>
                                <li><a href="/chequeLeaves">Cheque Leaves</a></li>
                                <li><a href="/creditdebit">Credit Debit</a></li>
                                <li><a href="/accountNature">Nature Of Account</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-submenu">
                            <a tabindex="-1" href="#">Finance</a>
                            <ul class="dropdown-menu">
                                {{--<li><a tabindex="-1" href="#">Second level</a></li>--}}
                                <li><a href="/Asset">Asset Name</a></li>
                                <li><a href="/Depreciation-Master">
                                Depreciation Master</a></li>
                                <li><a href="/Asset-Classification">Finance Classification</a></li>
                                <li><a href="/Financial-Year">Financial Year</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-submenu">
                            <a tabindex="-1" href="#">Ledger & Invoice</a>
                            <ul class="dropdown-menu">
                                {{--<li><a tabindex="-1" href="#">Second level</a></li>--}}
                                <li><a href="/General-ledger">General Ledger Code</a></li>
                                <li><a href="/Invoice-Prefix">Invoice Prefix</a></li>
                                <li><a href="/Invoice-Status">Invoice Status</a></li>
                                <li><a href="/Invoice-Type">Invoice Type</a></li>
                                <li><a href="/Sub-Ledger-Code">Sub Ledger Code</a></li>

                            </ul>
                        </li><li class="dropdown-submenu">
                            <a tabindex="-1" href="#">Taxes</a>
                            <ul class="dropdown-menu">
                                {{--<li><a tabindex="-1" href="#">Second level</a></li>--}}
                                <li><a href="/Commercial-Tax">Commercial Tax</a></li>
                                <li><a href="/Commodity-Taxes">Commodity Taxes</a></li>
                                <li><a href="/Commodity-Types">Commodity Type</a></li>
                                <li><a href="/Corp-Income-TaxSlab">Corp Income TaxSlab</a></li>
                                <li><a href="/Insurance-Companies">Insurance Companies</a></li>
                                <li><a href="/Taxes">Taxes</a></li>
                                <li><a href="/Voucher-Type">Voucher Type</a></li>


                            </ul>
                        </li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle">HR Management <b class="caret"></b></a>
                    <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
                        <li class="dropdown-submenu">
                        </li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle">Insurance Shoppy <b class="caret"></b></a>
                    <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
                        <li class="dropdown-submenu">
                        </li>
                    </ul>
                </li>

                <li class="dropdown">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle">User Management <b class="caret"></b></a>
                    <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
                        <li class="dropdown-submenu">
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
    </div>
</nav>
<div class="clearfix"></div>
<div class="content-wrapper" style="margin-top: 120px">