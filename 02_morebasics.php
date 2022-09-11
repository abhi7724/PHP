<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP TUTORIAL</title>
</head>
<style>
    *{
        margin:0;
        padding:0;
        box-sizing:border-box;
    }
    .container{
        max-width: 80%;
        background-color:grey;
        margin: auto;
        padding: 23px;
    }
</style>
<body>
    <div class="container">
        <h1>Lets learn about PHP_ROUND_HALF_DOWN</h1>
        <p>your party status is here</p>
        <!-- This is a container -->
        <?php
        $age=6;
        if($age>18){
            echo
             "you can go to party";
        }
        elseif($age==7){
            echo"You are 7 years old";
        }
        elseif($age==6){
            echo"You are 6 years old";
        }
        
        else{
         echo "you can not go to party";
        }

        function print5(){
            echo "FIVE";
        }
        print5();
        print5();
        print5();
        print5();

        funtion add($number1 * $number2)
            echo"your sum is";

            print add();
        function print_number($number){
            echo "<br>YOUR number is";
            echo $number;
        }
        print_number(45);

        $str = "This";
        echo $str
        $len = strlen($str);
        echo "nayi baatt " . " . kya scene "
        echo "The length of this string is " . $len .  " . naya string jod die" . " .naya line" . ""
        ?>

    </div>
</body>
</html>