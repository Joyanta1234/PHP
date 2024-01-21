<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If statement</title>
</head>
<body>

<?php
//Part 1
$gender =true;
$tall = true;

if($gender && $tall){ //&& and operator means if one is false it will return 0. 
    echo "you are tall Male <br>";
}
else if($gender && !$tall){
    echo "you are short male <br>";
}
else if(!$gender && $tall){
    echo "you are tall but not male <br>";
}
else{
    echo "you are not a male. <br>";

}

//Part 2
$gender =true;
$tall = false;

if($gender && $tall){
    echo "you are tall Male <br>";
}
else if($gender && !$tall){
    echo "you are short male <br>";
}
else if(!$gender && $tall){
    echo "you are tall but not male <br>";
}
else{
    echo "you are not a male. <br>";

}

//Part 3
$gender =false;
$tall = true;

if($gender && $tall){
    echo "you are tall Male <br>";
}
else if($gender && !$tall){
    echo "you are short male <br>";
}
else if(!$gender && $tall){
    echo "you are tall but not male <br>";
}
else{
    echo "you are not a male. <br>";

}

//Part 4
$gender =false;
$tall = false;

if($gender && $tall){
    echo "you are tall Male <br>";
}
else if($gender && !$tall){
    echo "you are short male <br>";
}
else if(!$gender && $tall){
    echo "you are tall but not male <br>";
}
else{
    echo "you are not a male. <br>";

}

echo "<br><hr>";

//Now or operator


function checkValue($x) {
    if ($x == 0 || $x == 5) {
        echo "The value is either 0 or 5. <br>";
    } else {
        echo "The value is not 0 or 5. <br>";
    }
}

// Example usage
checkValue(0);    // Output: The value is either 0 or 5.
checkValue(3);    // Output: The value is not 0 or 5.
checkValue(5);    // Output: The value is either 0 or 5.
checkValue(8);    // Output: The value is not 0 or 5.

?>
</body>
</html>