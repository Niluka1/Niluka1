<?php
    $name=$_POST['name'];
    $email=$_POST['email'];
    $message=$_POST['message'];

    //Database connection
    $conn = new mysqli('localhost','root','','personal website');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }
    else{
        $stmt = $conn->prepare("insert into contact(name,email,messege) 
        values(?,?,?)");
        $stmt->bind_param("sss",$name,$email,$message);
        $stmt->execute();
        echo "contact is successfully...";
        $stmt->close();
        $conn->close();
    }
?>