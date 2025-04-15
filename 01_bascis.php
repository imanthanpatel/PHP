<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php notes</title>
</head>
<body>
    <div class="container01">
    <h1>These is my php website</h1>
    <?php
    define('PI',3.14); //declaring onstant at the top
    echo "hello";
    // variable in php
    $variable1 = 3;
    $variable2 = 45;
    echo $variable1;
    echo $variable2;
    echo $variable1 + $variable2;

    // operators in php
        
        // 1)Arithmetic Operators
        echo "<h1>Arithmetic Operator</h1>";
        echo "<br>";
        echo "the Value of variable1 + variable2 is ";
        echo $variable1 + $variable2;
        echo "<br>";

        echo "<br>";
        echo "the Value of variable1 - variable2 is ";
        echo $variable1 - $variable2;
        echo "<br>";

        echo "<br>";
        echo "the Value of variable1 * variable2 is ";
        echo $variable1 * $variable2;
        echo "<br>";

        echo "<br>";
        echo "the Value of variable1 / variable2 is ";
        echo $variable1 / $variable2;
        echo "<br>";
        
       // 2) Assignment Ope

       echo "<br>";
       $newVar = $variable1;
       $newVar *= 2;
       echo "The value of new variable is ";
       echo $newVar;
       echo "<br>";
        //3) comparison Ope (retun only boolean value)
        
        echo "<h1> Comparision ope  </h1>";
        echo "<br>";
        echo "the value of 1==4 is " ;
        echo var_dump(1==4);
        echo "<br>";

        echo "<br>";
        echo "the value of 1!=4 is " ;
        echo var_dump(1!=4);
        echo "<br>";
        

        echo "<br>";
        echo "the value of 1>=4 is " ;
        echo var_dump(1>=4);
        echo "<br>";

        echo "<br>";
        echo "the value of 1<=4 is " ;
        echo var_dump(1<=4);
        echo "<br>";
        
        
            

        //4)Inc/Decrement OPe
        echo "<h1> Inc/Dec Ope </h1>";

        // echo $variable1++;
        // echo "<br>";
        
    //    echo $variable1--;
    //    echo "<br>";
       
       echo --$variable1;
       echo "<br>";
       echo $variable1;
    //    echo ++$variable1;
    //    echo "<br>";


        // 5) Logical Ope
        echo "<h1> Logical Ope </h1>";

        // and (&&)
        // or(||)
        // xor 
        // $myVar = (false xor false);
        // !
        // $myVar = (true and true);
        // $myVar = (FALSE and true);
        // $myVar = (FALSE and FALSE);
        
        $myVar = (true or false);
        // echo "<br>";
        echo var_dump($myVar); 


        

        




    ?>
    <?php
        echo "<h1>Data Type in PHP</h1>";
        // Data type in php
        // 1. string
        $var = "This is string";
        echo var_dump($var);
        echo "<br>";
        // 2. Integer
        echo "<br>";
        $var = 67;
        echo var_dump($var);
        // 3. float
        echo "<br>";
        $var = 1.1;
        echo var_dump($var);
        // 4. Boolean
        echo "<br>";
        $var = true;
        echo var_dump($var);
        echo PI
        // 5. Array
        // 6. Object


        ?>


    </div> 
</body>
</html>