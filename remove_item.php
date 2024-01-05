<?php
if(!isset($_GET['id'])){
    header('location:cart.php');
}
require_once "db-connect.php";
$id = $_GET['id'];
$qry="UPDATE  product_details set quanity=0 where pid=$id";
// echo $qry;
if($con->query($qry)){
    header("location:cart.php?status=ok");
} else {
    header("location:cart.php?status=error");
}
?>