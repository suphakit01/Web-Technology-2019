<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>lab8/2</title>
    
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet">

    <style>
        body{
            margin: 0;
            font-family: 'Kanit', sans-serif;
            background-color: rgb(207, 207, 207);
            color: rgb(85, 85, 85);
        }

        th, td{
            padding-right: 0.2em;
            padding-left: 0.2em;
            width : 20px;
            height : 20px;
        }

        td{
            color: rgb(160, 160, 160);
        }

        body{
            text-align : center;
        }

        .container{
            margin-left: auto;
            margin-right: auto;
            display: inline-block;
        }

        .card {
            padding: 1em;
            background-color: #fff;
            width: 15vw;
            margin: 2em auto;
            border-radius: 1em;
        }
    
    </style>
</head>
<body>
    <div class="card">
        <h1>October 2019</h1>
        <div class="container">
            <table>
                <?php
                    $DayOfMonth = array("Su","Mo","Tu","We","Th","Fr","Sa");
                    $date = 1;
                    for ($row = 0 ; $row < 6 ; $row++) {
                        echo "<tr>";
                        for ($col = 0 ; $col < 7 ; $col++) {
                            if($row==0){
                                echo "<th>$DayOfMonth[$col]</th>";
                            }
                            else if(($row==1 && $col==0) || $row==1 && $col==1 || $row==5 && $col==5 || $row==5 && $col==6){
                                echo "<td></td>";
                            }
                            else{
                                echo "<td>$date</td>";
                                $date++;
                            }
                        }
                        echo "<tr>";
                    }
                ?>
            </table>
        </div>
    </div>
    
</body>
</html>