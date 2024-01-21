<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Mad Libs Game </h1>
    <form action="mad_libs_game.php" method ="get">
        <strong>Color :       </strong> <input type="text" name ="color"> <br><br>
        <strong>Plural Noun : </strong> <input type="text" name ="plural_noun"> <br><br>
        <strong>Celebrity :   </strong> <input type="text" name ="celebrity"> <br><br>
                                        <input type="submit"><br><br>
    
    </form>

    <?php
    $color      = $_GET["color"];
    $pluralNoun = $_GET["plural_noun"];
    $celebrity  = $_GET["celebrity"];

    echo "In a room of polka-dot $color,<br>
          Dancing with $pluralNoun, oh what a hurdle.<br>
          Chuckling with $celebrity, life's a crazy circle! <br>";

    ?>
</body>
</html>