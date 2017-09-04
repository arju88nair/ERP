$(document).ready(function () {
    $('#userTable').DataTable();
    $('#bankaccmast').DataTable({
        "scrollX": true
    });





    $(".detailClickApp").click(function () {
        var path = $(this).data('path')
        var mail_send = $(this).data('mail_send')
        var sms_send = $(this).data('sms_send')
        var func_code = $(this).data('func_code')
        var uid = $(this).data('uid')
        var functionality = $(this).data('functionality')

        $("#sms_send").text("SMS Send : "+ sms_send)
        $("#mail_send").text("Mail Send : "+ mail_send)
        $("#path").text("Path : "+ path)
        $("#functionality").text("Functionality : "+ functionality)
        $("#appConf").text("App Conf ID : "+ uid)

        $("#func_code").text("Functionality Code : "+ func_code)
        $('#detailsApp').modal('show');




    });


    $(".detailClick").click(function () {
        var group = $(this).data('group')
        var lname = $(this).data('lname')
        var fname = $(this).data('fname')
        var uname = $(this).data('uname')
        var uid = $(this).data('uid')
        var status = $(this).data('status')
        var modified = $(this).data('modified')
        var created = $(this).data('created');
        $("#userID").text("Record : "+ uid)
        $("#userName").text("User Name : "+ uname)
        $("#fName").text("First Name : "+ fname)
        $("#lName").text("Last Name : "+ lname)
        $("#Group").text("Group : "+ group)
        $("#created").text("Created at : "+ created)
        $("#modified").text("Modified at : "+ modified)
        $("#status").text("Status : "+ status)
        $('#detailsM').modal('show');




    });



    $(".detailsAppbm").click(function () {
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



    $(".detailsAppcb").click(function () {
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


    $(".detailsAppcl").click(function () {
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



    $(".detailsAppcdeb").click(function () {
        var credit_debit_id = $(this).data('uid')
        var description = $(this).data('description')
        var code = $(this).data('code')
        $("#credit_debit_id").text("Record Number : " + credit_debit_id)
        $("#description").text("Description : " + description)
        $("#code").text("Code : " + code)
        $('#detailsAppcdeb').modal('show');
    });



    $(".detailsAppnatac").click(function () {
        var nature_of_account = $(this).data('nature_of_account')
        var nature_of_account_id = $(this).data('nature_of_account_id')
        $("#nature_of_account_id").text("Nature of account ID: " + nature_of_account_id)
        $("#nature_of_account").text("Nature of account : " + nature_of_account)

        $('#detailsAppnatac').modal('show');
    });






});


function DeleteUser(id,action) {

    if (confirm('Are you sure you want to delete ?')) {
        $.ajax({
            type: 'GET',
            url: '/DeleteUser?id=' + id+"&action="+action,
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