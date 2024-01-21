<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String</title>
</head>
<body>
    <?php

     echo "<h1>How to write string in different ways</h1><hr>";

    echo '<h2> Print String with ""</h2>';

    // we can write any string in echo using "".

    echo '1. We can write any string in echo using "".<br>';

    echo '<h3> Example :</h3> echo "Joyanta"s Academy" = Joyanta"s Academy. <br><br><hr>';

    

    
    echo '<h2>Print String without ""</h2>';

    // we can also store the string value inside a variable and print using echo variableName

    echo "2.W e can also store the string value inside a <strong> Variable </strong> and print using <strong>'echo VariableName'</strong><br>";

    echo "<h3> Example : </h3>";

    $AcademyName= "Joyanta's Academy <br>";
    
    echo $AcademyName;

    echo"<br> <hr>";


    echo " <h2> Function </h2>";

    // we can use the function called strtolower to make the string lower case.

    echo "3. We can use the <strong> Function </strong> called <strong> 'strtolower' </strong> to make the string Lower case.";

    echo "<h3> Example : </h3>";

    echo strtolower($AcademyName);

    echo "<br>";


    echo "4. We can use the <strong> Function </strong> called <strong> 'strtoupper' </strong> to make the string Upper case.";

    echo "<h3> Example : </h3>";
    
    // we can use the function called strtoupper to make the string upper case.

    echo strtoupper($AcademyName);

    echo "<br>";

    // Sometimes we can pass anything inside the functionName()

    echo "5. Sometimes we can pass anything inside the <strong>functionName()</strong>";

    echo "<h3> Example : </h3>";

    echo strtolower("dog");

    echo"<br>";

    echo strtoupper("dog");

    echo "<br><br>";


    // There is a function called 'strlen()' which will tell us how many Character in the String

    echo "6. There is a function called <strong> 'strlen()' </strong> which will tell us how many <strong> Character </strong> in the String";

    echo "<h3> Example : </h3>";

    echo strlen($AcademyName);

    echo"<br>";

    echo strlen("Joyanta");

    echo"<br> <br>";



    // To find a character specific character just type VariableName[index number{start from 0,1,2..}] and we will find it.

    echo "7. To find a character specific character just type <strong> 'VariableName[index number{start from 0,1,2..}]' </strong> and we will find it.";

    echo "<h3> Example : </h3>";

    echo $AcademyName [4];

    echo "<br>";

    echo "Joyanta" [3];

    echo "<br><br>";

    

    // We can change the String value by storing a value in the variable. Like VariableName[index number]="the value"
    

    echo '8. We can change the String value by storing a value in the variable. Like VariableName[index number]="the value".<br>';

    echo "<h3> Example :</h3>";

    $AcademyName[0]="T";

    echo $AcademyName;

    echo "<br>";

    
    // We can change any string using a Function called str_replace("the string we want to change", "New string", VariableName)

    echo '9. We can change any string using a <strong> Function </strong> called <strong> str_replace("the string we want to change", "New string", VariableName) </strong> <br>';

    echo "<h3> Example : </h3>";

    $AcademyName="Joyanta's Academy";

    echo str_replace("Joyanta's","Panda's", $AcademyName);
    
    echo "<br>";

    echo str_replace("nta's","Panda's", $AcademyName);

    echo "<br><br>";


    // We can bring any string from a string using a Function called "substr(VariableName/StringName, Index number:The first index from where we want to bring, the last index number until we want to bring)

    echo '10. We can bring any string from a string using a Function called "substr(VariableName/StringName, Index number:The first index from where we want to bring, the last index number until we want to bring)';

    echo "<h3> Example : </h3>";

    echo substr($AcademyName, 10);

    echo "<br>";

    echo substr($AcademyName, 10,4);

    // There are a bunch of functions on this. To find more function go to
    // 1. https://www.w3schools.com/php/php_ref_string.asp
    // 2. https://www.php.net/manual/en/ref.strings.php


    
    
    ?>
</body>
</html>