<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables</title>
</head>
<body>
    <?php



     echo " <h1> Without using variable</h1>";
     echo " There was a man named Tom.<br> 
            He was 80 years old.<br>
            He really Liked the name Mike.<br>
            But didn't like being 80. <br> <hr>";

            // now if we want to change any name or age or number
            // we have to do it manually. But if we use variable(a container for storing values)
            // we can store the values like name , age etc. and place it to change the values.
            
            
    $characterName= "Joyanta";
    $characterAge= 25;
    
    echo "  <h1> Using Variable</h1>";
    echo "  There was a man named $characterName.<br> 
            He was $characterAge years old.<br>
            He really Liked the name $characterName.<br>
            But didn't like being $characterAge. <br> <hr>";

            // as we can see we can change the values like name age etc. using variables.
            // now we can also change it in the middle means changing the values from middle.
            // example given bellow:

    echo "  <h1> Using Variable in the middle to change a Name</h1>";
    echo "  There was a man named $characterName.<br> 
            He was $characterAge years old.<br>";

    $characterName= "Shubho";
    
    echo "  He really Liked the name $characterName.<br>
            But didn't like being $characterAge. <br>";
    ?>
</body>
</html>