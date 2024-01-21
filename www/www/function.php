<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function</title>
</head>
<body>
    <h1> Functions </h1>

    <form action="function.php" method="post">
        Enter Your Name :
        <input type="text" name="name"><br><br>
        Enter Your Age : 
        <input type="number" name="age"><br><br>
        <input type="submit"> <br><br>
    </form>

    <?php

    $name =$_POST["name"];
    $age =$_POST["age"];

    function sayHi($name, $age){             //function= we can only have one parameter like name or can have many like name age salary etc.
        echo "Hello $name , your age is $age<br><br>";
    }


    sayHi($name, $age);                      //calling the function


    //we can call the function many times.

    sayHi("Joy", 25); 
    sayHi("Nabajit", 27); 
    sayHi("Raila", 30); 
    ?>
</body>
</html>