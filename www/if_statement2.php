<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If Statement</title>
</head>
<body>
    <h1>If Statements Male/Female</h1>

<form action="if_statement2.php" method="post">
What is your Gender?
     <select name="formGender">
         <option value="">Select...</option>
         <option value="M">Male</option>
         <option value="F">Female</option>
     </select> <br><br>
<input type="submit"> <br><br>
</form>

<?php
$gender =$_POST["formGender"];

if($gender=="M"){
    echo "you are Male";
}
else if($gender=="F"){
    echo "you are Female";
}
else{
    echo "Please, Enter your gender";

}

?>
    
</body>
</html>