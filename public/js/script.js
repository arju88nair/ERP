$(document).ready(function () {
    $('#userTable').DataTable({
        responsive: true
    });
    $('#AssetClassificationTable').DataTable();
    $('#DepreciationMasterTable').DataTable();
    $('#AssetTable').DataTable();
    $('#bankaccmast').DataTable({
        "scrollX": true
    });
    $('#FinancialYearMasterTable').DataTable({

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
        }
    });

    $('#GovtDeptMasterTable').DataTable();
    $('#MonthlyPayMasterTable').DataTable();
    $('#ItAsseseeTypeMasterTable').DataTable();
    $('#ItHraRuleMasterTable').DataTable();
    $('#ItDeductionLimitMasterTable').DataTable();
    $('#ItDeductionHeaderMasterTable').DataTable();
    $('#ItSectionHeaderCapMasterTable').DataTable();
    $('#ItTaxSlabMasterTable').DataTable();
    $('#ItSectionHeaderMasterTable').DataTable();
    $('#HrAttendenceMasterTable').DataTable();
    $('#MasterTable').DataTable();

    $('#respoTable').DataTable({
        responsive: {
            details: {
                display: $.fn.dataTable.Responsive.display.modal({
                    header: function (row) {
                        alert("D")
                        var data = row.data();
                        return 'Details for ' + data[0] + ' ' + data[1];
                    }
                }),
                renderer: $.fn.dataTable.Responsive.renderer.tableAll({
                    tableClass: 'table'
                })
            }
        }
    });


    $('table').on('click','.detailClickApp',function () {
        var path = $(this).data('path')
        var mail_send = $(this).data('mail_send')
        var sms_send = $(this).data('sms_send')
        var func_code = $(this).data('func_code')
        var uid = $(this).data('uid')
        var functionality = $(this).data('functionality')

        $("#sms_send").text("SMS Send : " + sms_send)
        $("#mail_send").text("Mail Send : " + mail_send)
        $("#path").text("Path : " + path)
        $("#functionality").text("Functionality : " + functionality)
        $("#appConf").text("App Conf ID : " + uid)

        $("#func_code").text("Functionality Code : " + func_code)
        $('#detailsApp').modal('show');


    });


    $('table').on('click','.detailClick',function () {
        var group = $(this).data('group')
        var lname = $(this).data('lname')
        var fname = $(this).data('fname')
        var uname = $(this).data('uname')
        var uid = $(this).data('uid')
        var status = $(this).data('status')
        var modified = $(this).data('modified')
        var created = $(this).data('created');
        $("#userID").text("Record : " + uid)
        $("#userName").text("User Name : " + uname)
        $("#fName").text("First Name : " + fname)
        $("#lName").text("Last Name : " + lname)
        $("#Group").text("Group : " + group)
        $("#created").text("Created at : " + created)
        $("#modified").text("Modified at : " + modified)
        $("#status").text("Status : " + status)
        $('#detailsM').modal('show');
    });

    $('table').on('click','.detailClickItSectionHeaderCap',function(){
        var id = $(this).data('uid');
        var name = $(this).data('name')
        var head = $(this).data('head')
        var type = $(this).data('type')
        var percentage = $(this).data('percentage')
        var cap = $(this).data('cap')
        $("#id").text(id)
        $("#year").text(name)
        $("#type").text(type)
        $("#head").text(head)
        $("#percentage").text(percentage)
        $("#cap").text(cap)
        $('#detailsItSectionHeaderCap').modal('show');
    });

    $('table').on('click','.detailClickItSectionHeader',function(){
        var id = $(this).data('uid');
        var name = $(this).data('name')
        $("#id").text(id)
        $("#name").text(name)
        $('#detailsItSectionHeader').modal('show');
    });

    $('table').on('click','.detailClickItTaxSlab',function(){
        var id = $(this).data('uid');
        var name = $(this).data('name')
        var from = $(this).data('from')
        var type = $(this).data('type')
        var to = $(this).data('to')
        var amount = $(this).data('amount')
        var income = $(this).data('income')
        $("#id").text(id)
        $("#year").text(name)
        $("#type").text(type)
        $("#from").text(from)
        $("#to").text(to)
        $("#amount").text(amount)
        $('#income').text(income)
        $('#detailsItTaxSlab').modal('show');
    });

    $('table').on('click','.detailClickItDeductionLimit',function () {
        var id = $(this).data('uid');
        var name = $(this).data('name')
        var year = $(this).data('year')
        var type = $(this).data('type')
        var percentage = $(this).data('percentage')
        var amount = $(this).data('amount')
        $("#id").text(id)
        $("#city").text(name)
        $("#year").text(year)
        $("#assesee").text(type)
        $("#per_allowed").text(percentage)
        $("#amnt_allowed").text(amount)
        $('#detailsItDeduction').modal('show');
    });

    $('table').on('click','.detailClickMonthlyPay',function(){
        var id = $(this).data('uid')
        var voucher = $(this).data('voucher')
        var name = $(this).data('name')
        var head = $(this).data('head')
        var amount = $(this).data('amount')
        var due = $(this).data('due')
        var narration = $(this).data('narration')
        $("#id").text(id)
        $("#voucher").text(voucher)
        $("#name").text(name)
        $("#head").text(head)
        $("#amount").text(amount)
        $("#due").text(due)
        $("#narration").text(narration)
        $('#detailsMonthlyPay').modal('show');
    });

    $('table').on('click','.detailClickGovtDept',function () {
        var id = $(this).data('uid')
        var name = $(this).data('name')
        $("#recNum").text(id)
        $("#govtdept").text(name)
        $('#detailsGovtDept').modal('show');
    });

    $('table').on('click','.detailClickItDeductionHeader',function () {
        var id = $(this).data('uid')
        var name = $(this).data('name')
        var head = $(this).data('head')
        $("#id").text(id)
        $("#name").text(name)
        $('#head').text(head)
        $('#detailsItDeductionHeader').modal('show');
    });

    $('table').on('click','.detailClickAsseseeType',function () {
        var id = $(this).data('uid')
        var name = $(this).data('voucher')
        $("#id").text(id)
        $("#voucher").text(name)
        $('#detailsAsseseeType').modal('show');
    });

    $('table').on('click','.detailClickHraRule',function () {
        var id = $(this).data('uid');
        var name = $(this).data('name');
        var limit = $(this).data('limit');
        $("#id").text(id);
        $("#city").text(name);
        $("#lim_percentage").text(limit);
        $('#detailsHraRule').modal('show');
    });


    $('table').on('click','.detailsAppbm',function () {
        var bank_code = $(this).data('bank_code')
        var bank_account_no = $(this).data('bank_account_no')
        var bank_name = $(this).data('bank_name')
        var bank_id = $(this).data('uid')
        $("#bank_id").text("Bank Id : " + bank_id)
        $("#bank_name").text("Bank Name : " + bank_name)
        $("#bank_account_no").text("Bank account number : " + bank_account_no)
        $("#bank_code").text("Bank code : " + bank_code)
        $('#detailsAppbm').modal('show');
    });


    $('table').on('click','.detailsAppcb',function () {
        var chequebook_no = $(this).data('chequebook_no')
        var bank_account_no = $(this).data('bank_account_no')
        var cheque_leaf_from = $(this).data('cheque_leaf_from')
        var cheque_leaf_to = $(this).data('cheque_leaf_to')
        var cheque_book_id = $(this).data('uid')
        $("#cheque_book_id").text("Cheque book Id : " + cheque_book_id)
        $("#bank_account_no").text("Bank account number : " + bank_account_no)
        $("#chequebook_no").text("Cheque book number : " + chequebook_no)
        $("#cheque_leaf_from").text("Cheque leaf from : " + cheque_leaf_from)
        $("#cheque_leaf_to").text("Cheque leaf from : " + cheque_leaf_to)
        $('#detailsAppcb').modal('show');
    });


    $('table').on('click','.detailsAppcl',function () {
        var chequebook_id = $(this).data('chequebook_id')
        var leafno = $(this).data('leafno')
        var status = $(this).data('status')
        var cheque_leaf_id = $(this).data('uid')
        $("#cheque_leaf_id").text("Cheque leaf Id : " + cheque_leaf_id)
        $("#chequebook_id").text("Cheque book id : " + chequebook_id)
        $("#leafno").text("Leaf number : " + leafno)
        $("#status").text("Status : " + status)
        $('#detailsAppcl').modal('show');
    });


    $('table').on('click','.detailsAppcdeb',function () {
        var credit_debit_id = $(this).data('uid')
        var description = $(this).data('description')
        var code = $(this).data('code')
        $("#credit_debit_id").text("Record Number : " + credit_debit_id)
        $("#description").text("Description : " + description)
        $("#code").text("Code : " + code)
        $('#detailsAppcdeb').modal('show');
    });


    $('table').on('click','.detailsAppnatac',function () {
        var nature_of_account = $(this).data('nature_of_account')
        var nature_of_account_id = $(this).data('nature_of_account_id')
        $("#nature_of_account_id").text("Nature of account ID: " + nature_of_account_id)
        $("#nature_of_account").text("Nature of account : " + nature_of_account)

        $('#detailsAppnatac').modal('show');
    });


    $('table').on('click','.detailAssetClass',function () {
        var id = $(this).data('uid');
        var name = $(this).data('uname');
        $('#recordNum').html('<b>Record Num : </b>' + id);
        $('#AssetClassification').html('<b>Asset Classification : </b>' + name);
        $('#detailAssetClass').modal('show');
    });

    $('table').on('click','.detailClickDepreciation',function () {
        var recNum = $(this).data('uid');
        var assetName = $(this).data('classification');
        var govtDept = $(this).data('govt_dept');
        var percentage = $(this).data('percentage');

        $('#recNum').html("<b>Record Number : </b>" + recNum);
        $('#classification').html("<b>Asset Clasification : </b>" + assetName);
        $('#govtdept').html("<b>Govt Dept Name : </b>" + govtDept);
        $('#percentage').html("<b>Percentage : </b>" + percentage);

        $('#detailsDepreciation').modal('show');
    });

    $('table').on('click','.detailClickAsset',function () {
        var func_code = $(this).data('func_code')
        var uid = $(this).data('uid')
        var functionality = $(this).data('functionality')

        $("#recNum").html("<b>Record Number</b> : " + uid)
        $("#classification").html("<b>Classification : </b>" + functionality)
        $("#assetname").html("<b>Asset Name : </b>" + func_code)
        $('#detailsAsset').modal('show');

    });

    $('table').on('click','.GeneralLedger',function () {
        var gl_code = $(this).data('gl_code')
        var uid = $(this).data('uid')
        var gl_name = $(this).data('gl_name')

        $("#recNum").html("<b>Record Number</b> : " + uid)
        $("#gl_name").html("<b>Name : </b>" + gl_name)
        $("#gl_code").html("<b>Ledger Code : </b>" + gl_code)
        $('#detailsGenled').modal('show');

    });

    $('table').on('click','.invoicePref',function () {
        var invoice_type = $(this).data('invoice_type')
        var uid = $(this).data('uid')
        var invoice_prefix = $(this).data('invoice_prefix')

        $("#recNum").html("<b>Record Number</b> : " + uid)
        $("#invoice_type").html("<b>Type : </b>" + invoice_type)
        $("#invoice_prefix").html("<b>Invoice Prefix : </b>" + invoice_prefix)
        $('#detailsinvPre').modal('show');

    });

    $('table').on('click','.invoiceStatus',function () {
        var uid = $(this).data('uid')
        var invoice_status = $(this).data('invoice_status')
        $("#recNum").html("<b>Record Number</b> : " + uid)
        $("#invoice_status").html("<b>Status : </b>" + invoice_status)
        $('#invoiceStatus').modal('show');

    });


    $('table').on('click','.invoiceType',function () {
        var uid = $(this).data('uid')
        var invoice_type = $(this).data('invoice_type')
        $("#recNum").html("<b>Record Number</b> : " + uid)
        $("#invoice_type").html("<b>Invoice Type : </b>" + invoice_type)
        $('#invoiceType').modal('show');

    });



    $('table').on('click','.subLedger',function () {
        var uid = $(this).data('uid')
        var gl_name = $(this).data('gl_name')
        var account_no = $(this).data('account_no')
        var account_head = $(this).data('account_head')
        var nature_of_account = $(this).data('nature_of_account')
        $("#recNum").html("<b>Record Number</b> : " + uid)
        $("#gl_name").html("<b>General Ledger : </b>" + gl_name)
        $("#account_head").html("<b>Account Head : </b>" + account_head)
        $("#account_no").html("<b>Account No : </b>" + account_no)
        $("#nature_of_account").html("<b>Invoice Type : </b>" + nature_of_account)
        $('#subLedger').modal('show');

    });


    $('table').on('click','.commTax',function () {
        var uid = $(this).data('uid')
        var tax_name = $(this).data('tax_name')
        var state_id = $(this).data('state_id')
        var user_financial_year = $(this).data('user_financial_year')
        var tax_rate = $(this).data('tax_rate')
        var draw_back_available = $(this).data('draw_back_available')
        $("#recNum").html("<b>Record Number</b> : " + uid)
        $("#tax_name").html("<b>Tax Name : </b>" + tax_name)
        $("#state_id").html("<b>State ID : </b>" + state_id)
        $("#user_financial_year").html("<b>User Financial year : </b>" + user_financial_year)
        $("#tax_rate").html("<b>Tax Rate : </b>" + tax_rate)
        $("#draw_back_available").html("<b>Draw Back Available : </b>" + draw_back_available)
        $('#commTax').modal('show');

    });



    $('table').on('click','.commodTax',function () {
        var uid = $(this).data('uid')
        var commodity_name = $(this).data('commodity_name')
        var state_id = $(this).data('state_id')
        var state_tax_rate = $(this).data('state_tax_rate')
        var centre_tax_rate = $(this).data('centre_tax_rate')
        var service_tax_rate = $(this).data('service_tax_rate')
        $("#recNum").html("<b>Record Number</b> : " + uid)
        $("#commodity_name").html("<b>Commodity Name : </b>" + commodity_name)
        $("#state_id").html("<b>State Name : </b>" + state_id)
        $("#state_tax_rate").html("<b>State Tax Rate : </b>" + state_tax_rate)
        $("#centre_tax_rate").html("<b>Centre Tax Rate : </b>" + centre_tax_rate)
        $("#service_tax_rate").html("<b>Service Tax Rate: </b>" + service_tax_rate)
        $('#commodTax').modal('show');

    });



    $('table').on('click','.commodType',function () {
        var uid = $(this).data('uid')
        var commodity_name = $(this).data('commodity_name')

        $("#recNum").html("<b>Record Number</b> : " + uid)
        $("#commodity_name").html("<b>Commodity Name : </b>" + commodity_name)

        $('#commodType').modal('show');

    });



    $('table').on('click','.corpIncTaxSlab',function () {
        var uid = $(this).data('uid')
        var tax_rate_percent = $(this).data('tax_rate_percent')
        var description = $(this).data('description')
        var finyear = $(this).data('finyear')
        var income_from = $(this).data('income_from')
        var income_to = $(this).data('income_to')

        $("#recNum").html("<b>Record Number</b> : " + uid)
        $("#tax_rate_percent").html("<b>Tax Rate Percent: </b>" + tax_rate_percent)
        $("#income_to").html("<b>Income To: </b>" + income_to)
        $("#income_from").html("<b>Income From: </b>" + income_from)
        $("#finyear").html("<b>Financial Year: </b>" + finyear)
        $("#description").html("<b>Description: </b>" + description)

        $('#corpIncTaxSlab').modal('show');

    });



    $('table').on('click','.insuranceCompanies',function () {
        var uid = $(this).data('uid')
        var insurance_companies_name = $(this).data('insurance_companies_name')


        $("#recNum").html("<b>Record Number</b> : " + uid)
        $("#insurance_companies_name").html("<b>Insurance Company Name </b>" + insurance_companies_name)


        $('#insuranceCompanies').modal('show');

    });



    $('table').on('click','.taxes',function () {
        var uid = $(this).data('uid')
        var tax_name = $(this).data('tax_name')


        $("#recNum").html("<b>Record Number</b> : " + uid)
        $("#tax_name").html("<b>Tax Name </b>" + tax_name)


        $('#taxes').modal('show');

    });



    $('table').on('click','.voucherType',function () {
        var uid = $(this).data('uid')
        var voucher_type = $(this).data('voucher_type')
        var vr_prefix = $(this).data('vr_prefix')
        var finyear = $(this).data('finyear')


        $("#recNum").html("<b>Record Number</b> : " + uid)
        $("#voucher_type").html("<b>Voucher Type : </b>" + voucher_type)
        $("#vr_prefix").html("<b>Voucher Prefix : </b>" + vr_prefix)
        $("#finyear").html("<b>Financial Year : </b>" + finyear)


        $('#voucherType').modal('show');

    });

    $('table').on('click','.DocRec',function () {
        var uid = $(this).data('uid')
        var user_name = $(this).data('user_name')
        var document_name = $(this).data('document_name')
        var amount_paid = $(this).data('amount_paid')
        var submitted_on_date = $(this).data('submitted_on_date')


        $("#recNum").text(uid)
        $("#user_name").text(user_name)
        $("#document_name").text(document_name)
        $("#submitted_on_date").text(submitted_on_date)
        $("#amount_paid").text(amount_paid)


        $('#DocRec').modal('show');

    });

    $('table').on('click','.MyItDeclaration',function () {
        var uid = $(this).data('uid')
        var it_deduction_header_name = $(this).data('it_deduction_header_name')
        var amount_declared = $(this).data('amount_declared')
        var date_declared = $(this).data('date_declared')


        $("#recNum").text(uid)
        $("#it_deduction_header_name").text(it_deduction_header_name)
        $("#amount_declared").text(amount_declared)
        $("#date_declared").text(date_declared)


        $('#MyItDeclaration').modal('show');

    });


    $('table').on('click','.BranchTypeMaster',function () {
        var uid = $(this).data('uid')
        var STATUS = $(this).data('STATUS')
        var branch_type = $(this).data('branch_type')


        $("#recNum").text(uid)
        $("#STATUS").text(STATUS)
        $("#branch_type").text(branch_type)


        $('#BranchTypeMaster').modal('show');

    });



    $('table').on('click','.Designation',function () {
        var uid = $(this).data('uid')
        var designation = $(this).data('designation')


        $("#recNum").text(uid)
        $("#designation").text(designation)


        $('#Designation').modal('show');

    });


    $('table').on('click','.UsersDisabledDependents',function () {
        var uid = $(this).data('uid')
        var disablity_percentage = $(this).data('disablity_percentage')


        $("#recNum").text(uid)
        $("#disablity_percentage").text(disablity_percentage)


        $('#UsersDisabledDependents').modal('show');

    });

    $('table').on('click','.detailClickHrAttendence',function () {
        $("#dataId1").text($(this).data('data1'));
        $("#dataId2").text($(this).data('data2'));
        $("#dataId3").text($(this).data('data3'));

        $('#detailsHrAttendence').modal('show');
    });

    $('table').on('click','.detailClickServiceCategory',function () {
        $("#dataId1").text($(this).data('data1'));
        $("#dataId2").text($(this).data('data2'));

        $('#detailsModal').modal('show');
    });

    $('table').on('click','.detailClickServiceCenter',function () {
        $("#dataId1").text($(this).data('data1'));
        $("#dataId2").text($(this).data('data2'));
        $("#dataId3").text($(this).data('data3'));

        $('#detailsModal').modal('show');
    });

    $('table').on('click','.detailClickDelImt',function () {
        $("#dataId1").text($(this).data('data1'));
        $("#dataId2").text($(this).data('data2'));
        $("#dataId3").text($(this).data('data3'));

        $('#detailsModal').modal('show');
    });

    $('table').on('click','.detailClickPaymentStatus',function () {
        $("#dataId1").text($(this).data('data1'));
        $("#dataId2").text($(this).data('data2'));

        $('#detailsModal').modal('show');
    });
    $('table').on('click','.detailClickServiceCharge',function () {
        $("#dataId1").text($(this).data('data1'));
        $("#dataId2").text($(this).data('data2'));
        $("#dataId3").text($(this).data('data3'));
        $("#dataId4").text($(this).data('data4'));
        $("#dataId5").text($(this).data('data5'));

        $('#detailsModal').modal('show');
    });

    $('table').on('click','.detailClickServiceGroup',function () {
        $("#dataId1").text($(this).data('data1'));
        $("#dataId2").text($(this).data('data2'));
        $("#dataId3").text($(this).data('data3'));
        $("#dataId4").text($(this).data('data4'));
        $("#dataId5").text($(this).data('data5'));
        $("#dataId6").text($(this).data('data6'));

        $('#detailsModal').modal('show');
    });

    $('table').on('click','.detailClickServiceDeliverable',function () {
        $("#dataId1").text($(this).data('data1'));
        $("#dataId2").text($(this).data('data2'));
        $("#dataId3").text($(this).data('data3'));
        $("#dataId4").text($(this).data('data4'));
        $("#dataId5").text($(this).data('data5'));

        $('#detailsModal').modal('show');
    });


    $('table').on('click','.Earning',function () {
        var uid = $(this).data('uid')
        var user_name = $(this).data('user_name')
        var sh_salary_head_id = $(this).data('sh_salary_head_id')
        var amount_earned = $(this).data('amount_earned')


        $("#recNum").text(uid)
        $("#user_name").text(user_name)
        $("#sh_salary_head_id").text(sh_salary_head_id)
        $("#amount_earned").text(amount_earned)


        $('#Earning').modal('show');

    });

    $('table').on('click','.EmploymentType',function () {
        var uid = $(this).data('uid')
        var employment_type = $(this).data('employment_type')
        var STATUS = $(this).data('status')

        $("#recNum").text(uid)
        $("#STATUS").text(STATUS)
        $("#employment_type").text(employment_type)


        $('#EmploymentType').modal('show');

    });


    $('table').on('click','.Family',function () {
        var uid = $(this).data('uid')
        var Description = $(this).data('Description')

        $("#recNum").text(uid)
        $("#Description").text(Description)


        $('#Family').modal('show');

    });


});


function DeleteUser(id, action) {

    if (confirm('Are you sure you want to delete ?')) {
        $.ajax({
            type: 'GET',
            url: '/DeleteUser?id=' + id + "&action=" + action,
            success: function (data) {
                $(".spinner").hide();
                console.log(data)
                if (data === 0 || data === "0") {
                    alert("Something went wrong! Please try again.")
                }
                else {
                    alert("Successfully updated!")

                    $("#" + id + "_status").text("Inactive")

                }


            },
            error: function (err) {
                console.log(err.responseText);
            }
        });
    }
}