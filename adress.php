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
    include_once "nav.php";
  ?>
    <?php
      $price=0;
      if(isset($_GET['price']))
      {
        $price=$_GET['price'];
        setcookie("price", "$price", time()+86400);
      }
      if(isset($_GET['id']))
      {
        $id=$_GET['id'];
        setcookie("id", "$id", time()+86400);
      }
    ?>
    <div class="row mt-4">
        <div class="col-lg-6 col-md-12 mx-auto text-center  text-light border border-light rounded border-opacity-50 ">
            <form class="mt-2 w-75 w-lg-50  mx-auto" action="adress.php" method="post">
                <h3 class="mb-4">Enter Address</h3>
                <div class="mb-4">
                    <input type="text" class="form-control text-center" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Full Name (Required)*" required>
                </div>
                <div class="mb-4">
                  <input type="text" class="form-control text-center" id="exampleInputPassword1" placeholder="Phone Number (Required)*"required>
                </div>
                <div class="mb-4">
                    <input type="text" class="form-control text-center d-start" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Pincode (Required)*" required>
                </div>
                <div class="mb-4">
                  <input type="text" class="form-control text-center" id="exampleInputPassword1" placeholder="State (Required)*"required>
                </div>
                <div class="mb-4">
                    <input type="text" class="form-control text-center d-start" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="House No.,Building Name (Required)*" required>
                </div>
                <div class="mb-4">
                  <input type="text" class="form-control text-center" id="exampleInputPassword1" placeholder="Road Name,Area,Colony (Required)*"required>
                </div>
                <button type="submit" class="btn btn-success w-50 mb-3" name="add_adress">Add Address</button>
              </form>
        </div>
    </div>
    <?php
      if(isset($_POST['add_adress']))
      {
        header("location:payment.php");
      }
    ?>
      <script src="./bootstrap.bundle.min.js"></script>
</body>
</html>
