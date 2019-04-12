<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Functions</title>
</head>
<body>
    <?php
        $name = "Suleimon 'Sully' Jabari";
        function writeMsg($name) {
            echo "Hello world! I am $name<br><br>";
        }

    writeMsg($name);
    ?>
    
    <?php
        function starWars($year, $epNum, $title) {
        echo "$year, Star Wars Episode $epNum: $title<br>";
        }
    starWars("1977","IV","A New Hope");
    starWars("1980","V","The Empire Strikes Back");
    starWars("1983","VI","Return of the Jedi");
    starWars("1999","I","The Phantom Menace");
    starWars("2002","II","Attack of the Clones");
    starWars("2005","III","Revenge of the Sith");
    starWars("2015","VII","The Force Awakens");
    starWars("2017","VIII","The Last Jedi");
    starWars("2017","VIII","The Last Jedi");
    ?>
    
    <?php
        function setHeight($minheight = 50, $color = 'white') {
        echo "<div style='min-height: $minheight" . "px; background-color: $color;'>The height is : $minheight </div><br>";
        }
    setHeight(350, '#ff0000');
    setHeight(); // will use the default value of 50
    setHeight(135, '#0000ff');
    setHeight(80, '#ccc');
    setHeight(140, '#00ff00');
    ?>
    <?php
        function sum($x, $y) {
            $z = $x - $y;
            return $z;
        }
    ?>
    <?php
        $x = 5; // global scope <--- 

        function myTest1() {
        // using x inside this function will generate an error
        echo "<p>Variable x inside function is: $x</p>";
        } 
    myTest1();
        echo "<p>Variable x outside function is: $x</p>";
    ?>
    <?php
        function myTest2() {
            $x = 5; // local scope
            echo "<p>Variable x inside function is: $x</p>";
        } 
    myTest2();
        // using x outside the function will generate an error
        echo "<p>Variable x outside function is: $x</p>";
    ?>
    <?php
        $x = 5;
        $y = 10;
        function myTest3() {
            global $x, $y;
            $y = $x + $y;
        }
        myTest3();
        echo $y; // outputs 15
    ?>
    <?php
        $x = 5;
        $y = 10;
        function myTest4() {
        $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
        } 
    myTest4();
        echo $y; // outputs 15
    ?>



</body>
</html>