<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="number">First number...</label>
        <input type="text" name="numOne" id="firstNum">
        <label for="number">Second number..</label>
        <input type="text" name="numTwo" id="secondNum">
        <input type="submit" value="+" name="plus">
        <input type="submit" value="-" name="minus">
        <input type="submit" value="/" name="divide">
        <input type="submit" value="*" name="multiplication">
    </form>
    <?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $result = 0;
        $numOne = filter_input(INPUT_POST, $_POST["numOne"], FILTER_SANITIZE_NUMBER_FLOAT);
        $numTwo = filter_input(INPUT_POST, $_POST["numTwo"], FILTER_SANITIZE_NUMBER_FLOAT);
        $operatorPlus = ($_POST["plus"]);
        if (isset($_POST['numOne'])) {
            $numOneValue = $_POST['numOne'];
            $numTwoValue = $_POST['numTwo'];

            if ($operatorPlus) {
                $result = $numOneValue + $numTwoValue;
            } else {
                echo "myField is not set in the POST data.";
            }
        }
        echo $result;
    }
    ?>
</body>

</html>