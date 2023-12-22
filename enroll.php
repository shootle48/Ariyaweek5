<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    $resNo = $_REQUEST['resno'];

    
    $link = mysqli_connect("localhost","root","","studentenroll") or die("Connect failed");
    $sql = "select * from subjects";
    $result = mysqli_query($link,$sql);

    $personal_profile = "select * from register where resNo = $resNo";
    $show_profile = mysqli_query($link, $personal_profile);
    $personal_data = mysqli_fetch_array($show_profile);

    $personal_subject = "select * from enroll where resNo = $resNo";
    $show_subject = mysqli_query($link,$personal_subject);
        
    ?>


    <!-- Select phase -->
    <h1>เลือกวิชาเรียน</h1>
    <form name='form1' action="enrollinsert.php" method='post'>


        <input name='resNo' type="hidden" value='<?=$resNo?>' >
        <div>
            <div>ปีการศึกษา</div>
            <select name="year">
                    <option value="2565">2565</option>
                    <option value="2566">2566</option>
            </select>
        </div>    
        <div>
            <div>ภาคการศึกษา</div>
            <select name="term">
                    <option value="1">1</option>
                    <option value="2">2</option>
            </select>
        </div>
        
        <div>
            <div>
                รายวิชาเรียน
            </div>
            <select name="subject"  >
            <?php
            
                while($data = mysqli_fetch_array($result))
                {
                    echo "<option value={$data['subname']} > {$data['subname']} ( {$data['subid']} ) </option>";
                }
            
            ?>
            </select>
        </div>
        <div>
            <div>
                กลุ่มเรียนที่
            </div>
            <select name="section">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
            </select>
        </div>

        <input type="submit" value='ยืนยัน'>

    </form>

    
    <!-- Personal profile -->
    <br>
    <div>
        รหัสนักศึกษา: <?=$personal_data['stdid']?><br>
        ชื่อ-สกุล: <?=$personal_data['realname']?><br>
    </div>
    

    <!-- Table phase -->
    <h1>ตาราง</h1>
    <table border=1>
        <tr>
            <td>
                ชื่อรายวิชา
            </td>
            <td>
                กลุ่มเรียน
            </td>
            <td>
                ปีการศึกษา
            </td>
            <td>
                ภาคการศึกษา
            </td>
        </tr>
        <?php
        
            while($personal_subject_data = mysqli_fetch_array($show_subject))
            {
                echo "<tr>";
                echo "<td> {$personal_subject_data['subject']} </td>";
                echo "<td> {$personal_subject_data['section']} </td>";
                echo "<td> {$personal_subject_data['year']} </td>";
                echo "<td> {$personal_subject_data['term']} </td>";
                echo "</tr>";
            }

        ?>
    </table>

    <a href="login.php?">กลับสู่หน้าล็อกอิน</a>

</body>
</html>