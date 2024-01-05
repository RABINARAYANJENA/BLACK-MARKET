<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>blackmarket.com</title>
    <link
      href="./bootstrap.min.css"
      rel="stylesheet"
    />
    <style>
      table {
        margin-top: 20px;
      }
    </style>
  </head>
  <body class="bg-dark">
  <?php
    include_once "nav.php";
  ?>
  <h3 class="text-center text-light  mb-3">Cart</h3>
    <?php
       if(isset($_GET['status'])){
        $status=$_GET['status'];
        if($status === "error"){
            echo "<script>alert('some error occured')</script>";
        }
      }
      $c=0;
      require_once "db-connect.php";
      $qry="SELECT pname, price, quanity,filename,id
      FROM Product_details
      INNER JOIN photo ON pid = id WHERE quanity > 0";
      $res=$con->query($qry);
      if($res->num_rows > 0){
        ?>
      <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-12 mx-auto text-center border border-light rounded border-opacity-50 ">
          <table class="table table-dark">
            <?php
            $total=0;
              while($std=$res->fetch_assoc()){
                  $total+=($std['quanity']*$std['price']);
                  ?>
                  <tbody>
                <tr>
                  <td class="text-light"><img src="<?php echo "student_images/". $std['filename']; ?>" height="140" width="140"></td>
                  <td class="text-light"><?php echo $std['pname']."<br>price : ".$std['price']."<br>quantity : ".$std['quanity']."<br>total price : ".$std['quanity']*$std['price']."<br>";?>
                  <a class="btn  btn-outline-danger btn-sm mt-3" href="remove_item.php?id=<?php echo $std['id'] ?>">Remove</a> <a class="btn  btn-outline-success btn-sm mt-3 ms-2" href="adress.php?price=<?php echo $std['price']*$std['quanity']  ?>&id=<?php echo $std['id']?>">Buy this now</a></td>
                </tr>
              </tbody>
              <?php
            }
            ?>
             <tr>
              <td colspan="2" class="border-bottom-0"><?php echo "<b>grand total : <b>".$total;?>
              <a class="btn  btn-outline-success  mt-1 ms-3" href="adress.php?price=<?php echo $total ?>&id=999">Place Order</a>
              </td>
            </tr>
          </table>
        </div>
      </div>
    </div>
        <?php
      }
      else{
        ?>
          <div class="col-lg-6 col-md-12 mx-auto text-center border border-light rounded border-opacity-50 ">
          <h3 class="text-center text-danger mt-3">Your Cart is Empty!</h3>
          <a class="btn  btn-outline-success  my-3" href="home.php">shop now</a>
      </div>
        <?php
      }
    ?>
  <script src="./bootstrap.bundle.min.js"></script>
  </body>
</html>
