<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel='stylesheet' href='./style/home.css'>
</head>
<body>
    
    <?php
    
        $username = $_POST['username'];
        $password = $_POST['password'];
        $hashPassword = hash('sha256', $password);

        $link = mysqli_connect("localhost", "root", "", "studentenroll") or die("Connect failed");

        $sql = "SELECT * FROM register WHERE password='$hashPassword' AND username='$username'";
        $result = mysqli_query($link, $sql);

        if(mysqli_num_rows($result) > 0)
        {
            $data = mysqli_fetch_array($result);
            $resNo = $data['resNo'];

            echo "Welcome " . $data['realname'] . "<br>";
            echo "<a href='enroll.php?resno={$data['resNo']}'> ลงทะเบียนเรียน </a>";
            echo "<h1>ตาราง</h1>";
            echo "<table border=1>";
            echo "<tr>";
            echo    "<td>";
            echo        "ชื่อรายวิชา";
            echo    "</td>";
            echo    "<td>";
            echo        "กลุ่มเรียน";
            echo    "</td>";
            echo    "<td>";
            echo        "ปีการศึกษา";
            echo    "</td>";
            echo    "<td>";
            echo        "ภาคการศึกษา";
            echo    "</td>";
            echo "</tr>";

            // Table
            $sql2 = "select * from enroll where resNo = $resNo";
            $result2 = mysqli_query($link, $sql2);

            while($data2 = mysqli_fetch_array($result2))
            {
                echo "<tr>";
                echo "<td> {$data2['subject']} </td>";
                echo "<td> {$data2['section']} </td>";
                echo "<td> {$data2['year']} </td>";
                echo "<td> {$data2['term']} </td>";
                echo "</tr>";
            }

            echo "</table>";

            echo "<br><a href='login.php'> กลับสู่หน้าล็อกอิน </a>";
        }
        else {
            echo "Login failed, please try again <br>";
            echo "<a href='login.php'>Retry</a>";
        }

    ?>

</body>
</html>
