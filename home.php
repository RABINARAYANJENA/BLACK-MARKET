<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>blackmarket.com</title>
    <link rel="stylesheet" href="./bootstrap.min.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <style>
      .checked {
        color: green;
      }
      img {
        height: 220px;
      }
    </style>
  </head>
  <?php
    include_once "nav.php";
  ?>
  <body style="background-color: black">
    <div class="container mx-auto text-light text-center">
      <div class="row">
        <div class="col">
          <div class="card mt-5 mx-auto" style="width: 18rem">
            <img src="./IMAGE/t_shirtr_finale.avif" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Black t-shirt for men</h5>
              <p class="text-success d-inline"><b>56%</b></p>
              <p style="text-decoration: line-through" class="d-inline">696</p>
              <p class="d-inline">390</p>
              <br />
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span>
              <span>(113)</span>
              <form method="post" action="home.php">
              <input type="hidden" name="id" value="1"/>
                <label>Quanity:</label>
                <input type="number" min="0" max="10" name="quantity" style="display: inline" />
                <input
                  type="submit"
                  name="add_to_cart"
                  value="Add to cart"
                  style="display: inline"
                />
              </form>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card mt-5 mx-auto" style="width: 18rem">
            <img src="./IMAGE/jacket.avif" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Winter Jacket for men</h5>
              <p class="text-success d-inline"><b>50%</b></p>
              <p style="text-decoration: line-through" class="d-inline">2399</p>
              <p class="d-inline">1199</p>
              <br />
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star"></span>
              <span>(89)</span>
              <form method="post" action="home.php">
              <input type="hidden" name="id" value="2"/>
                <label>Quanity:</label>
                <input type="number" min="0" max="10" name="quantity" style="display: inline" />
                <input
                  type="submit"
                  name="add_to_cart"
                  value="Add to cart"
                  style="display: inline"
                />
              </form>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card mt-5 mx-auto" style="width: 18rem">
            <img src="./IMAGE/tops.avif" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Maxi dress</h5>
              <p class="text-success d-inline"><b>40%</b></p>
              <p style="text-decoration: line-through" class="d-inline">999</p>
              <p class="d-inline">599</p>
              <br />
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span>
              <span>(27)</span>
              <form method="post" action="home.php">
              <input type="hidden" name="id" value="3"/>
                <label>Quanity:</label>
                <input type="number" min="0" max="10" name="quantity" style="display: inline" />
                <input
                  type="submit"
                  name="add_to_cart"
                  value="Add to cart"
                  style="display: inline"
                />
              </form>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card mt-5 mx-auto" style="width: 18rem">
            <img src="./IMAGE/cap.avif" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Sports Cap</h5>
              <p class="text-success d-inline"><b>20%</b></p>
              <p style="text-decoration: line-through" class="d-inline">375</p>
              <p class="d-inline">299</p>
              <br />
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star"></span>
              <span>(19)</span>
              <form method="post" action="home.php">
              <input type="hidden" name="id" value="4"/>
                <label>Quanity:</label>
                <input type="number" min="0" max="10" name="quantity" style="display: inline" />
                <input
                  type="submit"
                  name="add_to_cart"
                  value="Add to cart"
                  style="display: inline"
                />
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <div class="card mt-5 mx-auto" style="width: 18rem">
            <img src="./IMAGE/cup.avif" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Coffee Cup</h5>
              <p class="text-success d-inline"><b>20%</b></p>
              <p style="text-decoration: line-through" class="d-inline">375</p>
              <p class="d-inline">299</p>
              <br />
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span>
              <span>(20)</span>
              <form method="post" action="home.php">
              <input type="hidden" name="id" value="5"/>
                <label>Quanity:</label>
                <input type="number" min="0" max="10" name="quantity" style="display: inline" />
                <input
                  type="submit"
                  name="add_to_cart"
                  value="Add to cart"
                  style="display: inline"
                />
              </form>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card mt-5 mx-auto" style="width: 18rem">
            <img src="./IMAGE/santa_cap.avif" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Santa Cap (Pack of 4)</h5>
              <p class="text-success d-inline"><b>50%</b></p>
              <p style="text-decoration: line-through" class="d-inline">319</p>
              <p class="d-inline">259</p>
              <br />
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span>
              <span>(7)</span>
              <form method="post" action="home.php">
              <input type="hidden" name="id" value="6"/>
                <label>Quanity:</label>
                <input type="number" min="0" max="10" name="quantity" style="display: inline" />
                <input
                  type="submit"
                  name="add_to_cart"
                  value="Add to cart"
                  style="display: inline"
                />
              </form>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card mt-5 mx-auto" style="width: 18rem">
            <img src="./IMAGE/jeans_2.avif" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">jeans for men</h5>
              <p class="text-success d-inline"><b>10%</b></p>
              <p style="text-decoration: line-through" class="d-inline">1999</p>
              <p class="d-inline">1799</p>
              <br />
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star"></span>
              <span>(34)</span>
              <form method="post" action="home.php">
              <input type="hidden" name="id" value="7"/>
                <label>Quanity:</label>
                <input type="number" min="0" max="10" name="quantity" style="display: inline" />
                <input
                  type="submit"
                  name="add_to_cart"
                  value="Add to cart"
                  style="display: inline"
                />
              </form>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card mt-5 mx-auto" style="width: 18rem">
            <img src="./IMAGE/shirt.avif" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Cutton Shirt (Pack of 2)</h5>
              <p class="text-success d-inline"><b>10%</b></p>
              <p style="text-decoration: line-through" class="d-inline">1999</p>
              <p class="d-inline">1799</p>
              <br />
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star "></span>
              <span class="fa fa-star"></span>
              <span>(56)</span>
              <form method="post" action="home.php">
              <input type="hidden" name="id" value="8"/>
                <label>Quanity:</label>
                <input type="number" min="0" max="10" name="quantity" style="display: inline" />
                <input
                  type="submit"
                  name="add_to_cart"
                  value="Add to cart"
                  style="display: inline"
                />
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <div class="card mt-5 mx-auto" style="width: 18rem">
            <img src="./IMAGE/shorts.avif" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Shorts for men(grey)</h5>
              <p class="text-success d-inline"><b>50%</b></p>
              <p style="text-decoration: line-through" class="d-inline">799</p>
              <p class="d-inline">399</p>
              <br />
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span>
              <span>(93)</span>
              <form method="post" action="home.php">
              <input type="hidden" name="id" value="9"/>
                <label>Quanity:</label>
                <input type="number" min="0" max="10" name="quantity" style="display: inline" />
                <input
                  type="submit"
                  name="add_to_cart"
                  value="Add to cart"
                  style="display: inline"
                />
              </form>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card mt-5 mx-auto" style="width: 18rem">
            <img src="./IMAGE/helmet.avif" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Worker's Helmet (yellow)</h5>
              <p class="text-success d-inline"><b>50%</b></p>
              <p style="text-decoration: line-through" class="d-inline">999</p>
              <p class="d-inline">499</p>
              <br />
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span>
              <span>(6)</span>
              <form method="post" action="home.php">
              <input type="hidden" name="id" value="10"/>
                <label>Quanity:</label>
                <input type="number" min="0" max="10" name="quantity" style="display: inline" />
                <input
                  type="submit"
                  name="add_to_cart"
                  value="Add to cart"
                  style="display: inline"
                />
              </form>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card mt-5 mx-auto" style="width: 18rem">
            <img src="./IMAGE/blanket.avif" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Blanket Jumbo (pack of 15)</h5>
              <p class="text-success d-inline"><b>60%</b></p>
              <p style="text-decoration: line-through" class="d-inline">4999</p>
              <p class="d-inline">1999</p>
              <br />
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span>
              <span>(17)</span>
              <form method="post" action="home.php">
              <input type="hidden" name="id" value="11"/>
                <label>Quanity:</label>
                <input type="number" min="0" max="10" name="quantity" style="display: inline" />
                <input
                  type="submit"
                  name="add_to_cart"
                  value="Add to cart"
                  style="display: inline"
                />
              </form>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card mt-5 mx-auto" style="width: 18rem">
            <img src="./IMAGE/dumble.avif" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title" >Dumbel (10 kg)</h5>
              <p class="text-success d-inline"><b>70%</b></p>
              <p style="text-decoration: line-through" class="d-inline">4999</p>
              <p class="d-inline" >1499</p>
              <br />
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span>
              <span>(26)</span>
              <form method="post" action="home.php">
              <input type="hidden" name="id" value="12"/>
                <label>Quanity:</label>
                <input type="number" min="0" max="10" name="quantity" style="display: inline" />
                <input
                  type="submit"
                  name="add_to_cart"
                  value="Add to cart"
                  style="display: inline"
                >
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <hr class="text-light">
    <footer class="mt-3 text-secondary body-black text-center">
        <p>&copy; BlackMarket.in<br>2023 , Inc. or its affiliates<br>
        Design & Developed by : RUtesh Kumar Mishra,Aspruha Unmukta Sahoo,Rabi Narayan Jena,Jaya Jasmin Sahoo</p>
    </footer>
    <?php
      if(isset($_POST['add_to_cart'])){
        require_once "db-connect.php";
        $quantity=$_POST['quantity'];
        $id=$_POST['id'];
        $qry="UPDATE  product_details set quanity=$quantity where pid=$id";
        if($con->query($qry)){
          echo "<script>alert('item added to cart')</script>";
        }
      }
    ?>
    <script src="./bootstrap.bundle.min.js"></script>
  </body>
</html>
