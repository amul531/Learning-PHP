<!DOCTYPE html>
<html>

<head>
    <title>PHP-learning-3</title>
</head>

<body>
    <?php include "header.html" ?>
    <div>
        Including a PHP page<br>
        <?php 
        $title = "My First Post";
        $author = "Mikey";
        $wordcount = 400;
        include "article-header.php"; 
        echo "<br><br>Calling a function that is in another file<br>";
        sayHi("User");
        echo "<br>"
        ?>
    </div>
    <div>
        <br>Classes and objects<br>
        <?php 
        //example class-1
        echo "Class: Book<br>";
        class Book {
            var $title;
            var $author;
            var $pages;
            
            //constructor-has to be exactly as given
            function __construct($name){
                $this->title = $name;                
            }
        }
        $book1 = new Book("Harry Potter");
        //$book1->title = "Harry Potter";
        $book1->author = "JK Rowling";
        $book1->pages = 800;
        
        echo "$book1->title by $book1->author has $book1->pages.<br>";
        echo "<br>";
        
        //example class-2
        echo "Class: Student<br>";
        class Student {
            var $name;
            var $major;
            var $gpa;
            
            function __construct($name, $major, $gpa){
                $this->name = $name;
                $this->major = $major;
                $this->gpa = $gpa;
            }
            
            function hasHonors(){
                if($this->gpa >= 3.5) {
                    return "true";  //passing string to see result
                }
                return "false";
            }
        }
            
        $student1 = new Student("Sheldon", "Theoretical Physics", 5.0);
        $student2 = new Student("Leonard", "Physics", 4.8);
        $student3 = new Student("Penny", "Physics", 3.4);
    
        echo "$student1->name has honors: ".$student1->hasHonors()."<br>";
        echo "<br>";
    
        //example class-3
        echo "Class: Movie<br>";
        class Movie {
            //var is same as public
            public $name;
            private $rating;
            
            function __construct($name, $rating){
                $this->name = $name;
                //$this->rating = $rating;
                $this->setRating($rating);
            }
            
            function getRating(){
                return $this->rating;
            }
            
            function setRating($rating){
                if ($rating == "G" || $rating == "PG" || $rating == "PG-13" || $rating == "R"){
                    $this->rating = $rating;
                }
                else{
                    $this->rating = "NR";
                }
            }
        }
    
        $avengers = new Movie("Avengers", "PG-13");
        $scream = new Movie("Scream", "Adult");
    
        echo "$avengers->name is rated ".$avengers->getRating();
        echo "<br>"; 
            
        //example class-4 :inheritance
        echo "<br>Class: {inheritance}<br>";
        class Chef {
            function makeVeganDish() {
                echo "The chef makes a vegan dish<br>";
            }
            
            function makeSalad() {
                echo "The chef makes a salad<br>";
            }
            
            function makeSplDish() {
                echo "The chef makes a surprise dish<br>";
            }
            
        }
    
        //inherit functionality from chef
        class ItalianChef extends Chef {
            function makePasta(){
                echo "The chef makes pasta<br>";
            }
        }
    
        $chef = new Chef();
        $chef->makeSalad();   
    
        $iChef = new ItalianChef();
        $iChef->makeSalad();
        ?>
    </div>
    
    <?php include "footer.html" ?>
</body>

</html>