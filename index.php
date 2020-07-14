<?php

    $server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server, $username, $password);

    if(!$con){
        die("Connection To This Database Fails  due to ". mysqli_connect_error());
    }
    // else {
    //     echo "succes connceting to DB";
    // }

    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $desc = $_POST['desc'];
    
    $sql = "INSERT INTO `table` ( `name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ( '$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";

    echo $sql;

    if($con -> query($sql) == true){
        echo "Succesfully Inserted";

    }
    else{
        echo "Error: $sql <br> $con -> error";
    }

    $con->close();
   

?>
