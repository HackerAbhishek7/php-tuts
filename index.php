<?php

    if(isset($_POST['name'])){

    // Set connection Variable
    $server = "localhost";
    $username = "root";
    $password = "";

    // create a conncetion
    $con = mysqli_connect($server, $username, $password);

    // check for conncetion success
    if(!$con){
        die("Connection To This Database Fails  due to ". mysqli_connect_error());
    }
    // else {
    //     echo "succes connceting to DB";
    // }

    // collect post variables
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $desc = $_POST['desc'];
        
    // Excute the sql query
    $sql = "INSERT INTO `trip` . `table` ( `name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ( '$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";

    // echo $sql;

    if($con -> query($sql) == true){
        // echo "Succesfully Inserted";

    }
    else{
        // echo "Error: $sql <br> $con -> error";
        echo "ERROR : $sql <br> $con->error";
    }

    // Close the connction of DB
    $con->close();
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome To Travel Form</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Da+2:wght@500&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h3>Welcome to IIITM US Trip Form</h3>
        <p>Enter your detainls to confirm the participation</p>

        <p class="bg">Thanks for Filling The Form Hope To See You Soon!!</p>
        
        <form action="index.php" method="post">

            <input type="text" name="name" id="name" placeholder="Enter Your Name">

            <input type="text" name="age" id="age" placeholder="Enter Your Age">

            <input type="text" name="gender" id="gender" placeholder="Enter Your Gender">

            <input type="email" name="email" id="email" placeholder="Enter Your Email">
            
            <input type="phone" name="phone" id="phone" placeholder="Enter Your Phone">

            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter Any Information Here"></textarea>

            <button class="btn">Submit</button>
            <!-- <button class="btn">Reset</button> -->
        </form>
    </div>
    <script src="index.js">

    </script>
</body>
</html>

