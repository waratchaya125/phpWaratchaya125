<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>คำสั่ง Loop ใน PHP</title>
</head>
<body>
    <h1>การใช้คำสั่งแบบวนรอบ Loop Statement</h1>
    <?php
        echo "<h2>While loop</h2>";
        echo "<br>";
        $x = 1;
        while ($x<=5) {
            if($x==3) break; // break จบ loop , continue ข้ามไปทำรอบใหม่
            echo "รอบที่ $x <br>";
            $x++;          
        }
        $i = 1;
        while ($i<=40) {echo "-"; $i++;}
        echo "<br>";
        echo "<h2>do..while loop</h2>";
        echo "<br>";
        $y = 1;
        do {
            echo "do..while รอบที่ $y <br>";
            $y++;
        }while ($y<=5);
        echo "--------------------------------<br>";
        echo "<h2>For loop</h2>";
        for ($i=0;$i < 10;$i++) {
            echo "For รอบที่ $i<br>";
        }
        echo "--------------------------------<br>";
        echo "<h2>For loop ซ้อนกัน</h2>";
        for ($i=1;$i <=5;$i++) {
            for ($j=1;$j <=5;$j++) {
                echo "*";
            }
            echo "<br>";
        }
        echo "--------------------------------<br>";
        echo "<h2>Foreach loop แบบปกติ</h2>";
        $pet = array("แมว","สุนัข","นกแก้ว","ปลาทอง","หมูเด้ง");
        foreach ($pet as $value) {
            echo "ฉันชอบ".$value."<br>";
        }
        echo "--------------------------------<br>";
        echo "<h2>Foreach loop แบบ key=>value </h2>";
        $food = array("หมวย"=>"ส้มตำ","บูม"=>"หมูอย่าง","บีม"=>"ผัดกระเพรา","อาร์ต"=>"ข้าวมันไก่",);
        foreach($food as $student=>$value) {
            echo "ชื่อ$student ชอบกิน$value<br>";
        }

    ?>
</body>
</html>