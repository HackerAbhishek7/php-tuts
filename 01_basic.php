<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn PHP in One Shot</title>
</head>

<body>
    <div class="container">
        <h1>This is my Website in PHP</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos id saepe, officia ullam incidunt pariatur distinctio commodi quibusdam consequuntur, dolorem perferendis deserunt debitis!</p>

        <?php
        // Constant in PHP -- Global
        define('PI', 3.14256);

        echo "this is good and we like good";
        echo "<br>";

        // 1. Secret Code -- its a Single Line Comments

        // 2. Varibles in PHP
        $var = 5;
        $var2 = 2;
        
        echo $var + $var2;
        echo "<br>";
        echo "<br>";

        // 3. Operators

        // Arithematic Operator
        echo "The value of varibles 1 + variable 2";
        echo "<br>";
        echo $var + $var2;
        echo "<br>";
        echo "The value of varibles 1 - variable 2";
        echo "<br>";
        echo $var - $var2;
        echo "<br>";
        echo "The value of varibles 1 * variable 2";
        echo "<br>";
        echo $var * $var2;
        echo "<br>";
        echo "The value of varibles 1 / variable 2";
        echo "<br>";
        echo $var / $var2;
        echo "<br>";

        // Assigment Operators
        $newVar = $var;
        echo "The value of new variable is";
        echo "<br>";
        echo $newVar;
        echo "<br>";

        // Comparison Operator
        echo "The value of 1 == 4 is:";
        echo var_dump(1==4);
        echo "<br>";

        // Incement and decrement operator
        echo $newVar++;
        echo "<br>";
        echo $newVar--;
        echo "<br>";
        echo ++$newVar;
        echo "<br>";
        echo --$newVar;
        echo "<br>";

        // Logical Opeartor
        // and || or || xor || not(!)

        $myVar2 = (false) && (true);
        echo var_dump($myVar2);
        echo "<br>";

        $myVar3 = (false) || (true);
        echo var_dump($myVar3);
        echo "<br>";

        $myVar4 = !(true);
        echo var_dump($myVar4);
        echo "<br>";
        echo "<br>";

        // 4. Data Types
        $var = "This is a String";
        echo var_dump($var);
        echo "<br>";

        $var =34;
        echo var_dump($var);
        echo "<br>";

        $var = 55.6;
        echo var_dump($var);
        echo "<br>";

        echo PI;
        echo "<br>";


        ?>
    </div>
</body>

</html>