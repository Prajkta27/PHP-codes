<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP tutorials</title>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    .container{
        max-width: 80%;
        background-color: rgb(244, 194, 194);
        margin: auto;
        padding: 23px;
    }
</style>
<body>
    <div class="container">
        <h1>Let's learn about PHP here</h1>
        <p>You should check your party status here</p>

    <?php
        $age = 6;
        if($age > 18)
        {
            echo "You can go to party";
        }
        elseif($age<=7){
            echo "You are too small to go the party";
        }
        else{
            echo "You are not allowed to go to party";
        }
        echo "<br>";
        echo "<br>";

        //Array in PHP
        $languages = ["python", "c++", "Java"];
        echo count($languages);          //3
        echo "<br>";
        echo $languages[0];              //python
        echo "<br>";

        //Loops in PHP
        $a=0;
        while($a<=10)
        {
           echo "<br>The value of a is:", $a;
           $a++;
        }
        echo "<br>";

        $i = 0;
        while($i < count($languages))
        {
           echo "<br>The value of languages is: ", $languages[$i];
           $i++;
        }
        echo "<br>";
        
        $a=5;
        do{
           echo "<br>The value of a is:", $a;
           $a++;
        }while($a<=10);
        echo "<br>";

        for($a=0; $a<=5; $a++)
        {
            echo "<br>The value of a is:";
            echo $a;
        }
    ?>
    </div>
</body>
</html>
