<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Types</title>
</head>
<body>
    <?php

    // There are 4 types of data types.
    // 1. String = all kind of text like name, phrases etc.
    // 2. Number = There are 2 types of numbers. 1. Integer = no decimal value like = 30
                                            //   2. Float = Number with decimal value like = 30.33
    // 3. Boolean Value = it's kind of true or false statement.
    // 4. Null value = if anything is showing null means the value is 0 means no value
    
    echo "<h1> Data Types: </h1> <br> <hr>";


    // String

    echo "<h2>String</h2>";

    echo "A <strong>String</strong> is a data type used in programming, that is used to represent <strong>Text</strong> rather than numbers.<br>
          A <strong>String</strong> is a sequence of characters and can contain letters, numbers, symbols and even spaces.<br>";

    echo" <h3>Example : </h3>";

    $phrases=" <em>In the quiet dance of dawn,<br>
               whispers of possibility paint the sky in hues of hope,<br>
               and with every gentle breath,<br> 
               the world awakens to the symphony of a new day's promise. </em><br>";

    // we can write only eco $phrases or we can write echo "$phrases"
    
    echo $phrases;

    echo ' <h4> !Important : String is write inside an "" like "my name is joy". </h4> <br> <hr> ';

    // Number
    
    echo "<h2>Number</h2>";

    echo "In programming there are many Number types. But Commonly we use <strong>Integer & Float </strong>.<br>
          1. <strong> Integer </strong> = Without Decimal Number = 30.<br>
          2. <strong> Float </strong> = Decimal Number = 30.0 or 30.54.<br>";

    echo" <h3>Example : </h3>";

    $integer=30;
    $float=30.59;

    // we can write only eco 40 or we can write eco $the_value_number
    
    echo "<strong> 1. Integer </strong>= $integer <br>";
    echo "<strong> 2. Float  </strong> = $float <br>";

    echo ' <h4> !Important : to write a number we dont need "". </h4> <br> <hr> ';
    
    
    // Boolean

    echo "<h2>Boolean</h2>";

    echo "The term <strong>Boolean</strong> means a result that can only have one of two possible values: <strong>True or False.</strong>";

    echo" <h3>Example : </h3>";

    $isMale= true;
    
    echo "Is he a male? Ans :$isMale";

    echo ' <h4> !Important : Basically boolean gives 1 or 0 value. Means, if the ans is true it will return 1 and if false 0 </h4> <br> <hr> ';


    // Null
    
    echo "<h2>Null</h2>";

    echo "A variable of data type <strong> NULL </strong> is a variable that has no value assigned to it.<br>
          <strong>Tip:</strong> If a variable is created without a value, it is automatically assigned a value of <strong>NULL</strong>.";

    echo" <h3>Example : </h3>";

    $type=null;
    
    echo "So the value is = $type";

    echo ' <h4> !Important : Null value shows no value which you can see from the example above. </h4> <br> <hr> ';
    
    ?>
</body>
</html>