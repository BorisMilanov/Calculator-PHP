<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="style.css">

<body>
    <div class="card">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <label for="number" id="firstLabel">First number...</label>
            <input type="text" name="numOne" id="firstNum">
            <label for="number" id="secondLabel">Second number..</label>
            <input type="text" name="numTwo" id="secondNum">
            <div class="select-container">
                <select name="operator" class="select-box">
                    <option value="plus">+</option>
                    <option value="minus">-</option>
                    <option value="divide">/</option>
                    <option value="mulplication">*</option>
                </select>
            </div>
            <button>calculate</button>
        </form>
    </div>

    <a href="https://mythrillfiction.com/" target="_blank"> </a>
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