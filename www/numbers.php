<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numbers</title>
</head>
<body>
    <?php

    echo "<h1>Numbers </h1>";

    echo " There are many types of numbers. But mostly we use: <br>";

    echo "1. Integer <br>";
    echo 40;
    echo "<br><br>";

    echo "2. Float. <br>";
    echo 40.99;
    echo "<br><br>";

    echo "3. We can also write Negative numbers.<br>";
    echo -40;
    echo "<br>";
    echo -50.599;
    echo "<br><br>";

    echo "4. We can also do calculation. <br>";
    echo "<strong> Example : </strong><br>";

    echo "i.40+50= ";

    echo 40+59;
    echo "<br>";

    echo "ii. 50-40= ";
    echo 50-40;
    echo "<br>";

    echo "iii. 40-50= ";
    echo 40-50;
    echo "<br>";

    echo "iv. 1.99 * 20.29= ";
    echo 1.99 * 20.29;
    echo "<br>";

    echo "v. -9.3/2.5= ";
    echo -9.3/2.5;
    echo "<br><br>";

    echo "<strong> !Important. </strong> There is another operator called <strong> Modulus (%) </strong>. It gives us the reminder of divided numbers. <br>";
    echo "<strong> Example : </strong> <br>";
    echo "1. 5 % 3 = ";
    echo 5 % 3;
    echo "<br>";

    echo "2. 3 % 5 = ";
    echo 3 % 5;
    echo "<br>";

    echo "3. 7 % 3 = ";
    echo 7 % 3;
    echo "<br><br>";

    echo "<strong>!Important. </strong> Php gonna help us to maintain <strong> Order of Operation </strong>. Like if we have multiply and addition. Then it will multiply first then addition. <br>";
    echo " <strong> Example : </strong> <br>";
    echo "1. 5 + 6 * 10 = ";
    echo 5 + 6 * 10;
    echo "<br>";

    echo "2. 5 * 6 + 5 / 10 = ";
    echo 5 * 6 + 5 / 10;
    echo "<br>";

    echo "3. 5 + (3 / (6 * (5 - 2))) = ";
    echo 5 + (3 / (6 * (5 - 2)));
    echo "<br> <br> <hr>";


    echo " We can store the Numbers inside a variable and do math. <br>";
    echo " <strong> Example : </strong><br>";
    echo "A = ";
    $A = 5;
    echo "$A <br>";

    echo "B = ";
    $B = 3;
    echo " $B<br>";

    echo "1. A + B = $A + $B = ";
    echo $A + $B;
    echo "<br>";

    echo "2. A + (A * B) / B = $A + ($A * $B) / $B = ";
    echo $A + ($A * $B) / $B;
    echo "<br><br><hr>";


    echo " <h2>The Deference between ++num and num ++:</h2>";
    
    echo "The expressions <b> num++ </b> and <b> ++num </b> are both increment operators in programming languages like PHP, JavaScript, and others.<br>
          They increment the value of the variable num by 1, but there is a subtle difference in their behavior.";


    echo "<h3> num++ (Post-increment): </h3> 

    i. This is also known as post-increment. <br>
    ii. The current value of num is used in the expression, and then the increment operation is performed. <br>
    iii. It returns the original value of num before it was incremented. <br>";

    echo " <b> Example : </b> <br>";
    
    echo " num = ";
    $num = 5;
    echo "$num<br>";

    echo " result = num++ <br>";
    $result = $num++;                // $result is assigned the value 5, and then $num is incremented to 6
    echo "<br>";

    echo "result = $result <br>";    // Output: 5 
    echo "num = $num <br>";          // Output: 6



    echo "<h2>++num (Pre-increment): </h2>

    i. This is known as pre-increment. <br>
    ii. The increment operation is performed first, and then the updated value is used in the expression. <br>
    iii. It returns the new value of num after it has been incremented. <br><br>
    <b> Example : </b><br>";

    echo " num = ";
    $num = 5;
    echo "$num <br>";

    echo " result = ++num <br>";
    $result = ++$num;                 // $num is incremented to 6, and then $result is assigned the value 6

    echo "result = $result <br>";     // Output: 6
    echo "num = $num <br> ";          // Output: 6


    echo "<h2>num-- (Post-decrement): </h2>
    
    Same as num++ <br><br>

    <b> Example : </b> <br>";

    echo " num = ";
    $num = 5;
    echo "$num <br>";

    echo " result = num-- <br>";
    $result = $num--;                  // $num is incremented to 6, and then $result is assigned the value 6// $num is incremented to 6, and then $result is assigned the value 6

    echo "result = $result <br>";      // Output: 5
    echo "num = $num <br><br> ";       // Output: 4




    echo "<h2>--num (Pre-decrement): </h2>
    
    Same as ++num <br><br>

    <b> Example : </b> <br>";

    echo " num = ";
    $num = 5;
    echo "$num <br>";

    echo " result = --num <br>";
    $result = --$num;                  // $result is assigned the value 5, and then $num is decremented to 4

    echo "result = $result <br>";      // Output: 4
    echo "num = $num <br><br><hr>";       // Output: 4


    $num = 10;
    echo "num = $num <br>";
    echo "new= num + 5 = ";
    $new= $num + 5;
    echo "$new <br><br>";

    echo " We can also do num += 5 = ";
    echo $num += 5;

    echo " We can also do *=, /=. -= and so on..<br> <hr>";


    echo " <h2> Math Functions : </h2>";

    echo "1. <b> abs() </b> Function to find absolute value(means it will give the positive value of the number). <br>
    <b> Example : </b> <br>";

    echo "1. abs(-100) = ";
    echo abs(-100);
    echo "<br>";

    echo "2. abs(+-100) = ";
    echo abs(+-100);
    echo "<br>";

    echo " <h3> There are a lot of Math Functions. Some websites to find them are : </h3><br> ";
    echo " 1. https://www.w3schools.com/php/php_ref_math.asp <br>";
    echo " 2. https://www.php.net/manual/en/ref.math.php <br>";



    ?>
</body>
</html>