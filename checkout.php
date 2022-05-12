<?php
session_start();
$OderID = uniqid();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/admin.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"> </script>
    <script src="https://kit.fontawesome.com/467cb691e7.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="row" style="padding:100px 300px">
        <div class="col-50">
            <div class="container">
                <form action="" style="padding:25px" method="post">
                    <div class="row">
                        <div class="col-25">
                            <h3 style="text-align:center; margin:20px 10px;">Checkout</h3>

                            <div class="mb-3">
                                <label class="form-label"><i class="fa fa-user"></i>Name </label>
                                <input type="text" name="name" id="name" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label"><i class="fa fa-envelope"></i> Email</label>
                                <input type="email" name="email" id="email" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label"><i class="fa fa-mobile"> </i> Mobile</label>
                                <input type="number" name="mobile" id="mobile" class="form-control">
                            </div>
                            <div class="d-grid">

                                <button type="submit" id="rzp-button1" class="btn  btn-primary" value=" <?php echo $_POST['checkout'] ?>" name="amount">Pay Now : <?php echo $_POST['checkout'] ?></button>
                            </div>



                            <!-- <input type="hidden" value="" name="oderId">
                            <input type="hidden" value="" name="" readonly> -->

                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
    <script>
        let name = jQuery('#name').val();

        let mail = jQuery('#email').val();
        let mobile = jQuery('#mobile').val();
        let amt = " <?php echo $_POST['checkout'] ?>";
        let stud_id = "<?php echo $_SESSION['email'] ?>";
        let course_id = "<?php echo $_SESSION['productId'] ?>";
        console.log(name + mail + mobile + amt + stud_id + course_id);
        let options = {
            "key": "rzp_test_34Hs8ID1w6YJpH", // Enter the Key ID generated from the Dashboard
            "amount": "<?php echo $_POST['checkout'] * 100; ?>", // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
            "currency": "INR",
            "name": "eLearn",
            "description": "Test Transaction",
            "image": "https://example.com/your_logo",
            "handler": function(response) {


                jQuery.ajax({
                    method: 'POST',
                    url: 'payscript.php',
                    data: {
                        payment_id: response.razorpay_payment_id,
                        amt: amt,
                        name: name,
                        stud: stud_id,
                        course: course_id
                    },
                    success: function(result) {
                        window.location.href = "payscript.php"
                    }
                })
            },
            "prefill": {
                "name": jQuery('#name').val(),
                "email": jQuery('#mobile').val(),
                "contact": jQuery('#mobile').val()
            },
            "notes": {
                "address": "Razorpay Corporate Office"
            },
            "theme": {
                "color": "#3399cc"
            }
        };
        var rzp1 = new Razorpay(options);
        rzp1.on('payment.failed', function(response) {
            alert(response.error.code);
            alert(response.error.description);
            alert(response.error.source);
            alert(response.error.step);
            alert(response.error.reason);
            alert(response.error.metadata.order_id);
            alert(response.error.metadata.payment_id);
        });
        document.getElementById('rzp-button1').onclick = function(e) {
            rzp1.open();
            e.preventDefault();
        }
    </script>