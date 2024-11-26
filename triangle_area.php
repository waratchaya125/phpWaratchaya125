<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ผลการคำนวณพื้นที่สามเหลี่ยม</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: #ffffff;
            padding: 20px 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }
        h1 {
            color: #333333;
            margin-bottom: 20px;
        }
        p {
            font-size: 18px;
            color: #555555;
            margin: 10px 0;
        }
        .error {
            color: #d9534f;
        }
        .success {
            color: #5cb85c;
        }
        button {
            margin-top: 20px;
            padding: 10px 20px;
            font-size: 16px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
        a {
            text-decoration: none;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>ผลการคำนวณพื้นที่สามเหลี่ยม</h1>
        <?php
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            // รับค่าจากฟอร์ม
            $base = $_POST["base"];
            $height = $_POST["height"];

            // ตรวจสอบค่าที่รับมาว่าไม่เป็นค่าว่างหรือค่าไม่ถูกต้อง
            if (is_numeric($base) && is_numeric($height) && $base > 0 && $height > 0) {
                // คำนวณพื้นที่สามเหลี่ยม
                $area = 0.5 * $base * $height;
                echo "<p class='success'>ฐาน: $base</p>";
                echo "<p class='success'>ความสูง: $height</p>";
                echo "<p class='success'>พื้นที่ของสามเหลี่ยมคือ: $area</p>";
            } else {
                echo "<p class='error'>กรุณากรอกตัวเลขที่ถูกต้อง</p>";
            }
        } else {
            echo "<p class='error'>ไม่พบข้อมูลที่ส่งมา</p>";
        }
        ?>
        <button onclick="window.location.href='triangle_area_form.php'">กลับไปหน้าฟอร์ม</button>
    </div>
</body>
</html>