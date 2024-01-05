<?php
    if(isset($_POST['submit'])){
        require_once("db-connect.php");
        $name=$_POST['name'];
        $mobile=$_POST['mobile'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $qry="INSERT INTO register(name,mobile,email,password)VALUES('$name',$mobile,'$email','$password')";
        $res=$con->query($qry);
        if($res){
            header("location:login.php");
        }
        else{
            echo "some error occured";
        }
    }
?>