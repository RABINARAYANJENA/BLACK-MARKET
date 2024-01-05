<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>blackmarket.com</title>
    <link rel="stylesheet" href="./bootstrap.min.css">
    <style>
        img{
        height: 450px;
      }
    </style>
</head>
<body style="background-color: black">
<form action="login.php" method="post">
    <div class="container px-4 mt-5 mb-5">
        <div class="row gx-5">
          <div class="col-lg-6 col-sm-12"  style="border: 1px dotted white;border-radius: 10px">
           <div class="">
           <h1 class="text-light mt-5 w-100 text-center"><i>LOG IN</i></h1>
           <div class="form-group mb-3">
                    <label for="forusername" class="form-label text-light fs-4"><i>mobile number</i></label>
                    <input type="text" class="form-control bg-dark text-light" name="mob" >
            </div>
            <div class="form-group mb-3">
                <label for="exampleInputPassword1" class="form-label text-light fs-4"><i>Password</i></label>
                <input type="password" class="form-control bg-dark text-light" id="exampleInputPassword1" name="pword" required>
            </div>
            <div class="">
                <button type="submit" class="btn btn-dark text-light w-100 fs-4 my-4" name="goin">Log In</button>
            </div>
            <div class="text-center text-light fs-4">
                <p><i>We’ve got what you’re looking for!</i></p>
            </div>
           </div>
          </div>
          <div class="col-lg-6 col-sm-12 mt-lg-5 mt-sm-0" >
          <div id="carouselExampleRide" class="carousel slide" data-bs-ride="true" id="slider">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="./IMAGE/front_image-two.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="./IMAGE/front_image-six.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="./IMAGE/front_image-7.jpg" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
        </div>
    </div>
</form>
<div class="text-center text-light mb-2">
    <h2><i>Fashion is what you buy, style is what you do with it.</i></h2>
</div>
<script src="./bootstrap.bundle.min.js"></script>
</body>
</html>

<?php
  if(isset($_POST['goin'])){
    require_once "db-connect.php";
    $mobile=$_POST['mob'];
    $password=$_POST['pword'];
    if($mobile==""){
      echo "<script>alert('please enter mobile number')</script>";
    }
    else if($password==""){
      echo "<script>alert('please enter password')</script>";
    }
    else{
      $q="SELECT mobile FROM register";
      $res=$con->query($q);
      $c=0;
      while($value=$res->fetch_assoc()){
        if($value['mobile'] == $mobile){
          $c+=1;
          $qry="SELECT password FROM register WHERE mobile=$mobile";
          $pass=$con->query($qry);
          while($pas=$pass->fetch_assoc()){
            if($pas['password'] === $password){
              header("location:home.php");
            }
            else{
              echo "<script>alert('incorrect password')</script>";
            }
            break;
          }
        }
      }
      if($c == 0){
        echo "<script>alert('account does not exist! register first')</script>";
      }
    }
  }
?>
