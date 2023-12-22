<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel='stylesheet' href='./style/Register.css'>
</head>
<body>
    <h1>สมัครเข้าใช้งานระบบ</h1>
    <form name="form1" action="registeraction.php" method="post" >
        <div class='input'>
            <p>ชื่อจริง:</p>
            <input type="text" name="realname" required>
            <p>รหัสนักศึกษา:</p>
            <input type="text" name="stdid" required>
            <p>ชื่อผู้ใช้งาน:</p>
            <input type="text" name="username" required>
            <p>รหัสผ่าน:</p>
            <input type="password" name="password" required>
        </div>
        <div class='button'>
            <input type="submit" value="สมัคร" class='submitButton'>
            <a href="login.php">กลับสู่หน้าล็อกอิน</a>
        </div>
    </form>
</body>
</html>