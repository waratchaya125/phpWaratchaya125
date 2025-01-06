<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ฟอร์มบันทึกข้อมูล</title>
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

        form {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            width: 350px;
            box-sizing: border-box;
        }

        form label {
            font-weight: bold;
            display: block;
            margin-top: 15px;
            color: #444444;
        }

        .gender-group {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }

        .gender-group label {
            font-weight: normal;
            margin-right: 10px;
        }

        form input[type="text"],
        form input[type="date"],
        form input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: 1px solid #DDDDDD;
            border-radius: 6px;
            background-color: #F9F9F9;
            color: #333333;
            font-size: 16px;
        }

        form input[type="radio"] {
            margin-right: 8px;
        }

        form input[type="submit"] {
            background-color: #007BFF;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
            transition: background-color 0.3s ease;
        }

        form input[type="submit"]:hover {
            background-color: #0056b3;
        }

        form input[type="text"]:focus,
        form input[type="date"]:focus,
        form input[type="password"]:focus {
            border-color: #007BFF;
            outline: none;
        }

        @media (max-width: 500px) {
            form {
                width: 90%;
                padding: 20px;
            }

            form input[type="submit"] {
                font-size: 14px;
                padding: 10px;
            }
        }
    </style>
</head>
<body>
    <form action="result.php" method="POST">
        <div class="gender-group">
            <label>เพศ :</label>
            <input type="radio" id="female" name="sex" value="หญิง">
            <label for="female">หญิง</label>
            <input type="radio" id="male" name="sex" value="ชาย">
            <label for="male">ชาย</label>
        </div>
        
        <label for="fname">ชื่อ :</label>
        <input type="text" id="fname" name="fname">
        
        <label for="lname">สกุล :</label>
        <input type="text" id="lname" name="lname">
        
        <label for="birthday">วันเกิด :</label>
        <input type="date" name="birthday">
        
        <label for="username">Username :</label>
        <input type="text" name="username">
        
        <label for="password">Password :</label>
        <input type="password" name="pwd">
        
        <input type="submit" value="บันทึกข้อมูล">
    </form>
</body>
</html>
