<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>lab8/3.php</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="card">
            <?php
                $arr = array($_POST['id'], $_POST['name'], $_POST['lastname'], $_POST['address'], $_POST['district'], $_POST['province'], $_POST['postcode'], $_POST['phonenum']);

                echo "<table>";
                    echo "<tr><th><p3>ลำดับ</p3></th><th><p3>รายการ</p3></th></tr>";
                    for($i = "1" ; $i <= 8 ; $i++){
                        $j = $i - 1;
                        echo "<tr>";
                            echo "<td class='num'>$i</td>";
                            if(mb_strlen($arr[$j])<5){
                                echo "<td style='color:red;'>$arr[$j]</td>";
                            } else{
                                echo "<td>$arr[$j]</td>";
                            }
                        echo "</tr>";
                    }
                echo "</table>";

            ?>
        </div>
    </div>
</body>
</html>