<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $name = $_POST['name'];
    $nickname = $_POST['nickname'];

    
    $studentData = "ชื่อ: $name, ชื่อเล่น: $nickname\n";

   
    file_put_contents('student.txt', $studentData, FILE_APPEND);

    
    $message = "ข้อมูลที่บันทึก:\nชื่อ: $name\nชื่อเล่น: $nickname";
} else {
    $message = "";
}
?>

<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ฟอร์มบันทึกข้อมูลนักเรียน</title>
</head>
<body>
    <h1>ฟอร์มบันทึกข้อมูลนักเรียน</h1>

    
    <form method="POST" action="">
        <label for="name">ชื่อ:</label><br>
        <input type="text" id="name" name="name" required><br><br>

        <label for="nickname">ชื่อเล่น:</label><br>
        <input type="text" id="nickname" name="nickname" required><br><br>

        <button type="submit">Submit</button>
    </form>

    <h2>ผลการบันทึกข้อมูล</h2>
    <pre><?php echo $message; ?></pre>

</body>
</html>
<?php
$myfile = fopen("student.txt", "r") or die("Unable to open file!");
// Output one line until end-of-file
while(!feof($myfile)) {
  echo fgets($myfile) . "<br>";
}
fclose($myfile);
?>
    </script>
</body>
</html>