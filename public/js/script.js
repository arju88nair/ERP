$(document).ready(function () {
    $('#userTable').DataTable();
    $('#example2').DataTable();





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
});


function DeleteUser(id) {

    if (confirm('Are you sure you want to delete ?')) {
        $.ajax({
            type: 'GET',
            url: '/DeleteUser?id=' + id,
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