<?php
    try{
        $con=new mysqli("127.0.0.1","root","","PROJECT");
        if($con->connect_error){
            echo "connection error";
        }
        // else{
        //     echo "connect";
        // }
    }
    catch(exception $e){
        echo $e->getmessage();
    }
?>