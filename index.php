<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="./arithmetic/simpleCalculation.php" method="post">
        <label for="number">First number...</label>
        <input type="text" name="numOne" id="firstNum">
        <label for="number">Second number..</label>
        <input type="text" name="numTwo" id="secondNum">
        <input type="submit" value="+" name="plus">       
        <input type="submit" value="-" name="minus">       
        <input type="submit" value="/" name="divide">       
        <input type="submit" value="*" name="multiplication">       
    </form>     
</body>
</html>