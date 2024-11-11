<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="futureValue.php" method="post">
        <div>
            <label>Investment Amount</label>
            <input type="text" name="investment">
        </div>
        <div>
            <label>Yearly Interest Rate(%)</label>
            <input type="text" name="rate">
        </div>
        <div>
            <label>Number of Years</label>
            <input type="text" name="years">
        </div>
        <div>
            <input type="submit" name="Calculate future Value">
        </div>
    </form>
</body>

</html>