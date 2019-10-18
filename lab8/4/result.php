<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>lab8/3.php</title>

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="card">
            <?php
                $arr = array("001"=>$_POST['id'],
                "002"=>$_POST['name'],
                "003"=>$_POST['lastname'],
                "004"=>$_POST['address'],
                "005"=>$_POST['district'],
                "006"=>$_POST['province'],
                "007"=>$_POST['postcode'],
                "008"=>$_POST['phonenum']);

                echo "<table class='table table-striped'>";
                    echo "<tr>
                            <th scope='col'><p3>ลำดับ</p3></th>
                            <th scope='col'><p3>รายการ</p3></th>
                        </tr>";
                    for($i = "1" ; $i <= 8 ; $i++){
                        echo "<tr>";
                            echo "<td scope='row'>$i</td>";
                            if(mb_strlen($arr['00'.$i])<5){
                                echo "<td style='color:red;'>" . $arr['00'.$i] . "</td>";
                            } else{
                                echo "<td>" . $arr['00'.$i] . "</td>";
                            }
                        echo "</tr>";
                    }
                echo "</table>";
            ?>
        </div>
    </div>
</body>
</html>