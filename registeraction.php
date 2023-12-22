
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <?php
    
        $realname = $_POST['realname'];
        $stdid = $_POST['stdid'];
        $username = $_POST['username'];
        $password = $_POST['password'];

        $hasdPassword = hash('sha256',$password);

        $link = mysqli_connect("localhost","root","","studentenroll") or die("Connect failed");
        $sql = "insert into register (realname,stdid,username,password) values('$realname', '$stdid', '$username', '$hasdPassword')";
        //echo $sql;

        $result = mysqli_query($link, $sql);
        if(!$result)
        {
            echo "สมัครไม่สำเร็จ<br>";
        }
        else{
            echo "สมัครสำเร็จ!<br>";
        }
        echo "<a href='login.php' > กลับสู่หน้าล็อกอิน </a>"
    ?>


</body>
</html>