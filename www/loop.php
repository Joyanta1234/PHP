<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     
<h1> Loop </h1><hr>

<h2> While Loop </h2>
    <?php

     $num = 1;
     while($num <=5){
        echo "$num <br>";
        $num++;
     }

    ?>
<hr>

<h2> Do Loop </h2>

    <?php
     $num = 6;
     do{
        echo "$num <br>";
        $num++;
     }
     while($num<=5)
     ?>
<hr>

<h3> * So what is the difference between While loop and Do-while loop?</h3>
<p>
    <strong>Ans is simple. </strong> <br><br>
    1. While loop First check the condition then print the result. Means if the condition is false the loop won't start or won't execute. <br>
    2. Do-While First execute the loop then check the condition.
</p>
<hr>

<h2>For Loop </h2>
     <?php
     for($i = 1; $i<=5;$i++){
        echo "$i <br>";
     }
     ?>
<hr>

<h3> * So what is the difference between While loop and For loop? </h3>
<p>
     1. Use a while loop when you want to execute a block of code repeatedly as long as a certain condition is true,<br>
      and you might not know in advance how many iterations will be needed. <br><br>

     2. Use a for loop when you know the exact number of iterations you want and when the loop control variable (counter) <br>
      is important and needs to be explicitly managed within the loop header.
</p>
<hr>

<!-- Now let's do an for loop example. -->
<h3> Print all the value inside the array. <br> Array(1,5,8,20,55).</h3>
     <?php
     $array = array(1,5,8,20,55);

     for($i = 0; $i < count($array); $i++ ){ //here count we used first where we can count the array numbers.
        echo "$array[$i] <br>";
     }


     ?>
</body>
</html>