<?php

function calculate_bmi($weight, $height) {
    $bmi = $weight / (($height / 100) ** 2);
    return $bmi;
}

function get_bmi_status($bmi) {
    if ($bmi < 18.5) {
        return "น้ำหนักน้อยเกินไป";
    } elseif ($bmi >= 18.5 && $bmi < 24.9) {
        return "น้ำหนักปกติ";
    } elseif ($bmi >= 25 && $bmi < 29.9) {
        return "น้ำหนักเกิน";
    } else {
        return "อ้วนมาก";
    }
}

function get_bmi_advice($bmi) {
    if ($bmi < 18.5) {
        return "ควรเพิ่มน้ำหนักเพื่อสุขภาพที่ดี";
    } elseif ($bmi >= 18.5 && $bmi < 24.9) {
        return "รักษาน้ำหนักให้อยู่ในช่วงนี้เพื่อสุขภาพที่ดี";
    } elseif ($bmi >= 25 && $bmi < 29.9) {
        return "ควรลดน้ำหนักเพื่อสุขภาพที่ดี";
    } else {
        return "ควรปรึกษาแพทย์เพื่อการลดน้ำหนักที่ปลอดภัย";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $age = $_POST['age'];
    $weight = $_POST['weight'];
    $height = $_POST['height'];

    $bmi = calculate_bmi($weight, $height);
    $status = get_bmi_status($bmi);
    $advice = get_bmi_advice($bmi);
}
?>

<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>โปรแกรมคำนวณ BMI</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f0f7;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: auto;
            background-color: #fff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            border: 1px solid #f1a7c4;
            background-image: linear-gradient(to right, #fce4f1, #f5d0e6);
        }
        h1 {
            text-align: center;
            color: #f36f8a;
            font-size: 32px;
            font-weight: bold;
            margin-bottom: 20px;
        }
        label {
            font-size: 18px;
            margin-bottom: 10px;
            color: #f36f8a;
        }
        input[type="text"], input[type="number"], input[type="submit"] {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border-radius: 8px;
            border: 1px solid #f1a7c4;
            background-color: #ffe4e1;
            font-size: 16px;
        }
        input[type="submit"] {
            background-color: #f36f8a;
            color: white;
            font-weight: bold;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #d74f72;
        }
        .result {
            background-color: #fff8f7;
            padding: 20px;
            border-radius: 10px;
            margin-top: 20px;
            font-size: 16px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border: 1px solid #f36f8a;
        }
        .result h2 {
            color: #f36f8a;
            text-align: center;
            margin-bottom: 20px;
        }
        .result p {
            color: #555;
            line-height: 1.6;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>โปรแกรมคำนวณ BMI</h1>
        <form method="POST" action="">
            <label for="name">ชื่อ:</label>
            <input type="text" id="name" name="name" required>

            <label for="surname">นามสกุล:</label>
            <input type="text" id="surname" name="surname" required>

            <label for="age">อายุ:</label>
            <input type="number" id="age" name="age" required>

            <label for="weight">น้ำหนัก (kg):</label>
            <input type="number" id="weight" name="weight" step="0.1" required>

            <label for="height">ส่วนสูง (cm):</label>
            <input type="number" id="height" name="height" step="0.1" required>

            <input type="submit" value="คำนวณ BMI">
        </form>

        <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
            <div class="result">
                <h2>ผลลัพธ์การคำนวณ BMI</h2>
                <p><strong>ชื่อ:</strong> <?= htmlspecialchars($name) ?> <?= htmlspecialchars($surname) ?></p>
                <p><strong>อายุ:</strong> <?= htmlspecialchars($age) ?> ปี</p>
                <p><strong>น้ำหนัก:</strong> <?= htmlspecialchars($weight) ?> kg</p>
                <p><strong>ส่วนสูง:</strong> <?= htmlspecialchars($height) ?> cm</p>
                <p><strong>BMI:</strong> <?= number_format($bmi, 2) ?></p>
                <p><strong>สถานะ:</strong> <?= $status ?></p>
                <p><strong>คำแนะนำ:</strong> <?= $advice ?></p>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>
