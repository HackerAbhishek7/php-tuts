<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>More Basics in PHP</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .container{
            max-width: 80%;
            background-color: gray;
            margin: auto;
            padding: 23px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Lets Learn About PHP</h1>
       <p>Your Party status Is Here</p>
        <?php

        $age = 6;
        if($age > 18){
            echo "you can go to party";
        }
        elseif ($age == 7) {
            echo "you are 7 years old";
        }
        else {
            echo "you cannot go to party :)";
        }


        ?>
    </div>
</body>
</html>