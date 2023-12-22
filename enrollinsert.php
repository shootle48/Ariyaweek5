<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <?php
    
        $subject = $_POST['subject'];
        $section = $_POST['section'];
        $year = $_POST['year'];
        $term = $_POST['term'];
        $resNo = $_POST['resNo'];

        $link = mysqli_connect("localhost","root","","studentenroll") or die("Connect failed");
        $sql = "insert into enroll (subject, section, year, term,resNo) values('$subject', $section, $year, $term,$resNo)";

        $result = mysqli_query($link,$sql);
        if(!$result)
        {
            echo "เพิ่มวิชาเรียนไม่สำเร็จ<br>";
        }
        else{
            echo "เพิ่มวิชาเรียนสำเร็จ<br>";
        }
        echo "<a href='enroll.php?resno=$resNo'> return </a>";
    ?>


</body>
</html>