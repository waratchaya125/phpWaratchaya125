<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ผลลัพธ์ข้อมูล</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #F4F4F9;
            color: #333333;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .result-container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            width: 400px;
            text-align: center;
        }

        .result-container h1 {
            color: #007BFF;
            font-size: 30px;
            margin-bottom: 20px;
        }

        .result-container p {
            font-size: 18px;
            margin: 12px 0;
            line-height: 1.5;
        }

        .highlight {
            color: #007BFF;
            font-weight: bold;
        }

        .back-button {
            margin-top: 30px;
            padding: 12px 25px;
            background-color: #007BFF;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 18px;
            text-decoration: none;
            display: inline-block;
            transition: background-color 0.3s ease;
        }

        .back-button:hover {
            background-color: #0056b3;
        }

        .back-button:active {
            background-color: #004085;
        }

        @media (max-width: 500px) {
            .result-container {
                width: 90%;
                padding: 20px;
            }

            .result-container h1 {
                font-size: 26px;
            }

            .result-container p {
                font-size: 16px;
            }
        }
    </style>
</head>
<body>
    <div class="result-container">
        <?php
        if ($_POST) {
            $name = $_POST['fname'];
            $surname = $_POST['lname'];
            $birthday = $_POST['birthday'];
            $sex = $_POST['sex'];
            $username = $_POST['username'];
            $pwd = $_POST['pwd'];

            echo "<h1>ผลลัพธ์ข้อมูล</h1>";
            echo "<p>สวัสดีคุณ : <span class='highlight'>$name $surname</span></p>";
            echo "<p>วันเกิด : <span class='highlight'>$birthday</span></p>";
            echo "<p>เพศ : <span class='highlight'>" . ($sex === 'f' ? 'หญิง' : 'ชาย') . "</span></p>";
            echo "<p>Username : <span class='highlight'>$username</span></p>";
            echo "<p>Password : <span class='highlight'>$pwd</span></p>";
        }
        ?>
        <a href="regis.php" class="back-button">กลับหน้าแรก</a>
    </div>
</body>
</html>
