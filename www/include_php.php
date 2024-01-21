<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Include PHP</title>
</head>
<body>
    <?php
    $title     = "My First Post";
    $author    = " Joyanta";
    $wordCount = 400;

    include "./assets/artical_header.php";
    echo "<br><br>";

    ?>

    <?php
        //let's include another page to access the functions.

        include "./assets/useful_tools.php";

        echo "$feetInMile <br>";

        echo sayHi("Joyanta");
    
    ?>

</body>
</html>