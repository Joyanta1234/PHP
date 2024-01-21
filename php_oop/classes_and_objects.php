<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class & Objects</title>
</head>
<body>
    <h1> Classes & Objects </h1>
    <hr>
    <h2> Class </h2>
    <p>
         A class is a blueprint or a template for creating objects. It defines the properties (attributes) and methods (functions) that objects of the class will have.
    </p>

    <?php

        class Dog 
        {
            public $name; //properties
            public $breed;
            
            public function bark() //methods
            {
                echo "Woof, woof!";
            }
        }

        echo "<h2> Object </h2>";

        echo "An object is an instance of a class. It represents a real-world entity with its own state (properties) and behavior (methods). <br>";

        // Creating an object
        
        $myDog = new Dog();

        // Accessing properties and methods

        $myDog->name = "Buddy";

        $myDog->breed = "Labrador";

        $myDog->bark(); // Outputs: Woof, woof!

        echo "<br>";

        echo "<h2> Properties </h2>";

        echo "Properties are variables within a class that store data related to the object. <br>";

        class Car {
            public $brand;
            public $model;
            public $color;
        }

        echo "<h2> Methods </h2>";

        echo " Methods are functions within a class that define the behavior of the objects. <br>";

        class Calculator {
            public function add($a, $b) {
                return $a + $b;
            }
        }


    ?>
    <br>
    <hr>

    <!-- example  -->

    <?php

    class Book{ //Here we created a blueprint for the book which we call class.
        public $title;
        public $author;
        public $pages;
    }

    $book1           = new Book;         // here we created an model or object based on class.
    $book1-> title  = "Harry Potter";    // here we are giving values to the attributes.
    $book1-> author = "JK Rowling";
    $book1-> pages  = 400;


    echo "Book 1 Details : <br>";
    echo "$book1->title <br>";
    echo "$book1->author <br>";
    echo "$book1->pages <br><br>";

    $book2 = new Book;
    $book2->title = "Lord of the Rings";
    $book2->author = "G.Roger";
    $book2->pages =400;

    echo "Book 2 Details : <br>";
    echo "$book2->title <br>";
    echo "$book2->author <br>";
    echo "$book2->pages <br>";
    
    
    ?>
</body>
</html>