<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>blackmarket.com</title>
    <link rel="stylesheet" href="./bootstrap.min.css" />
    <style>
      img{
        height: 450px;
      }
      form{
        padding: 20px 0px;
        margin-top: 50px;
        border: 1px solid gray;
        border-radius: 10px;
      }
      button{
    padding: 10px;
    text-decoration: none;
    border: 1px solid white;
    border-radius: 10px;
    display: block;
    width: 420px;
    height: 70px;
    font-size: large;
   margin: 30px;
   margin-left: 0px;
}
    #slider{
        margin-top: 100px;
    }
  </style>
</head>
  <body style="background-color: black">
    <div class="container px-4 text-center">
      <div class="row">
        <div class="col-lg-6 col-sm-12 mt-5">
          <h1 class="text-light mt-lg-5 mt-sm-0 w-100"><i>Welcome to Black Market.. </i></h1>
           <form action="index.php" method="post">
            <button type="submit" name="signup" class="btn btn-outline-secondary w-50 "><h2>New here</h2></button>
            <button type="submit" name="login" class="btn btn-outline-secondary w-50 "><h2 class="pb-1">Existing Customer</h2></button>
           </form>
        </div>
        <div class="col-lg-6 col-sm-12 mt-5" >
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
    <?php
        if(isset($_POST['login'])){
          header("location:login.php");
        }
        if(isset($_POST['signup'])){
          header("location:signup.php");
        }
      ?>
      
      <script src="./bootstrap.bundle.min.js"></script>
</body>
</html>