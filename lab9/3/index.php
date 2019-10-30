<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>lab9/3</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</head>
<body>
    <?php
        $url = "http://10.0.15.12/lab9/restapis/10countries";
        $response = file_get_contents($url);
        $result = json_decode($response);

        echo "<div class='container w-50'>";

        foreach($result as $n){
        echo "<div class='row my-5'>";
        echo "<div class='col-8'>";
            echo "Name : <b>$n->name</b><br>";
            echo "Capital : $n->capital<br>";
            echo "Population : $n->population<br>";
            echo "Region : $n->region<br>";
            echo "Location : ";
            foreach($n->latlng as $m) {
                echo "$m ";
            }
            echo "<br>";
            echo "Location : ";
            foreach($n->borders as $o) {
                echo "$o ";
            }

        echo "</div>";

        echo "<div class='col-4'>";

            echo "<img src='$n->flag' class='w-100'>";
            echo "<br>";
        echo "</div>";

        echo "</div>";
        }
        
        echo "</div>";
    ?>
    
</body>
</html>