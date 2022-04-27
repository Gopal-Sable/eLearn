<form action="" method="post">
    <script src="https://checkout.razorpay.com/v1/checkout.js" data-key="rzp_test_34Hs8ID1w6YJpH" data-amount="<?php echo $_POST['amount'] * 100; ?>" data-currency="INR" data-id="<?php echo uniqid() ?>" data-buttontext="Pay Now" data-name="Acme Corp" data-description="A Wild Chase is the third novel by Japanese author Haruki Murakami" data-image="https://lh3.googleusercontent.com/ogw/ADea4I7Ipy2X7TcqYdUzt28Xf-G0usEccvuBI5J3_NcO=s32-c-mo" data-prefill.name="<?php echo $_POST['name'] ?>" data-prefill.email="<?php echo $_POST['email'] ?>" data-theme.color="#F37254">
    </script>
    <input type="hidden">
</form>