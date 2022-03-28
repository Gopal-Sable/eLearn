$(document).ready(function () {
    $("#studemail").on("keypress blur", function () {
        let studemail = $("#studemail").val();
        let reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
        $.ajax({
            url: 'Modal/backend.php',
            method: "POST",
            data: {
                checkemail: "checkmail",
                studemail: studemail
            },
            success: function (data) {
                if (data == 0 && reg.test(studemail)) {
                    $("#Msg2").html('<small style="color:green;"> There You Go!</small>');
                    $("#signupBtn").attr("disabled", false);
                } else if (!reg.test(studemail)) {
                    $("#Msg2").html('<small style="color:red;"> Please Enter Valid Email </small>');
                    $("#signupBtn").attr("disabled", true);
                } else if (data != 0) {
                    $("#Msg2").html('<small style="color:red;"> Email Already Exist!</small>');
                    $("#signupBtn").attr("disabled", true);
                }
            }
        })
    })
})

function addUser() {
    let studname = $("#studname").val();
    let studemail = $("#studemail").val();
    let pass = $("#pass").val();
    let regx = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
    //validation
    if (studname.trim() == "") {
        $("#Msg1").html('<small style="color:red;">  Please Enter Name</small>');
        $("#studname").focus();
        return false;
    } else if (studemail.trim() == "") {
        $("#Msg2").html('<small style="color:red;"> Please Enter Email</small>');
        $("#studemail").focus();
        return false;
    } else if (studemail.trim() != "" && !regx.test(studemail)) {
        $("#Msg2").html('<small style="color:red;"> Please Enter Valid Email</small>');
        $("#studemail").focus();
        return false;
    } else if (pass.trim() == "" && pass.length < 6) {
        $("#Msg3").html('<small style="color:red;">Password must have atleast 6 characters. </small>');
        $("#pass").focus();
        return false;
    } else {
        $.ajax({
            url: 'Modal/backend.php',
            method: 'POST',
            dataType: "json",
            data: {
                signup: "signup",
                studname: studname,
                studemail: studemail,
                pass: pass
            },
            success: function (data) {
                console.log(data)
                if (data == "ok") {

                    swal("Good job!", "Registration Successful", "success");
                    clearField();
                }
                else if (data == "failed") {

                    $('#successMsg').html('<span class="alert alert-danger">Somthing went wrong! Please try again</span>')
                }
            }

        })
    }
}
//empty form
function clearField() {
    $("#registration").trigger("reset");
    $("#Msg1").html(" ");
    $("#Msg2").html(" ");
    $("#Msg3").html(" ");
    $('#exampleModal').modal('toggle');
}

// student LOGIN
function Login() {
    const email = $("#email").val();
    const pass = $("#lpass").val();
    $.ajax({
        url: "Modal/backend.php",
        method: "POST",
        data: {
            email: email,
            pass: pass
        },
        success: function (data) {
            if (data == 0) {
                $("#logStatus").html('<small class="alert alert-danger">Invalid Credentials !</small>');
            } else if (data == 1) {
                swal("Good job!", "Login Successful", "success");
                $('#LoginModal').modal('toggle');
                setTimeout(() => {
                    window.location.href = "index.php";
                }, 1000)
            } 
            else {
                $("#logStatus").html('<small class="alert alert-danger">Internal Server Error!</small>');
            }
        },
    })
}