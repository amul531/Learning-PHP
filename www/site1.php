<!DOCTYPE html>
<html>

<head>
    <title>PHP-learning-2</title>
</head>

<body>
    <div>
        Functions with parameters<br>
        <?php 
        function sayHi($name){
            echo "Hello $name"."<br>";
        }
        echo "Function-1: sayHi<br>";
        sayHi("Tom");
        echo "<br>";
        
        function cube($num){
            return $num * $num * $num;
        }
        echo "Function-2: cube<br>";
        $cubeResult = cube(4);
        echo "The cube of 4 is: ".$cubeResult."<br><br>";
        
        function getMax($num1, $num2, $num3){
            if ($num1 >= $num2 && $num1 >= $num3) {
                return $num1;
            }
            elseif ($num2 >= $num1 && $num2 >= $num3) {
                return $num2;
            }
            else {
                return $num3;
            }
        }
        echo "Function-3: getMax<br>";
        $max = getMax(200, 500, 300);
        echo "Out of 200, 500 and 300: $max is the largest.<br><br>";
        echo "<hr>";        
        ?>
    </div>

    <div>
        Calculator - using if..elseif..else<br>
        <form action="site1.php" method="get">
            Number-1: <input type="number" step="0.001" name="num1"><br> 
            Number-2: <input type="number" step="0.001" name="num2"><br> 
            Operator: <input type="textbox" name="op"><br>
            <input type="submit">
        </form>
        <?php
        $num1 = $_GET["num1"];
        $num2 = $_GET["num2"];
        $op = $_GET["op"];
        if ($op == "+") {
            echo $num1 + $num2;
        }
        elseif ($op == "-"){
            echo $num1 - $num2;
        }
        elseif ($op == "*"){
            echo $num1 * $num2;
        }
        elseif ($op == "/"){
            if ($num2 != 0) {
                echo $num1 / $num2;
            }
            else{
                echo "Zero division error";
            }
        }
        elseif ($op == "%"){
            echo $num1 % $num2;
        }
        else {
            echo "Invalid operator";
        }
        echo "<br><hr>";
        ?>
    </div>
    
    <div>
        Grade - switch<br>
        <form action="site1.php" method="get">
            What was your grade?<br>
            <input type="text" name="grade"><br> 
            <input type="submit">
        </form>
        <?php 
        $grade = $_GET["grade"];
        switch(strtoupper($grade)){
            case "A":
                echo "You did amazing!";
                break;
            case "B":
                echo "You did pretty good!";
                break;
            case "C":
                echo "You could do better!";
                break;
            case "D":
                echo "You did poorly!";
                break;
            case "F":
                echo "You failed!";
                break;
            default:
                echo "Invalid grade";
        }
        echo "<br><hr>";
        ?>
    </div>
    
    <div>
        Loops<br>
        <br>While loop<br>
        <?php 
        $i = 1;
        while($i <= 5) {
            echo $i."  ";
            $i++;
        }
        echo "<br>";
        ?>
        
        <br>Do-while loop<br>
        <?php 
        $i = 6;
        do {
            echo "$i"."  ";
            $i++;
        }while($i <= 5);
        echo "<br>";
        ?>
        
        <br>For loop<br>
        <?php 
        for($i = 1; $i <=5; $i++){
            echo "$i"."  ";
        }
        echo "<br>";
        ?>
        
        <br>For loop - arrays<br>
        <?php 
        //printing an array using numbers
        $numbers = array(1, 2, 5, 6, 8, 9);
        for($i = 0; $i < count($numbers); $i++){
            echo $numbers[$i]."   ";
        }
        echo "<br>";
        ?>
    </div>
</body>

</html>
