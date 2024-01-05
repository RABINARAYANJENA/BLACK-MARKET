<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> blackmarket.com</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="./bootstrap.min.css">
    <style>
    .congratulation-wrapper {
        max-width: 1000px;
        margin-inline: auto;
        padding: 30px 20px;
        border-radius: 10px;
    }
    .congratulation-contents.center-text .congratulation-contents-icon {
        margin-inline: auto;
    }
    .congratulation-contents-icon {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        height: 250px;
        width: 250px;
        background-color: #65c18c;
        color: #fff;
        font-size: 50px;
        border-radius: 50%;
        margin-bottom: 30px;
    }
    .congratulation-contents-title {
        font-size: 50px;
        line-height: 36px;
        margin: -6px 0 0;
    }
    .congratulation-contents-para {
        font-size: 20px;
        line-height: 24px;
        margin-top: 30px;
    }
    .btn-wrapper {
        display: block;
    }
    .cmn-btn.btn-bg-1 {
        background: #6176f6;
        color: #fff;
        border: 2px solid transparent;
        border-radius:3px;
        text-decoration: none;
        padding:5px;
    }
    </style>
</head>

<body class="bg-black">
    <div class="congratulation-area text-center mt-5 bg-black">
        <div class="container">
            <div class="congratulation-wrapper">
                <div class="congratulation-contents center-text">
                    <div class="congratulation-contents-icon">
                        <i class="fas fa-check"></i>
                    </div>
                    <h4 class="congratulation-contents-title text-light"> Congratulations! </h4>
                    <p class="congratulation-contents-para text-light"> Your Order has Placed Successfully </p>
                    <div class="btn-wrapper mt-4">
                        <form action="congo.php" method="post">
                            <button type="submit" class="btn btn-outline-success" name="go_to_home">Go to Home </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
        if(isset($_POST['go_to_home'])){
            require_once "db-connect.php";
            $id=$_COOKIE['id'];
            if($id == 999){
                $qry="UPDATE  product_details set quanity=0";
            }
            else{
                $qry="UPDATE  product_details set quanity=0 WHERE pid=$id";
            }
            $con->query($qry);
            setcookie("id", "", time()-120);
            header("location:home.php");
        }
    ?>
    <script src="./bootstrap.bundle.min.js"></script>
</body>
</html>
