<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Input</title>
</head>
<body>

    <!-- Here, Action means the site or the page we are about to get information. Then method means which way we are getting information so method="get". -->

    <form action="user_input.php" method="get">

    Enter Your Name : <br>
    <input type ="text" name ="user_name">
    <br>
    Enter Your Age : <br>
    <input type ="number" name ="user_age">
    <br>
    <input type="submit">
    </form>
    <br><br>

    Your name is  <?php echo $_GET["user_name"]; ?>
    & Your age is <?php echo $_GET["user_age"]; ?>

</body>
</html>