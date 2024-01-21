<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constructor</title>
</head>
<body>
    <h1> Constructor </h1>
    <p>
    A constructor is a special method that is automatically called when an object is created. It is used for initializing object properties.
    </p>

    <?php

    class Book{
        public $title;
        public $author;
        public $pages;

        function __construct($title,$author,$pages){
            $this->title=$title;
            $this->author=$author;
            $this->pages=$pages;
        }
    }

    $book1=new Book("Harry Potter","JK Rowling", 500);
    echo "
          Book Details : <br>
          Title  : $book1->title <br>
          Author : $book1->author <br>
          Pages  : $book1->pages <br><br>
          
          ";

    //we can modify the attributes.

    $book1->title="Lord of the Rings";
    echo "New Title : $book1->title <br>";

    ?>
</body>
</html>