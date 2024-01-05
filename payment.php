<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>blackmarket.com</title>
    <link rel="stylesheet" href="./bootstrap.min.css">
</head>
<body class="bg-black">
    <?php
      $price=$_COOKIE['price'];
    ?>
    <div class="row mt-4 mt-sm-5 mb-3">
        <div class="col-lg-6 col-md-12 mx-auto text-center  text-light border border-light rounded border-opacity-50 ">
            <form class="mt-2 w-75 w-lg-50  mx-auto" action="payment.php" method="post">
                <h3 class="mb-3">Enter Details</h3>
                <div class="mb-3">
                    <label for="cardNumber" class="mb-2">Card Number</label>
                    <input type="text" class="form-control" id="cardNumber" placeholder="Enter card number" required>
                </div>
                <div class="mb-3">
                    <label for="expiryDate" class="mb-2">Expiry Date</label>
                    <input type="text" class="form-control" id="expiryDate" placeholder="MM/YY" required>
                </div>
                <div class="mb-3">
                    <label for="cvv" class="mb-2">CVV</label>
                    <input type="text" class="form-control" id="cvv" placeholder="CVV" required>
                </div>
                <div class="mb-3">
                    <label for="cardHolderName" class="mb-2">Cardholder Name</label>
                    <input type="text" class="form-control" id="cardHolderName" placeholder="Enter cardholder name" required>
                </div>
                <button type="submit" class="btn btn-success w-50 mb-3" name="pay">Pay &#8377;<?php echo $price; ?></button>
              </form>
              <div class="mt-4 d-flex">
                <img src="./IMAGE/mastercard.jpeg" class="w-25 mx-auto">
                <img src="./IMAGE/visa2.jpeg" class="w-25 mx-auto">
                <img src="./IMAGE/rupay.jpeg" class="w-25 mx-auto">
                <img src="./IMAGE/paypal.png" class="w-25 mx-auto">
              </div>
        </div>
    </div>
    <?php
      if(isset($_POST['pay'])){
        header("location:congo.php");
       
      }
    ?>
      <script src="./bootstrap.bundle.min.js"></script>
</body>
</html>