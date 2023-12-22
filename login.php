<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel='stylesheet' href='./style/Loginstyle.css'>
</head>
<body>
    <h1>เข้าสู่ระบบ</h1>
    <form name="form1" action="loginaction.php" method="post" >
        <div class='input'>
            <p>ชื่อผู้ใช้งาน:</p>
            <input type="text" name="username" required>
            <p>รหัสผ่าน:</p>
            <input type="password" name="password" required>
        </div>
        <div class='button'>
            <input type="submit" value="เข้าสู่ระบบ" class='submitButton'>
            <a href="register.php">สร้างรหัสใหม่</a>
        </div>
    </form>
</body>
</html>