<?php
    $firstName=$_POST['firstName'];
    $lastName=$_POST['lastName'];
    $male=$_POST['email'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $number=$_POST['number'];

    $conn = new mysqli('localhost','root','123456','test');
    if ($conn->connect_error){
        echo "$conn->connect_error";
        die("connection failed : ",$conn->connect_error);
    } else{
        $stmt=$conn->prepare("insert into registration (firstName,lastName,gender,email,password,number) values(?,?,?,?,?,?)");
        $stmt->bind_param("sssssi",$firstName,$lastName,$gender,$email,$password,$number);
        $stmt->execute();
        echo "registration successfully done.....";
        $stmt->close();
        $conn->close();
    }

    
?>
