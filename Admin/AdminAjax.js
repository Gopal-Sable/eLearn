function Admin() {
    const email = $("#Adminemail").val();
    const pass = $("#Adminpass").val();
    $.ajax({
        url: "Admin/Admin.php",
        method: "POST",
        data: {
            email: email,
            pass: pass
        },
        success: function (data) {
            if (data == 0) {
                $("#AdminStatus").html('<small class="alert alert-danger">Invalid Credentials !</small>');
            } else if (data == 1) {
                swal("Good job!", "Login Successful", "success");
                $('#AdminModal').modal('toggle');
                setTimeout(() => {
                    window.location.href = "Admin/adminDashboard.php";
                }, 1000)
            }
            else {
                $("#AdminStatus").html('<small class="alert alert-danger">Internal Server Error!</small>');
            }
        },
    })
}