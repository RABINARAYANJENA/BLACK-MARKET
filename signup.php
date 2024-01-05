<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>blackmarket.com</title>
    <link rel="stylesheet" href="./bootstrap.min.css">
    <style>
        img{
        height: 450px;
      }
    </style>
  </head>
  <body style="background-color: black">
    
    <form action="signup_backend.php" method="post">
    <div class="container px-4 mt-3 mb-2">
        <div class="row gx-5">
          <div class="col-lg-6 col-sm-12"  style="border: 1px dotted white;border-radius: 10px">
           <div class="">
           <h1 class="text-light mt-3 w-100 text-center"><i>REGISTRATION</i></h1>
           <div class="form-group mb-2">
                    <label for="forname" class="form-label text-light fs-4"><i>Name</i></label>
                    <input type="text" class="form-control bg-dark text-light" name="name" required>

            </div>
           <div class="form-group mb-2">
                    <label for="forusername" class="form-label text-light fs-4"><i>mobile number</i></label>
                    <input type="text" class="form-control bg-dark text-light" name="mobile" required>
            </div>
            <div class="form-group mb-2">
                    <label for="foremail" class="form-label text-light fs-4"><i>Email</i></label>
                    <input type="email" class="form-control bg-dark text-light" aria-describedby="emailHelp" name="email" required>
                    <div id="emailHelp" class="form-text text-light">We'll never share your email with anyone else.</div>
            </div>
            <div class="form-group mb-2">
                <label for="exampleInputPassword1" class="form-label text-light fs-4"><i>Password</i></label>
                <input type="password" class="form-control bg-dark text-light" id="exampleInputPassword1" name="password" required>
            </div>
            <div class="form-group mb-2">
                <button type="submit" class="btn btn-dark text-light w-100 fs-4 mt-3" name="submit">SIGN UP</button>
            </div>
            <div class="form-group">
                <p class="text-center text-light "><u>Already have an Account?</u></p>
            </div>
            <div class="form-group text-center mb-2">
            <a class="icon-link icon-link-hover text-decoration-none" style="--bs-link-hover-color-rgb: 25, 135, 84;" href="login.php">click here</a>
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
          <h2 class="text-light text-center mt-5"><i>We interrogate things about what is the best experience for you</i></h2>
        </div>
        </div>
    </div>
</form>
<script src="./bootstrap.bundle.min.js"></script>
  </body>
</html>