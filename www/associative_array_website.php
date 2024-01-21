<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Your Grade</title>
</head>
<body>
   <h1> Check Your Grade</h1>
   <form action="associative_array_website.php" method="post">

   Enter your name to know the grade : <br><br>
   <input type="text" name="student"><br><br>
   <input type="submit">
   </form>
   <?php

   $grades = array("Jim"=> "A+", "Tom"=> "B+", "Tonny" => "C+");
   echo"<br>"; 
   echo $grades[$_POST["student"]];  
   ?>
</body>
</html>