<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 1st Tutorial</title>
</head>
<body>
    <div class="container">
        This is my first website

        <?php
           echo "<br>";                       //to add new line
           echo "Hello World Again!!";        //print something
           echo "<br>";

           $var1 = 10; 
           echo "<br>";                       //variable declaration using $
           $var2 = 2;                        //php - dynamically typed language
           echo $var1;
           echo "<br>";
           echo $var2;
           echo "<br>";
          
           echo "Addition of 2 variables is:";
           echo "<br>";
           Echo $var1 + $var2;               //79     //not case sensitive
           echo "<br>";

        //Operators in PHP

        //    Arithmetic Operators
        echo "Subtraction of 2 variables is:";
        echo "<br>";
        echo $var1 - $var2;
        echo "<br>";
        echo "Multiplication of 2 variables is:";
        echo "<br>";
        echo $var1 * $var2;
        echo "<br>";
        echo "Division of 2 variables is:";
        echo "<br>";
        echo $var1 / $var2;
        echo "<br>";
        echo "Modulas of 2 variables is:";
        echo "<br>";
        echo $var1 % $var2;
        echo "<br>";
        echo "<br>";

        //Assignment Operators
        $newVar = $var1;
        echo "Value of new variable is:";
        echo $newVar;
        echo "<br>";
 
        $newVar2 = $var1;
        $newVar2 += 1;
        echo "Value of new variable 2 is:";
        echo $newVar2;
        echo "<br>";

        $newVar3 = $var1;
        $newVar3 -= 1;
        echo "Value of new variable 3 is:";
        echo $newVar3;
        echo "<br>";

        $newVar4 = $var1;
        $newVar4 *= 2;
        echo "Value of new variable 4 is:";
        echo $newVar4;
        echo "<br>";

        $newVar5 = $var1;
        $newVar5 -= 2;
        echo "Value of new variable 5 is:";
        echo $newVar5;
        echo "<br>";
        echo "<br>";

        //    Comparison Operators
        echo "The value of 1==4 is: ";
        echo var_dump(1==4);
        echo "<br>";

        echo "The value of 1!=4 is: ";
        echo var_dump(1!=4);
        echo "<br>";

        echo "The value of 1>=4 is: ";
        echo var_dump(1>=4);
        echo "<br>";

        echo "The value of 1<=4 is: ";
        echo var_dump(1<=4);
        echo "<br>";
        echo "<br>";

        //    Increment/Decrement Operators
        echo $var1++;
        echo "<br>";
        echo "After post inrement: ";
        echo $var1;
        
        echo "<br>";
        echo $var1--;
        echo "<br>";
        echo "After post decrement: ";
        echo $var1;
        
        echo "<br>";
        echo ++$var1;
        echo "<br>";
        echo "After pre increment: ";
        echo $var1;
        
        echo "<br>";
        echo --$var1;
        echo "<br>";
        echo "After pre decrement: ";
        echo $var1;

        //    Logical Operators
        // and (&&)
        // or (||)
        // xor
        // !
        ?>
    </div>
</body>
</html>