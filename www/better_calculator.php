<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Better Calculator</title>
</head>
<body>
    <h1> Better Calculator </h1>
    <form action="better_calculator.php" method="post">
        First Number:   <input type="float" name="num1"> <br><br>
        Operation:      <input type="text" name="op"> <br><br>
        Second Number:  <input type="float" name="num2"> <br><br>
                        <input type="submit"> <br><br><hr>
    </form>

    <?php
    
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $op   = $_POST["op"];

    if($op == "+"){
        echo  $num1 + $num2;
    }
    else if ($op == "-"){
        echo $num1 - $num2;
    }
    else if ($op == "*"){
        echo $num1 * $num2;
    }
    else if ($op == "/"){
        echo $num1 / $num2;
    }
    else {
        echo "Invalid Operator.";
    }
    ?>
</body>
</html>