<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Max & Min</title>
</head>
<body>
    <h1> Max & Min </h1>
    <?php
    function isMax($A, $B){
        
        if($A > $B)
        {
            echo "$A is greater than $B";
        }
        else if ($A<$B)
        {
            echo "$B is greater then $A";
        }
        else if ($A == $B)
        {
            echo "You have entered same number";
        }
        else 
        {
            echo "you entered an invalid number";
        }
    }

    isMax(4.49,4.48);

    echo "<br> <br>";

    // another way to do it.

    function getMax($num1, $num2){
        
        if($num1 > $num2)
        {
            return $num1;
        }
        else 
        {
            return $num2;
        }
    }

    echo getMax(4,7);

    echo "<br><br>";


    //Now with 3 numbers:

    function ismax3($A, $B, $C){
        
        if($A > $B && $A > $C)
        {
            echo "From $A, $B and $C , Max is $A";
        }
        
        else if($B> $A && $B > $C)
        {
            echo "From $A, $B and $C , Max is $B";
        }

        else if($A == $B && $A == $C)
        {
            echo "You have entered same number";
        }

        else
        {
            echo "From $A, $B and $C , Max is $C";
        }
    }

    ismax3(3,7,3);

    echo "<br> <br>";


    //Simple Version.
    
    function Max3($num1, $num2, $num3){
        
        if($num1 > $num2 && $num1 > $num3)
        {
            return $num1;
        }
        else if ($num2 > $num1 && $num2 > $num3)
        {
            return $num2;
        }
        else 
        {
            return $num3;
        }
    }

    echo Max3(5,8,20);
    echo "<br><br>";


    function maxx($A, $B, $C){
        
        if($A >= $B && $A >= $C)
        {
            return $A;
        }
        
        else if($B >= $A && $B >= $C)
        {
            return $B;
        }

        else
        {
           return $C;
        }
    }

    echo maxx(3,3,3);

    echo "<br> <br>";
    


    ?>
</body>
</html>