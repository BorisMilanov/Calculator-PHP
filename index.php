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
        <select name="operator" id="">
            <option value="plus">+</option>
            <option value="minus">-</option>
            <option value="divide">/</option>
            <option value="mulplication">*</option>
        </select>
        <button submit>calculate</button>
    </form>
    <?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $result = 0;
        $numOne = filter_input(INPUT_POST, $_POST["numOne"], FILTER_SANITIZE_NUMBER_FLOAT);
        $numTwo = filter_input(INPUT_POST, $_POST["numTwo"], FILTER_SANITIZE_NUMBER_FLOAT);
        $operator = ($_POST["operator"]);

        if (isset($_POST['numOne']) && isset($_POST['numTwo'])) {
            $numOneValue = $_POST['numOne'];
            $numTwoValue = $_POST['numTwo'];
            if ($operator == "minus") {
                $result = $numOneValue - $numTwoValue;
            }
            if ($operator == "plus") {
                $result = $numOneValue + $numTwoValue;
            }
            if ($operator == "divide") {
                $result = $numOneValue / $numTwoValue;

            }
            if ($operator == "mulplication") {
                $result = $numOneValue * $numTwoValue;
            }
        }
        echo $result;
    }
    ?>
</body>

</html>