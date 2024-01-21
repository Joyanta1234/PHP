<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Calculator</title>
</head>
<body>
    


    <h1> Integer Number Calculation </h1>
    <form action ="basic_calculator.php" method ="get">

    Enter First Number : <br>
    <input type ="number" name="num1">
    <br>
    Enter Second Number : <br>
    <input type ="number" name ="num2">
    <br>
    <input type="submit">
    <br><br><hr>
    </form>

    Answer : <?php echo $_GET["num1"] + $_GET["num2"];?>
    <br><br><hr>



    <h1> Float Number Calculation </h1>
    <form action ="basic_calculator.php" method ="get">

    Enter First Number : <br>
    <input type ="float" name="num1">
    <br>
    Enter Second Number : <br>
    <input type ="float" name ="num2">
    <br>
    <input type="submit">
    <br><br><hr>
    </form>

    Answer : <?php echo $_GET["num1"] + $_GET["num2"];?>
</body>
</html>