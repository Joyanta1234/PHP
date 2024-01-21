<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch</title>
</head>
<body>
    <h1> Switch </h1>
    <form action="switch.php" method="post">
        Type your Grade : <input type="text" name="grade"><br><br>
                          <input type="submit"> <br><br>
    </form>

    <?php
    $grade =$_POST["grade"];
    switch($grade){
        case "A" :
            echo " You did Excellent!";
            break;
        
        case "A-" :
            echo " You did Good!";
            break;
        case "B+" :
            echo " You did good but need to work hard more!";
            break;
        case "B-" :
            echo " Work hard next time!";
            break;
        case "C+" :
            echo " Need to work hard more!";
            break;

        case "C-" :
            echo " You did bad!";
            break;

        case "D+" :
            echo " You did really bad!";
            break;

        case "D-" :
            echo " You were really bad!";
            break;
                            
        case "F" :
            echo " You FAILED!";
            break;
        
        default :
            echo " Invalid Grade!";
    }
    ?>

    <h2>Switch vs If </h2>
    <p>    
        1. Use if when you have a simple condition or when you need to check multiple independent conditions. <br>
        2. Use switch when you have a single variable or expression with multiple possible values and you want to perform different actions based on those values.
    </p>

</body>
</html>