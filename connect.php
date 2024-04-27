<?php

    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "ed_contact";

    $con = mysqli_connect($server,$username,$password,$database);

    if($_SERVER['REQUEST_METHOD']=='POST')
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $course = $_POST['course'];
        $number = $_POST['number'];
        $address = $_POST['address'];
    }

    if($name == '' || $email == '' || $course == '' || $number == '' || $address == '' ){

            echo("Please fill all the fields");
    }
    else{
        $sql = "INSERT INTO `contacts` (`sr_no`, `name`, `email`, `course`, `number`, `address`) VALUES (NULL, '$name', '$email', '$course', '$number', '$address')";
        $result = mysqli_query($con,$sql);
        if($result)
        {
            echo "Your Response Recorded";
        }
        else
        {
            mysqli_error($con);
        }
    }
  
?>