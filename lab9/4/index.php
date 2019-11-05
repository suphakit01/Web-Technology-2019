<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>lab9/4</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <style>
        body{
            background-color: #edf7f6;
        }

        .card{
            border-radius: 1.25em !important;
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
        }
    
    </style>
</head>
<body>
    <div class="container w-50 mt-5">
        <form action="" method="POST">
                <div class="row">
                    <div class="col-md-9">
                        <select class="w-100 my-1" name="year">
                            <option value="" selected>please select year</option>
                            <option value="2010">2010</option>
                            <option value="2011">2011</option>
                            <option value="2012">2012</option>
                            <option value="2013">2013</option>
                            <option value="2014">2014</option>
                            <option value="2015">2015</option>
                            <option value="2016">2016</option>
                            <option value="2017">2017</option>
                            <option value="2018">2018</option>
                        </select>
                    </div>

                    <div class="col-md-3">
                        <button class="rounded-pill w-100 my-1" type="submit" name="Search">Search</button>
                    </div>
                </div>  
            </form>

    <?php
        $url = "http://10.0.15.12/lab9/restapis/nobleprize100";
        $response = file_get_contents($url);
        $result = json_decode($response);

        if(isset($_POST['year'])){
            $year = $_POST['year'];
            foreach($result as $x){
                if($x->year == $year){
                    echo "<div class='card my-5 p-5'>";
                    echo "Year : $x->year<br>";
                    echo "Category : $x->category<br>";
                    foreach($x->laureates as $y){
                        echo "<br>ID : $y->id<br>";
                        echo "Firstname : $y->firstname<br>";
                        echo "Surname : $y->surname<br>";
                        echo "Motivation : $y->motivation<br><br>";
                    }
                    echo "</div>";
                }
            }
        }
    ?>
    </div>
    
</body>
</html>