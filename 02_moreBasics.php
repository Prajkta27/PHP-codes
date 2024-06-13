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
    
    <?php
        $age = 30;
        if($age > 18)
        {
            echo "You can go to party";
        }
        else{
            echo "You are not allowed to go to party";
        }
    ?>
    </div>
</body>
</html>