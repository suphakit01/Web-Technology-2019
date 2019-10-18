<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>lab8/1.php</title>
    
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">

    <!-- Link CSS -->
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <div class="card container">
        <form id="show_cal" action="show_cal.php" method="post">
            <label>กรอกสูตรคูณ : </label>
            <input type="text" id="number_input" name="number_input" value="2" />
            <input class="button" type="submit" id="submit" value="แสดงตาราง">
        </form>

        <?php
            $num = $_POST['number_input'];
            $n = intval($num);
            echo "<h1>ตารางสูตรคูณแม่ $n</h1><br>";

            for ($i = 1 ; $i <= 12 ; $i++) {
                echo $n . "    X    " . $i . "    =    " . $n*$i . "<br><hr>";
            }
        ?>
    </div>


</body>
</html>