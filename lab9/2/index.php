<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>lab9/2</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <style>
        body{
            background-color: #ece5dd;
        }

        .card{
            margin-top: 3em;
            background-color: white;
            border-radius: 30px;
            padding: 2em;
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
        }
    
    </style>

</head>
<body>
    <?php
        $url = "http://10.0.15.12/lab9/restapis/movies90";
        $response = file_get_contents($url);
        $result = json_decode($response);
        $num = 1;

        echo "<div class='container w-50'>";

        foreach ($result as $n) {
            echo "<div class='card'>";
            echo "<b>$num. $n->title ($n->year)</b>";

            echo "<b>&emsp;Cast:</b>";
            foreach ($n->cast as $m) {
                echo "&emsp;&emsp;- $m<br>";
            }

            echo "<b>&emsp;Genres :</b>";
            $chk = count($n->genres);
            $j = 0;

            foreach ($n->genres as $o) {
                $j++;
                if($j == 1){
                    echo "&emsp;&emsp;";
                }
                echo "$o";
                if(($chk > 1) && ($j!=$chk)){
                    echo ", ";
                }
            }

            echo "<br>";
            echo "</div>";
            $num += 1;
        }
        echo "</div>";
    ?>
    
</body>
</html>