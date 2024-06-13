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

        <?php
        //Data types in php
        //string
        echo "<br>";
        echo "Data types in PHP";
        $var="This is string";
        echo "<br>";
        echo var_dump($var);             //string(14) "This is string"

        //integer
        $var=45;
        echo "<br>";
        echo var_dump($var);            //int(45)

        //float
        $var=45.5;
        echo "<br>";
        echo var_dump($var);           //float(45.5)

        //boolean
        $var=true;
        echo "<br>";
        echo var_dump($var);          //bool(true)

        //array
        $var=[23,69,90];
        echo "<br>";
        echo var_dump($var);         //array(3) { [0]=> int(23) [1]=> int(69) [2]=> int(90) }

        //object
        $student = new stdClass();
        $student->name = "abc";
        $student->roll_no = 38;
        echo "<br>";
        echo $student->name;         //abc
        echo "<br>";
        echo $student->roll_no;      //38
        echo "<br>";

        //to declare constant use define()
        define("PI", 3.14);
        echo "<br>";
        echo PI;

       ?>
    </div>
    </div>
</body>
</html>
