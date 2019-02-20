<!DOCTYPE html>
<html>

<head>
    <title>PHP-learning</title>
</head>

<body>
    <div>
        <?php
        $name = "Jane Doe";
        $age = 35;
        echo "Hello World!";
        echo "<h1>from php site</h1>";
        echo "<hr>";
        
        echo "<p>This site belongs to $name <br>";
        echo "She is $age years old</p>";
        echo "<hr>";
        
        echo "Strings";
        echo "<br>All in lowercase: " . strtolower($name);
        echo "<br>All in uppercase: " . strtoupper($name);
        echo "<br>Lenght of the string: " . strlen($name);
        echo "<br>Individual characters: " . $name[0];
        echo "<br>String replace: " . str_replace("Jane", "Zoe", $name);
        echo "<br>Substring(start, length): " . substr($name, 2, 4);
        echo "<br><em>Readup more on string functions</em><br>";
        echo "<hr>";
        
        echo "Numbers<br>";
        echo 2; echo "<br>";
        echo -2; echo "<br>";
        echo 40.5; echo "<br>";
        echo 5.7 * 9; echo "<br>";
        echo abs(100 * -1); echo "<br>";
        echo "<em>Readup more on number functions</em>";
        echo "<hr>";  
        
        echo "Getting user input<br>";
        ?>
    </div>

    <div>
        <form action="site.php" method="get">
            Number-1: <input type="text" name="num1"><br> Number-2: <input type="text" name="num2"><br>
            <input type="submit">
        </form>
        <br> The total is:
        <?php echo  $_GET['num1'] + $_GET['num2'] ?>
        <hr>
    </div>

    <div>
        <?php
        $people = array("George", "Kevin", "Bruce", "Jason", "Jim");
        echo "Arrays<br>";
        echo "Accessing individual element: ".$people[0];
        echo "<br>Number of elements in the array: ".count($people);
        echo "<hr>";
        ?>
    </div>

    <div>
        Working with checkboxes and arrays<br>
        <form action="site.php" method="post">
            Apples: <input type="checkbox" name="fruits[]" value="Apples"><br> Oranges: <input type="checkbox" name="fruits[]" name="Oranges"><br> Pears: <input type="checkbox" name="fruits[]" name="Pears"><br> Kiwis: <input type="checkbox" name="fruits[]" name="Kiwis"><br>
            <input type="submit">
        </form>
        <?php 
        $fruits = $_POST["fruits"];
        if ($fruits == ''){
            echo "No fruits selected.";
        }
        else{
            echo $fruits[0];
        }
        echo "<hr>";
        ?>
    </div>

    <div>
        Associative arrays: (key,value)<br>
        <form action="site.php" method="post">
            <input type="text" name="student">
            <input type="submit">
        </form>
        <?php
        $grades = array("Jim"=>"A+", "Jimbo "=>"B-", "Jimmy"=>"C+");
        echo $grades[$_POST["student"]];
        echo "<hr>"
        ?>
    </div>

    <div>
        Functions<br>
        <?php
            function  sayHi(){
            echo "How's it going so far?";
        }
        sayHi();
        ?>
    </div>
</body>

</html>
