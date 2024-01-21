<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Return Statements</title>
</head>
<body>
<h1> Return Statements </h1>

<form action="func_return_statement.php" method="post">
    Enter The Number you want to cube :
    <input type="number" name="number"> 
    <input type="submit"> <br><br>
</form>

<?php
$number =$_POST["number"];

function cube($number){
    echo "Your ans is : ";
    return (pow($number,3));
}

echo cube($number);
?>
</body>
</html>