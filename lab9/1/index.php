<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>lab9/1</title>
</head>
<body>
    <?php
        if(isset($_POST['num'])){
            $currency1 = $_POST['currency1'];
            $currency2 = $_POST['currency2'];
            $a = $_POST['num'];

            $url = "https://api.exchangeratesapi.io/latest";
            $response = file_get_contents($url);
            $result = json_decode($response);

            $convert = ($a / $result->rates->$currency1) * ($result->rates->$currency2);
            
        }
    ?>

    <form action="" method="POST">
        <label for="name">Form :</label>
        <select name="currency1">
            <option value="THB" <?php if(@$currency1 == "THB"){echo "selected";} ?>>THB</option>
            <option value="JPY" <?php if(@$currency1 == "JPY"){echo "selected";} ?>>JPY</option>
            <option value="CNY" <?php if(@$currency1 == "CNY"){echo "selected";} ?>>CNY</option>
            <option value="SGD" <?php if(@$currency1 == "SGD"){echo "selected";} ?>>SGD</option>
            <option value="USD" <?php if(@$currency1 == "USD"){echo "selected";} ?>>USD </option>
        </select>
        <input type="text" name="num" placeholder="Enter Value" value="<?php echo @$a?>" required/>
        <br><br>


        <label for="name">To :</label>
        <select name="currency2">
            <option value="THB" <?php if(@$currency2 == "THB"){echo "selected";} ?>>THB</option>
            <option value="JPY" <?php if(@$currency2 == "JPY"){echo "selected";} ?>>JPY</option>
            <option value="CNY" <?php if(@$currency2 == "CNY"){echo "selected";} ?> >CNY</option>
            <option value="SGD" <?php if(@$currency2 == "SGD"){echo "selected";} ?>>SGD</option>
            <option value="USD" <?php if(@$currency2 == "USD"){echo "selected";} ?>>USD </option>
        </select>
        <input type="text" name="ans" placeholder="Convert Value" value="<?php echo @$convert?>"/>
        <br><br>

        <button type="submit" name="submit">Convert</button>
    </form>
</body>
</html>