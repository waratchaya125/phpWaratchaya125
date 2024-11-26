<!DOCTYPE html>
<html lang="en">
<hand>
    <meta charset="UTF-8">
    <title>Global Variable</title>
<hand>
<body>
   <h1>Globle Variable</h1>
   <?php
        $x = 75;
        echo "ค่าของ x==>".$x;
        echo "<br>";

        function myfunction(){
            //echo "อ่านจาก function ค่าของ x==>".$GLOBALS['x'];  //เรียกใช้ x นอก fn
            //global $x;
            $x =35;
            echo "อ่านจาก function ค่าของ x==>".$x;
        }

        myfunction();
        echo "ค่าของ x==>".$x;

        echo "<hr>";

        echo "<h2>การใช้ข้อมูลจาก server โดยใช้ \$_SERVER </h2>";
       
        echo $_SERVER['PHP_SELF'];
        echo "<br>";
        echo $_SERVER['SERVER_NAME'];
        echo "<br>";
        echo $_SERVER['HTTP_HOST'];
        echo "<br>";
        //echo $_SERVER['HTTP_REFERER'];
        //echo "<br>";
        echo $_SERVER['HTTP_USER_AGENT'];
        echo "<br>";
        echo $_SERVER['SCRIPT_NAME'];
        echo "<br>";

        echo "<hr>";
        ?>
</body>        
<html>