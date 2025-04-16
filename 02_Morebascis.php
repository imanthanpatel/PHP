<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP notes</title>
    <link rel="stylesheet" href="./assets/css/style.css">

</head>

<body>
    <div class="container02">
        <h1>Your Party status is here </h1>
    
        <?php 
    
        $age = 7;
        if ($age>18){
            echo "You can go to party";
        } else if ($age==7){
            echo "You are seven yrs old";
        }
        else{
            echo "you can go to party";
        }

        // Array in PHP
        echo "<h1>Array In PHP</h1>";
        $languages = array("Py","node.js","C++","php");
        echo count($languages);
        echo "<br>";

        // Loops In PHP
        echo "<h1>Loops In PHP</h1>";
        $a = 0;
        while ($a <= 10) {   // While 
            echo "the value of a is ";
            echo $a;
            echo $a++;
            echo "<br>";
        }
        // Iterating Array  In PHP Using Whiled loop
        $a = 0;
        while ($a < count($languages)) {   // While 
            echo "<br>the value of langauges is ";
            echo $languages[$a];
            echo $a++;
            echo "<br>";
        }
        // do while loop
        $a = 20;
        do{   // While 
            echo "<br>the value of a is ";
            echo $a;
            echo $a++;
            echo "<br>";
        } while ($a < 10 );

        // For Loop 
        
        for ($a=60; $a < 10; $a++) { 
            echo "<br>The value of a is from for loop :";
            echo $a;
        }

        // For each
        foreach($languages as $value){
            echo "<br>the value  from foreach loop is ";
            echo $value;
        }
        // Function : which is used to run again and again in code
        echo "<h1>Function In Php </h1>";
        function print5(){
            echo "FIVE";
        }
        print5();
        function print_number($number){
            echo "<br>your number is :";
            echo $number;
        }
        print_number(45);
        
        

        

        

            ?>
    </div>
</body>
</html>