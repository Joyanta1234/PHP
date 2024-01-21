<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    <h1> Array </h1>

    <?php
    
    $friends = array("Joyanta", "Nabajit", "Bishal", "Raila",);

            //index =  0           1         2         3
    
     echo $friends[3]; 
     echo "<br>";

     //We can also change the array value.

     $friends[1]= "Naba"; // Here we changed the value of index 1 Nabajit to Naba.
     echo $friends[1]; 
     echo "<br>";

     // We can also change the value to any number or any value like boolean.

     $friends[2]= 300; //here we changed the string to number.
     echo $friends[2];
     echo "<br>";

     //we can also add value.

     $friends[4] = "Anik"; //Here we added a new array in the index  position 4.
     echo $friends[4];
     echo "<br>";

 
     //we can also count the array.

     echo count($friends);
     echo "<br>";
     // now let's add another value to the array to check the count.
     $friends[5]="Tamal";
     echo count($friends);
     echo "<br><br><hr>";

   ?>



   <!-- Using Checkbox -->

   <h1> Using Checkbox </h1>
   <form action ="array.php" method="post">

   Apple  : <input type="checkbox" name="fruits[]" value="Apple"> <br> <!--Here fruits[] is the name of the array. and value means it is the value of the array.-->
   Mango  : <input type="checkbox" name="fruits[]" value="Mango"> <br>
   Banana : <input type="checkbox" name="fruits[]" value="Banana"> <br><br>
            <input type="submit">

   </form>

   <?php
   $fruits = $_POST["fruits"]; //here we are saving the value we are getting from the array(fruits[]) into the variable $fruits. 
   echo"<br>";
   echo $fruits[1];
   ?>

   <br><br><hr>

   <h1> Associative Array</h1>
   <?php

   $grades = array("Jim"=> "A+", "Tom"=> "B+", "Tonny" => "C+"); //Here Jim is the key and => pointing to "A+" is the value.
   echo $grades["Jim"];  //here we are calling the array. !Important. We can't say index 1.
                         //Means, $grades[1] like this or we can't say $grades ["jim"]. We have to make it $grades["Jim"].
    echo "<br>";

    // we can also change the value of the array. Like,
    $grades["Jim"] ="F";
    echo $grades["Jim"];

   ?>
</body>
</html>