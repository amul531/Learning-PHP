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
        echo "<br>";
        sayHi("User");
        ?>
    </div>
    <?php include "footer.html" ?>
</body>

</html>
