<?php
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
                <form action="payscript.php" style="padding:25px" method="post">
                    <div class="row">
                        <div class="col-25">
                            <h3 style="text-align:center; margin:20px 10px;">Checkout</h3>

                            <div class="mb-3">
                                <label class="form-label"><i class="fa fa-user"></i>Name </label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label"><i class="fa fa-envelope"></i> address</label>
                                <input type="email" name="email" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label"><i class="fa fa-mobile"> </i> mobile</label>
                                <input type="number" name="mobile" class="form-control">
                            </div>
                            <div class="d-grid">

                                <button type="submit" class="btn  btn-primary" value=" <?php echo $_POST['checkout']; ?>" name="amount">Pay Now : <?php echo $_POST['checkout']; ?></button>
                            </div>



                            <!-- <input type="hidden" value="" name="oderId">
                            <input type="hidden" value="" name="" readonly> -->

                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>