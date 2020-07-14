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

        // 1. If-else 
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

        echo "<br>";

        // 2. Arrays 
        $languages = array("Python","C++","PHP" );
        echo $languages[0];
        echo "<br>";

        echo count($languages);
        echo "<br>";


        // 3. Loops
        $a = 0;
        while ($a < count($languages)) {
            echo "the value of a is:";
            echo "<br>";
            echo $languages[$a];
            echo "<br>";
            $a++;
        }

        for ($age=0; $age <10 ; $age+=2) { 
            echo $age;
            echo "<br>";
        }

        foreach ($languages as $values ) {
            echo "<br> The value is from for-each is:";
            echo $values;
        }

        // 4. Functions
        function print1(){

            echo "<br>";
            echo "FIVE";
            echo "<br>";
        }
        print1();

        function number($number)
        {
            echo "<br>Your number is:";
            echo $number;
        }

        number(6);




        ?>
    </div>
</body>
</html>